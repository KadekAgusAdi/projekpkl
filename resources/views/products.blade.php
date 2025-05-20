<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #e3f2fd);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .form-control:focus {
            box-shadow: 0 0 5px #0d6efd;
            border-color: #0d6efd;
        }
        .btn-primary {
            background-color: #0d6efd;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body class="py-5">
    <div class="container">
        <!-- Tombol ke halaman lihat produk -->
        <div class="mb-4 text-end">
            <a href="/lihat" class="btn btn-outline-success">Lihat Produk</a>
        </div>

        <div class="card p-4 bg-white">
            <h2 class="mb-4 text-center text-primary">Form Tambah Produk</h2>
            <form id="addProductForm">
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan nama produk" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="price" class="form-control" placeholder="Masukkan harga produk" required>
                </div>
                <div class="mb-4">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Masukkan deskripsi produk"></textarea>
                </div>
                <div class="text-end">
                    <button class="btn btn-primary px-4" type="submit">Tambah Produk</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('addProductForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const form = new FormData(this);
            fetch('/api/products', {
                method: 'POST',
                body: form
            })
            .then(() => {
                alert('Produk berhasil ditambahkan!');
                this.reset();
            });
        });
    </script>
</body>
</html>
