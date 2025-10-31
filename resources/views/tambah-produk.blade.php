<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Ini buat ngasih tau browser kalo kita pake karakter standar -->
    <meta charset="UTF-8">
    <!-- Biar website nya pas di hp gak keciilan, ukurannya pas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Laravel</title>
    <!-- Nyari template bootstrap biar gak usah bikin desain dari nol -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Bagian kepala website yang ada di paling atas -->
    <nav class="navbar navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <!-- Nama aplikasi atau website -->
            <a class="navbar-brand fw-semibold" href="#">UTS Laravel</a>

            <!-- Tombol garis tiga buat buka menu samping -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Tempat buat nambah menu kalo mau bikin yang di atas -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Kosong dulu, bisa diisi nanti kalo perlu -->
            </div>
        </div>
    </nav>

    <!-- Isi utama halaman website -->
    <main class="container-fluid mt-3">
        <!-- Judul besar di kiri buat form -->
        <h1 class="fw-bold mb-4">Form Tambah Produk</h1>

        <!-- Form buat input data produk baru -->
        <form class="row g-3" method="POST" action="{{ route('produk.store') }}">
            @csrf
            <!-- Baris pertama isi 3 kolom: kode, nama, dan jenis produk -->
            <div class="row mb-3">
                <!-- Kolom pertama buat isi kode produk -->
                <div class="col-md-4">
                    <label for="kodeProduk" class="form-label fw-semibold">Kode Produk</label>
                    <input type="text" class="form-control" id="kodeProduk" name="kode" placeholder="Input Kode Produk"
                        required>
                </div>
                <!-- Kolom kedua buat isi nama produk -->
                <div class="col-md-4">
                    <label for="namaProduk" class="form-label fw-semibold">Nama Produk</label>
                    <input type="text" class="form-control" id="namaProduk" name="nama" placeholder="Input Nama Produk"
                        required>
                </div>
                <!-- Kolom ketiga buat pilih jenis produk dari dropdown -->
                <div class="col-md-4">
                    <label for="jenisProduk" class="form-label fw-semibold">Jenis Produk</label>
                    <select class="form-select" id="jenisProduk" name="jenis" required>
                        <option selected disabled>Pilih Produk</option>
                        @foreach($jenisProduk as $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Baris kedua isi harga dan tombol simpan -->
            <div class="row mb-3">
                <!-- Kolom buat input harga, lebarnya 8 dari 12 kolom -->
                <div class="col-md-8">
                    <label for="harga" class="form-label fw-semibold">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" placeholder="Input Harga"
                        required>
                </div>
                <!-- Kolom buat tombol simpan, lebarnya 4 dari 12 kolom -->
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-success w-100">Simpan</button>
                </div>
            </div>
        </form>
    </main>

    <!-- Menu samping yang keluar dari kanan -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <!-- Kepala menu samping -->
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">UTS Laravel</h5>
            <!-- Tombol X buat nutup menu samping -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Badan menu samping -->
        <div class="offcanvas-body">
            <!-- Daftar menu pilihan -->
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="/" class="text-decoration-none text-dark">Home</a></li>
                <li class="list-group-item"><a href="/produk" class="text-decoration-none text-dark">Produk</a></li>
            </ul>
            <!-- Kotak pencarian di menu samping -->
            <div class="mt-3">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Script buat bikin tombol dan menu bisa diklik dan berfungsi -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>