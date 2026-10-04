<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Inventaris Laptop - SIPINJAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0b0f19;
            color: #f8fafc;
        }
        .navbar-dark-custom {
            background-color: #000000;
            border-bottom: 1px solid #1e293b;
        }
        .card-custom {
            background-color: #ffffff; /* Kartu putih bersih */
            color: #000000;            /* Teks utama hitam pekat */
            border: 1px solid #cbd5e1;
        }
        .table-custom {
            color: #000000 !important; /* Isi tabel hitam pekat */
        }
        .table-custom thead {
            background-color: #f1f5f9 !important;
            color: #000000 !important;
            font-weight: 700;
        }
        .table-custom tbody tr {
            border-color: #e2e8f0;
        }
        .table-custom tbody tr:hover {
            background-color: #f8fafc;
        }
        /* Mengatur semua teks di dalam tabel menjadi hitam pekat */
        .table-custom td {
            color: #000000 !important;
            font-weight: 500;
        }
        /* Tombol Biru Kustom */
        .btn-custom-blue {
            background-color: #2563eb;
            border-color: #2563eb;
            color: #ffffff;
            font-weight: 500;
        }
        .btn-custom-blue:hover {
            background-color: #1d4ed8;
            border-color: #1d4ed8;
            color: #ffffff;
        }
        /* Tombol Merah Kustom */
        .btn-custom-red {
            background-color: #dc2626;
            border-color: #dc2626;
            color: #ffffff;
            font-weight: 500;
        }
        .btn-custom-red:hover {
            background-color: #b91c1c;
            border-color: #b91c1c;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <!-- Navbar Hitam Elegan -->
    <nav class="navbar navbar-dark-custom shadow-sm py-3 mb-5">
        <div class="container d-flex justify-content-between align-items-center">
            <span class="navbar-brand mb-0 h1 fw-bold text-white fs-4">💻 SIPINJAM</span>
            <span class="text-secondary fs-6">Sistem Inventaris Laptop</span>
        </div>
    </nav>

    <div class="container mb-5">
        <div class="row mb-4 align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold text-white">Daftar Inventaris Laptop</h2>
                <p class="text-secondary mb-0">Kelola data dan status peminjaman laptop dengan mudah.</p>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <a href="/laptops/create" class="btn btn-custom-blue shadow-sm px-4 py-2 rounded-3">+ Tambah Laptop Baru</a>
            </div>
        </div>

        <div class="card card-custom shadow-sm rounded-4 overflow-hidden">
            <div class="card-body p-0 table-responsive">
                <table class="table table-custom table-hover align-middle mb-0">
                    <thead class="text-uppercase fs-7">
                        <tr>
                            <th class="py-3 px-4">Merk Laptop</th>
                            <th class="py-3">Nomor Seri</th>
                            <th class="py-3">Kondisi</th>
                            <th class="py-3">Status</th>
                            <th class="py-3">Tgl Peminjaman</th>
                            <th class="py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laptops as $laptop)
                        <tr>
                            <td class="py-3 px-4 fw-bold">{{ $laptop->brand_name }}</td>
                            <td>{{ $laptop->serial_number }}</td>
                            <td>
                                <span class="badge bg-primary bg-opacity-25 text-primary px-3 py-2">{{ $laptop->condition }}</span>
                            </td>
                            <td>
                                @if(strtolower($laptop->status) == 'tersedia')
                                    <span class="badge bg-success bg-opacity-25 text-success px-3 py-2 fw-semibold">Tersedia</span>
                                @else
                                    <span class="badge bg-danger bg-opacity-25 text-danger px-3 py-2 fw-semibold">{{ $laptop->status }}</span>
                                @endif
                            </td>
                            <td>{{ $laptop->borrow_date ?? '-' }}</td>
                            <td class="text-center">
                                <a href="/laptops/{{ $laptop->id }}/edit" class="btn btn-custom-blue btn-sm px-3 me-1 rounded-2">Edit</a>
                                <form action="/laptops/{{ $laptop->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-custom-red btn-sm px-3 rounded-2">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>