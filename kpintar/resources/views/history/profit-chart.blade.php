@extends('layout')

@section('realpage')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Rekap Keuntungan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                  <div class="alert alert-info">
                     Keuntungan hari ini adalah <strong>Rp260.000</strong>.
                  </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Keuntungan Bulanan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Keuntungan Harian
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="line-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            10 Barang Terlaris
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="donut-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
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


 var data2 = [
      { y: '2018-10-1', b: 10000},
      { y: '2018-10-2', b: 165000},
      { y: '2018-10-3', b: 150000},
      { y: '2018-10-4', b: 175000},
      { y: '2018-10-5', b: 180000},
      { y: '2018-10-6', b: 190000},
      { y: '2018-10-7', b: 200000},
      { y: '2018-10-8', b: 215000},
      { y: '2018-10-9', b: 150000},
      { y: '2018-10-10', b: 345000},
      { y: '2018-10-11', b: 360000},
      { y: '2018-10-12', b: 365000},
      { y: '2018-10-13', b: 350000},
      { y: '2018-10-14', b: 375000},
      { y: '2018-10-15', b: 380000},
      { y: '2018-10-16', b: 490000},
      { y: '2018-10-17', b: 400000},
      { y: '2018-10-18', b: 415000},
      { y: '2018-10-19', b: 550000},
      { y: '2018-10-20', b: 645000},
      { y: '2018-10-21', b: 960000},
      { y: '2018-10-22', b: 865000},
      { y: '2018-10-23', b: 950000},
      { y: '2018-10-24', b: 875000},
      { y: '2018-10-25', b: 980000},
      { y: '2018-10-26', b: 890000},
      { y: '2018-10-27', b: 1000000},
      { y: '2018-10-28', b: 1115000},
      { y: '2018-10-29', b: 950000},
      { y: '2018-10-30', b: 845000},
      { y: '2018-10-31', b: 960000},
    ];


var databulan =[
  {x:'2018-1',a:12000000},
  {x:'2018-2',a:12110500},
  {x:'2018-3',a:11000200},
  {x:'2018-4',a:13500000},
  {x:'2018-5',a:17110500},
  {x:'2018-6',a:10000200},
  {x:'2018-7',a:11000000},
  {x:'2018-8',a:11110500},
  {x:'2018-9',a:10000200},
  {x:'2018-10',a:11000000},
  {x:'2018-11',a:1110500},
];

var configbulan ={
  data :databulan,
  xkey: 'x',
  ykeys: ['a'],
  labels :['Pendapatan'],
  fillOpacity:0.6,
  hideHover: 'auto',
  behaveLikeLine: true,
  resize: true,
  pointFillColors:['#ffffff'],
  pointStrokeColors: ['black'],
  lineColors:["#3980B5"]
}

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

configbulan.element="area-chart";
Morris.Area(configbulan).on('click', function (i, row) { 
 $("#line-chart").empty(); 
  config.data=data2;
  Morris.Line(config);
});


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