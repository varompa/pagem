<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="my-4">Daftar Pengguna</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('pengguna.create') }}" class="btn btn-primary mb-3">Tambah Pengguna</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Pengguna</th>
                <th>Nama Pengguna</th>
                <th>Email</th>
                <th>No Telepon</th> <!-- Kolom baru untuk No Telepon -->
                <th>Alamat</th> <!-- Kolom baru untuk Alamat -->
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penggunas as $pengguna)
                <tr>
                    <td>{{ $pengguna->id_pengguna }}</td>
                    <td>{{ $pengguna->nama_pengguna }}</td>
                    <td>{{ $pengguna->email }}</td>
                    <td>{{ $pengguna->no_telepon_pengguna }}</td> <!-- Menampilkan No Telepon -->
                    <td>{{ $pengguna->alamat_pengguna }}</td> <!-- Menampilkan Alamat -->
                    <td>{{ $pengguna->role }}</td>
                    <td>
                        <a href="{{ route('pengguna.show', $pengguna->id_pengguna) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('pengguna.edit', $pengguna->id_pengguna) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pengguna.destroy', $pengguna->id_pengguna) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
