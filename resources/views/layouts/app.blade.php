<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gradient-navbar-1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gradient-navbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Navigation-Dark-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Search-Input-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Hover-Button-1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/MUSA_no-more-tables.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <title>index</title>
    
</head>

<body>
    <div class="row padMar">
        <div class="col padMar">
            <div class="input-group">
                <div class="input-group-prepend"></div>
                <div class="input-group-append"></div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-dark navbar-expand-md" id="app-navbar" >
    <div class="container-fluid" style="font-size:15px;">
        <a class="navbar-brand elm" id="elm" href="#" ><i  class="fa fa-home"></i> Accueil</a>
        @yield("LeftLinks")
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
            id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#"><img style="width:1.5em;" src="{{ asset('img/fr.ico') }}"> Français</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"><img style="width:1.5em;" src="{{ asset('img/eng.ico') }}"> Anglais</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"><img  style="width:1.5em;" src="{{ asset('img/arb.ico') }}"> Arabe</a></li>
           <!-- Authentication Links -->
       @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </ul>
        </div>
    </div>
       
    </nav>
                     
              

        <main class="py-4">
            @yield('content')
        </main>

</div>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
   <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('assets/js/javascript.js')}}"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>        
   <script type="text/javascript">
       
       
           $(document).on("click",("#abtn1,#abtn2,#bouton"),function(e){
             
              $nat_id=this.id;
              e.preventDefault();
              $.ajax({
                type : 'GET',
                url : "{{route('Rech.action')}}",
                dataType:'json',
                data : {
                        'Num_baosem':$('#Num_baosem').val(),
                        'annonceur':$('#annonceur').val(),
                        'nature':$('#nature').val(),
                        'type':$('#type').val(),
                        'Num_placard':$('#Num_placard').val(),
                        'nom_rubrique':$('#nom_rubrique').val(),
                        'mot_objet':$('#mot_objet').val(),
                        'mot_placard':$('#mot_placard').val(),
                        'nat_id':$nat_id,

                },
                success:function(data){
                  console.log(data);
                  $('tbody').html(data.tbody);
                  $(".fa-circle").prop('id',data.puce_id);
                  $('th').prop('class',data.row_class);
                },
                error:function(){
                  console.log(data);
                  alert();
                }

              });
              
              
            })     ;
               
             
    </script>
</body>

</html>
   