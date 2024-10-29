<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pelanggan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Detail Pelanggan</h1>

    <div class="card">
        <div class="card-body">
            <h5>ID Pelanggan: {{ $pelanggan->id_pelanggan }}</h5>
            <h5>Nama Pelanggan: {{ $pelanggan->nama_pelanggan }}</h5>
            <h5>No. Telepon: {{ $pelanggan->no_telepon_pelanggan }}</h5>
            <h5>Email: {{ $pelanggan->email }}</h5>
        </div>
    </div>

    <a href="{{ route('pelanggan.edit', $pelanggan->id_pelanggan) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('pelanggan.destroy', $pelanggan->id_pelanggan) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
</div>

</body>
</html>
