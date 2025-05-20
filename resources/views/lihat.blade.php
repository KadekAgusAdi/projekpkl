<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lihat Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f1f8ff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="py-5">
    <div class="container">

        
        <div class="mb-4 text-start">
            <a href="/products" class="btn btn-outline-primary">← Kembali ke Tambah Produk</a>
        </div>

        <div class="card p-4 bg-white">
            <h2 class="mb-4 text-center text-primary">Daftar Produk</h2>
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="productTableBody"></tbody>
            </table>
        </div>
    </div>

    <script>
        const loadProducts = () => {
            fetch('/api/products')
                .then(res => res.json())
                .then(data => {
                    const rows = data.map(p => `
                        <tr>
                            <td>${p.name}</td>
                            <td>Rp ${parseInt(p.price).toLocaleString()}</td>
                            <td>
                                <button onclick="deleteProduct(${p.id})" class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                    `).join('');
                    document.getElementById('productTableBody').innerHTML = rows;
                });
        };

        const deleteProduct = (id) => {
            if (confirm('Yakin ingin menghapus produk ini?')) {
                fetch(`/api/products/${id}`, { method: 'DELETE' })
                    .then(() => loadProducts());
            }
        };

        loadProducts();
    </script>
</body>
</html>
