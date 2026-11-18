<?php
class ProductController extends Controller {
    
    public function index() {
        $data['title'] = 'Katalog Produk Denim';
        $data['products'] = $this->model('ProductModel')->getAllProducts();
        
        $this->view('layouts/header', $data);
        $this->view('products/index', $data);
        $this->view('layouts/footer');
    }

    public function create() {
        $data['title'] = 'Tambah Produk Denim';
        $this->view('layouts/header', $data);
        $this->view('products/create', $data);
        $this->view('layouts/footer');
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['name']) || empty($_POST['price']) || empty($_POST['stock'])) {
                echo "<script>alert('Gagal! Nama, Harga, dan Stok wajib diisi.'); window.location.href='/product/create';</script>";
                exit;
            }

            $imageName = 'default.jpg';
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $fileTmpPath = $_FILES['image']['tmp_name'];
                $fileName = $_FILES['image']['name'];
                $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
                
                if (in_array($fileExtension, $allowedExtensions)) {
                    $newFileName = uniqid('prod_', true) . '.' . $fileExtension;
                    $uploadFileDir = __DIR__ . '/../../public/img/';
                    
                    if (!is_dir($uploadFileDir)) {
                        mkdir($uploadFileDir, 0777, true);
                    }
                    
                    if (move_uploaded_file($fileTmpPath, $uploadFileDir . $newFileName)) {
                        $imageName = $newFileName;
                    }
                }
            }

            $_POST['image'] = $imageName;

            if ($this->model('ProductModel')->addProduct($_POST)) {
                echo "<script>alert('Produk berhasil ditambahkan!'); window.location.href='/product';</script>";
            } else {
                echo "<script>alert('Gagal menyimpan produk.'); window.location.href='/product/create';</script>";
            }
        }
    }

    // Rute GET: Menampilkan Form Edit berdasarkan ID
    public function edit($id) {
        $data['title'] = 'Edit Produk Denim';
        $data['product'] = $this->model('ProductModel')->getProductById($id);
        
        if (!$data['product']) {
            header('Location: /product');
            exit;
        }

        $this->view('layouts/header', $data);
        $this->view('products/edit', $data);
        $this->view('layouts/footer');
    }

    // Rute POST: Mengupdate Data & Ganti Gambar (Opsional)
    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $oldImage = $_POST['old_image'];
            $imageName = $oldImage;

            // Cek apakah user mengupload gambar baru
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $fileTmpPath = $_FILES['image']['tmp_name'];
                $fileName = $_FILES['image']['name'];
                $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];

                if (in_array($fileExtension, $allowedExtensions)) {
                    $newFileName = uniqid('prod_', true) . '.' . $fileExtension;
                    $uploadFileDir = __DIR__ . '/../../public/img/';
                    
                    if (move_uploaded_file($fileTmpPath, $uploadFileDir . $newFileName)) {
                        $imageName = $newFileName;
                        // Hapus gambar lama jika bukan default.jpg
                        if ($oldImage !== 'default.jpg' && file_exists($uploadFileDir . $oldImage)) {
                            @unlink($uploadFileDir . $oldImage);
                        }
                    }
                }
            }

            $_POST['image'] = $imageName;

            if ($this->model('ProductModel')->updateProduct($_POST)) {
                echo "<script>alert('Produk berhasil diperbarui!'); window.location.href='/product';</script>";
            } else {
                echo "<script>alert('Gagal memperbarui produk.'); window.location.href='/product/edit/' . $id;</script>";
            }
        }
    }

    // Rute GET: Menghapus Produk & File Gambarnya
    public function delete($id) {
        $product = $this->model('ProductModel')->getProductById($id);
        if ($product) {
            $uploadFileDir = __DIR__ . '/../../public/img/';
            if ($product['image'] !== 'default.jpg' && file_exists($uploadFileDir . $product['image'])) {
                @unlink($uploadFileDir . $product['image']);
            }
        }

        if ($this->model('ProductModel')->deleteProduct($id)) {
            echo "<script>alert('Produk berhasil dihapus!'); window.location.href='/product';</script>";
        } else {
            echo "<script>alert('Gagal menghapus produk.'); window.location.href='/product';</script>";
        }
    }
}