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

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Laman Riwayat Barang Masuk</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-bottom:1%;">
                    <span style="font-size: 24px">Riwayat Barang Masuk</span>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Waktu</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td class="center-tab">1</td>
                                <td class="center-tab">Koka Kola</td>
                                <td class="center-tab">19/11/2018 09:09:09</td>
                                <td class="center center-tab">Dari sales</td>
                                <td class="center center-tab">12</td>

                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">2</td>
                                <td class="center-tab">Worses Cookies</td>
                                <td class="center-tab">19/11/2018 09:09:09</td>
                                <td class="center center-tab">Resell barang disc hypermart</td>
                                <td class="center center-tab">200</td>

                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">3</td>
                                <td class="center-tab">Biskuwit Singa</td>
                                <td class="center-tab">19/11/2018 09:09:09</td>
                                <td class="center center-tab">-</td>
                                <td class="center center-tab">140</td>

                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">4</td>
                                <td class="center-tab">Fitbar Chocolate</td>
                                <td class="center-tab">19/11/2018 09:09:09</td>
                                <td class="center center-tab">-</td>
                                <td class="center center-tab">2</td>

                            </tr>
                            <tr class="odd gradeX">
                                <td class="center-tab">5</td>
                                <td class="center-tab">Indomie Burjo</td>
                                <td class="center-tab">19/11/2018 09:09:09</td>
                                <td class="center center-tab">Titipan Pak Burjo</td>
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
