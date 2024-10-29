<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Supplier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Detail Supplier</h1>

    <div class="card">
        <div class="card-body">
            <h5>ID Supplier: {{ $supplier->id_supplier }}</h5>
            <h5>Nama Supplier: {{ $supplier->nama_supplier }}</h5>
            <h5>Alamat: {{ $supplier->alamat_supplier }}</h5>
            <h5>No. Telepon: {{ $supplier->no_telepon_supplier }}</h5>
            <h5>Email: {{ $supplier->email }}</h5>
        </div>
    </div>

    <a href="{{ route('supplier.edit', $supplier->id_supplier) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('supplier.destroy', $supplier->id_supplier) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    <a href="{{ route('supplier.index') }}" class="btn btn-secondary">Kembali</a>
</div>

</body>
</html>
