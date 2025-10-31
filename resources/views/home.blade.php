<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Pengaturan dasar dokumen HTML -->
    <meta charset="UTF-8">
    <!-- Agar tampilan responsif di berbagai device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Laravel</title>
    <!-- Menyertakan Bootstrap CSS dari CDN untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar bagian atas dengan background terang dan bayangan kecil -->
    <nav class="navbar navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <!-- Nama brand/logo website -->
            <a class="navbar-brand fw-semibold" href="#">UTS Laravel</a>

            <!-- Tombol menu untuk tampilan mobile -->
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Area yang bisa dikembangkan untuk menu navigasi -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Nanti bisa ditambah menu di sini -->
            </div>
        </div>
    </nav>

    <!-- Konten utama halaman -->
    <main class="container-fluid">
        <div class="ps-2" style="margin-left: 12px;">
            <!-- Judul halaman dengan margin atas dan tebal -->
            <h1 class="fw-bold mt-5">Halaman Home</h1>
        </div>
    </main>

    <!-- Sidebar yang muncul dari kanan (offcanvas) -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <!-- Header sidebar -->
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">UTS Laravel</h5>
            <!-- Tombol tutup sidebar -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Isi konten sidebar -->
        <div class="offcanvas-body">
            <!-- Daftar menu navigasi -->
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#" class="text-decoration-none">Home</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none">Produk</a></li>
            </ul>
            <!-- Form pencarian -->
            <div class="mt-3">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Menyertakan Bootstrap JavaScript untuk fungsi interaktif -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>