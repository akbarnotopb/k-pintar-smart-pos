@extends('layout')

@section('realpage')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Konklusi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">20</div>
                                    <div>Member baru!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ Route('admin.member') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">5123</div>
                                    <div>Transaksi baru</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ Route('admin.history') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">

                                    <i class="fa fa-plus-circle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">1</div>
                                    <div>Waktunya Restok</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ Route('admin.product') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <i class="fa fa-exclamation-circle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">2</div>
                                    <div>Barang Habis!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ Route('admin.product') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Keuntungan bulan ini
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs" onclick="window.location.href='{{ Route('admin.recap-history') }}'">
                                        Lihat selengkapnya
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="line-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Transaksi terkini
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs" onclick="window.location.href='{{ Route('admin.history') }}'">
                                        Lihat selengkapnya
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nomer Transaksi</th>
                                            <th>Waktu Transaksi</th>
                                            <th>Karyawan</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <tr class="odd gradeX" >
                                            <td class="center-tab">1/22/18/8</td>
                                            <td class="center-tab">19/11/2018 09:09:09</td>
                                            <td class="center-tab">Sukirman</td>
                                            <td class="center center-tab">300.000</td>
                                        </tr>  
                                        <tr class="odd gradeX" >
                                            <td class="center-tab">1/22/18/9</td>
                                            <td class="center-tab">19/11/2018 09:09:09</td>
                                            <td class="center-tab">Sukirman</td>
                                            <td class="center center-tab">20.000</td>
                                        </tr>  
                                        <tr class="odd gradeX" >
                                            <td class="center-tab">1/22/18/10</td>
                                            <td class="center-tab">19/11/2018 09:09:09</td>
                                            <td class="center-tab">Sukirman</td>
                                            <td class="center center-tab">10.000</td>
                                        </tr>  
                                        <tr class="odd gradeX" >
                                            <td class="center-tab">1/22/18/11</td>
                                            <td class="center-tab">19/11/2018 09:09:09</td>
                                            <td class="center-tab">Sukirman</td>
                                            <td class="center center-tab">102.000</td>
                                        </tr>  
                                        <tr class="odd gradeX" >
                                            <td class="center-tab">1/22/18/12</td>
                                            <td class="center-tab">19/11/2018 09:09:09</td>
                                            <td class="center-tab">Sukirman</td>
                                            <td class="center center-tab">91.000</td>
                                        </tr>                                     
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>





                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> 10 Barang Terlaris
                        </div>
                        <div class="panel-body">
                            <div id="donut-chart"></div>
                            <a href="#" class="btn btn-default btn-block">View Details</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
@endsection

@section('additional-js')
<script type="text/javascript">
     var data = [
      { y: '2018-11-1', b: 10000},
      { y: '2018-11-2', b: 165000},
      { y: '2018-11-3', b: 150000},
      { y: '2018-11-4', b: 175000},
      { y: '2018-11-5', b: 180000},
      { y: '2018-11-6', b: 190000},
      { y: '2018-11-7', b: 200000},
      { y: '2018-11-8', b: 215000},
      { y: '2018-11-9', b: 150000},
      { y: '2018-11-10', b: 245000},
      { y: '2018-11-11', b: 260000}
    ];

     var config = {
      data: data,
      xkey: 'y',
      ykeys: ['b'],
      labels: ['Pendapatan'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:["#3980B5"]
  };

     config.element="line-chart";
     Morris.Line(config); 

Morris.Donut({
  element: 'donut-chart',
  data: [
    {label: "Firbar Chocholate", value: 30},
    {label: "Koka Kola", value: 15},
    {label: "Indomie Burjo", value: 45},
    {label: "Kuota Internet 10GB", value: 10}
  ]
});



</script>
@endsection