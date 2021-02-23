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
                <h3 class="card-title">Table D'Archives</h3>
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
             @foreach($archives as $archive)
        			<tr>
                <td data-title="N° BAOSEM + Date de parution " ><i class="fa fa-circle "  id="{{ $puce_id ?? '' }}"></i>
                  Num : {{$archive->numBaosem}} <br> 
                  <i class="fa fa-circle" id="{{ $puce_id ?? '' }}" ></i>Parue: {{$archive->datePar}}
               </td>
                <td data-title="Objet + N° d'annonce"><i class="fa fa-circle "id="{{ $puce_id ?? '' }}"></i>{{$archive->objet}}<br><i class="fa fa-circle " id="{{ $puce_id ?? '' }}"></i>
                 Num : {{$archive->numInsertion}}</td>
        				<td data-titl><i class="fa fa-circle" id="{{ $puce_id ?? '' }}" ></i>
                   {{$archive->nature_insertion->natureIns}} <br> <i class="fa fa-circle " id="{{ $puce_id ?? '' }}"></i>
                   {{$archive->type_insertion->typeIns}}
                </td>
        				<td  ><i class="fa fa-circle "id="{{ $puce_id ?? '' }}" ></i>{{$archive->annonceur-> annonceur}}</td>
        				<td  > <i class="fa fa-circle "id="{{ $puce_id ?? '' }}" ></i>{{$archive->rubrique-> rubrique}}</td>
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
