<div class="container" style="max-width: 650px;">
    <a href="/product" style="text-decoration: none; color: #111; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.5px;">&larr; Kembali ke Katalog</a>
    
    <div class="form-box" style="margin-top: 20px;">
        <h2 style="margin-top: 0; text-transform: uppercase; font-size: 1.4rem; letter-spacing: 1px; border-bottom: 2px solid #111; padding-bottom: 12px;">Tambah Produk Baru</h2>
        
        <!-- Tambahkan enctype="multipart/form-data" untuk mendukung upload file -->
        <form action="/product/store" method="POST" enctype="multipart/form-data" style="margin-top: 25px;">
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="name" class="form-control" required placeholder="Contoh: Raw Selvedge Denim 14oz">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="category_id" class="form-control" style="background: #fff;">
                    <option value="1">Slim Fit</option>
                    <option value="2">Straight Fit</option>
                    <option value="3">Skinny Jeans</option>
                </select>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label>Harga (Rp)</label>
                    <input type="number" name="price" class="form-control" required placeholder="350000">
                </div>
                <div class="form-group">
                    <label>Stok (pcs)</label>
                    <input type="number" name="stock" class="form-control" required placeholder="20">
                </div>
            </div>

            <div class="form-group">
                <label>Deskripsi Produk</label>
                <textarea name="description" rows="3" class="form-control" placeholder="Jelaskan detail bahan, wash, dan cutting..."></textarea>
            </div>

            <!-- Input File Gambar -->
            <div class="form-group">
                <label>Foto Produk</label>
                <input type="file" name="image" class="form-control" accept="image/*" required style="padding: 9px; background: #fff;">
                <small style="color: #666; font-size: 0.75rem; margin-top: 4px;">Format yang didukung: JPG, JPEG, PNG, WEBP</small>
            </div>

            <button type="submit" class="btn" style="width: 100%; padding: 14px; margin-top: 10px; font-size: 0.9rem;">Simpan Produk</button>
        </form>
    </div>
</div>