@extends('layout')
@section('realpage')
<div id="page-wrapper">
    <h3>Tambah Member</h3>
    <form action="{{ Route('admin.member')  }}">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" placeholder="Nama" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" required>
        </div>
        <div class="form-group">
            <label>No. Telp</label>
            <input type="text" class="form-control" placeholder="No. Telp" required>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="text" class="form-control" placeholder="dd/mm/yyyy" required>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
