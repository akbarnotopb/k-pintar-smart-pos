@extends('layout')
@section('realpage')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <h1 class="page-header">Tambah Karyawan</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
             <form action="{{ Route('admin.employee')  }}">
                <div class="form-group row">
                    <label class="col-md-4">Username</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Username" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4">Password</label>
                    <div class="col-md-8">
                        <input type="password" class="form-control" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4">Re-Enter Password</label>
                    <div class="col-md-8">
                        <input type="password" class="form-control" placeholder=" Re-Enter Password" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4">Status</label>
                    <div class="col-md-8">
                        <select class="form-control">
                            <option>Aktif</option>
                            <option>Tidak Aktif</option>
                            <option>Cuti</option>
                        </select>
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
                    <label class="col-md-4">IsManajer</label>
                    <div class="col-md-8">
                        <select class="form-control">
                            <option>Tidak</option>
                            <option>Ya</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>           
        </div>
    </div>

</div>
@endsection
