<!--   Core JS Files   -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>


<!--  Notifications Plugin    -->
<script src="js/bootstrap-notify.js"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- My-Login -->
<script src="js/my-login.js"></script>

<!-- DataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>



<script type="text/javascript">
    $(document).ready(function(){
        
        $( "body" ).addClass( "loader-background" ).delay(1500).queue(function(){
            $(this).removeClass("loader-background");
            $("#afterload").removeClass("nodisplay");
            $("#loader").addClass("nodisplay");
            $("#loader-title").addClass("nodisplay");
            $(this).dequeue();
        });;

        $('#dashTable').DataTable();
        $('[data-toggle="popover"]').popover(); 

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

        @if(session('link1')==1)
        $("#content").load("browse_e");
        {{session(['link1' => 0])}};
        @endif

        @if(session('link2')==1)
        $("#content").load("browse_d");
        {{session(['link2' => 0])}};
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

