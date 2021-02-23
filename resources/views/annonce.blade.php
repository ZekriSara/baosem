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
                <h3 class="card-title">Table D'Annonces</h3>   <div align="right"><form method="post" action="/admin/importer" enctype="multipart/form-data"> @csrf<input   style="margin-left:-13px;" type="file" name="fichier"   ><input type="submit"></form> </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered ">
                <thead class="cf">
        			<tr  class= "{{ $row_class ?? '' }}">
        				
        				
                <th >N° BAOSEM <br> + <br> Date de parution </th>
                <th >Objet <br> + <br> N° d'annonce</th>
                <th >Nature <br> + <br> Type</th>
                <th >Annonceur</th>
                <th >Rubrique</th>
                <th>Aperçu</th>
        			</tr>
        		</thead>
             
        		<tbody>
             @foreach($annonces as $annonce)
        			<tr>
                <td data-title="N° BAOSEM + Date de parution " >
                  Num : {{$annonce->numBaosem}} <br> 
                 Parue: {{$annonce->datePar}}
               </td>
                <td data-title="Objet + N° d'annonce">{{$annonce->objet}}<br>
                 Num : {{$annonce->numInsertion}}</td>
        				<td data-titl>
                   {{$annonce->nature_insertion->natureIns}} <br> 
                   {{$annonce->type_insertion->typeIns}}
                </td>
        				<td  >{{$annonce->annonceur-> annonceur}}</td>
        				<td  > {{$annonce->rubrique-> rubrique}}</td>
        				<td ><a href="" > voir plus </a></td>
        			
        				
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
