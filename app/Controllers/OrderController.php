<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CartModel;
use App\Models\FileModel;

class OrderController extends BaseController
{
    public function index()
    {
        return view('customer/v_my_order');
    }

    public function getUnderPackaging()
    {
        $cartModel = new CartModel();
        $session = session();
        $userId = $session->get('user_id');
        $carts = $cartModel
            ->join('products', 'products.product_id = cart.product_id')
            ->join('sizes', 'sizes.size_id = cart.size_id')
            ->where('user_id', $userId)
            ->where('status', 'under_packaging')
            ->where('cart.deleted_at', null)
            ->findAll();

        $fileModel = new FileModel();
        foreach ($carts as &$cart) {
            $image = $fileModel
                ->where('product_id', $cart['product_id'])
                ->first();

            $cart['file_path'] = $image['file_path'];
        }

        return $this->response->setJSON($carts);
    }

    public function getWaitingForCourier()
    {
        $cartModel = new CartModel();
        $session = session();
        $userId = $session->get('user_id');
        $carts = $cartModel
            ->join('products', 'products.product_id = cart.product_id')
            ->join('sizes', 'sizes.size_id = cart.size_id')
            ->where('user_id', $userId)
            ->where('status', 'waiting_for_courier')
            ->where('cart.deleted_at', null)
            ->findAll();

        $fileModel = new FileModel();
        foreach ($carts as &$cart) {
            $image = $fileModel
                ->where('product_id', $cart['product_id'])
                ->first();

            $cart['file_path'] = $image['file_path'];
        }

        return $this->response->setJSON($carts);
    }

    public function getSent()
    {
        $cartModel = new CartModel();
        $session = session();
        $userId = $session->get('user_id');
        $carts = $cartModel
            ->join('products', 'products.product_id = cart.product_id')
            ->join('sizes', 'sizes.size_id = cart.size_id')
            ->where('user_id', $userId)
            ->where('status', 'sent')
            ->where('cart.deleted_at', null)
            ->findAll();

        $fileModel = new FileModel();
        foreach ($carts as &$cart) {
            $image = $fileModel
                ->where('product_id', $cart['product_id'])
                ->first();

            $cart['file_path'] = $image['file_path'];
        }

        return $this->response->setJSON($carts);
    }

    public function getFinished()
    {
        $cartModel = new CartModel();
        $session = session();
        $userId = $session->get('user_id');
        $carts = $cartModel
            ->join('products', 'products.product_id = cart.product_id')
            ->join('sizes', 'sizes.size_id = cart.size_id')
            ->where('user_id', $userId)
            ->where('status', 'finished')
            ->where('cart.deleted_at', null)
            ->findAll();

        $fileModel = new FileModel();
        foreach ($carts as &$cart) {
            $image = $fileModel
                ->where('product_id', $cart['product_id'])
                ->first();

            $cart['file_path'] = $image['file_path'];
        }

        return $this->response->setJSON($carts);
    }

    public function getCancelled()
    {
        $cartModel = new CartModel();
        $session = session();
        $userId = $session->get('user_id');
        $carts = $cartModel
            ->join('products', 'products.product_id = cart.product_id')
            ->join('sizes', 'sizes.size_id = cart.size_id')
            ->where('user_id', $userId)
            ->where('status', 'cancelled')
            ->where('cart.deleted_at', null)
            ->findAll();

        $fileModel = new FileModel();
        foreach ($carts as &$cart) {
            $image = $fileModel
                ->where('product_id', $cart['product_id'])
                ->first();

            $cart['file_path'] = $image['file_path'];
        }

        return $this->response->setJSON($carts);
    }

    public function cancelOrder($cartId)
    {
        $cartModel = new CartModel();

        // Update the order status to 'canceled'
        $updated = $cartModel->update($cartId, ['status' => 'cancelled']);

        if ($updated) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Order has been canceled',
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Failed to cancel order',
            ]);
        }
    }

    public function finishOrder($cartId)
    {
        $cartModel = new CartModel();

        // Update the order status to 'finished'
        $updated = $cartModel->update($cartId, ['status' => 'finished']);

        if ($updated) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Order has been finished',
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Failed to finish order',
            ]);
        }
    }

    public function manageOrderView()
    {
        $cartModel = new CartModel();

        $statusArray = [
            'success_payment' => 'Success Payment',
            'under_packaging' => 'Under Packaging',
            'waiting_for_courier' => 'Waiting for Courier',
            'sent' => 'Sent',
            'finished' => 'Finished',
            'cancelled' => 'Cancelled'
        ];

        $carts = $cartModel
            ->join('users', 'users.user_id = cart.user_id')
            ->join('products', 'products.product_id = cart.product_id')
            ->join('brands', 'brands.brand_id = products.brand_id')
            ->join('sizes', 'sizes.size_id = cart.size_id')
            ->where('cart.deleted_at', null)
            ->findAll();

        $data = [
            'carts' => $carts,
            'status' => $statusArray,
        ];

        return view('admin/order/v_manage_order', $data);
    }

    public function updateOrderStatus($cartId)
    {
        $cartModel = new CartModel();
        $status = $this->request->getPost('status');  // Getting the selected status from the form

        if ($cartModel->update($cartId, ['status' => $status])) {
            session()->setFlashdata('message', 'Order status updated successfully.');
        } else {
            session()->setFlashdata('error', 'Failed to update order status.');
        }

        return redirect()->to('/admin/manage-order');
    }
}
