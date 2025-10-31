<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Set karakter yang digunakan supaya bisa baca tulisan biasa dan simbol -->
    <meta charset="UTF-8">
    <!-- Biar website nya bisa menyesuaikan layar hp dan komputer -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Laravel</title>
    <!-- Pasang Bootstrap buat bikin tampilan jadi lebih bagus dan rapi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Bagian navigasi atas seperti header website -->
    <nav class="navbar navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <!-- Nama website yang ditampilkan di kiri atas -->
            <a class="navbar-brand fw-semibold" href="#">UTS Laravel</a>

            <!-- Tombol garis tiga (hamburger) buat buka menu di hp -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Tempat buat nanti nambah menu kalo perlu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Kosong dulu, bisa diisi nanti -->
            </div>
        </div>
    </nav>

    <!-- Konten utama yang isinya konten halaman -->
    <main class="container-fluid">
        <div class="ps-2" style="margin-left: 12px;">
            <!-- Judul besar di halaman home -->
            <h1 class="fw-bold mt-3">Halaman Home</h1>
        </div>
    </main>

    <!-- Menu samping yang keluar dari kanan (seperti drawer) -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <!-- Bagian kepala menu samping -->
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">UTS Laravel</h5>
            <!-- Tombol X buat nutup menu samping -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Isi dari menu samping -->
        <div class="offcanvas-body">
            <!-- Daftar menu pilihan -->
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Home</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Produk</a></li>
            </ul>
            <!-- Kotak search buat cari sesuatu -->
            <div class="mt-3">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Pasang JavaScript Bootstrap biar tombol dan menu bisa berfungsi -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>