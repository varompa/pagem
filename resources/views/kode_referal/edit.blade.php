<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kode Referal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Edit Kode Referal</h1>

    <form action="{{ route('kode_referal.update', $kode_referal->id_kodereferal) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>ID Kode Referal</label>
            <input type="text" name="id_kodereferal" class="form-control" value="{{ $kode_referal->id_kodereferal }}" readonly>
        </div>
        <div class="form-group">
            <label>Tanggal Dibuat</label>
            <input type="text" name="tanggal_dibuat" class="form-control" value="{{ $kode_referal->tanggal_dibuat }}" required>
        </div>
        <div class="form-group">
            <label>Tanggal Dipakai</label>
            <input type="text" name="tanggal_dipakai" class="form-control" value="{{ $kode_referal->tanggal_dipakai }}">
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>

</body>
</html>
