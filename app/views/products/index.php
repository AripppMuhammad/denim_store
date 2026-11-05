<div class="hero-banner">
    <h1>RAW & REFINED DENIM</h1>
    <p>Koleksi celana denim premium dengan ketahanan tinggi, dirancang untuk kenyamanan jangka panjang.</p>
</div>

<div class="container">
    <div style="margin-bottom: 25px; border-bottom: 1px solid #eee; padding-bottom: 10px;">
        <span style="text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px; font-weight: bold; color: #777;">All Products (<?= count($data['products']); ?>)</span>
    </div>

    <div class="grid">
    <?php foreach ($data['products'] as $product) : ?>
        <div class="card">
            <!-- Menampilkan Gambar dari folder public/img/ -->
            <div style="height: 320px; overflow: hidden; background: #f4f4f4;">
                <img src="/img/<?= htmlspecialchars($product['image']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="card-body">
                <h3><?= htmlspecialchars($product['name']); ?></h3>
                <div class="price">Rp <?= number_format($product['price'], 0, ',', '.'); ?></div>
                <p class="desc"><?= htmlspecialchars(substr($product['description'], 0, 75)); ?>...</p>
                <a href="/denim-store/public/product/detail/<?= $product['id']; ?>" class="btn">View Details</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>