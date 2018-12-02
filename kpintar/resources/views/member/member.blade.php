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

    {{-- Modal edit --}}
    <div class="modal fade" id="myEditModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Edit Member</h4>
                </div>
                <form action="{{ Route('admin.member')  }}">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-4">Kode</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="1001" placeholder="Kode" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Nama</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="Sudirman" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Alamat</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="Jalan Kenangan blok A1" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">No. Telp</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="0812345678" placeholder="No. Telp" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Tanggal Lahir</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="19/11/1995" placeholder="dd/mm/yyyy" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Poin</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="50" placeholder="Poin" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>

                    </div>
                </form>
            </div>

        </div>
    </div>
    {{-- Modal end --}} {{-- Modal Delete All --}}
    <div class="modal fade" id="myDeleteAllModal" role="dialog">
        <div class="modal-dialog modal-ml">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Apakah anda yakin menghapus semua member? </h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" onclick="window.location.href='{{ Route('admin.member')  }}';">Delete</button>
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
                    <h4 class="modal-title">Apakah anda yakin menghapus member? </h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" onclick="window.location.href='{{ Route('admin.member')  }}';">Delete</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal end --}}


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Daftar Member</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-bottom:1%;">
                    <span style="font-size: 24px">Daftar Member</span>
                    <span style="float:right; margin:0">
                        <button class="btn btn-primary" onclick="window.location.href='{{ Route('admin.member-add') }}'">Tambah Member</button>
                        <button class="btn btn-danger" data-backdrop="static" data-toggle="modal" data-target="#myDeleteAllModal">Hapus Semua</button>
                    </span>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Tanggal Lahir</th>
                                <th>Poin</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td class="center-tab">1001</td>
                                <td class="center-tab">Sudirman</td>
                                <td class="center-tab">Jalan Kenangan blok A1</td>
                                <td class="center center-tab">0812345678</td>
                                <td class="center center-tab">19/11/1995</td>
                                <td class="center center-tab">50</td>
                                <td class="center" style="">

                                    <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                    <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">1002</td>
                                <td class="center-tab">Sudarman</td>
                                <td class="center-tab">Jalan Kenangan blok A2</td>
                                <td class="center center-tab">0812345678</td>
                                <td class="center center-tab">20/11/1995</td>
                                <td class="center center-tab">40</td>
                                <td class="center" style="">

                                    <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                    <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">1003</td>
                                <td class="center-tab">Supirman</td>
                                <td class="center-tab">Jalan Kenangan blok A10</td>
                                <td class="center center-tab">0812345610</td>
                                <td class="center center-tab">1/11/1995</td>
                                <td class="center center-tab">10</td>
                                <td class="center" style="">

                                    <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                    <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">1004</td>
                                <td class="center-tab">Sutirman</td>
                                <td class="center-tab">Jalan Kenangan blok A3</td>
                                <td class="center center-tab">0812345671</td>
                                <td class="center center-tab">9/11/1995</td>
                                <td class="center center-tab">30</td>
                                <td class="center" style="">

                                    <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                    <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">1005</td>
                                <td class="center-tab">Suwirman</td>
                                <td class="center-tab">Jalan Kenangan blok A4</td>
                                <td class="center center-tab">0812345670</td>
                                <td class="center center-tab">14/11/1995</td>
                                <td class="center center-tab">100</td>
                                <td class="center" style="">

                                    <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                    <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">1006</td>
                                <td class="center-tab">Suparlan</td>
                                <td class="center-tab">Jalan Kenangan blok A5</td>
                                <td class="center center-tab">0812345676</td>
                                <td class="center center-tab">19/12/1995</td>
                                <td class="center center-tab">90</td>
                                <td class="center" style="">

                                    <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                    <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">1007</td>
                                <td class="center-tab">Ayas Faikar Nais</td>
                                <td class="center-tab">Jalan Kenangan blok A7</td>
                                <td class="center center-tab">0812345685</td>
                                <td class="center center-tab">29/11/1995</td>
                                <td class="center center-tab">60</td>
                                <td class="center" style="">

                                    <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                    <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">1008</td>
                                <td class="center-tab">Steve Ferguso</td>
                                <td class="center-tab">Jalan Kenangan blok A8</td>
                                <td class="center center-tab">0812345629</td>
                                <td class="center center-tab">19/11/1997</td>
                                <td class="center center-tab">20</td>
                                <td class="center" style="">

                                    <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                    <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">1009</td>
                                <td class="center-tab">Hamba Allah</td>
                                <td class="center-tab">Jalan Kenangan blok A9</td>
                                <td class="center center-tab">0812345650</td>
                                <td class="center center-tab">19/11/1980</td>
                                <td class="center center-tab">80</td>
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
