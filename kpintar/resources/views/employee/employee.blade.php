@extends('layout')
@section('additional-css')

<style type="text/css">
    table>tbody>tr>td.center-tab {
        vertical-align: middle;
    }

    .text-right {
        text-align: right;
    }
</style>
@endsection

@section('realpage')
<div id="page-wrapper">
    <div id="page-wrapper">

        {{-- Modal edit --}}
        <div class="modal fade" id="myEditModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Edit Karyawan</h4>
                    </div>
                    <form action="{{ Route('admin.employee')  }}">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" value="Sukirman" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" value="passrahasia" placeholder="Password" required>
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
                                <input type="text" class="form-control" value="Jalan Kenangan blok B1" placeholder="Alamat" required>
                            </div>
                            <div class="form-group">
                                <label>No. Telp</label>
                                <input type="text" class="form-control" value="08234567890" placeholder="No. Telp" required>
                            </div>
                            <div class="form-group">
                                <label>IsManajer</label>
                                <select class="form-control">
                                    <option>Tidak</option>
                                    <option>Ya</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                </div>
                </form>

            </div>
        </div>
        {{-- Modal end --}} {{-- Modal Delete All --}}
        <div class="modal fade" id="myDeleteAllModal" role="dialog">
            <div class="modal-dialog modal-ml">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Apakah anda yakin menghapus semua karyawan? </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" onclick="window.location.href='{{ Route('admin.employee')  }}';">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal end --}} {{-- Modal Delete Choosen --}}
        <div class="modal fade" id="myDeleteModal" role="dialog">
            <div class="modal-dialog modal-ml">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Apakah anda yakin menghapus karyawan? </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" onclick="window.location.href='{{ Route('admin.employee')  }}';">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal end --}}


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Daftar Karyawan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="padding-bottom:1%;">
                        <span style="font-size: 24px">Daftar karyawan</span>
                        <span style="float:right; margin:0">
                                <button class="btn btn-danger" data-backdrop="static" data-toggle="modal" data-target="#myDeleteAllModal">Hapus Semua</button>
                            </span>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Status</th>
                                    <th>Alamat</th>
                                    <th>No. Telp</th>
                                    <th>IsManajer</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td class="center-tab">Sukirman</td>
                                    <td class="center-tab">passrahasia</td>
                                    <td class="center center-tab">Aktif</td>
                                    <td class="center-tab">Jalan Kenangan blok B1</td>
                                    <td class="center center-tab">08234567890</td>
                                    <td class="center center-tab">Tidak</td>
                                    <td class="center" style="">

                                        <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                        <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="center-tab">Sukarman</td>
                                    <td class="center-tab">passrahasia</td>
                                    <td class="center center-tab">Tidak Aktif</td>
                                    <td class="center-tab">Jalan Kenangan blok B2</td>
                                    <td class="center center-tab">08234567809</td>
                                    <td class="center center-tab">Tidak</td>
                                    <td class="center" style="">

                                        <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                        <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="center-tab">Sunirman</td>
                                    <td class="center-tab">passrahasia</td>
                                    <td class="center center-tab">Cuti</td>
                                    <td class="center-tab">Jalan Kenangan blok B3</td>
                                    <td class="center center-tab">08234567908</td>
                                    <td class="center center-tab">Tidak</td>
                                    <td class="center" style="">

                                        <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                        <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="center-tab">Supermin</td>
                                    <td class="center-tab">passrahasia</td>
                                    <td class="center center-tab">Aktif</td>
                                    <td class="center-tab">Jalan Kenangan blok B4</td>
                                    <td class="center center-tab">08234568907</td>
                                    <td class="center center-tab">Ya</td>
                                    <td class="center" style="">

                                        <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                        <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="center-tab">Sutarmin</td>
                                    <td class="center-tab">passrahasia</td>
                                    <td class="center center-tab">Aktif</td>
                                    <td class="center-tab">Jalan Kenangan blok B5</td>
                                    <td class="center center-tab">08234578906</td>
                                    <td class="center center-tab">Tidak</td>
                                    <td class="center" style="">

                                        <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                        <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
@endsection

@section('additional-js')
    <script type="text/javascript">
        $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
@endsection
