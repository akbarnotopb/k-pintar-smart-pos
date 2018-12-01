@extends('layout')

@section('additional-css')
    
    <style type="text/css">
        table>tbody>tr>td.center-tab{
            vertical-align: middle;
        }

        .text-right{
            text-align: right;
        }
    </style>

@endsection

@section('realpage')
       <div id="page-wrapper">

            <div class="modal fade" id="myInfoModal" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 class="modal-title">Detail Transaksi 1/22/18/1</h4>
                    </div>
                    <div class="modal-body">
                        <p>Nomor Transaksi&emsp;&ensp;&nbsp;: 1/22/18/1</p>
                        <p>Tanggal Transaksi&emsp;&nbsp;: 19/11/2018</p>
                        <p>Nama Karyawan&emsp;&emsp;: Sukirman</p>
                        <br>
                        <p class="modal-title">Daftar Belanja</p>
                          <table class="table table-striped table-bordered table-hover">
                              <thead>
                                  <tr>
                                      <th>Kode Barang</th>
                                      <th>Nama Barang</th>
                                      <th>Jumlah</th>
                                      <th>Harga Satuan</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="odd">
                                      <td>1</td>
                                      <td>Koka Kola</td>
                                      <td>12</td>
                                      <td>5000</td>
                                  </tr>
                                  <tr class="even">
                                      <td>3</td>
                                      <td>Biskuwit Singa</td>
                                      <td>1</td>
                                      <td>12000</td>
                                  </tr>
                                  <tr class="odd">
                                      <td>2</td>
                                      <td>Worses Cookies</td>
                                      <td>8</td>
                                      <td>1000</td>
                                  </tr>                                                            
                              </tbody>
                          </table>
                          <p class="text-right" style="font-size: 24px"><strong>Total : Rp.10000</strong></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Riwayat Transaksi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="padding-bottom:1%;">
                            <span style="font-size: 24px">Daftar Transaksi</span>
                            <span style="float:right; margin:0">
                                <button class="btn btn-danger">Hapus Semua</button>
                            </span>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nomer Transaksi</th>
                                        <th>Tanggal</th>
                                        <th>Karyawan</th>
                                        <th>Total</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/1</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">100.000</td>
                                        <td class="center" style="">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
                                            <button class="btn btn-danger edit">Delete</button>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/2</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">11.000</td>
                                        <td class="center">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
                                            <button class="btn btn-danger edit">Delete</button>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/3</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">132.500</td>
                                        <td class="center">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
                                            <button class="btn btn-danger edit">Delete</button>

                                        </td>
                                    </tr>  
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/4</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">100.150</td>
                                        <td class="center">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
                                            <button class="btn btn-danger edit">Delete</button>

                                        </td>
                                    </tr>  
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/5</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">182.120</td>
                                        <td class="center">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
                                            <button class="btn btn-danger edit">Delete</button>

                                        </td>
                                    </tr>  
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/6</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">199.000</td>
                                        <td class="center">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
                                            <button class="btn btn-danger edit">Delete</button>

                                        </td>
                                    </tr>  
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/7</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">12.000</td>
                                        <td class="center">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
                                            <button class="btn btn-danger edit">Delete</button>

                                        </td>
                                    </tr>  
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/8</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">300.000</td>
                                        <td class="center">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
                                            <button class="btn btn-danger edit">Delete</button>

                                        </td>
                                    </tr>  
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/9</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">20.000</td>
                                        <td class="center">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
                                            <button class="btn btn-danger edit">Delete</button>

                                        </td>
                                    </tr>  
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/10</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">10.000</td>
                                        <td class="center">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
                                            <button class="btn btn-danger edit">Delete</button>

                                        </td>
                                    </tr>  
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/11</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">102.000</td>
                                        <td class="center">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
                                            <button class="btn btn-danger edit">Delete</button>

                                        </td>
                                    </tr>  
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/12</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">91.000</td>
                                        <td class="center">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
                                            <button class="btn btn-danger edit">Delete</button>

                                        </td>
                                    </tr>  
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/13</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">100.400</td>
                                        <td class="center">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
                                            <button class="btn btn-danger edit">Delete</button>

                                        </td>
                                    </tr>  
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/14</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">112.000</td>
                                        <td class="center">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
                                            <button class="btn btn-danger edit">Delete</button>

                                        </td>
                                    </tr>  
                                    <tr class="odd gradeX" >
                                        <td class="center-tab">1/22/18/15</td>
                                        <td class="center-tab">19/11/2018</td>
                                        <td class="center-tab">Sukirman</td>
                                        <td class="center center-tab">10.000</td>
                                        <td class="center">
                                            <button  class="btn btn-success" data-toggle="modal" data-target="#myInfoModal">Detail</button>
                                            <button class="btn btn-warning edit">Edit</button>
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