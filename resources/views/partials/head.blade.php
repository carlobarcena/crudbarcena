<meta charset="utf-8" />
<link rel="icon" type="image/png" href="img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>Admin Dashboard Module</title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Bootstrap core CSS     -->
<link href="css/bootstrap.min.css" rel="stylesheet" />

<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->

<!-- Animation library for notifications   -->
<link href="css/animate.min.css" rel="stylesheet"/>

<!--  Light Bootstrap Table core CSS    -->
<link href="css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

<!--     Fonts and icons     -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<!-- My-Login -->
<link rel="stylesheet" type="text/css" href="css/my-login.css">

<!-- Chartist -->
<link href="css/chartist.css" rel="stylesheet" />
<!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css"> -->
<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

<!-- Datatable -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">


<style type="text/css">
    /*=========LOADER=============*/
    #loader {
    /* Uncomment this to make it run! */
      /*animation: loader 5s linear infinite; */
      position: absolute;
      top: calc(50% - 20px);
      left: calc(50% - 20px);
    }
    @keyframes loader {
      0% { left: -100px }
      100% { left: 110%; }
    }
    #box {
      width: 50px;
      height: 50px;
      background: #fff;
      animation: animate .5s linear infinite;
      position: absolute;
      top: 0;
      left: 0;
      border-radius: 3px;
    }
    @keyframes animate {
      17% { border-bottom-right-radius: 3px; }
      25% { transform: translateY(9px) rotate(22.5deg); }
      50% {
        transform: translateY(18px) scale(1,.9) rotate(45deg) ;
        border-bottom-right-radius: 40px;
      }
      75% { transform: translateY(9px) rotate(67.5deg); }
      100% { transform: translateY(0) rotate(90deg); }
    } 
    #shadow { 
      width: 50px;
      height: 5px;
      background: #000;
      opacity: 0.1;
      position: absolute;
      top: 59px;
      left: 0;
      border-radius: 50%;
      animation: shadow .5s linear infinite;
    }
    @keyframes shadow {
      50% {
        transform: scale(1.2,1);
      }
    }


    .loader-background {
      background: #6997DB; 
      overflow: hidden;
    }

    #loader-title {
      position: absolute;
      bottom: 20px;
      left: 20px;
      margin: 0;
      font-weight: 200;
      opacity: .5;
      font-family: sans-serif;
      color: #fff;
      font-size: 1.2em;
    }

    /* Add animation to "page content" */
  .animate-bottom {
    position: relative;
    -webkit-animation-name: animatebottom;
    -webkit-animation-duration: 1s;
    animation-name: animatebottom;
    animation-duration: 1s
  }

  @-webkit-keyframes animatebottom {
    from { bottom:-100px; opacity:0 } 
    to { bottom:0px; opacity:1 }
  }

  @keyframes animatebottom { 
    from{ bottom:-100px; opacity:0 } 
    to{ bottom:0; opacity:1 }
  }
        
/*=========END OF LOADER=============*/
.nodisplay{
    display: none;
}
.ct-label{ 
  font-size: 1em;
  fill: rgba(255, 255, 255, 1);
}
.ct-series-a .ct-slice-pie {    
fill: #1DC7EA;
}

.ct-series-b .ct-slice-pie {
  fill: #FF9500;
 
  }

.ct-series-c .ct-slice-pie {
  fill: #FF4A55;

  }

.center{
  text-align: center;
}
tbody i{
    cursor: pointer;
  }

  @media only screen and (max-width: 460px) {
    div.dataTables_wrapper div.dataTables_filter input {
      width: 100px;
    }
  }
  th{
    background-color: #6997DB;
    color: white !important;
  }
  .modal-header{
    background-color: #6997DB;
    color: white !important;
  }
</style>