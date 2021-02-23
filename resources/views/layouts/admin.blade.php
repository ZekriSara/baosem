<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet"  href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" >
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700') }}" rel="stylesheet">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="">

  <!-- Navbar -->
  <nav class="navbar navbar-dark navbar-expand-md">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin" class="nav-link">Home</a>
      </li>
    
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
         
          
     
    <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
            id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#"><img style="width:1.5em;" src="{{ asset('img/fr.ico') }}"> Français</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"><img style="width:1.5em;" src="{{ asset('img/eng.ico') }}"> Anglais</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"><img  style="width:1.5em;" src="{{ asset('img/arb.ico') }}"> Arabe</a></li>
                              <!-- Authentication Links -->
                        @guest

                        <!-- LIEN VERS PAGE DE CONNEXION -->
                     
                                <a class="nav-link" href="/login">{{ __('Login') }}</a>
                            

                        <!-- LIEN VERS PAGE D'INSCRIPTION -->    
                            @if (Route::has('register'))
                               
                                    <a class="nav-link" href='/register'>{{ __('Register') }}</a>
                                
                            @endif
                        @else
                        
                        

                            <div class="nav-item dropdown">
                                
                                <div class="dropdown">
                             <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             {{ Auth::user()->name }}</button>
                               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                               <a class="dropdown-item" href="#">Settings </a>
                              <a class="dropdown-item" href="/logout">Déconnexion</a>
                               </div>
                                </div>
                                </div>
                            </div>
                        @endguest
    </ul>
  </nav>
  <!-- /.navbar -->

  
  <!-- Content Wrapper. Contains page content -->
  <div class="" >
  @yield('content')
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>

  <!-- 
   <script src="{{asset('assets/js/javascript.js')}}"></script>
   <script src="{{asset('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')}}"></script>
   
   <script type="text/javascript">
       
        $(document).on("click",("#moreAnnonce,#moreArchive,#moreUser,#moreDA"),function(e){
         
          $nat_id=this.id;
          e.preventDefault();
          $.ajax({
            type : 'GET',
            url : "{{route('Admin.action')}}",
            dataType:'json',
            data : {
                    
                    'nat_id':$nat_id,

            },
            success:function(data){
              console.log(data);
              $('thead').html(data.thead);
              $('tbody').html(data.tbody);
             
            },
            error:function(){
              console.log(data);
              alert();
            }

          });
          
          
        })     ;
</script>
-->

</body>
</html>
