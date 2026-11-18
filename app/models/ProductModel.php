<?php
class ProductModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllProducts() {
        $this->db->query("SELECT products.*, categories.name as category_name FROM products JOIN categories ON products.category_id = categories.id");
        return $this->db->resultSet();
    }

    public function getProductById($id) {
        $this->db->query("SELECT * FROM products WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addProduct($data) {
        $query = "INSERT INTO products (category_id, name, price, description, stock, image) VALUES (:category_id, :name, :price, :description, :stock, :image)";
        $this->db->query($query);
        $this->db->bind('category_id', $data['category_id']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('stock', $data['stock']);
        $this->db->bind('image', $data['image']);
        return $this->db->execute();
    }

    public function updateProduct($data) {
        $query = "UPDATE products SET category_id = :category_id, name = :name, price = :price, description = :description, stock = :stock, image = :image WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('category_id', $data['category_id']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('stock', $data['stock']);
        $this->db->bind('image', $data['image']);
        return $this->db->execute();
    }

    public function deleteProduct($id) {
        $this->db->query("DELETE FROM products WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->execute();
    }
}