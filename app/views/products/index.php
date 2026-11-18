<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; border-bottom: 2px solid #111; padding-bottom: 15px;">
        <div>
            <h2 style="margin: 0; text-transform: uppercase; letter-spacing: 1px; font-size: 1.5rem;">Katalog Produk</h2>
            <p style="margin: 5px 0 0 0; color: #666; font-size: 0.9rem;">Koleksi celana denim premium pilihan terbaik.</p>
        </div>
        <a href="/product/create" class="btn">+ Tambah Produk</a>
    </div>

    <div class="grid">
        <?php foreach ($data['products'] as $product) : ?>
            <div class="card">
                <div style="height: 240px; overflow: hidden; background: #f0f0f0; border-bottom: 1px solid var(--border);">
                    <img src="/img/<?= htmlspecialchars($product['image']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                
                <div class="card-body">
                    <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; color: #777; font-weight: 600; margin-bottom: 5px;">
                        <?= htmlspecialchars($product['category_name']); ?>
                    </span>
                    <h3 style="margin: 0 0 10px 0; font-size: 1.1rem; font-weight: 600;"><?= htmlspecialchars($product['name']); ?></h3>
                    <div style="font-weight: 700; font-size: 1.15rem; color: #111; margin-bottom: 12px;">
                        Rp <?= number_format($product['price'], 0, ',', '.'); ?>
                    </div>
                    <p style="font-size: 0.85rem; color: #555; margin: 0 0 20px 0; flex-grow: 1;"><?= htmlspecialchars($product['description']); ?></p>
                    
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #eee; padding-top: 12px; margin-bottom: 12px;">
                        <span style="font-size: 0.8rem; font-weight: 500; color: <?= $product['stock'] > 0 ? '#27ae60' : '#c0392b'; ?>;">
                            Stok: <?= $product['stock']; ?> pcs
                        </span>
                        <span style="font-size: 0.75rem; color: #999; text-transform: uppercase;">ID: #<?= $product['id']; ?></span>
                    </div>

                    <!-- Tombol Aksi Edit & Hapus -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px;">
                        <a href="/product/edit/<?= $product['id']; ?>" class="btn" style="background: #2980b9; padding: 8px; font-size: 0.75rem; text-align: center;">Edit</a>
                        <a href="/product/delete/<?= $product['id']; ?>" class="btn" style="background: #c0392b; padding: 8px; font-size: 0.75rem; text-align: center;" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">Hapus</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>