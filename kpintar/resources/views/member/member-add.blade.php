@extends('layout')
@section('realpage')
<div id="page-wrapper">
    <h1>Tambah Member</h1>
    <hr>
    <form action="{{ Route('admin.member')  }}">
        <div class="form-group row">
            <label class="col-md-4">Nama</label>
            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Nama" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-4">Alamat</label>
            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Alamat" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-4">No. Telp</label>
            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="No. Telp" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-4">Tanggal Lahir</label>
            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="dd/mm/yyyy" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-block">Submit</button>
    </form>
</div>
@endsection
