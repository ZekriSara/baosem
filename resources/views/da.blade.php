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
                <h3>{{$nbAnnonce}}</h3>

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
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$nbDA}}</h3>

                <p>Demande D'Abonnement</p>
              </div>
              
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/admin/da" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        
          <!-- ./col -->
        </div>
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
                <h3 class="card-title">Table De Demande D'Abonnement</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table  class="table table-bordered ">
                  <thead>
                  <tr>
                   <th>Nom </th>
                   <th>Email </th>
                   <th> Type </th>
                   <th> Fichier de payement </th>
                   <th> Action </th>

                  </tr>
                  </thead>

                  <tbody>
                  
                  @foreach($das as $da)
               
                   <tr> <td> {{$da->name}} </td> 
                    <td> {{$da->email}}</td>
                    <td> {{$da->type}} </td> 
                    
                    <td> <a href="/image/{{$da->image}}" >click</a></td> 
                   
                   <td> <div align="center"> <a href="/admin/da/valider/{{$da->email}}" style="color:green"> 
                   <i class="far fa-check-square " style="size:9x"></i></a>
                   <a href="/admin/da/valider/ {{ $da->email }}" style="color:green"> <i class="fas fa-info-circle"></i></a>

                   </div>
                         

                  @endforeach
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    <!-- /.content -->
@endsection

