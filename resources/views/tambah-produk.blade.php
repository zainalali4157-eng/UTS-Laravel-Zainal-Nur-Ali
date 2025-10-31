<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Laravel</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar dengan shadow-sm -->
    <nav class="navbar navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <!-- Brand dengan fw-semibold -->
            <a class="navbar-brand fw-semibold" href="#">UTS Laravel</a>

            <!-- Tombol hamburger -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Area collapse untuk konten navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Area ini bisa diisi menu di masa depan -->
            </div>
        </div>
    </nav>

    <!-- Konten utama halaman -->
    <main class="container-fluid mt-3">
        <h1 class="fw-bold">Form Tambah Produk</h1>
    </main>

    <!-- Offcanvas Sidebar -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">UTS Laravel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="/" class="text-decoration-none text-dark">Home</a></li>
                <li class="list-group-item"><a href="/produk" class="text-decoration-none text-dark">Produk</a></li>
            </ul>
            <div class="mt-3">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle dengan Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>