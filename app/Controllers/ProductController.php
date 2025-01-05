<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\FileModel;
use App\Models\ProductModel;
use App\Models\SizeModel;
use Config\Services;

class ProductController extends BaseController
{
    public function index(): string
    {
        $productModel = new ProductModel();
        $products = $productModel->findAll();

        $fileModel = new FileModel();

        foreach ($products as &$product) {
            $image = $fileModel
                ->where('product_id', $product['product_id'])
                ->first();

            $product['file_path'] = $image['file_path'];
        }

        $data = [
            "products" => $products
        ];

        return view('customer/product/v_product', $data);
    }


    public function detail($productId): string
    {
        $productModel = new ProductModel();
        $product = $productModel
            ->join("brands", "brands.brand_id = products.brand_id")
            ->where("product_id", $productId)
            ->first();

        $fileModel = new FileModel();
        $images = $fileModel
            ->where('product_id', $productId)
            ->findAll();

        $product['images'] = array_column($images, 'file_path');

        $sizeModel = new SizeModel();
        $sizes = $sizeModel->findAll();

        $data = [
            "product" => $product,
            "sizes" => $sizes
        ];
        return view('customer/product/v_product_detail', $data);
    }

    public function topSelling(): string
    {
        return view('v_top_selling');
    }

    public function newArrival(): string
    {
        return view('v_new_arrival');
    }

    public function managementProduct(): string
    {
        $productModel = new ProductModel();
        $product = $productModel
            ->join('categories', 'categories.category_id = products.category_id')
            ->findAll();

        $data = [
            "products" => $product,
        ];
        return view('admin/product/v_management_product', $data);
    }

    public function createProduct(): string
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();

        $brandModel = new BrandModel();
        $brands = $brandModel->findAll();

        $data = [
            "categories" => $categories,
            "brands" => $brands
        ];

        return view('admin/product/v_create_product', $data);
    }

    public function submitCreateProduct()
    {
        helper(['form']);
        $productModel = new ProductModel();
        $rules = [
            'brand_id' => 'required',
            'product_name' => 'required|min_length[4]|max_length[100]',
            'description' => 'required',
            'rating' => 'required',
            'price' => 'required'
        ];

        if ($this->validate($rules)) {
            // Simpan data produk
            $data = [
                'category_id' => $this->request->getVar('category_id'),
                'brand_id' => $this->request->getVar('brand_id'),
                'product_name' => $this->request->getVar('product_name'),
                'description' =>  $this->request->getVar('description'),
                'rating' => $this->request->getVar('rating'),
                'price' => $this->request->getVar('price'),
                'deleted_at' => null,
            ];

            // dd($data);

            $productModel->save($data);

            // Ambil product_id yang baru saja disimpan
            $productId = $productModel->getInsertID();

            $filesUploaded = 0;

            // Proses file yang diunggah
            $files = $this->request->getFileMultiple('files');
            if ($files) {
                foreach ($files as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $newName = $file->getRandomName();
                        $file->move('assets/images/', $newName);

                        // Simpan data file dengan product_id
                        $data = [
                            'product_id' => $productId, // Menggunakan product_id yang benar
                            'file_name' => $file->getClientName(),
                            'file_path' => '/assets/images/' . $newName,
                            'type' => $file->getClientExtension()
                        ];
                        $imageModel = new FileModel();
                        $imageModel->save($data);
                        $filesUploaded++;
                    }
                }
            }

            session()->setFlashdata('success', 'Create Product Successfully.');
            return redirect()->to(base_url("/admin/management-product"));
        } else {
            $validation = Services::validation();
            return redirect()->to(base_url('/admin/product/create'))->withInput()->with('validation', $validation);
        }
    }
}
