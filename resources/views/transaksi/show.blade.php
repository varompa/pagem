<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Detail Transaksi</h1>

    <div class="card">
        <div class="card-body">
            <h5>ID Transaksi: {{ $transaksi->id_transaksi }}</h5>
            <h5>Jenis Transaksi: {{ $transaksi->jenis_transaksi }}</h5>
            <h5>Total Harga: {{ $transaksi->total_harga }}</h5>
        </div>
    </div>

    <a href="{{ route('transaksi.edit', $transaksi->id_transaksi) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('transaksi.destroy', $transaksi->id_transaksi) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
</div>

</body>
</html>
