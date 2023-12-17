<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to use

Untuk menggunakan aplikasi web-based ini, clone repository ini ke dalam directory kerja ( htdocs jika menggunakan XAMPP ) kemudian install dependency dengan menggunakan composer*.
Jika tidak ada composer, baca bagian [Requirement]
Lihat [Installation] untuk proses Installasi

## Requirement

- PHP >= 8.1
- [composer](https://getcomposer.org/download/)
- php8.1-sqlite3 (optional)

## Installation

- install **dependency** menggunakan composer 
```sh
composer install
```
- rename file ```.env.example``` menjadi ```.env```
- ubah value `mysql` yang ada di `DB_CONNECTION` didalam file .env menjadi ``sqlite`` ( jika ingin menggunakan sqlite sebagai database )
- buat file baru di folder database dengan nama ``database.sqlite`` ( jika ingin menggunakan sqlite sebagai database).

- jalankan perintah artisan dibawah untuk membuat key, table database, dan data pertama.
```sh
php artisan key:generate

php artisan migrate

php artisan db:seed
```
- aplikasi siap digunakan, login admin menggunakan email `ini_email@admin` dan password `password`


## Feature Aplikasi
1. Registrasi Pengguna: **dilakukan saat meminjam kendaraan, jika data sadah ada, saat input nomor SIM, data pengguna akan di tampilkan**
- Pengguna dapat mendaftar dengan mengisi informasi pribadi seperti nama, alamat, nomor telepon, dan nomor SIM.
- Informasi pengguna harus disimpan dan dapat diakses kembali.

2. Manajemen Mobil: **terdapat menu input data mobil**
- Pengguna dapat menambahkan mobil baru ke dalam sistem dengan mengisi detail mobil seperti merek, model, nomor plat, dan tarif sewa per hari.
- Data mobil yang ditambahkan harus disimpan dalam sistem dan dapat diakses kembali.
- Pengguna dapat mencari mobil berdasarkan merek, model, atau ketersediaan.
- Pengguna dapat melihat daftar semua mobil yang tersedia untuk disewa.

3. Peminjaman Mobil: **terdapat menu peminjaman**
- Pengguna dapat memesan mobil dengan memasukkan tanggal mulai dan tanggal selesai penyewaan, serta memilih mobil yang tersedia.
- Sistem harus memverifikasi ketersediaan mobil pada tanggal yang diminta.
- Data peminjaman harus disimpan dan dapat diakses kembali.
- Pengguna dapat melihat daftar mobil yang sedang mereka sewa.

4. Pengembalian Mobil: **terdapat menu pengembalian**
- Pengguna dapat mengembalikan mobil yang telah mereka sewa dengan memasukkan nomor plat mobil.
- Sistem harus memverifikasi bahwa mobil tersebut benar-benar disewa oleh pengguna tersebut dan menghitung jumlah hari penyewaan.
- Data pengembalian harus disimpan dan dapat diakses kembali.
- Sistem harus menghitung jumlah biaya sewa berdasarkan tarif harian dan durasi sewa.

5. Keluar Aplikasi: **terdapat menu logout**
- Pengguna dapat keluar dari aplikasi & login lagi di lain waktu