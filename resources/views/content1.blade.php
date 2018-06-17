@extends('design.blueprint')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Employee Status</h4>
                                <p class="category">Total Employees : {{$total}}</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Regular
                                        <i class="fa fa-circle text-warning"></i> Provisional
                                        <i class="fa fa-circle text-danger"></i> Terminated
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">
                            Employee per Department
                        </h4>
                        <div class="content">
                            <table id="dashTable" class="table table-striped table-bordered dt-responsive nowrap back1" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th data-priority="1" scope="col">Name</th>
                                    <th scope="col">Employee Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i = 0; $i < sizeof($dept_list);$i++)
                                <tr>
                                    <td>{{$dept_list[$i]->id}}</td>
                                    <td>{{$dept_list[$i]->name}}</td>
                                    <td>{{$ed_count[$i]}}</td>
                                </tr>
                                @endfor
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                
            
        </div>
            
    </div>

</div>

<script type="text/javascript">
   var data = {
      series: [{{$regular}}, {{$provisionary}}, {{$terminated}}],
    };

    var sum = function(a, b) { return a + b };

    new Chartist.Pie('.ct-chart',data);

    // new Chartist.Pie('.ct-chart', data, {
    //   labelInterpolationFnc: function(value) {
    //     return Math.round(value / data.series.reduce(sum) * 100) + '%';
    //   }
    // });

    setTimeout(function() {
      document.querySelector('.ct-chart').__chartist__.update();
    }, 2000);
</script>

@endsection

        

