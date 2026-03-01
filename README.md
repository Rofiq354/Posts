<div align="center">

# 📝 Posts — Blog & Content Management

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)

**Project belajar Laravel — blog sederhana dengan sistem autentikasi admin dan tampilan publik postingan.**

[🔗 Lihat Repo](https://github.com/Rofiq354/Posts)

</div>

---

## 📸 Preview

|            🖥️ Desktop             |            📱 Mobile            |
| :-------------------------------: | :-----------------------------: |
| ![Desktop](./preview-desktop.png) | ![Mobile](./preview-mobile.png) |

---

## ✨ Tentang Project

Posts adalah project pembelajaran Laravel yang mengikuti materi dari **Web Programming UNPAS**. Aplikasi ini adalah blog sederhana dengan dua sisi: **sisi publik** untuk pengunjung melihat postingan, dan **sisi admin** yang hanya bisa diakses setelah login.

> ⚠️ **Work in Progress** — Fitur create & update post di sisi admin masih dalam tahap pengembangan.

---

## 🛠️ Tech Stack

| Teknologi                                                                                       | Fungsi                            |
| ----------------------------------------------------------------------------------------------- | --------------------------------- |
| ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white) | Backend framework (MVC)           |
| ![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)             | Server-side language              |
| ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)       | Database                          |
| ![Blade](https://img.shields.io/badge/Blade-FF2D20?style=flat&logo=laravel&logoColor=white)     | Template engine                   |
| **Laravel Auth**                                                                                | Sistem autentikasi bawaan Laravel |

---

## 📋 Fitur

**🌐 Publik (Guest)**

- Melihat semua postingan
- Filter postingan berdasarkan kategori
- Melihat detail postingan

**🔐 Admin (Setelah Login)**

- Login ke dashboard admin
- Melihat daftar postingan di panel admin
- Create & update post _(work in progress)_

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

# 5. Jalankan migrasi & seeder
php artisan migrate --seed

# 6. Jalankan server
php artisan serve
npm run dev
```

Buka browser dan akses `http://localhost:8000`

---

## 🧠 Yang Dipelajari

Project ini adalah bagian dari perjalanan belajar Laravel bersama **Web Programming UNPAS**, mencakup:

- **Laravel Authentication** — sistem login & proteksi route dengan middleware
- **Route & Middleware** — membedakan akses publik dan admin
- **Eloquent Relationship** — relasi antar model (Post & Category)
- **Blade Templating** — layout, component, dan conditional rendering
- **Query & Filter** — menampilkan data berdasarkan kategori

---

<div align="center">

_Bagian dari perjalanan belajar Laravel bersama Web Programming UNPAS 📚_

\*by **Ainur Rofiq\***

</div>
