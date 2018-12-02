@extends('layout')
@section('realpage')
<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <h1 class="page-header">Tambah Member</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
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
    </div>



</div>
@endsection
