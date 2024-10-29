<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supplier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Edit Supplier</h1>

    <form action="{{ route('supplier.update', $supplier->id_supplier) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>ID Supplier</label>
            <input type="text" name="id_supplier" class="form-control" value="{{ $supplier->id_supplier }}" readonly>
        </div>
        <div class="form-group">
            <label>Nama Supplier</label>
            <input type="text" name="nama_supplier" class="form-control" value="{{ $supplier->nama_supplier }}" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat_supplier" class="form-control" value="{{ $supplier->alamat_supplier }}" required>
        </div>
        <div class="form-group">
            <label>No. Telepon</label>
            <input type="text" name="no_telepon_supplier" class="form-control" value="{{ $supplier->no_telepon_supplier }}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $supplier->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>

</body>
</html>
