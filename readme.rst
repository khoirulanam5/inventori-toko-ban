# Sistem Inventori Toko Ban Motor

Sistem inventori untuk pengelolaan stok ban motor, transaksi masuk/keluar, serta kontrol operasional toko. Sistem ini memiliki role pengguna lengkap dan dibangun menggunakan **CodeIgniter 3**, **MySQL**, serta **HTML**, **CSS**, **JavaScript**, dan **Bootstrap** pada bagian frontend.

---

## 🛞 Fitur Utama

### 📦 Manajemen Stok Ban

* Input barang masuk (pembelian / restock)
* Barang keluar (penjualan)
* Update stok otomatis
* Monitoring stok menipis (low stock alert)
* Kategori & merek ban

### 💳 Transaksi

* Transaksi penjualan
* Cetak nota
* Riwayat transaksi

### 📊 Laporan Lengkap

* Laporan stok
* Laporan barang masuk
* Laporan barang keluar
* Laporan penjualan berdasarkan tanggal

### 👥 Role Pengguna

* **Admin** – Mengatur seluruh data & pengguna
* **Karyawan** – Mengelola transaksi & stok harian
* **Pimpinan** – Melihat laporan dan performa toko

---

## 🛠️ Teknologi yang Digunakan

* **Backend:** CodeIgniter 3
* **Database:** MySQL
* **Frontend:** HTML5, CSS3, JavaScript, Bootstrap

---

## 📂 Struktur Folder (Contoh)

```
application/
│── controllers/
│── models/
│── views/
│── libraries/
public/
│── assets/
│   ├── css/
│   ├── js/
│   ├── img/
database/
│── schema.sql
README.md
```

---

## 🔧 Cara Instalasi

1. Clone repository:

   ```bash
   git clone <repo-url>
   ```

2. Masuk ke folder project:

   ```bash
   cd inventori-ban
   ```

3. Import database:

   * Buat database baru
   * Import file `schema.sql`

4. Atur konfigurasi CodeIgniter:

   * Sesuaikan `base_url` pada `application/config/config.php`
   * Sesuaikan kredensial MySQL pada `application/config/database.php`

5. Jalankan di browser:

   ```
   http://localhost/inventori-ban
   ```

---

## 📸 Screenshot (Opsional)

Tambahkan screenshot tampilan sistem Anda di bagian berikut:

```
![Dashboard](assets/img/dashboard.png)
![Stok Ban](assets/img/stok-ban.png)
![Transaksi](assets/img/transaksi.png)
```

---

## 📞 Contact

Untuk informasi lebih lanjut, lihat halaman kontak yang tersedia di dalam aplikasi.

---

## 📄 License

Open Source / Private (sesuaikan kebutuhan).

---
