<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kode Referal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Daftar Kode Referal</h1>
    <a href="{{ route('kode_referal.create') }}" class="btn btn-primary">Tambah Kode Referal</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID Kode Referal</th>
                <th>Tanggal Dibuat</th>
                <th>Tanggal Dipakai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kode_referals as $kode_referal)
                <tr>
                    <td>{{ $kode_referal->id_kodereferal }}</td>
                    <td>{{ $kode_referal->tanggal_dibuat }}</td>
                    <td>{{ $kode_referal->tanggal_dipakai }}</td>
                    <td>
                        <a href="{{ route('kode_referal.show', $kode_referal->id_kodereferal) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('kode_referal.edit', $kode_referal->id_kodereferal) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kode_referal.destroy', $kode_referal->id_kodereferal) }}" method="POST" style="display:inline;">
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
