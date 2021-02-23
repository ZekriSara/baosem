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
    <div class="container-fluid" style="margin-top: 100px;">
       <div class="col" >
         <div class="row">
           <div class="col " id="card">
                <div  class="row" style=" background-color: #000839;color:white;">
                    <div class="col">
                       Bienvenu Ayrade ! 
                     </div>
                    <div class="col">
                       - Abonnement Baosem -
                     </div>
                     <div class="col" >
                        Du N° --- date --/--/---- au N° --- date --/--/----
                    </div>
                </div>
           </div>
          </div>
         
          <div class="row">
           <div class="col" style="background-color:rgba(129,190,247,0.1)" id="card">
                 <br>
                 
                
                 
                <div class="row" style="margin-top:-20px">
                
                   <div class="col1" media="screen and (max-width:800)">
                      <div  style="text-align:center;"><label id ="label" for="Num_baosem" class="control-label" >N° BAOSEM</label></div>
                   
                      <input name="Num_baosem" id="Num_baosem" class=" custom-search-input" type="search" placeholder="N° Baosem" value="{{ request('Num_baosem') }}" autocomplete="off">
                    </div>
                   <div class="col2">
                       <div  style="text-align:center;"><label id="label" for="Annonceur" class="control-label">Annonceur</label></div>
                       <select name="annonceur" id="annonceur">
                           <option ></option>
                          @foreach($annonceurs as $annonceur2)
                             @if(request('annonceur')==$annonceur2->annonceur)
                            <option value="{{$annonceur2->annonceur}}" selected >{{$annonceur2->annonceur}}</option>
                             @else
                             <option value="{{$annonceur2->annonceur}}"  >{{$annonceur2->annonceur}}</option>
                              @endif
                          @endforeach
                       </select>
              
                    </div>
                   <div class="col3">
                      <div  style="text-align:center;"><label id="label" for="Nature" class="control-label">Nature</label></div>
                         <select name="nature"  id="nature">
                         <option ></option>
                           @foreach($nature_insertions as $nature_insertion)
                           @if(request('nature')==$nature_insertion->natureIns)
                           <option value="{{ $nature_insertion->natureIns }} " selected > {{ $nature_insertion->natureIns }} </option>
                           @else
                           <option velue="{{ $nature_insertion->natureIns }}" > {{ $nature_insertion->natureIns }} </option>
                           @endif
                          @endforeach
                         </select>
                   </div>
                   <div class="col4">
                   <div  style="text-align:center;"><label id="label" for="Type" class="control-label">Type</label></div>
                   <select name="type" id="type">
                     <option ></option>
                     @foreach($type_insertions as $type_insertion)
                     @if(request('type')==$type_insertion->typeIns)
                      <option value="{{$type_insertion->typeIns}}" selected>{{$type_insertion->typeIns}}</option>
                      @else
                      <option value="{{$type_insertion->typeIns}}" >{{$type_insertion->typeIns}}</option>
                       @endif
                     @endforeach
                   </select>
                   </div>

                   <div class="col5">
                   <div  style="text-align:center;"><label id="label" for="Num_placard" class="control-label">N° placard</label></div>
                   <input name="Num_placard" id="Num_placard" class=" custom-search-input" type="search" placeholder="N° placard" value="{{request('Num_placard')}}" autocomplete="off" onkeyup="desactiver2() ">
              
                    </div>
                    <div class="col6">
                   <div  style="text-align:center;"><label id ="label" for="nom_rubrique" class="control-label" >Rubrique</label></div>
                   <select name="nom_rubrique" id="nom_rubrique">
                     <option ></option>
                     @foreach($rubriques as $rubrique2)
                     @if(request('nom_rubrique')==$rubrique2->rubrique)
                     <option value="{{$rubrique2->rubrique}}" selected> {{ $rubrique2->rubrique}} </option>
                     @else
                     <option value="{{$rubrique2->rubrique}}" > {{ $rubrique2->rubrique}} </option>
                     @endif
                     @endforeach
                   </select>
                   </div>
                   <div class="col7">
                   <div  style="text-align:center;"><label id="label" for="Date_deb" class="control-label">Date début</label></div>
                   <input name="date_debut" id="date_debut" class=" custom-search-input" type="date" placeholder="Type to filter by address">
                   </div>
                   <div class="col8">
                  <div  style="text-align:center;"><label id="label" for="Date_fin" class="control-label">Date fin</label></div>
                  <input name="date_fin" name="date_fin" class=" custom-search-input" type="date" placeholder="Type to filter by address">
                  </div>
                   
               
                   <div class="col9">
                   <div  style="text-align:center;"><label id ="label" for="mot_objet" class="control-label" >Mots clés sur les objets des annonces </label></div>
                
                   <input name="mot_objet" id="mot_objet" class=" custom-search-input" type="search" placeholder="entrez mots clés sur l'objet des annonoces" value="{{request('mot_objet')}}" autocomplete="off" onkeyup="desactiver()">
                   </div>
                
                   <div class="col10">
                     <div  style="text-align:center;"><label id="label" for="mot_placard" class="control-label">Mots clés global sur le placard </label></div>
                     <input name="mot_placard" id="mot_placard" class=" custom-search-input" type="search" placeholder="entrez mots clés sur le placard" value="{{request('mot_placard')}}" autocomplete="off" onkeyup="desactiver3()">
           
                   </div>

                
                </div>
                @csrf
              <button name="bouton"  class="btn" type="submit" id="bouton" value="envoyer" style="float:right"  > Lancer la recherche</button>
              <button class="btn" id="bouton"  type="reset" style="float:left">Remettre à zero</button>
              
                <br><br>
                
            </div>
          </div>
         
      
      <div class="row" style="margin-top:15px;" >
          <div class="col-sm6" style="width:50%;">
           <button id="abtn1" type="submit"   name="nat" value="appel" style="background-color:#FFA500;margin-left:10px;"  class="animated-button1" >
             <span></span>
             <span></span>
             <span></span>
             <span></span>Appels d'offre</button>
          </div>
          <div class="col-sm6" style="width:50%">
           <button id="abtn2" type="submit" name="nat" value="res"  class="animated-button1" style="background-color:#FFBF00"
            href="">
           <span></span>
             <span></span>
             <span></span>
             <span></span>Résultats</button>
          </div>
          
      </div>
      
      <div class="row" id="card2">
        <div id="no-more-tables">
            <table class="col-md-12 table-bordered table-striped table-condensed cf">
        		<thead class="cf">
        			<tr  class= "{{ $row_class ?? '' }}">
        				
        				
                <th style="width:10%" class="numeric">N° BAOSEM <br> + <br> Date de parution </th>
                <th style="width:30%" class="numeric">Objet <br> + <br> N° d'annonce</th>
                <th style="width:10%" class="numeric">Nature <br> + <br> Type</th>
                <th style="width:20%" class="numeric">Annonceur</th>
                <th style="width:23%" class="numeric">Rubrique</th>
                <th style="width:7%" class="numeric">Aperçu</th>
        			</tr>
        		</thead>
             
        		<tbody>
             @foreach($annonces as $annonce)
        			<tr>
                <td data-title="N° BAOSEM + Date de parution " ><i class="fa fa-circle "  id="{{ $puce_id ?? '' }}"></i>
                  Num : {{$annonce->numBaosem}} <br> 
                  <i class="fa fa-circle" id="{{ $puce_id ?? '' }}" ></i>Parue: {{$annonce->datePar}}
               </td>
                <td data-title="Objet + N° d'annonce"><i class="fa fa-circle "id="{{ $puce_id ?? '' }}"></i>{{$annonce->objet}}<br><i class="fa fa-circle " id="{{ $puce_id ?? '' }}"></i>
                 Num : {{$annonce->numInsertion}}</td>
        				<td data-title="Nature + Type" class="numeric"><i class="fa fa-circle" id="{{ $puce_id ?? '' }}" ></i>
                   {{$annonce->nature_insertion->natureIns}} <br> <i class="fa fa-circle " id="{{ $puce_id ?? '' }}"></i>
                   {{$annonce->type_insertion->typeIns}}
                </td>
        				<td data-title="Annonceur" class="numeric" ><i class="fa fa-circle "id="{{ $puce_id ?? '' }}" ></i>{{$annonce->annonceur-> annonceur}}</td>
        				<td data-title="Rubrique" class="numeric" > <i class="fa fa-circle "id="{{ $puce_id ?? '' }}" ></i>{{$annonce->rubrique-> rubrique}}</td>
        				<td data-title="Aperçu" class="numeric"><a href="/annonce/{{$id=$annonce->numInsertion}}"> voir plus </a></td>
        			
        				
        			</tr>
              @endforeach
        		
        			
        			
        		</tbody>
           
        	</table>
        </div>
     </div>
     
   </div>
</div> 
 <script src="{{asset('assets/js/jquery.min.js')}}"></script>
   <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('assets/js/javascript.js')}}"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>       
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
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