<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>

<!-- ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>

<script type="text/javascript">
	$(document).ready(function(){


         $('#dashTable').DataTable();
         
    	$("#create_employee").click(function(){
        $("#content").load("create_employee");
    	});

    	$("#browse_employee").click(function(){
        $("#content").load("browse_e");
    	});

        $("#create_department").click(function(){
        $("#content").load("create_department");
        });

        $("#browse_department").click(function(){
        $("#content").load("browse_d");
        });

        @if(session('datainit')==1)
        $("#successModal").modal('show');
        {{session(['datainit' => 0])}};
        @endif

        @if(session('link1')==1)
        $("#content").load("browse_e");
        {{session(['link1' => 0])}};
        @endif

        @if(session('link2')==1)
        $("#content").load("browse_d");
        {{session(['link2' => 0])}};
        @endif

		@if(session('create_e')==1)
        $("#content").load("create_employee");
        $("#successModal").modal('show');
        {{session(['create_e' => 0])}};
    	@endif

    	@if(session('edit_e')==1)
        $("#content").load("browse_e");
        $("#successModal").modal('show');
        {{session(['edit_e' => 0])}};
    	@endif

        @if(session('create_d')==1)
        $("#content").load("create_department");
        $("#successModal").modal('show');
        {{session(['create_d' => 0])}};
        @endif

        @if(session('edit_d')==1)
        $("#content").load("browse_d");
        $("#successModal").modal('show');
        {{session(['edit_d' => 0])}};
        @endif
	});

	function edit_e(id,name,age,gender,address,department,document,status) {
    
    $.post("/edit_eModal", {
        id:id,
        name:name,
        age:age,
        gender:gender,
        address:address,
        department:department,
        document:document,
        status:status,
        _token: $('meta[name="csrf-token"]').attr('content')},
        function(data,status){
            $('#modal-ajax').html(data)   
    	});
	}

	function delete_e(id,name) {
    
    $.post("/delete_eModal", {
        id:id,
        name:name,
        _token: $('meta[name="csrf-token"]').attr('content')},
        function(data,status){
            $('#modal-ajax').html(data)   
    	});
	}

    function edit_d(id,name,description) {
    
    $.post("/edit_dModal", {
        id:id,
        name:name,
        description:description,
        _token: $('meta[name="csrf-token"]').attr('content')},
        function(data,status){
            $('#modal-ajax').html(data)   
        });
    }

    function delete_d(id,name) {
    
    $.post("/delete_dModal", {
        id:id,
        name:name,
        _token: $('meta[name="csrf-token"]').attr('content')},
        function(data,status){
            $('#modal-ajax').html(data)   
        });
    }

    function down_f(down) {
    
    $.post("/down_f", {
        down:down,
        _token: $('meta[name="csrf-token"]').attr('content')},
        function(data,status){
            $('#modal-ajax').html(data)   
        });
    }
</script>

@if(session('home1')==1)
<!-- ChartJS -->
<script>
var data = {
  labels: ["Regular", "Provisionary", "Terminated"],
  datasets: [{
    label: "# of Employees (Status)",
    backgroundColor: "rgba(0,53,83,0.5)",
    borderColor: "rgba(0,53,83,0.5)",
    borderWidth: 1,
    hoverBackgroundColor: "rgba(202,213,219,0.4)",
    hoverBorderColor: "rgba(0,53,83,0.5)",
    data: [{{$regular}}, {{$provisionary}}, {{$terminated}}],
  }]
};

var options = {
  maintainAspectRatio: false,
  scales: {
    yAxes: [{
      stacked: true,
      gridLines: {
        display: true,
        color: "rgba(255,99,132,0.2)"
      }
    }],
    xAxes: [{
      gridLines: {
        display: false
      }
    }]
  }
};

Chart.Bar('chart', {
  options: options,
  data: data
});
{{session(['home1' => 0])}};
</script>
@endif