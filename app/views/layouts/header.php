<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?? 'Denim Store'; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #fafafa;
            --text-color: #1a1a1a;
            --primary: #111111;
            --border: #e2e2e2;
            --card-bg: #ffffff;
        }
        * { box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; margin: 0; background: var(--bg-color); color: var(--text-color); line-height: 1.6; }
        
        /* Navbar */
        nav { background: var(--primary); color: #fff; padding: 18px 40px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        nav .brand { font-weight: 700; font-size: 1.1rem; letter-spacing: 2px; text-transform: uppercase; color: #fff; text-decoration: none; }
        nav .nav-links a { color: #ccc; text-decoration: none; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 500; transition: color 0.2s; }
        nav .nav-links a:hover { color: #fff; }

        .container { max-width: 1100px; margin: 40px auto; padding: 0 20px; }
        
        /* Button */
        .btn { background: var(--primary); color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 4px; display: inline-block; font-size: 0.85rem; text-transform: uppercase; font-weight: 600; letter-spacing: 1px; transition: background 0.2s, transform 0.1s; border: none; cursor: pointer; text-align: center; }
        .btn:hover { background: #333; transform: translateY(-1px); }

        /* Grid & Cards */
        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 25px; margin-top: 30px; }
        .card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 8px; overflow: hidden; transition: transform 0.2s, box-shadow 0.2s; display: flex; flex-direction: column; }
        .card:hover { transform: translateY(-4px); box-shadow: 0 10px 25px rgba(0,0,0,0.08); }
        .card-img-placeholder { height: 200px; background: #f0f0f0; display: flex; align-items: center; justify-content: center; color: #888; font-size: 0.85rem; font-weight: 600; letter-spacing: 1px; border-bottom: 1px solid var(--border); }
        .card-body { padding: 20px; display: flex; flex-direction: column; flex-grow: 1; }
        
        /* Form Styling */
        .form-box { background: #fff; border: 1px solid var(--border); padding: 35px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.04); }
        .form-group { display: flex; flex-direction: column; gap: 8px; margin-bottom: 20px; }
        .form-group label { font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.5px; color: #444; }
        .form-control { padding: 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 0.95rem; font-family: inherit; transition: border-color 0.2s; }
        .form-control:focus { outline: none; border-color: var(--primary); }
    </style>
</head>
<body>
<nav>
    <a href="/product" class="brand">Raw & Refined Denim</a>
    <div class="nav-links">
        <a href="/product">Katalog</a>
    </div>
</nav>