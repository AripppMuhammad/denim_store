<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
    <style>
        :root {
            --bg-dark: #111111;
            --accent: #c59b27;
            --text-main: #222222;
            --text-light: #777777;
            --border-color: #e5e5e5;
        }

        * { box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; margin: 0; padding: 0; background: #ffffff; color: var(--text-main); }
        
        /* Navbar */
        header { background: var(--bg-dark); color: #fff; padding: 20px 40px; display: flex; justify-content: space-between; align-items: center; border-bottom: 3px solid var(--accent); }
        .brand-logo { font-size: 1.4rem; font-weight: 900; letter-spacing: 2px; text-transform: uppercase; color: #fff; text-decoration: none; }
        .nav-links a { color: #ccc; text-decoration: none; margin-left: 25px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; transition: color 0.2s; }
        .nav-links a:hover { color: var(--accent); }

        /* Hero Banner */
        .hero-banner { background: #1a1a1a; color: #fff; text-align: center; padding: 60px 20px; margin-bottom: 40px; }
        .hero-banner h1 { font-size: 2.5rem; margin-bottom: 10px; letter-spacing: 1px; }
        .hero-banner p { color: #aaa; font-size: 1.1rem; max-width: 600px; margin: 0 auto; }

        /* Container & Grid */
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px 60px 20px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 30px; }
        
        /* Product Card */
        .card { background: #fff; border: 1px solid var(--border-color); border-radius: 4px; overflow: hidden; transition: transform 0.2s, box-shadow 0.2s; display: flex; flex-direction: column; }
        .card:hover { transform: translateY(-4px); box-shadow: 0 10px 20px rgba(0,0,0,0.08); }
        .product-img-placeholder { background: #f4f4f4; height: 320px; display: flex; align-items: center; justify-content: center; color: var(--text-light); font-weight: bold; border-bottom: 1px solid var(--border-color); font-size: 0.9rem; }
        .card-body { padding: 20px; display: flex; flex-direction: column; flex-grow: 1; }
        .card h3 { margin: 0 0 10px 0; font-size: 1.1rem; font-weight: 600; }
        .price { color: #111; font-weight: 700; font-size: 1.15rem; margin-bottom: 10px; }
        .desc { font-size: 0.88rem; color: var(--text-light); line-height: 1.5; margin-bottom: 20px; flex-grow: 1; }
        
        /* Button */
        .btn { display: block; background: var(--bg-dark); color: #fff; text-align: center; padding: 12px; text-decoration: none; border-radius: 2px; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px; transition: background 0.2s; }
        .btn:hover { background: var(--accent); color: #111; }

        /* Footer */
        footer { background: #111; color: #888; text-align: center; padding: 40px 20px; font-size: 0.85rem; border-top: 1px solid #222; }
    </style>
</head>
<body>
    <header>
        <a href="/denim-store/public/product" class="brand-logo">Denim & Co.</a>
        <nav class="nav-links">
            <a href="/denim-store/public/product">Catalog</a>
            <a href="#" onclick="alert('Fitur belum tersedia'); return false;">Cart (0)</a>
        </nav>
    </header>