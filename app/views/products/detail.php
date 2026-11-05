<div class="container" style="margin-top: 40px;">
    <a href="/denim-store/public/product" style="text-decoration: none; color: #111; font-size: 0.9rem; font-weight: bold; text-transform: uppercase;">&larr; Back to Catalog</a>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-top: 20px; background: #fff; border: 1px solid #e5e5e5; padding: 40px; border-radius: 4px;">
    <!-- Menampilkan Gambar Besar -->
    <div style="height: 400px; background: #f4f4f4; overflow: hidden;">
        <img src="/denim-store/public/img/<?= htmlspecialchars($data['product']['image']); ?>" alt="<?= htmlspecialchars($data['product']['name']); ?>" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div>
        <h2 style="margin-top: 0; font-size: 2rem;"><?= htmlspecialchars($data['product']['name']); ?></h2>
        <div style="font-size: 1.5rem; font-weight: bold; color: #111; margin-bottom: 20px;">Rp <?= number_format($data['product']['price'], 0, ',', '.'); ?></div>
        
        <p style="color: #666; line-height: 1.6; margin-bottom: 25px;">
            <?= nl2br(htmlspecialchars($data['product']['description'])); ?>
        </p>

        <p style="font-size: 0.9rem; margin-bottom: 25px;"><strong>Availability:</strong> <span style="color: #2e7d32;"><?= $data['product']['stock']; ?> units in stock</span></p>

        <a href="#" class="btn" style="text-align: center; padding: 15px;" onclick="alert('Produk berhasil dimasukkan ke keranjang!'); return false;">Add to Cart</a>
    </div>
</div>
</div>