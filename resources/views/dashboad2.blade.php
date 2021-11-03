<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
    meter {
  width: 100%;
  height: 25px;
}
</style>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{!! asset('sbadmin/css/styles.css') !!}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style type='text/css'></style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dash">IS-tech</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
          <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <a class="nav-link" href="dash">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard 1
                            </a>
                            <a class="nav-link" href="dash2">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                DataTables 2
                            </a> -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fas fa-tachometer-alt"></i></div>
                                Dashboard
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="dash">Dashboard 1</a>
                                    <a class="nav-link" href="dash2">Dashboard 2</a>
                                </nav>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        User
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    

                                    <div class="card-body">
                                    <div class="col mb-2">
                                    <select class="custom-select-sm form-control-sm" id="leave" onchange="leaveChange()">
                                        <option value="{{$inflow[12]->cod}},{{$inflow[11]->cod}},{{$inflow[10]->cod}},{{$inflow[9]->cod}},{{$inflow[8]->cod}},{{$inflow[7]->cod}},{{$inflow[6]->cod}},{{$inflow[5]->cod}},{{$inflow[4]->cod}},{{$inflow[3]->cod}},{{$inflow[2]->cod}},{{$inflow[1]->cod}},{{$inflow[0]->cod}}">COD</option>
                                        <option value="{{$inflow[12]->ph}},{{$inflow[11]->ph}},{{$inflow[10]->ph}},{{$inflow[9]->ph}},{{$inflow[8]->ph}},{{$inflow[7]->ph}},{{$inflow[6]->ph}},{{$inflow[5]->ph}},{{$inflow[4]->ph}},{{$inflow[3]->ph}},{{$inflow[2]->ph}},{{$inflow[1]->ph}},{{$inflow[0]->ph}}">PH</option>
                                        <option value="{{$inflow[12]->tss}},{{$inflow[11]->tss}},{{$inflow[10]->tss}},{{$inflow[9]->tss}},{{$inflow[8]->tss}},{{$inflow[7]->tss}},{{$inflow[6]->tss}},{{$inflow[5]->tss}},{{$inflow[4]->tss}},{{$inflow[3]->tss}},{{$inflow[2]->tss}},{{$inflow[1]->tss}},{{$inflow[0]->tss}}">TSS</option>
                                        <option value="{{$inflow[12]->ammonium}},{{$inflow[11]->ammonium}},{{$inflow[10]->ammonium}},{{$inflow[9]->ammonium}},{{$inflow[8]->ammonium}},{{$inflow[7]->ammonium}},{{$inflow[6]->ammonium}},{{$inflow[5]->ammonium}},{{$inflow[4]->ammonium}},{{$inflow[3]->ammonium}},{{$inflow[2]->ammonium}},{{$inflow[1]->ammonium}},{{$inflow[0]->ammonium}}">Ammonium</option>
                                        
                                    </select></div>
                                    
                                    <canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Data Now
                                    </div>
                                    <div class="card-body">
                                    <div class="row">
                                        <!-- <p></p>
                                        -->
                                        @foreach ($data as $datas)
                                            <div class="col mb-2">
                                            COD
                                        </div>
                                        <div class="col mb-2"  style="text-align: right;">
                                            {{$datas->cod}} 
                                        </div>
                                        <meter max=5000 min=0 value='{{$datas->cod}}' high=4000 low=2000 optimum=5000></meter>
                                        <div class="col mb-2">
                                            PH
                                        </div>
                                        <div class="col mb-2"  style="text-align: right;">
                                            {{$datas->ph}}
                                        </div>
                                        <meter max=14 min=0 value='{{$datas->ph}}' high=8 low=6 optimum=7></meter>
                                        <div class="col mb-2">
                                            TSS
                                        </div>
                                        <div class="col mb-2"  style="text-align: right;">
                                        {{$datas->tss}}       
                                        </div>
                                        <meter max=3000 min=0 value='{{$datas->tss}}' high=2500 low=1000 optimum=2000></meter>
                                        <div class="col mb-2">
                                            Ammonium
                                        </div>
                                        <div class="col mb-2"  style="text-align: right;">
                                            {{$datas->ammonium}}
                                        </div>
                                        <meter max=10000 min=0 value='{{$datas->ammonium}}' high=7500 low=2500 optimum=5000></meter>
                                        
                                        @endforeach
                                        
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                            <div class="table-responsive"> 
                                <table class="table table-bordered data-table">
        <thead>
            <tr>
            <th>Datetime</th>
                <th>COD</th>
                <th>PH</th>
                <th>TSS</th>
                <th>Ammonium</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{!! asset('sbadmin/js/scripts.js') !!}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script >
            // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
// var label=[]
// for(let lab of '{{$inflow}}'){
//   label.push(lab.In_Flowrate)
// }
// alert('{{$inflow[0]->datetime}}')
// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['{{date("H:i:s",strtotime($inflow[12]->datetime))}}', '{{date("H:i:s",strtotime($inflow[11]->datetime))}}', '{{date("H:i:s",strtotime($inflow[10]->datetime))}}', '{{date("H:i:s",strtotime($inflow[9]->datetime))}}', '{{date("H:i:s",strtotime($inflow[8]->datetime))}}', '{{date("H:i:s",strtotime($inflow[7]->datetime))}}', '{{date("H:i:s",strtotime($inflow[6]->datetime))}}', '{{date("H:i:s",strtotime($inflow[5]->datetime))}}', '{{date("H:i:s",strtotime($inflow[4]->datetime))}}', '{{date("H:i:s",strtotime($inflow[3]->datetime))}}', '{{date("H:i:s",strtotime($inflow[2]->datetime))}}', '{{date("H:i:s",strtotime($inflow[1]->datetime))}}', '{{date("H:i:s",strtotime($inflow[0]->datetime))}}'],
    // labels: ,
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: ['{{$inflow[12]->cod}}', '{{$inflow[11]->cod}}', '{{$inflow[10]->cod}}', '{{$inflow[9]->cod}}', '{{$inflow[8]->cod}}', '{{$inflow[7]->cod}}', '{{$inflow[6]->cod}}', '{{$inflow[5]->cod}}', '{{$inflow[4]->cod}}', '{{$inflow[3]->cod}}', '{{$inflow[2]->cod}}', '{{$inflow[1]->cod}}', '{{$inflow[0]->cod}}'],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 5000,
          maxTicksLimit: 6
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

        </script>
        <script src="{!! asset('sbadmin/assets/demo/chart-bar-demo.js') !!}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{!! asset('sbadmin/js/datatables-simple-demo.js') !!}"></script>
        <script type="text/javascript">
  $(function () {
      
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('limbah2.dash2') }}",
        columns: [{
                data: 'datetime',
                    type: 'num',
                    render: {
                        _: 'display',
                        sort: 'timestamp'
                   }
            },
            {data: 'cod', name: 'cod'},
            {data: 'ph', name: 'ph'},
            {data: 'tss', name: 'tss'},
            {data: 'ammonium', name: 'ammonium'},
            
        ]
    });
    $("p").append('<p>I\'m a paragraph!</p>');
  });
  
  function leaveChange() {
        var e = document. getElementById("leave");
        console.log(myLineChart.data.datasets[0].data)
        console.log(myLineChart.options.scales.yAxes[0].ticks.max)
        let select=e.options[e.selectedIndex].text
        if(select=="PH"){
            myLineChart.options.scales.yAxes[0].ticks.max=14
        }
        else if(select=="COD"){
            myLineChart.options.scales.yAxes[0].ticks.max=5000
        }
        else if(select=="TSS"){
            myLineChart.options.scales.yAxes[0].ticks.max=3000
        }
        else if(select=="Ammonium"){
            myLineChart.options.scales.yAxes[0].ticks.max=10000
        }
        myLineChart.data.datasets[0].data=leave.value.split(',')
        myLineChart.update()
        
            
}
</script>
    </body>
</html>