

<!DOCTYPE html>
<html lang="en">
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
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet"/>
    
    <title>Accueil</title>
    
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
        <a class="navbar-brand" id="elm" href="#"><i class="fa fa-industry"></i> Présentation</a>
        <a class="navbar-brand" id="elm" href="\index"><i class="fa fa-comments"></i> Contact</a>
        <a class="navbar-brand" id="elm" href="#"><i class="fa fa-map-marked"></i> localisation</a>
    <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
            id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
            <li> <a href="{{ route('connexion')}}" class="btn btn-outline-primary" >
                                    {{ __("Se connecter en tant qu'admin") }}
                                </a>
            </ul>
        </div>
    </div>
    </nav>

    <div class="container-fluid" style="margin-top: 100px;">
    <div class="row"  id="card2" style="background:url({{asset('img/journaux.jpg')}})   ;
    background-size: cover ;">
     <div class="col"><div class="row" style=" background-color: rgba(110, 110, 110, 0.5)">
     <div style="width:70% ; " >
        <div style="margin:10px 10px 10px 25px;color:#000000;font-weight: bold;" >
       <br>
       la société BAOSEM est spécialisée dans l'édition et la publication du bulletin des appels d'offres du secteur de l'énergie
       incluant les publications d'appels à conccurence : <br>
       <div><i class="fa fa-circle "  id="puce2"></i> Appels d'offre des sociétés du groupe SONATRACH </div>
       <div><i class="fa fa-circle "  id="puce2"></i> Appels d'offre des sociétés du groupe SONELGAZ</div>
       <div> <i class="fa fa-circle "  id="puce2"></i> Appels d'offre d'autres unités du secteur de l'ENERGIE</div>
       
        Lebulletin des appels d'offres du secteur de l'Energie BAOSEM est édité à raison de 5 numéros par quinzaine 
        et disponible en version imprimée er éléctronique, offre la possibilité de consulter plus de 400offres d'affaires par semaine avec plusieurs formules de vente et d'abonnement adaptées à vos attentes :
            <div><i class="fa fa-circle "  id="puce2"></i> Vente au kiosuqe (voir nos points de vente) </div>  
            <div><i class="fa fa-circle "  id="puce2"></i> Abonnement imprimé  </div>   
            <div><i class="fa fa-circle "  id="puce2"></i> Abonnement internet </div>
        </div> 
      </div>

      <div  style="width:27%;">
      <div class="login-form">
      <form method="POST" action="{{ route('login')}}">
                        @csrf
		<div class="avatar">
            <img src="\img\user3.png" style="width:100%;height:100%">2
            
		</div>
        <h2 class="text-center">Connexion</h2>   
        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                            <div class="col-md-8 offset-md-8">
                                <button type="submit" class="btn btn-outline-primary" >
                                    {{ __('Login') }}
                                </button>

                                
                            </div>
                        
        </form>
      </div>
      </div>
        </div></div>
        </div><br>
    <div class="row"  >
         <div class="card" style="width:23%; margin-right:10px;margin-left:30px;" >
          <h5 style="margin:12px 8px 0 8px;text-align:center;color:#0B0B61; letter-spacing: .02em;font-weight:bold">Retrait  du Cahier des charges </h5>
           <hr> <div style="margin:0px 8px 8px 8px;"> Le retrait du cahier des charges s'efffectue moyennant le paiment d'un montant forfaitaire non remboursable.</div><br><br>
           
           <button name="bouton"  class="btn" id="bouton" value="envoyer" style="font-weight:normal;display: inline-block;width:250px;margin-left:30px" >voir grille tarifaire</button>
           <button name="bouton"  class="btn" id="bouton" value="envoyer" style="font-weight:normal;display: inline-block;width:250px;margin-left:30px;margin-top:0" >Retrait d'un cahier des charges</button>
        </div>
        <div class="card" style="width:23%; margin-right:10px">
        <h5 style="margin:12px 8px 0 8px;text-align:center;color:#0B0B61; letter-spacing: .02em;font-weight:bold">Tarifs Abonnement </h5>
          <hr>  <div style="margin:0px 8px 8px 8px;">Que vous soyez lecteur régulier ou occasionnel, le Baosem a conçu plusieurs formules d'abonnement adaptées à votre style de vie. A vous de choisir la formule qui vous convient le mieux !</div>
          <button name="bouton"  class="btn" id="bouton" value="envoyer" style="font-weight:normal;display: inline-block;width:250px;margin-left:30px;" >voir grille abonnement internet</button>
           <button name="bouton"  class="btn" id="bouton" value="envoyer" style="font-weight:normal;display: inline-block;width:250px;margin-left:30px;margin-top:0" >voir grille abonnnement imprimé</button>
           
        </div>
        <div class="card"style="width:23%; margin-right:10px">
        <h5 style="margin:12px 8px 0 8px;text-align:center;color:#0B0B61; letter-spacing: .02em;font-weight:bold">Nos Points de vente </h5>
        <hr>  <div style="margin:0px 8px 8px 8px;"> Centre, Est, Ouest et Sud, nous disposons de différents points de vente au quatres coins du pays. </div><br><br>
        <div class="row"><button name="bouton"  class="btn" id="bouton" value="envoyer" style="font-weight:normal;margin-left:40px;width:120px;" >Centre</button>
           <button name="bouton"  class="btn" id="bouton" value="envoyer" style="font-weight:normal;margin-left:10px;width:120px;" >Est</button></div>
           <div class="row"><button name="bouton"  class="btn" id="bouton" value="envoyer" style="font-weight:normal;margin-left:40px;width:120px;margin-top:0" >Ouest</button>
           <button name="bouton"  class="btn" id="bouton" value="envoyer" style="font-weight:normal;margin-left:10px;width:120px;margin-top:0" >Sud</button></div>
      
        </div>
        <div class="card" style="width:23%; margin-right:10px">
        <h5 style="margin:12px 8px 0 8px;text-align:center;text-align:center; color:#0B0B61;letter-spacing: .02em;font-weight:bold">Abonnement Test</h5>
        <hr>  <div style="margin:0px 8px 8px 8px;"> Inscrivez vous et bénificiez d'un mois d'abonnement Test gratuit !</div><br><br><br>
        <button name="bouton"  class="btn" id="bouton" value="envoyer" style="font-weight:normal;display: inline-block;margin-left:32px;width:250px;" >Inscrivez vous !</button>
        </div>
        <br>
    </div><br>
    </div>
    <div class="row" id="card2"  style="margin:10px 15% 10px 15%;background-color:#FAFAFA;width:70%">
        <div class="col">
           <center><h4 style="margin-top:15px;letter-spacing: .05em">Inscription</h4></center>
        
            <hr >
            <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emailAbo" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="emailAbo" type="email" class="form-control @error('emailAbo') is-invalid @enderror" name="emailAbo" value="{{ old('emailAbo') }}" required autocomplete="emailAbo" autofocus>

                                @error('emailAbo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="periode" class="col-md-4 col-form-label text-md-right">{{ __('Periode dabonnement') }}</label>

                            <div class="col-md-6">
                                <input id="periode" type="text" class="form-control @error('periode') is-invalid @enderror" name="periode" value="{{ old('periode') }}" required autocomplete="periode" autofocus>

                                @error('periode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dateDeb" class="col-md-4 col-form-label text-md-right">{{ __('Date début dabonnement') }}</label>

                            <div class="col-md-6">
                                <input id="dateDeb" type="text" class="form-control @error('dateDeb') is-invalid @enderror" name="dateDeb" value="{{ old('dateDeb') }}" required autocomplete="dateDeb" autofocus>

                                @error('dateDeb')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
            <label  class="col-md-4 col-form-label text-md-right">Tel<font style="color:red">*</font></label>
            <div class="col-md-6">
                <input name="tel1" type="text"  class="form-control @error('tel1') is-invalid @enderror"   value="{{ old('tel1') }}" required autocomplete="tel1" autofocus>
                @error('tel1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-4 col-form-label text-md-right">Ville<font style="color:red">*</font></label>
            <div class="col-md-6">
                <input name="ville" type="text"  class="form-control @error('ville') is-invalid @enderror"  autocomplete="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>
                @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-md-4 col-form-label text-md-right">Pays<font style="color:red">*</font></label>
            <div class="col-md-6">
               <input name="pays" type="text"  class="form-control @error('pays') is-invalid @enderror"  value="{{ old('pays') }}" required autocomplete="pays" autofocus>
               @error('pays')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
        </div>
        <div class="form-group row">'+
            <label  class="col-md-4 col-form-label text-md-right">Site web</label>
            <div class="col-md-6">
                <input name="site" type="text" class="form-control"   value="{{ old('site') }}" autocomplete="site" autofocus>

            </div>
        </div>
            
           
            
        
        
           
       
       
       
       

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
   
    
                      
                      
                      
    
        
      
        
                      
                      
   
    
                        
                        
  </div>
    </div>
  


        

</body>
</html>
 

