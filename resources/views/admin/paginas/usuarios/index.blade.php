@extends('admin.layout.master')

@section('title', 'Home') 	

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Panel de control
        <small>Camaras Ip</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Panel de control</a></li>
        <li class="active">CamarasIp</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
        <div class="row">
            <div class= "col-md-12">
              <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Nueva camara ip</h3>
                    </div>

                    <div class="box-body">
                        <a href="nueva_camara"><button class="btn btn-dark">Agregar</button></a>
                    </div>
                </div>
            </div>
        </div>



      <div class="row">
          <div class= "col-md-12">
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Usuarios</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <div class="table-responsive">
                          <table class="table" cellspacing="0" width="100%" id = "dataTable" name ="dataTable">
                              <thead>
                                  <tr>
                                      <th>Id </th>
                                      <th>Correo electronico</th>
                                      <th>Nombre</th> 
                                      <th>Tipo de cuenta</th> 
                                      <th>Estado</th> 
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($usuarios as $usuario) 
                                  <tr>
                                      <td>{{ $usuario['id'] }}</td>
                                      <td>{{ $usuario['email'] }}</td>
                                      <td>{{ $usuario['name'] }}</td> 
                                      <td>{{ $usuario['role']['nombre'] }}</td> 
                                      <td>{{ $usuario['estado'] }}</td>     
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>
                      <!-- /.table-responsive -->
                  </div>
                  <!-- /.box-body -->
              </div>                
          </div>
      </div> 
    </section>
    
@endsection