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
                        <h3 class="modal-title">Daftar Barang</h4>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Harga Jual</th>
                                            <th>Add</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd gradeX">
                                            <td class="center-tab">1</td>
                                            <td class="center-tab">Koka Kola</td>
                                            <td class="center center-tab">5000</td>
                                            <td class="center" style="">
                                                <button class="btn btn-success edit">Tambah</button>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center-tab">2</td>
                                            <td class="center-tab">Worses Cookies</td>
                                            <td class="center center-tab">1000</td>
                                            <td class="center" style="">
                                                <button class="btn btn-success edit">Tambah</button>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center-tab">3</td>
                                            <td class="center-tab">Biskuwit Singa</td>
                                            <td class="center center-tab">12000</td>
                                            <td class="center" style="">
                                                <button class="btn btn-success edit">Tambah</button>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center-tab">4</td>
                                            <td class="center-tab">Fitbar Chocolate</td>
                                            <td class="center center-tab">10000</td>
                                            <td class="center" style="">
                                                <button class="btn btn-success edit">Tambah</button>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center-tab">5</td>
                                            <td class="center-tab">Indomie Burjo</td>
                                            <td class="center center-tab">3000</td>
                                            <td class="center" style="">
                                                <button class="btn btn-success edit">Tambah</button>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <span>
                                <button class="btn btn-primary btn-block" data-dismiss="modal">Selesai</button>
                            </span>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                </div>
            </div>
        </div>
        {{-- Modal end --}} {{-- Modal Delete All --}}
        <div class="modal fade" id="myDeleteAllModal" role="dialog">
            <div class="modal-dialog modal-ml">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Apakah anda yakin mengosongkan daftar belanja? </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" onclick="window.location.href='{{ Route('admin.kasir')  }}';">Kosongkan</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal end --}} {{-- Modal Delete Choosen --}}
        <div class="modal fade" id="bayarModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Pembayaran</h3>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal az-form" id="form_payment" name="form" method="post">
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Tanggal</label>
                                <div class="col-sm-4">

                                    <div class="input-group az-datetime" >
                                        <input type="text"  class="form-control x-hidden" id="transaction_date" name="transaction_date" disabled value="03-12-2018 02:30:50"/>
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    </div>
                                </div>
                                <label for="" class="col-sm-2 control-label">Pelanggan</label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option>none</option>
                                        <option>Ayas Fakar Nais</option>
                                        <option>Steve Ferguzo</option>
                                        <option>Hamba Allah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Nota</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" disabled value="1/22/18/16"/>
                                </div>
                                <label for="" class="col-sm-2 control-label">Total Transaksi</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control format-number txt-right" disabled value="19.000"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Jumlah Uang</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control format-number txt-right" id="total_cash" maxlength="20" value="20.000"/>
                                </div>
                                <label for="" class="col-sm-2 control-label">Diskon</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control format-number txt-right" id="total_discount" maxlength="20" value="0"/>
                                </div>
                            </div>
                            <div class="total-change">
                                <span style="font-size: 20px">Kembalian Rp. </span> <span class="total-change-price" style="font-size: 20px">1.000</span>
                            </div>
                            <div class="grand-total-payment" style="float:right">
                                <span style="font-size: 30px">Grand Total Rp. </span> <span class="grand-total-payment-price" style="font-size: 30px">19.000</span>
                            </div>
                            <div class="row"></div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" onclick="window.location.href='{{ Route('admin.kasir')  }}';">LUNAS</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal end --}}


        <h1>Kasir</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="padding-bottom:1%;">
                        <span style="font-size: 30px">TOTAL : 19.000</span>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <button class="btn btn-primary edit" data-backdrop="static" data-toggle="modal" data-target="#myEditModal">Tambah Belanjaan</button>
                            <button class="btn btn-success edit" data-backdrop="static" data-toggle="modal" data-target="#bayarModal">Lanjut ke Pembayaran</button>
                            <span style="float:right; margin:0">
                            <button class="btn btn-warning" data-backdrop="static" data-toggle="modal" data-target="#myDeleteAllModal">Kosongkan Daftar Belanja</button>
                        </span>
                            <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="odd gradeX" >
                                <td class="center-tab">Worses Cookies</td>
                                <td class="center-tab col-sm-2">1</td>
                                <td class="center center-tab">1.000</td>
                                <td class="center" style="">
                                    <button class="btn btn-danger edit">Delete</button>
                                </td>
                            </tr>
                            <tr class="odd gradeX" >
                                <td class="center-tab">Indomie Burjo</td>
                                <td class="center-tab">6</td>
                                <td class="center center-tab">18.000</td>
                                <td class="center" style="">
                                    <button class="btn btn-danger edit">Delete</button>
                                </td>

                            </tr>

                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                        {{--                             <div class="well">
                                                        <h4>DataTables Usage Information</h4>
                                                        <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                                        <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                                                    </div> --}}
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>

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
