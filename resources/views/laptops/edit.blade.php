<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Laptop - SIPINJAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0b0f19;
            color: #f8fafc;
        }
        .card-custom {
            background-color: #121826;
            color: #ffffff;
            border: 1px solid #1e293b;
        }
        .form-control {
            background-color: #1a2234;
            border: 1px solid #334155;
            color: #ffffff;
        }
        .form-control:focus {
            background-color: #1a2234;
            border-color: #2563eb;
            color: #ffffff;
            box-shadow: 0 0 0 0.25rem rgba(37, 99, 235, 0.25);
        }
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

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-custom shadow rounded-4 p-4">
                    <div class="card-body">
                        <h3 class="fw-bold text-white mb-2 text-center">Edit Data Laptop</h3>
                        <p class="text-secondary text-center mb-4">Perbarui informasi inventaris laptop di bawah ini.</p>
                        
                        <form action="/laptops/{{ $laptop->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary">Merk Laptop</label>
                                <input type="text" name="brand_name" class="form-control rounded-3 py-2" value="{{ $laptop->brand_name }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary">Nomor Seri</label>
                                <input type="text" name="serial_number" class="form-control rounded-3 py-2" value="{{ $laptop->serial_number }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary">Kondisi</label>
                                <input type="text" name="condition" class="form-control rounded-3 py-2" value="{{ $laptop->condition }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary">Status</label>
                                <input type="text" name="status" class="form-control rounded-3 py-2" value="{{ $laptop->status }}" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold text-secondary">Tanggal Peminjaman</label>
                                <input type="date" name="borrow_date" class="form-control rounded-3 py-2" value="{{ $laptop->borrow_date }}" required>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-custom-blue py-2 rounded-3 shadow-sm">Simpan Perubahan</button>
                                <a href="/laptops" class="btn btn-custom-red py-2 rounded-3">Kembali ke Daftar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>