<div align="center">

# 📝 Posts — Blog & Content Management

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)
[![Blade](https://img.shields.io/badge/Blade-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](.)

**Project belajar Laravel — blog sederhana dengan autentikasi admin, manajemen post beserta gambar, dan tampilan publik lengkap dengan filter kategori.**

[🔗 Lihat Repo](https://github.com/Rofiq354/Posts)

</div>

## ✨ Tentang Project

Posts adalah project pembelajaran Laravel yang mengikuti materi dari **Web Programming UNPAS**. Fokus utama project ini adalah mempelajari cara **upload, update, dan delete gambar** di Laravel, dikombinasikan dengan sistem autentikasi admin dan tampilan blog publik yang lengkap.

> ⚠️ **Work in Progress** — Fitur create & update post di sisi admin masih dalam tahap pengembangan.

---

## 🛠️ Tech Stack

| Teknologi | Fungsi |
|-----------|--------|
| ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white) | Backend framework (MVC) |
| ![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white) | Server-side language |
| ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white) | Database |
| ![Blade](https://img.shields.io/badge/Blade-FF2D20?style=flat&logo=laravel&logoColor=white) | Template engine |
| **Laravel Auth** | Sistem autentikasi & middleware |
| **Laravel Storage** | Manajemen file & gambar |

---

## 📋 Fitur

**🌐 Publik (Guest)**
- Melihat semua postingan
- Filter postingan berdasarkan kategori
- Melihat detail postingan beserta gambar

**🔐 Admin (Setelah Login)**
- Login ke dashboard admin
- Melihat daftar postingan di panel admin
- Upload gambar saat membuat post
- Update gambar pada post yang sudah ada
- Hapus gambar & post
- Create & update post *(work in progress)*

---

## 🚀 Cara Menjalankan

Pastikan sudah terinstall: **PHP**, **Composer**, dan **MySQL**

```bash
# 1. Clone repositori
git clone https://github.com/Rofiq354/Posts.git
cd Posts

# 2. Install dependency
composer install
npm install

# 3. Setup environment
cp .env.example .env
php artisan key:generate

# 4. Konfigurasi database di file .env
DB_DATABASE=posts
DB_USERNAME=root
DB_PASSWORD=

# 5. Buat symlink untuk storage
php artisan storage:link

# 6. Jalankan migrasi & seeder
php artisan migrate --seed

# 7. Jalankan server
php artisan serve
```

Buka browser dan akses `http://localhost:8000`

---

## 🧠 Yang Dipelajari

Project ini adalah bagian dari perjalanan belajar Laravel bersama **Web Programming UNPAS**, mencakup:

- **Upload Image** — menyimpan file gambar ke Laravel Storage
- **Update Image** — mengganti gambar lama dengan yang baru, menghapus file lama otomatis
- **Delete Image** — menghapus file dari storage saat post dihapus
- **Laravel Storage & Symlink** — `storage:link` untuk mengakses file publik
- **Laravel Authentication** — sistem login & proteksi route dengan middleware
- **Eloquent Relationship** — relasi antar model Post & Category
- **Blade Templating** — layout, component, dan conditional rendering
- **Query & Filter** — menampilkan data berdasarkan kategori

---

<div align="center">

*Bagian dari perjalanan belajar Laravel bersama Web Programming UNPAS 📚*

*by **Ainur Rofiq***

</div>