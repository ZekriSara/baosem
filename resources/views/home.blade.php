@extends('layouts.admin')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$nbAnnonce ?? ''}}</h3>

                <p>Annonces</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/admin/annonce"  class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$nbArchive}}</h3>

                <p>Archives</p>
              </div>
              <div class="icon">
                <i class="ion ion-archive"></i>
              </div>
              <a href="/admin/archive" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
           <!-- ./col -->
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$nbUser}}</h3>

                <p>Utilisateurs</p>
              </div>
              <div class="icon">
                <i class="ion ion-p22"></i>
              </div>
              <a href="/admin" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
        <!-- /.row -->
        <!-- Main row -->
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Table D'utilisateurs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered ">
                  <thead>
                  <tr>
                   <th>Nom </th>
                   <th>Email </th>
                   <th>Numéro de téléphone </th>
                   <th> Action </th>

                  </tr>
                  </thead>

                  <tbody>
                  @foreach($abonnes as $abonne)

                   <tr> <td> {{$abonne->name}} </td> 
                    <td> {{$abonne->email}}</td>
                    <td> {{$abonne->tel}}</td>
                    
                   
                   

                   <td>           
                   
             <center>
             
                <a   style="color:blue" data-toggle="modal" data-target="#modal"><i class="fas fa-info-circle"></i></a>  
                   
             <div class="modal fade centro" role="dialog" tabindex="-1" id="modal" >
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                       <div class="modal-header">
                            <h6 class="modal-title txtsGrises" style="letter-spacing:.05em;"><b>Informations</b></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                        <div class="modal-body">
                            <h2 class="titulos">Informations </h2>
                            <table id="example2" class="table table-bordered ">
                             <tr> <td width="30%"> Nom: <td> {{$abonne->name}}</td> </tr>
                             <tr> <td width="30%"> Email :<td> {{$abonne->email}}
                             <tr><td width="30%"> N°Téléphone :<td> {{$abonne->tel}}
                             <tr><td width="30%"> Ville :<td> {{$abonne->ville}}
                             <tr><td width="30%"> Pays : <td>{{$abonne->pays}}
                             <tr><td width="30%"> Periode d'abonnement :<td> {{$abonne->periode}}
                             <tr> <td width="30%"> Date début d'abonnement :<td> {{$abonne->dateDeb}}
                             <tr><td width="30%"> Site web : <td>{{$abonne->site}}
                            </table>   
                           
                        </div>
                        
                </div>
            </div>
                </div>
             
                   

                 
                   
                   &nbsp; &nbsp; &nbsp;
                   
                   
                   
                   <a  href="/delete/{{$abonne->email}}" style="color:black" ><i class="fas fa-trash-alt"></i></a>  
           </div>
           </center>        
                           </tr>            

                  @endforeach
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    <!-- /.content -->
@endsection
