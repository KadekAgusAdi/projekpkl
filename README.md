# Aplikasi CRUD Produk – Laravel (projekpkl)

Aplikasi sederhana CRUD Produk menggunakan Laravel sebagai backend dan Bootstrap untuk frontend. API dapat diakses melalui Postman. Proyek ini dibuat untuk memenuhi tugas fullstack developer.

## 📌 Fitur
- Menampilkan daftar produk
- Menambah produk baru
- Mengedit produk
- Menghapus produk
- API menggunakan Postman (GET, POST, PUT, DELETE)

## 🛠 Teknologi yang Digunakan
- Laravel 10
- MySQL
- Bootstrap 5
- Postman

## 🧾 Struktur Database (Tabel `products`)
| Kolom      | Tipe Data     | Keterangan           |
|------------|---------------|----------------------|
| id         | BIGINT (auto) | Primary Key          |
| name       | VARCHAR        | Nama produk          |
| price      | INTEGER        | Harga produk         |
| description| TEXT (nullable)| Deskripsi produk     |
| created_at | TIMESTAMP     | Otomatis Laravel     |
| updated_at | TIMESTAMP     | Otomatis Laravel     |

## 🚀 Cara Instalasi

1. Clone project atau download:
   ```bash
   git clone https://github.com/username/projekpkl.git
