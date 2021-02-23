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
    <link rel="stylesheet" href="{{asset('assets/css/register-form.css')}}">
    
<style>
    input{width:80%; border-radius:8px;outline: none !important;
  box-shadow: none !important;}
  input[type=checkbox], input[type=radio] {
  vertical-align: middle;
  position: relative;
  bottom: 1px;
}
  label{
      color:black;font-weight:bold;letter-spacing: .07em;
  }
    </style>
    
    <title>Annonce détails</title>
</head>
<body>
   <div class="row padMar">
              <div class="input-group-prepend"></div>
                <div class="input-group-append"></div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-dark navbar-expand-md" id="app-navbar" >
    <div class="container-fluid" style="font-size:15px;">
        <a class="navbar-brand elm" id="elm" href="#" ><i  class="fa fa-home"></i> Accueil</a>
        <a class="navbar-brand" id="elm" href="#"><i class="fa fa-list"></i> Annonces</a>
        <a class="navbar-brand" id="elm" href="#">Importations</a>
        <a class="navbar-brand" id="elm" href="#"><i class="fa fa-archive"></i> Archives</a>
    <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
            id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#"><img style="width:1.5em;" src="{{ asset('img/fr.ico') }}"> Français</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"><img style="width:1.5em;" src="{{ asset('img/eng.ico') }}"> Anglais</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"><img  style="width:1.5em;" src="{{ asset('img/arb.ico') }}"> Arabe</a></li>
                  
                <li>         <!-- Authentication Links -->
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
        </div>
    </div>
    </nav> 
    
    <div class="container-fluid" style="margin-top: 150px;">
    
    <div class="row">
      <div class="col-10"  >
          <div id="card3" >
              
             
              <div class="row" style="margin:0">
                  <div class="col" style="margin-left:15px;margin-top:10px;">
                     <span style="font-weight: bold;"> N° Baosem : </span> <span style="color:#030784">{{$annonce->numBaosem}}</span>
                  </div>
                  <div class="col"style="margin-top:15px" >
                     <span style="font-weight: bold"> Date de parution : </span> <span style="color:#030784">{{$annonce->datePar}}</span>
                  </div>
                  <div class="col" style="margin-top:15px">
                       <span style="font-weight: bold"> N° référence : </span><span style="color:#030784">{{$annonce->numRef}}</span>
                    </div>
              </div>
               <br>
              <div class="row" style="margin:0">
                  
                   <div class="col" style="margin-left:10px">
                     <span style="font-weight: bold">  Type : </span><span style="color:#030784">{{$annonce->type_insertion->typeIns}}</span>
                   </div>
                   <div class="col" >
                      <span style="font-weight: bold"> Nature : </span><span style="color:#030784">{{$annonce->nature_insertion->natureIns}}</span>
                    </div>
                    <div class="col">
                     <span style="font-weight: bold"> Rubrique : </span> <span style="color:#030784">{{$annonce->rubrique->rubrique}}</span>
                  </div>
                  </div>
               <br>
               </div>
               <div id="card3" >
               <div class="row" style="background-color:#ffa41b;width:100%;margin:0;font-size:15px;font-weight:bold;text-align:center">
                   <div class="col" style=" display: table">
                   <p style="letter-spacing: .08em;vertical-align:middle;display: table-cell"> {{$annonce->objet}}</p>
                  </div>
               </div>
               <div class="row">
                   <div class="col" style="margin:15px;background-color:#FEF5E7">
                      <p style="margin-top:15px;">{{$annonce->text}}</p>
                      
                   </div>
               </div>
               <div class="row">
                   <div class="col">
               <button class="btn" id="bouton3"  data-toggle="modal" data-target="#modal" style="float:right">Retrait du cahier des charges  <i class="fa fa-angle-double-down"style="color:black;font-size:16px"></i></button>
                <button class="btn" id="bouton4"   style="float:left" OnClick="window.location.href='{{ url('/annonce/' . $id=$annonce->numInsertion . '/print') }}'" >Imprimer <i class="fa fa-print" style="color:black;font-size:14px"></i></button>
                
         
            <div class="modal fade centro" role="dialog" tabindex="-1" id="modal" >
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title txtsGrises" style="letter-spacing: .05em;"><b>Retrait du cahier des charges</b></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                        <div class="modal-body">
                            <h2 class="titulos">Souscription : </h2>
                            <form>
                               <div class="form-group row" >
                                 <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Dénomination</label>
                                   <div class="col-8">
                                   {{$abonne->name}}
      
                                  </div>
                               </div>
                               <div class="form-group row">
                                 <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Personne à contacter</label>
                                   <div class="col-sm-8">
                                   {{$abonne->contact}}
      
                                  </div>
                               </div>
                              
                               <div class="form-group row">
                                 <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">N° id Fiscal ou equiv</label>
                                   <div class="col-sm-8">
                                   {{$abonne->identite}}
                                    
                                  </div>
                               </div>
                               <div class="form-group row">
                                 <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">N article</label>
                                   <div class="col-sm-8">
                                   {{$annonce->numBaosem}}
      
                                  </div>
                               </div>
                               <div class="form-group row">
                                 <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Adresse de facturation</label>
                                   <div class="col-sm-8">
                                    
                                   {{$abonne->adresse}}
                                  </div>
                               </div>
                               <div class="form-group row">
                                 <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Email (de contact)</label>
                                   <div class="col-sm-8">
                                   {{$abonne->email_contact}}
      
                                  </div>
                               </div>
                               <div class="form-group row">
                                 <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Secteur d'activité principale</label>
                                   <div class="col-sm-8">
                                     
                                   {{$abonne->code_rubrique}}
                                  </div>
                               </div>
                              
                               <div class="form-group row">
                                 <label for="colFormLabelSm"  class="col-sm-2 col-form-label col-form-label-sm">Tel</label>
                                   <div class="col-sm-4" >
                                   {{$abonne->tel1}}
      
                                  </div>
                                  <label for="colFormLabelSm"  class="col-sm-2 col-form-label col-form-label-sm">Fax</label>
                                   <div class="col-sm-4" >
                                   {{$abonne->tel2}}
      
                                  </div>
                               </div>
                               <div class="form-group row">
                                 <label for="colFormLabelSm"  class="col-sm-2 col-form-label col-form-label-sm">Mobile</label>
                                   <div class="col-sm-4" >
                                   {{$abonne->mobile1}}
      
                                  </div>
                                  <label for="colFormLabelSm"  class="col-sm-2 col-form-label col-form-label-sm">Site Web</label>
                                   <div class="col-sm-4" >
                                   {{$abonne->site}}
      
                                  </div>
                               </div>
                               <div class="form-group row">
                                 <label for="colFormLabelSm"  class="col-sm-2 col-form-label col-form-label-sm">ville</label>
                                   <div class="col-sm-4" >
                                   {{$abonne->ville}}
      
                                  </div>
                                  <label for="colFormLabelSm"  class="col-sm-2 col-form-label col-form-label-sm">pays</label>
                                   <div class="col-sm-4" >
                                   {{$abonne->pays}}
      
                                  </div>
                               </div>
                            
                               <div class="form-group row">
                                 <label for="colFormLabelSm"  class="col-sm-2 col-form-label col-form-label-sm">N° BAOSEM</label>
                                   <div class="col-sm-4" >
                                   {{$annonce->numBaosem}}
      
                                  </div>
                                  <label for="colFormLabelSm"  class="col-sm-2 col-form-label col-form-label-sm">Date de parution</label>
                                   <div class="col-sm-4" >
                                    
                                   {{$annonce->datePar}}
                                  </div>
                               </div>
                               
                               <div class="form-group row">
                                 <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">objet de l'offre</label>
                                   <div class="col-sm-8">
                                    
                                      {{$annonce->objet}}
                                  </div>
                               </div>
                               
                              
                              
 
                            </form>
                            
                           
                        </div>
                        <div class="modal-footer"> <button name="bouton"  class="btn" id="bouton" value="envoyer" style="float:left"  > validation</button>
                        
                        </div>
                    </div>
                </div>
            </div>
                </div>
              </div><br>
            </div>
       </div>
      <div class="col-2">
         pub
      
      </div>
    </div>
    <script src="{{asset('assets/js/bs-init.js')}}"></script>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
   <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('assets/js/javascript.js')}}"></script>
</body>
</html>
    