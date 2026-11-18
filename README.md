DenimStore - Custom MVC PHP (Tugas UTS)



Aplikasi web e-commerce katalog celana denim sederhana yang dibangun menggunakan PHP murni dengan arsitektur Model-View-Controller (MVC) kustom dari nol tanpa menggunakan framework besar (seperti Laravel atau CodeIgniter). Proyek ini dibuat untuk memenuhi tugas Ujian Tengah Semester (UTS) mata kuliah Pemrograman Web.



---



FITUR UTAMA

- Arsitektur Custom MVC: Pemisahan yang jelas antara logika (Controller), struktur data (Model), dan antarmuka pengguna (View).

- Front Controller & Routing Sederhana: Menggunakan URL bersih (Pretty URLs) berbasis .htaccess.

- Katalog & Detail Produk: Menampilkan daftar produk celana denim lengkap dengan informasi harga, stok, dan deskripsi mendetail.

- Keamanan Dasar: Penerapan htmlspecialchars() untuk mencegah kerentanan XSS (Cross-Site Scripting).

- Desain Responsif: Tampilan storefront modern bernuansa butik denim profesional.



---



TECH STACK

- Bahasa: PHP (Native / OOP)

- Database: MySQL (diakses menggunakan PDO / PHP Data Objects)

- Server: Apache (XAMPP) / PHP Built-in Development Server

- Frontend: HTML5, CSS3



---



STRUKTUR FOLDER PROYEK

denim-store/

│

├── app/

│   ├── controllers/

│   │   └── ProductController.php

│   ├── models/

│   │   └── ProductModel.php

│   └── views/

│       ├── layouts/

│       │   ├── header.php

│       │   └── footer.php

│       └── products/

│           ├── index.php

│           └── detail.php

│

├── core/

│   ├── Database.php

│   ├── Controller.php

│   └── App.php

│

├── public/

│   ├── img/

│   │   ├── slim-fit.jpg

│   │   ├── straight.jpg

│   │   └── skinny.jpg

│   └── index.php

│

├── .htaccess

└── README.txt



---



CARA MENJALANKAN PROYEK (INSTALLATION GUIDE)



1. Clone Repository

   git clone https://github.com/AripppMuhammad/denim-store.git

   (Atau letakkan folder proyek ini langsung di direktori htdocs XAMPP Anda).



2. Konfigurasi Database

   - Nyalakan Apache dan MySQL melalui XAMPP Control Panel.

   - Buka phpMyAdmin di browser: http://localhost/phpmyadmin/

   - Buat database baru dengan nama "denim_store".

   - Masuk ke menu SQL, lalu jalankan query berikut:



   CREATE TABLE products (

       id INT AUTO_INCREMENT PRIMARY KEY,

       name VARCHAR(100) NOT NULL,

       price DECIMAL(10,2) NOT NULL,

       description TEXT,

       stock INT NOT NULL,

       image VARCHAR(255)

   );



   INSERT INTO products (name, price, description, stock, image) VALUES 

   ('Classic Slim Fit Denim', 350000.00, 'Celana denim pria dengan potongan slim fit yang nyaman untuk aktivitas harian.', 25, 'slim-fit.jpg'),

   ('Vintage Straight Denim', 420000.00, 'Gaya klasik tahun 90-an dengan bahan denim tebal berkualitas tinggi.', 15, 'straight.jpg'),

   ('Dark Indigo Skinny Jeans', 375000.00, 'Denim elastis berwarna dark indigo dengan potongan pas di kaki.', 20, 'skinny.jpg');



3. Menjalankan Server

   Gunakan PHP Built-in Server melalui terminal/CMD:

   cd path/to/denim-store

   php -S localhost:8000 -t public



4. Akses Website

   Buka browser Anda dan akses tautan berikut:

   http://localhost:8000/product



---



AUTHOR

- Nama: AripppMuhammad

- Keperluan: Tugas UTS Pemrograman Web
