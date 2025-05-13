# Ulfa Collection - Website E-commerce

Ulfa Collection adalah website e-commerce yang menyediakan berbagai koleksi baju muslimah yang simpel, elegan, dan berkualitas. Website ini memungkinkan pengguna untuk menjelajah produk, melakukan pemesanan, serta untuk admin mengelola produk dan stok dengan mudah.

## Fitur

- **Halaman Produk**: Menampilkan berbagai pilihan produk baju muslimah.
- **Halaman Admin**: Admin dapat mengelola produk, termasuk menambah, mengedit, dan menghapus produk.
- **Sistem Pemesanan**: Pengguna dapat memilih produk dan melakukan pemesanan.
- **Responsif**: Website ini dirancang agar dapat digunakan di berbagai perangkat, baik desktop maupun mobile.

## Teknologi yang Digunakan

- **Laravel**: Sebagai framework utama untuk backend.
- **Blade**: Template engine Laravel untuk tampilan frontend.
- **TailwindCSS**: Untuk desain dan styling responsif yang cepat dan fleksibel.
- **MySQL**: Basis data untuk menyimpan data produk, pengguna, dan pesanan.

## Instalasi

### Prasyarat

1. Pastikan Anda telah menginstal [PHP](https://www.php.net/), [Composer](https://getcomposer.org/), dan [MySQL](https://www.mysql.com/) di sistem Anda.
2. Clone repositori ini ke mesin lokal Anda:

   ```bash
   git clone https://github.com/teguhramadhan/ulfacollection.git
   ```
   
   Masuk ke direktori proyek:
   ```bash
   cd ulfacollection
   ```

   Install dependensi dengan Composer:
   ```bash
   composer install
   ```

   Salin file .env.example menjadi .env:
   ```bash
   cp .env.example .env
   ```

    Generate key aplikasi:
   ```bash
   php artisan key:generate
   ```

   Atur konfigurasi database di file .env dengan informasi database MySQL Anda.


   Jalankan migrasi untuk membuat tabel di database:
   ```bash
   php artisan migrate
   ```

   Jalankan aplikasi:
   ```bash
   php artisan serve
   ```
