<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengguna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="my-4">Detail Pengguna</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $pengguna->nama_pengguna }}</h5>
            <p class="card-text"><strong>ID Pengguna:</strong> {{ $pengguna->id_pengguna }}</p>
            <p class="card-text"><strong>Alamat:</strong> {{ $pengguna->alamat_pengguna }}</p>
            <p class="card-text"><strong>No Telepon:</strong> {{ $pengguna->no_telepon_pengguna }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $pengguna->email }}</p>
            <p class="card-text"><strong>Role:</strong> {{ $pengguna->role }}</p>
        </div>
    </div>
    <a href="{{ route('pengguna.index') }}" class="btn btn-secondary my-3">Kembali</a>
</div>

</body>
</html>
