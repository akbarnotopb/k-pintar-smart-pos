@extends('layout')
@section('realpage')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <h1 class="page-header">Tambah Barang</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <form action="{{ Route('admin.product')  }}">
                <div class="form-group row">
                    <label class="col-md-4">Kode Barang</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Kode Barang" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4">Nama Barang</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Nama Barang" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4">Harga Beli (Rupiah)</label>
                    <div class="col-md-8">
                        <input style="display: inline-block;" type="text" class="form-control" placeholder="Harga Beli" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4">Harga Jual (Rupiah)</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Harga Jual" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4">Stok</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Stok" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4">Reminder Stok</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Reminder Stok" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>            
        </div>
    </div>

</div>
@endsection
