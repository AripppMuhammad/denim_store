<div class="container" style="max-width: 650px;">
    <a href="/product" style="text-decoration: none; color: #111; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.5px;">&larr; Kembali ke Katalog</a>
    
    <div class="form-box" style="margin-top: 20px;">
        <h2 style="margin-top: 0; text-transform: uppercase; font-size: 1.4rem; letter-spacing: 1px; border-bottom: 2px solid #111; padding-bottom: 12px;">Edit Produk</h2>
        
        <form action="/product/update" method="POST" enctype="multipart/form-data" style="margin-top: 25px;">
            <!-- Hidden input untuk ID dan Gambar Lama -->
            <input type="hidden" name="id" value="<?= $data['product']['id']; ?>">
            <input type="hidden" name="old_image" value="<?= $data['product']['image']; ?>">

            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="name" class="form-control" required value="<?= htmlspecialchars($data['product']['name']); ?>">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="category_id" class="form-control" style="background: #fff;">
                    <option value="1" <?= $data['product']['category_id'] == 1 ? 'selected' : ''; ?>>Slim Fit</option>
                    <option value="2" <?= $data['product']['category_id'] == 2 ? 'selected' : ''; ?>>Straight Fit</option>
                    <option value="3" <?= $data['product']['category_id'] == 3 ? 'selected' : ''; ?>>Skinny Jeans</option>
                </select>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label>Harga (Rp)</label>
                    <input type="number" name="price" class="form-control" required value="<?= $data['product']['price']; ?>">
                </div>
                <div class="form-group">
                    <label>Stok (pcs)</label>
                    <input type="number" name="stock" class="form-control" required value="<?= $data['product']['stock']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label>Deskripsi Produk</label>
                <textarea name="description" rows="3" class="form-control"><?= htmlspecialchars($data['product']['description']); ?></textarea>
            </div>

            <div class="form-group">
                <label>Ganti Foto Produk (Opsional)</label>
                <div style="margin-bottom: 10px;">
                    <img src="/img/<?= htmlspecialchars($data['product']['image']); ?>" alt="Preview" style="width: 80px; height: 80px; object-fit: cover; border-radius: 4px; border: 1px solid #ddd;">
                </div>
                <input type="file" name="image" class="form-control" accept="image/*" style="padding: 9px; background: #fff;">
                <small style="color: #666; font-size: 0.75rem; margin-top: 4px;">Biarkan kosong jika tidak ingin mengganti gambar.</small>
            </div>

            <button type="submit" class="btn" style="width: 100%; padding: 14px; margin-top: 10px; font-size: 0.9rem;">Perbarui Produk</button>
        </form>
    </div>
</div>