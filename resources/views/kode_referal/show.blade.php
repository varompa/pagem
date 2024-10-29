<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kode Referal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Detail Kode Referal</h1>

    <div class="card">
        <div class="card-body">
            <h5>ID Kode Referal: {{ $kode_referal->id_kodereferal }}</h5>
            <h5>Tanggal Dibuat: {{ $kode_referal->tanggal_dibuat }}</h5>
            <h5>Tanggal Dipakai: {{ $kode_referal->tanggal_dipakai }}</h5>
        </div>
    </div>

    <a href="{{ route('kode_referal.edit', $kode_referal->id_kodereferal) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('kode_referal.destroy', $kode_referal->id_kodereferal) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    <a href="{{ route('kode_referal.index') }}" class="btn btn-secondary">Kembali</a>
</div>

</body>
</html>
