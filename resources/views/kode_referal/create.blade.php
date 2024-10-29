<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kode Referal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Tambah Kode Referal</h1>

    <form action="{{ route('kode_referal.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>ID Kode Referal</label>
            <input type="text" name="id_kodereferal" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Dibuat</label>
            <input type="text" name="tanggal_dibuat" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Dipakai</label>
            <input type="text" name="tanggal_dipakai" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>

</body>
</html>
