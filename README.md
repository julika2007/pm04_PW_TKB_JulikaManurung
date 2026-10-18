# PM04 - PW2 TKB - MVC Dasar (Sistem Toko Sederhana)

PHP Native + MySQL/MariaDB, tanpa framework.

## Cara menjalankan
1. Import `database.sql` lewat phpMyAdmin.
2. Buat user admin: `php config/seed_admin.php`
3. Jalankan server: `php -S localhost:8000 -t public`
4. Buka http://localhost:8000

Login: `admin` / `admin123`

## Route
- `/` Home
- `/login` Login
- `/products` Produk (wajib login, dilindungi AuthMiddleware)
- `/logout` Logout
