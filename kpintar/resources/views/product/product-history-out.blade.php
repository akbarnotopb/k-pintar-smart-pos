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
    <div class="modal fade" id="myAddModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Tambah Riwayat Barang Keluar</h4>
                </div>
                <form action="{{ Route('admin.product')  }}">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-4">Kode Barang</label>
                            <div class="col-md-8">
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option disabled>3(Kosong)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Nama Barang</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="Koka Kola" placeholder="Nama Barang" required disabled value="Koka Kola">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Jumlah</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Stok" value="150" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Keterangan</label>
                            <div class="col-md-8">
                                <select class="form-control">
                                    <option>Kadaluarsa</option>
                                    <option>Retur</option>
                                    <option disabled>Transaksi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Tambah</button>

                    </div>
                </form>
            </div>

        </div>
    </div>
    {{-- Modal end --}} 

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Laman Riwayat Barang Keluar</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-bottom:1%;">
                    <span style="font-size: 24px">Riwayat Barang Keluar</span>
                    <span style="float:right; margin:0">
                        <button class="btn btn-primary" data-backdrop="static" data-toggle="modal" data-target="#myAddModal">Tambah</button>
                    </span>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nomor Transaksi</th>
                                <th>Nama Barang</th>
                                <th>Waktu</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td class="center-tab">1</td>
                                <td class="center-tab">1/22/18/1</td>
                                <td class="center-tab">Koka Kola</td>
                                <td class="center-tab">19/11/2018 09:09:09</td>
                                <td class="center center-tab">Transaksi</td>
                                <td class="center center-tab">10</td>

                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">2</td>
                                <td class="center-tab">1/22/18/1</td>
                                <td class="center-tab">Worses Cookies</td>
                                <td class="center-tab">19/11/2018 09:09:09</td>
                                <td class="center center-tab">Transaksi</td>
                                <td class="center center-tab">200</td>

                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">3</td>
                                <td class="center-tab">1/22/18/1</td>
                                <td class="center-tab">Biskuwit Singa</td>
                                <td class="center-tab">19/11/2018 09:09:09</td>
                                <td class="center center-tab">Transaksi</td>
                                <td class="center center-tab">140</td>

                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">1</td>
                                <td class="center-tab">-</td>
                                <td class="center-tab">Fitbar Chocolate</td>
                                <td class="center-tab">19/11/2018 09:09:09</td>
                                <td class="center center-tab">Kadaluarsa</td>
                                <td class="center center-tab">2</td>

                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">2</td>
                                <td class="center-tab">1/22/18/1</td>
                                <td class="center-tab">Indomie Burjo</td>
                                <td class="center-tab">19/11/2018 09:09:09</td>
                                <td class="center center-tab">Transaksi</td>
                                <td class="center center-tab">10</td>

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
