<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\FileModel;
use App\Models\ProductModel;
use Config\Services;

class ProductController extends BaseController
{
    public function index(): string
    {
        return view('v_product');
    }

    public function detail(): string
    {
        return view('v_product_detail');
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
            "products" => $product
        ];
        return view('admin/product/v_management_product', $data);
    }

    public function createProduct(): string
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();

        $data = [
            "categories" => $categories
        ];

        return view('admin/product/v_create_product', $data);
    }

    public function submitCreateProduct()
    {
        helper(['form']);
        $productModel = new ProductModel();
        $rules = [
            'category_id' => 'required',
            'product_name' => 'required|min_length[4]|max_length[100]',
            'description' => 'required',
            'rating' => 'required',
            'price' => 'required'
        ];

        if ($this->validate($rules)) {
            // Simpan data produk
            $data = [
                'category_id' => $this->request->getVar('category_id'),
                'product_name' => $this->request->getVar('product_name'),
                'description' =>  $this->request->getVar('description'),
                'rating' => $this->request->getVar('rating'),
                'price' => $this->request->getVar('price'),
                'deleted_at' => null,
            ];

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
                        $file->move('/assets/images/', $newName);

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
