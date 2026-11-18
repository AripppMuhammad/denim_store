RAW & REFINED DENIM STORE (CUSTOM PHP MVC)

==========================================



A lightweight, modern e-commerce web application built from scratch using a Custom PHP MVC (Model-View-Controller) architecture and MySQL. Designed for managing premium denim apparel collections with full CRUD operations and image upload handling.



--------------------------------------------------

FEATURES

--------------------------------------------------

- Custom MVC Architecture: Clean separation of concerns with a custom router (App.php), controllers, models, and views.

- Product Management (CRUD):

  - Create: Add new denim products with categories, pricing, stock tracking, and image uploads.

  - Read: Dynamic product catalog grid view with category badges and inventory status.

  - Update: Edit existing product details and replace product images with automatic cleanup of old files.

  - Delete: Remove products from the database along with their physical image files from the server.

- Database Integration: Secure database queries using PHP PDO with prepared statements to prevent SQL injection.

- Modern Responsive UI: Styled with a minimalist boutique aesthetic using the Inter font and CSS grid layouts.



--------------------------------------------------

TECH STACK

--------------------------------------------------

- Backend: PHP (Object-Oriented Programming, Custom MVC)

- Database: MySQL / MariaDB (managed via phpMyAdmin)

- Frontend: HTML5, CSS3 (Custom responsive styles)

- Server Environment: XAMPP / PHP Built-in Server (php -S)



--------------------------------------------------

PROJECT DIRECTORY STRUCTURE

--------------------------------------------------

denim_store/

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

│           ├── create.php

│           └── edit.php

├── core/

│   ├── App.php

│   ├── Controller.php

│   └── Database.php

└── public/

    ├── img/               # Uploaded product images

    ├── index.php

    └── router.php         # URL routing support for PHP built-in server



--------------------------------------------------

INSTALLATION & SETUP GUIDE

--------------------------------------------------



1. Prerequisites

- Install XAMPP (or any local server environment with PHP 8.x and MySQL).

- Git installed on your machine.



2. Clone Repository / Download

Clone this repository into your XAMPP htdocs directory:

cd C:\xampp\htdocs

git clone https://github.com/AripppMuhammad/denim_store.git

cd denim_store



3. Setup Database

- Open your browser and go to http://localhost/phpmyadmin/

- Create a new database named "denim_store".

- Run the following SQL script in the SQL tab to set up the schema and sample data:



CREATE TABLE categories (

    id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(50) NOT NULL

);



CREATE TABLE products (

    id INT AUTO_INCREMENT PRIMARY KEY,

    category_id INT,

    name VARCHAR(100) NOT NULL,

    price DECIMAL(10,2) NOT NULL,

    description TEXT,

    stock INT NOT NULL,

    image VARCHAR(255),

    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE

);



INSERT INTO categories (name) VALUES ('Slim Fit'), ('Straight Fit'), ('Skinny Jeans');



INSERT INTO products (category_id, name, price, description, stock, image) VALUES 

(1, 'Classic Slim Fit Denim', 350000.00, 'Celana denim pria dengan potongan slim fit yang nyaman.', 25, 'default.jpg'),

(2, 'Vintage Straight Denim', 420000.00, 'Gaya klasik tahun 90-an dengan bahan denim tebal.', 15, 'default.jpg');



4. Configure Database Connection

Verify your database credentials in core/Database.php:

- $host = 'localhost';

- $user = 'root';

- $pass = '';

- $db_name = 'denim_store';



5. Run the Local Development Server

Start the PHP built-in server using the provided router script:

php -S localhost:8000 -t public public/router.php



6. Access the Application

Open your browser and navigate to:

http://localhost:8000/product



--------------------------------------------------

AUTHOR

--------------------------------------------------

- GitHub: @AripppMuhammad (https://github.com/AripppMuhammad)

- University Student studying Informatics at Universitas Muhammadiyah Malang.
