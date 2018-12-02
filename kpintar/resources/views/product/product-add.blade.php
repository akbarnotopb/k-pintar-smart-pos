@extends('layout')
@section('realpage')
<div id="page-wrapper">
    <h3>Tambah Barang</h3>
    <form action="{{ Route('admin.product')  }}">
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" class="form-control" placeholder="Nama Barang" required>
        </div>
        <div class="form-group">
            <label>Harga Beli (Rupiah)</label>
            <input style="display: inline-block;" type="text" class="form-control" placeholder="Harga Beli" required>
        </div>
        <div class="form-group">
            <label>Harga Jual (Rupiah)</label>
            <input type="text" class="form-control" placeholder="Harga Jual" required>
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="text" class="form-control" placeholder="Stok" required>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
