<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Tambah Transaksi</h1>

    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>ID Transaksi</label>
            <input type="text" name="id_transaksi" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jenis Transaksi</label>
            <input type="text" name="jenis_transaksi" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Total Harga</label>
            <input type="number" step="0.01" name="total_harga" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>

</body>
</html>
