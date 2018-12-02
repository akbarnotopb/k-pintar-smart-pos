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
                    <h3 class="modal-title">Edit Barang</h4>
                </div>
                <form action="{{ Route('admin.product')  }}">
                    <div class="modal-body">
                            <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input type="text" class="form-control" value="Koka Kola" placeholder="Nama Barang" required>
                                </div>
                                <div class="form-group">
                                    <label>Harga Beli (Rupiah)</label>
                                    <input style="display: inline-block;" type="text" class="form-control" value="2500" placeholder="Harga Beli" required>
                                </div>
                                <div class="form-group">
                                    <label>Harga Jual (Rupiah)</label>
                                    <input type="text" class="form-control" placeholder="Harga Jual" value="5000" required>
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="text" class="form-control" placeholder="Stok" value="150" required>
                                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
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
                    <h4 class="modal-title">Apakah anda yakin menghapus semua barang? </h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" onclick="window.location.href='{{ Route('admin.product')  }}';">Delete</button>
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
                    <h4 class="modal-title">Apakah anda yakin menghapus barang? </h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" onclick="window.location.href='{{ Route('admin.product')  }}';">Delete</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal end --}}


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Daftar barang</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-bottom:1%;">
                    <span style="font-size: 24px">Daftar barang</span>
                    <span style="float:right; margin:0">
                                <button class="btn btn-danger" data-backdrop="static" data-toggle="modal" data-target="#myDeleteAllModal">Hapus Semua</button>
                            </span>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Stok Barang</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td class="center-tab">1</td>
                                <td class="center-tab">Koka Kola</td>
                                <td class="center-tab">2500</td>
                                <td class="center center-tab">5000</td>
                                <td class="center center-tab">150</td>
                                <td class="center" style="">

                                    <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                    <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">2</td>
                                <td class="center-tab">Worses Cookies</td>
                                <td class="center-tab">700</td>
                                <td class="center center-tab">1000</td>
                                <td class="center center-tab">200</td>
                                <td class="center" style="">

                                    <button class="btn btn-warning edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Edit</button>
                                    <button class="btn btn-danger edit" data-backdrop="static" data-toggle="modal" data-target="#myDeleteModal">Delete</button>

                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">3</td>
                                <td class="center-tab">Biskuwit Singa</td>
                                <td class="center-tab">8000</td>
                                <td class="center center-tab">12000</td>
                                <td class="center center-tab">140</td>
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
