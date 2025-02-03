# Backend API for [laravel_sanctum]

## **Deskripsi**
Proyek ini adalah backend API menggunakan Laravel dan Laravel Sanctum untuk autentikasi. API ini memungkinkan pengguna untuk melihat produk serta memungkinkan admin untuk menambah, mengedit, dan menghapus produk mereka sendiri.
Proyek ini adalah backend API Laravel dan menggunakan Laravel Sanctum untuk melakukan autentikasi. Program backend ini memungkinan pengguna untuk melihat, menambah, mengedit, serta menghapus produk.

## **Fitur**
- **Autentikasi menggunakan Laravel Sanctum**
- **CRUD Produk** (Create, Read, Update, Delete)
- **Akses berbasis role**:
  - Pengguna tidak terautentikasi hanya dapat melihat produk.
  - Pengguna terautentikasi dapat menambahkan produk.
  - Pengguna yang menambahkan produk, mereka dapat mengedit atau menghapus produk mereka sendiri. Dan tidak bisa mengedit atau menghapus data pengguna lain.

## **Persyaratan Sistem**
Pastikan sistem Anda memiliki:
- PHP `>= 8.3`
- Composer `>= 2.4`
- Laravel `>= 11.x`
- MySQL
- Postman (untuk uji API)

## **Cara Menjalankan Proyek**
1. Clone repository ini
   git clone git@github.com:delilaaah/laravel-sanctum.git
   cd laravel_sanctum
2. Install dependencies
   composer install
3. Duplikasi file .env
   cp .env.example .env
5. Atur database di .env
    DB_CONNECTION=mysql
   
    DB_HOST=127.0.0.1
   
    DB_PORT=3306
   
    DB_DATABASE=nama_database
   
    DB_USERNAME=root
   
    DB_PASSWORD=
7. Generate key
   php artisan key:generate
9. Migrasi di database
    php artisan migrate
11. Jalankan project
    php artisan serve
   
   
