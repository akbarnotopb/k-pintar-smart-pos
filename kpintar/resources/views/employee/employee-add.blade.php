@extends('layout')
@section('realpage')
<div id="page-wrapper">
    <div id="page-wrapper">
        <h3>Tambah Karyawan</h3>
        <form action="{{ Route('admin.employee')  }}">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Re-Enter Password</label>
                <input type="password" class="form-control" placeholder=" Re-Enter Password">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control">
                    <option>Aktif</option>
                    <option>Tidak Aktif</option>
                    <option>Cuti</option>
                </select>
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
                <label>IsManajer</label>
                <select class="form-control">
                    <option>Tidak</option>
                    <option>Ya</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection
