<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengguna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="my-4">Edit Pengguna</h1>
    <form action="{{ route('pengguna.update', $pengguna->id_pengguna) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>ID Pengguna</label>
            <input type="text" name="id_pengguna" class="form-control" value="{{ $pengguna->id_pengguna }}" readonly>
        </div>
        <div class="form-group">
            <label>Nama Pengguna</label>
            <input type="text" name="nama_pengguna" class="form-control" value="{{ $pengguna->nama_pengguna }}" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat_pengguna" class="form-control" value="{{ $pengguna->alamat_pengguna }}">
        </div>
        <div class="form-group">
            <label>No Telepon</label>
            <input type="text" name="no_telepon_pengguna" class="form-control" value="{{ $pengguna->no_telepon_pengguna }}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $pengguna->email }}" required>
        </div>
        <div class="form-group">
            <label>Role</label>
            <input type="text" name="role" class="form-control" value="{{ $pengguna->role }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('pengguna.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
