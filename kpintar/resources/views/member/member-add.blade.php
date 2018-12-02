@extends('layout')
@section('realpage')
<div id="page-wrapper">
    <div id="page-wrapper">
        <h3>Tambah Member</h3>
            <form>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label>No. Telp</label>
                    <input type="text" class="form-control" placeholder="No. Telp">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" class="form-control" placeholder="dd/mm/yyyy">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
    </div>
</div>
@endsection
