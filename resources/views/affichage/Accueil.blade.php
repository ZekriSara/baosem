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
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#"><img style="width:1.5em;" src="{{ asset('img/fr.ico') }}"> Français</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"><img style="width:1.5em;" src="{{ asset('img/eng.ico') }}"> Anglais</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"><img  style="width:1.5em;" src="{{ asset('img/arb.ico') }}"> Arabe</a></li>
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
          <form >
		<div class="avatar">
            <img src="\img\user3.png" style="width:100%;height:100%">
            
		</div>
        <h2 class="text-center">Connexion</h2>   
        <div >
        	<input type="text" class="form-control" style="border-radius:5px;" name="username" placeholder="Username" required="required">
        </div><br>
		<div >
            <input type="password" class="form-control" style="border-radius:5px;" name="password" placeholder="Password" required="required">
        </div>  <br>      
        <div class="row">
           <span style="margin-top:20px;margin-left:20px"> <input type="checkbox" style="display: inline-block;">  mot de passe oublié </span>
            <button name="bouton"  class="btn" id="bouton" value="envoyer" style="font-weight:normal;display: inline-block;margin-left:40px" >Se connecter</button>
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
                    <form method="POST" >
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Version d'abonnement</label>

                            <div class="col-md-6">
                               
                                <input id="essai" type="radio"  value="internet" name="abon">      <label for="essai" >  Version internet</label>&nbsp;&nbsp;&nbsp;&nbsp; 
                               <input id="essai" type="radio" value="papier" name="abon">       <label for="essai" >Version papier</label> 
                               
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Abonnement</label>

                            <div class="col-md-6">
                               
                                <input id="essai" type="radio" name="radioSecteur">      <label for="essai" >  nouveau</label>&nbsp;&nbsp;&nbsp;&nbsp; 
                               <input id="essai" type="radio" name="radioSecteur">       <label for="essai" >renouvelement</label> 
                               
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Client</label>

                            <div class="col-md-6">
                               
                                <input id="entreprise" type="radio" name="type" value="entreprise" >      <label for="essai" >  Entreprise</label>&nbsp;&nbsp;&nbsp;&nbsp; 
                               <input id="autre" type="radio" name="type" value="autre">       <label for="essai" >Autre</label> 
                               
                            </div>
                        </div>
                        <hr>
                       
                      <div id="form1"></div>
    
                        <div id="form2"></div>
                        
                           <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">Conditions générales</label>

                            <div class="col-md-6">
                                <TextArea class="form-control"   autofocus> conditions générales</TextArea><br>
                               
                                <input id="essai" type="radio" name="langue" > <label for="essai" >Lu et approuvé</label>
                            </div>
                            </div>

                        <div class="form-group row ">
                            <div class="">
                            <div class="row"><button name="bouton"  class="btn" id="bouton" value="envoyer" style="font-weight:normal;margin-left:200px;width:120px;margin-top:0" >Enregistrer</button>
                            <button name="bouton" type="reset" class="btn" id="bouton" value="envoyer" style="font-weight:normal;margin-left:10px;width:120px;margin-top:0" >Annuler</button>
                            <button name="bouton"  class="btn" id="bouton" value="envoyer" style="font-weight:normal;margin-left:10px;width:120px;margin-top:0" >Imprimer</button>
                            <button name="bouton"  class="btn" id="bouton" value="envoyer" style="font-weight:normal;margin-left:10px;width:120px;margin-top:0" >Télécharger</button></div>
                            </div>
                        </div>

                

                        

                        
                    </form>
                </div>
    </div>
    </div>



    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
   <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('assets/js/javascript.js')}}"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>        
   <script type="text/javascript">
       
       
          // $(document).on("checked",("#entreprise"),function(e){
            $("input[type=radio][name=type]").change(function() {
                 if($(this).val() == 'entreprise') {
                    
                 
           $data='<div class="form-group row"> '+
           '<label for="name" class="col-md-4 col-form-label text-md-right">Nom ou Raison sociale<font style="color:red">*</font></label>'+

           ' <div class="col-md-6">'+
                '<input id="name"  type="text" class="form-control" name="name" value="" required autocomplete="name" autofocus>'+

            '</div>'+
           '</div>'+
           '<div class="form-group row">'+
            '<label for="contact" class="col-md-4 col-form-label text-md-right">Personne à contacter</label>'+

            '<div class="col-md-6">'+
                '<input id="contact" type="text" class="form-control " name="name" value=""  autocomplete="name" autofocus>'+

                
            '</div>'+

        '</div>'+
        '<div class="form-group row">'+
            '<label for="" class="col-md-4 col-form-label text-md-right">N°id. Fiscal ou équiv.<font style="color:red">*</font></label>'+

            '<div class="col-md-6">'+
                '<input id="" type="text" class="form-control"  autocomplete="name" autofocus>'+

                
            '</div>'+
        '</div>'+
        
        '<div class="form-group row">'+
            '<label for="" class="col-md-4 col-form-label text-md-right">N’article d’imposition<font style="color:red">*</font></label>'+

            '<div class="col-md-6">'+
                '<input id="" type="text" class="form-control"  autocomplete="name" autofocus>'+

                
            '</div>'+
        '</div>'+
        '<div class="form-group row">'+
            '<label for="" class="col-md-4 col-form-label text-md-right">Adresse de facturation<font style="color:red">*</font></label>'+

            '<div class="col-md-6">'+
                '<input id="" type="text" class="form-control"  autocomplete="name" autofocus>'+

               
            '</div>'+
        '</div>'+
        '<div class="form-group row">'+
            '<label for="email" class="col-md-4 col-form-label text-md-right">Email (user)<font style="color:red">*</font></label>'+

            '<div class="col-md-6">'+
                '<input id="email" type="email" class="form-control " value="" required autocomplete="email">'+

               
            '</div>'+
       '</div>'+
        '<div class="form-group row">'+
            '<label for="email" class="col-md-4 col-form-label text-md-right">Email (de contact)</label>'+

            '<div class="col-md-6">'+
                '<input id="email" type="email" class="form-control" autocomplete="email">'+

               
            '</div>'+
        '</div>'+
   
        '<div class="form-group row">'+
            '<label for="" class="col-md-4 col-form-label text-md-right">Période d\'abonnement<font style="color:red">*</font></label>'+

            '<div class="col-md-6">'+
                '<input id="" type="text" class="form-control"  autocomplete="name" autofocus>'+

                
            '</div>'+
        '</div>'+
        '<div class="form-group row">'+
            '<label for="" class="col-md-4 col-form-label text-md-right">Date début d\'abonnement<font style="color:red">*</font></label>'+

            '<div class="col-md-6">'+
                '<input id="" type="text" class="form-control"  autocomplete="name" autofocus>'+

                
            '</div>'+
       '</div>'+
        '<div class="form-group row">'+
            '<label  class="col-md-4 col-form-label text-md-right">Tel<font style="color:red">*</font></label>'+

            '<div class="col-md-6">'+
                '<input id="" type="text" class="form-control"   autofocus>'+
                '<input id="" type="text" class="form-control"   autofocus>'+
             
                
            '</div>'+
            
        '</div>'+
        '<div class="form-group row">'+
            '<label  class="col-md-4 col-form-label text-md-right">Mobile<font style="color:red">*</font></label>'+

            '<div class="col-md-6">'+
                '<input id="" type="text" class="form-control"   autofocus>'+
                '<input id="" type="text" class="form-control"   autofocus>'+
             
                
            '</div>'+
            
        '</div>'+
       '<div class="form-group row">'+
            '<label for="" class="col-md-4 col-form-label text-md-right">Ville<font style="color:red">*</font></label>'+

            '<div class="col-md-6">'+
                '<input id="" type="text" class="form-control"  autocomplete="name" autofocus>'+

                
            '</div>'+
        '</div>'+
        '<div class="form-group row">'+
            '<label  class="col-md-4 col-form-label text-md-right">Pays<font style="color:red">*</font></label>'+

            '<div class="col-md-6">'+
               '<input id="" type="text" class="form-control"   autofocus>'+
               
                
           '</div>'+
            
        '</div>'+
        '<div class="form-group row">'+
            '<label  class="col-md-4 col-form-label text-md-right">Site web</label>'+

            '<div class="col-md-6">'+
                '<input id="" type="text" class="form-control"   autofocus>'+
               
                
            '</div>'+
            '</div>'+
            '<div class="form-group row">'+
            '<label  class="col-md-4 col-form-label text-md-right">Secteur d\'activité<font style="color:red">*</font></label>'+

            '<div class="col-md-6">'+
           
            '<select name="nom_rubrique" id="nom_rubrique">'+
                     '<option ></option>'+
                     '<option >Architecture et Urbanisme</option>'+
                     '<option >Bâtiment et Génie civil</option>'+
                     '<option >Equipement industriel, Outillage et Pièce détachée</option>'+ 
                     '<option >Informatique et Bureautique</option>'+ 
                     '<option >Fourniture et service </option>'+ 
                     '<option >Transport</option>'+ 
                     '<option >Assurance et Banque</option>'+ 
                     '<option >Médical et Paramédical</option>'+ 
                   '</select>'+

             
            '</div>'+
            
        '</div>'+
            
        
        '<div class="form-group row">'+
            '<label  class="col-md-4 col-form-label text-md-right">Mode de payement <font style="color:red">*</font></label>'+

            '<div class="col-md-6">'+
            '<input id="essai" type="radio" name="radioPayement" > <label for="essai" >Chèque</label> &nbsp;&nbsp;&nbsp;'+
           '<input id="essai" type="radio" name="radioPayement" > <label for="essai" >Virement bancaire</label> '+
        
        
                
            
            '</div>'+
        '</div>'+
       '<div class="form-group row">'+
            '<label  class="col-md-4 col-form-label text-md-right">Reçu de paymenet <font style="color:red">*</font></label>'+

            '<div class="col-md-5" id="fichier" style="width:50px;">'+
            '<input style="margin-left:-13px;" type="file" name="fichier" />'+
            
        
                
            
            '</div>'+
        '</div>'+
            '<div class="form-group row">'+
            '<label  class="col-md-4 col-form-label text-md-right">Message</label>'+

            '<div class="col-md-6">'+
                '<TextArea class="form-control"   autofocus> </TextArea>'+
               
                
            '</div>'+
            '</div>';
       
                  $('#form1').html($data);
            
               

            
              
              
            }
            if($(this).val() == 'autre'){

                $data='<div class="form-group row">'+
                            '<label for="name" class="col-md-4 col-form-label text-md-right">Nom<font style="color:red">*</font></label>'+

                            '<div class="col-md-6">'+
                                '<input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name" autofocus>'+

                               
                            '</div>'+
                        '</div>'+

                       
                        '<div class="form-group row">'+
                            '<label for="" class="col-md-4 col-form-label text-md-right">N° carte d’identité national ou carte d’artisan<font style="color:red">*</font></label>'+

                            '<div class="col-md-6">'+
                                '<input id="" type="text" class="form-control"  autocomplete="name" autofocus>'+

                                
                            '</div>'+
                        '</div>'+
                        
                        '<div class="form-group row">'+
                            '<label for="" class="col-md-4 col-form-label text-md-right">Adresse de facturation<font style="color:red">*</font></label>'+

                            '<div class="col-md-6">'+
                                '<input id="" type="text" class="form-control"  autocomplete="name" autofocus>'+

                                
                            '</div>'+
                        '</div>'+
                        
                        '<div class="form-group row">'+
                            '<label for="email" class="col-md-4 col-form-label text-md-right">Email (user)<font style="color:red">*</font></label>'+

                            '<div class="col-md-6">'+
                                '<input id="email" type="email" class="form-control" name="email" value="" required autocomplete="email">'+

                                
                            '</div>'+
                        '</div>'+
                        
         
                        '<div class="form-group row">'+
                            '<label for="" class="col-md-4 col-form-label text-md-right">Période d\'abonnement<font style="color:red">*</font></label>'+

                            '<div class="col-md-6">'+
                                '<input id="" type="text" class="form-control"  autocomplete="name" autofocus>'+

                                
                            '</div>'+
                        '</div>'+
                        '<div class="form-group row">'+
                            '<label for="" class="col-md-4 col-form-label text-md-right">Date début d\'abonnement<font style="color:red">*</font></label>'+

                            '<div class="col-md-6">'+
                                '<input id="" type="text" class="form-control"  autocomplete="name" autofocus>'+

                                
                            '</div>'+
                        '</div>'+
                        '<div class="form-group row">'+
                            '<label  class="col-md-4 col-form-label text-md-right">Tel<font style="color:red">*</font></label>'+

                            '<div class="col-md-6">'+
                                '<input id="" type="text" class="form-control"   autofocus><br>'+
                                '<input id="" type="text" class="form-control"   autofocus>'+
                             
                                
                            '</div>'+
                            
                        '</div>'+
                        '<div class="form-group row">'+
                            '<label  class="col-md-4 col-form-label text-md-right">Mobile<font style="color:red">*</font></label>'+

                            '<div class="col-md-6">'+
                                '<input id="" type="text" class="form-control"   autofocus><br>'+
                                '<input id="" type="text" class="form-control"   autofocus>'+
                             
                                
                            '</div>'+
                            
                        '</div>'+
                        '<div class="form-group row">'+
                            '<label for="" class="col-md-4 col-form-label text-md-right">Ville<font style="color:red">*</font></label>'+

                            '<div class="col-md-6">'+
                                '<input id="" type="text" class="form-control"  autocomplete="name" autofocus>'+

                                
                            '</div>'+
                        '</div>'+
                        '<div class="form-group row">'+
                            '<label  class="col-md-4 col-form-label text-md-right">Pays<font style="color:red">*</font></label>'+

                            '<div class="col-md-6">'+
                                '<input id="" type="text" class="form-control"   autofocus>'+
                               
                                
                            '</div>'+
                            
                        '</div>'+
                        '<div class="form-group row">'+
                            '<label  class="col-md-4 col-form-label text-md-right">Site web</label>'+

                            '<div class="col-md-6">'+
                                '<input id="" type="text" class="form-control"   autofocus>'+
                               
                                
                            '</div>'+
                            '</div>'+
                            '<div class="form-group row">'+
                            '<label  class="col-md-4 col-form-label text-md-right">Secteur d\'activité<font style="color:red">*</font></label>'+

                            '<div class="col-md-6">'+
                           
                            '<select name="nom_rubrique" id="nom_rubrique">'+
                               '<option ></option>'+
                               '<option >Architecture et Urbanisme</option>'+
                               '<option >Bâtiment et Génie civil</option>'+
                              '<option >Equipement industriel, Outillage et Pièce détachée</option>'+ 
                              '<option >Informatique et Bureautique</option>'+ 
                              '<option >Fourniture et service </option>'+ 
                              '<option >Transport</option>'+ 
                              '<option >Assurance et Banque</option>'+ 
                              '<option >Médical et Paramédical</option>'+ 
                             '</select>'+
  
                             
                            '</div>'+
                            
                        '</div>'+
                            
                        
                        '<div class="form-group row">'+
                            '<label  class="col-md-4 col-form-label text-md-right">Mode de payement <font style="color:red">*</font></label>'+

                            '<div class="col-md-6">'+
                            ' <input id="essai" type="radio" name="radioPayement" > <label for="essai" > Chèque</label> '+
                        '<input id="essai" type="radio" name="radioPayement" > <label for="essai" >Virement bancaire</label> '+
                       
                                
                            '</div>'+
                            '</div>'+

                            '<div class="form-group row">'+
                            '<label  class="col-md-4 col-form-label text-md-right">Reçu de paymenet <font style="color:red">*</font></label>'+

                            '<div class="col-md-5" id="fichier" style="width:50px;">'+
                            '<input style="margin-left:-13px;" type="file" name="fichier" />'+
                            
                        
                                
                            
                            '</div>'+
                        '</div>'+
                            '<div class="form-group row">'+
                            '<label  class="col-md-4 col-form-label text-md-right">Message</label>'+

                            '<div class="col-md-6">'+
                                '<TextArea class="form-control"   autofocus>... </TextArea>'+
                               
                                
                            '</div>'+
                            '</div>';
                            $('#form1').html($data); 
            }
 
             
            });


           
             
    </script>
    <script>
            $("input[type=radio][name=abon]").change(function() {
                 if($(this).val() == 'internet') {
                           $data=' <hr><div class="form-group row">'+
                            '<label  class="col-md-4 col-form-label text-md-right">Support de communication</label>'+

                            '<div class="col-md-6">'+
                               '<input id="essai" type="radio" name="com" > <label for="essai" >Mailing</label> &nbsp;&nbsp;&nbsp;'+
                                '<ul>'+
                                 '<input id="essai" type="radio" name="langue" > <label for="essai" >Français</label>'+
                                 '<input id="essai" type="radio" name="langue" > <label for="essai" >Anglais</label> '+
                                '</ul>'+
                                '<input id="essai" type="radio" name="com" > <label for="essai" >SMSing</label>'+
                               
                                
                            '</div>'+
                            '</div>'+


                            '<div class="form-group row">'+
                            '<label  class="col-md-4 col-form-label text-md-right">Rubriques à surveiller</label>'+

                            '<div class="col-md-6">'+
                               
                            '<select name="nom_rubrique" id="nom_rubrique">'+
                     '<option ></option>'+
                     '<option >Architecture et Urbanisme</option>'+
                               '<option >Bâtiment et Génie civil</option>'+
                              '<option >Equipement industriel, Outillage et Pièce détachée</option>'+ 
                              '<option >Informatique et Bureautique</option>'+ 
                              '<option >Fourniture et service </option>'+ 
                              '<option >Transport</option>'+ 
                              '<option >Assurance et Banque</option>'+ 
                              '<option >Médical et Paramédical</option>'+ 
                      '</select>'+
                            '</div>'+
                            '</div>'+
                            '<hr>';
                            } else $data="";
                            $('#form2').html($data); 
                        });
    </script>
</body>
</html>