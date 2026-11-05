<?php
class ProductController extends Controller {
    public function index() {
        $data['title'] = 'Katalog Celana Denim';
        $data['products'] = $this->model('ProductModel')->getAllProducts();
        
        $this->view('layouts/header', $data);
        $this->view('products/index', $data);
        $this->view('layouts/footer');
    }

    public function detail($id) {
        $data['title'] = 'Detail Produk Denim';
        $data['product'] = $this->model('ProductModel')->getProductById($id);
        
        $this->view('layouts/header', $data);
        $this->view('products/detail', $data);
        $this->view('layouts/footer');
    }
}