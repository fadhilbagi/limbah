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
            <a class="navbar-brand ps-3" href="index.html">IS-tech</a>
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
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                DataTables
                            </a>
                            
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
                                        <option value="{{$inflow[12]->In_Flowrate}},{{$inflow[11]->In_Flowrate}},{{$inflow[10]->In_Flowrate}},{{$inflow[9]->In_Flowrate}},{{$inflow[8]->In_Flowrate}},{{$inflow[7]->In_Flowrate}},{{$inflow[6]->In_Flowrate}},{{$inflow[5]->In_Flowrate}},{{$inflow[4]->In_Flowrate}},{{$inflow[3]->In_Flowrate}},{{$inflow[2]->In_Flowrate}},{{$inflow[1]->In_Flowrate}},{{$inflow[0]->In_Flowrate}}">In_Flowrate</option>
                                        <option value="{{$inflow[12]->Out_Flowrate}},{{$inflow[11]->Out_Flowrate}},{{$inflow[10]->Out_Flowrate}},{{$inflow[9]->Out_Flowrate}},{{$inflow[8]->Out_Flowrate}},{{$inflow[7]->Out_Flowrate}},{{$inflow[6]->Out_Flowrate}},{{$inflow[5]->Out_Flowrate}},{{$inflow[4]->Out_Flowrate}},{{$inflow[3]->Out_Flowrate}},{{$inflow[2]->Out_Flowrate}},{{$inflow[1]->Out_Flowrate}},{{$inflow[0]->Out_Flowrate}}">Out_Flowrate</option>
                                        <option value="{{$inflow[12]->In_Tabulizer}},{{$inflow[11]->In_Tabulizer}},{{$inflow[10]->In_Tabulizer}},{{$inflow[9]->In_Tabulizer}},{{$inflow[8]->In_Tabulizer}},{{$inflow[7]->In_Tabulizer}},{{$inflow[6]->In_Tabulizer}},{{$inflow[5]->In_Tabulizer}},{{$inflow[4]->In_Tabulizer}},{{$inflow[3]->In_Tabulizer}},{{$inflow[2]->In_Tabulizer}},{{$inflow[1]->In_Tabulizer}},{{$inflow[0]->In_Tabulizer}}">In_Tabulizer</option>
                                        <option value="{{$inflow[12]->Out_Tabulizer}},{{$inflow[11]->Out_Tabulizer}},{{$inflow[10]->Out_Tabulizer}},{{$inflow[9]->Out_Tabulizer}},{{$inflow[8]->Out_Tabulizer}},{{$inflow[7]->Out_Tabulizer}},{{$inflow[6]->Out_Tabulizer}},{{$inflow[5]->Out_Tabulizer}},{{$inflow[4]->Out_Tabulizer}},{{$inflow[3]->Out_Tabulizer}},{{$inflow[2]->Out_Tabulizer}},{{$inflow[1]->Out_Tabulizer}},{{$inflow[0]->Out_Tabulizer}}">Out_Tabulizer</option>
                                        <option value="{{$inflow[12]->Turbidity}},{{$inflow[11]->Turbidity}},{{$inflow[10]->Turbidity}},{{$inflow[9]->Turbidity}},{{$inflow[8]->Turbidity}},{{$inflow[7]->Turbidity}},{{$inflow[6]->Turbidity}},{{$inflow[5]->Turbidity}},{{$inflow[4]->Turbidity}},{{$inflow[3]->Turbidity}},{{$inflow[2]->Turbidity}},{{$inflow[1]->Turbidity}},{{$inflow[0]->Turbidity}}">Turbidity</option>
                                        <option value="{{$inflow[12]->NH3}},{{$inflow[11]->NH3}},{{$inflow[10]->NH3}},{{$inflow[9]->NH3}},{{$inflow[8]->NH3}},{{$inflow[7]->NH3}},{{$inflow[6]->NH3}},{{$inflow[5]->NH3}},{{$inflow[4]->NH3}},{{$inflow[3]->NH3}},{{$inflow[2]->NH3}},{{$inflow[1]->NH3}},{{$inflow[0]->NH3}}">NH3</option>
                                        <option value="{{$inflow[12]->PH_out}},{{$inflow[11]->PH_out}},{{$inflow[10]->PH_out}},{{$inflow[9]->PH_out}},{{$inflow[8]->PH_out}},{{$inflow[7]->PH_out}},{{$inflow[6]->PH_out}},{{$inflow[5]->PH_out}},{{$inflow[4]->PH_out}},{{$inflow[3]->PH_out}},{{$inflow[2]->PH_out}},{{$inflow[1]->PH_out}},{{$inflow[0]->PH_out}}">PH_out</option>
                                        <option value="{{$inflow[12]->any1}},{{$inflow[11]->any1}},{{$inflow[10]->any1}},{{$inflow[9]->any1}},{{$inflow[8]->any1}},{{$inflow[7]->any1}},{{$inflow[6]->any1}},{{$inflow[5]->any1}},{{$inflow[4]->any1}},{{$inflow[3]->any1}},{{$inflow[2]->any1}},{{$inflow[1]->any1}},{{$inflow[0]->any1}}">any1</option>
                                        <option value="{{$inflow[12]->any2}},{{$inflow[11]->any2}},{{$inflow[10]->any2}},{{$inflow[9]->any2}},{{$inflow[8]->any2}},{{$inflow[7]->any2}},{{$inflow[6]->any2}},{{$inflow[5]->any2}},{{$inflow[4]->any2}},{{$inflow[3]->any2}},{{$inflow[2]->any2}},{{$inflow[1]->any2}},{{$inflow[0]->any2}}">any2</option>
                                        <option value="{{$inflow[12]->any3}},{{$inflow[11]->any3}},{{$inflow[10]->any3}},{{$inflow[9]->any3}},{{$inflow[8]->any3}},{{$inflow[7]->any3}},{{$inflow[6]->any3}},{{$inflow[5]->any3}},{{$inflow[4]->any3}},{{$inflow[3]->any3}},{{$inflow[2]->any3}},{{$inflow[1]->any3}},{{$inflow[0]->any3}}">any3</option>
                                        
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
                                            In_Flowrate 
                                        </div>
                                        <div class="col mb-2"  style="text-align: right;">
                                            {{$datas->In_Flowrate}}
                                        </div>
                                        <meter max=10000 min=0 value='{{$datas->In_Flowrate}}' high=7500 low=2500 optimum=5000></meter>
                                        <div class="col mb-2">
                                            Out_Flowrate 
                                        </div>
                                        <div class="col mb-2"  style="text-align: right;">
                                            {{$datas->Out_Flowrate}}
                                        </div>
                                        <meter max=10000 min=0 value='{{$datas->Out_Flowrate}}' high=7500 low=2500 optimum=5000></meter>
                                        <div class="col mb-2">
                                            In_Tabulizer 
                                        </div>
                                        <div class="col mb-2"  style="text-align: right;">
                                        {{$datas->In_Tabulizer}}       
                                        </div>
                                        <meter max=10000 min=0 value='{{$datas->In_Tabulizer}}' high=7500 low=2500 optimum=5000></meter>
                                        <div class="col mb-2">
                                            Out_Tabulizer
                                        </div>
                                        <div class="col mb-2"  style="text-align: right;">
                                            {{$datas->Out_Tabulizer}}
                                        </div>
                                        <meter max=10000 min=0 value='{{$datas->Out_Tabulizer}}' high=7500 low=2500 optimum=5000></meter>
                                        <div class="col mb-2">
                                            Turbidity 
                                        </div>
                                        <div class="col mb-2"  style="text-align: right;">
                                            {{$datas->Turbidity}}
                                        </div>
                                        <meter max=10000 min=0 value='{{$datas->Turbidity}}' high=7500 low=2500 optimum=5000></meter>
                                        <div class="col mb-2">
                                            NH3 
                                        </div>
                                        <div class="col mb-2"  style="text-align: right;">
                                            {{$datas->NH3}}
                                        </div>
                                        <meter max=10000 min=0 value='{{$datas->NH3}}' high=7500 low=2500 optimum=5000></meter>
                                        <div class="col mb-2">
                                            PH_out 
                                        </div>
                                        <div class="col mb-2"  style="text-align: right;">
                                            {{$datas->PH_out}}
                                        </div>
                                        <meter max=10000 min=0 value='{{$datas->PH_out}}' high=7500 low=2500 optimum=5000></meter>
                                        <div class="col mb-2">
                                            any1 
                                        </div>
                                        <div class="col mb-2"  style="text-align: right;">
                                        {{$datas->any1}}
                                        </div>
                                        <meter max=10000 min=0 value='{{$datas->any1}}' high=7500 low=2500 optimum=5000></meter>
                                        <div class="col mb-2">
                                            any2 
                                        </div>
                                        <div class="col mb-2"  style="text-align: right;">
                                        {{$datas->any2}}
                                        </div>
                                        <meter max=10000 min=0 value='{{$datas->any2}}' high=7500 low=2500 optimum=5000></meter>
                                        <div class="col mb-2">
                                            any3 
                                        </div>
                                        <div class="col mb-2"  style="text-align: right;">
                                        {{$datas->any3}}
                                        </div>
                                        <meter max=10000 min=0 value='{{$datas->any3}}' high=7500 low=2500 optimum=5000></meter>
                                        
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
                <th>Out_Flowrate</th>
                <th>In_Flowrate</th>
                <th>Out_Tabulizer</th>
                <th>In_Tabulizer</th>
                <th>Turbidity</th>
                <th>NH3</th>
                <th>PH_out</th>
                <th>any1</th>
                <th>any2</th>
                <th>any3</th>
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
      data: ['{{$inflow[12]->In_Flowrate}}', '{{$inflow[11]->In_Flowrate}}', '{{$inflow[10]->In_Flowrate}}', '{{$inflow[9]->In_Flowrate}}', '{{$inflow[8]->In_Flowrate}}', '{{$inflow[7]->In_Flowrate}}', '{{$inflow[6]->In_Flowrate}}', '{{$inflow[5]->In_Flowrate}}', '{{$inflow[4]->In_Flowrate}}', '{{$inflow[3]->In_Flowrate}}', '{{$inflow[2]->In_Flowrate}}', '{{$inflow[1]->In_Flowrate}}', '{{$inflow[0]->In_Flowrate}}'],
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
          max: 10000,
          maxTicksLimit: 5
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
        ajax: "{{ route('limbah.index') }}",
        columns: [{
                data: 'datetime',
                    type: 'num',
                    render: {
                        _: 'display',
                        sort: 'timestamp'
                   }
            },
            {data: 'Out_Flowrate', name: 'Out_Flowrate'},
            {data: 'In_Flowrate', name: 'In_Flowrate'},
            {data: 'Out_Tabulizer', name: 'Out_Flowrate'},
            {data: 'In_Tabulizer', name: 'In_Tabulizer'},
            {data: 'PH_out', name: 'PH_out'},
            {data: 'Turbidity', name: 'Turbidity'},
            {data: 'NH3', name: 'NH3'},
            {data: 'any1', name: 'any1'},
            {data: 'any2', name: 'any2'},
            {data: 'any3', name: 'any3'},
            
        ]
    });
    $("p").append('<p>I\'m a paragraph!</p>');
  });
  
  function leaveChange() {
        console.log(myLineChart.data.datasets[0].data)
        console.log(leave.value.split(','))
        myLineChart.data.datasets[0].data=leave.value.split(',')
        myLineChart.update()
            
}
</script>
    </body>
</html>