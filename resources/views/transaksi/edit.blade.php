<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Edit Transaksi</h1>

    <form action="{{ route('transaksi.update', $transaksi->id_transaksi) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>ID Transaksi</label>
            <input type="text" name="id_transaksi" class="form-control" value="{{ $transaksi->id_transaksi }}" readonly>
        </div>
        <div class="form-group">
            <label>Jenis Transaksi</label>
            <input type="text" name="jenis_transaksi" class="form-control" value="{{ $transaksi->jenis_transaksi }}" required>
        </div>
        <div class="form-group">
            <label>Total Harga</label>
            <input type="number" step="0.01" name="total_harga" class="form-control" value="{{ $transaksi->total_harga }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>

</body>
</html>
