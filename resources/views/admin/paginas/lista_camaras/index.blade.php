@extends('admin.layout.master', ['seccion'=>'lista_camaras'])

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
                        <a href="nueva_camara"><button class="btn btn-primary">Agregar</button></a>
                    </div>
                </div>
            </div>
        </div>



      <div class="row">
          <div class= "col-md-12">
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Camaras Ip</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <div class="table-responsive">
                          <table class="table" cellspacing="0" width="100%" id = "dataTable" name ="dataTable">
                              <thead>
                                  <tr>
                                      <th>Id </th>
                                      <th>Username</th>
                                      <th>Password</th>
                                      <th>Modelo</th>
                                      <th>Url</th>
                                      <th>Direccion</th>
                                      <th>Referencia</th>
                                      <th>Escena</th>
                                      <th>Estado</th>
                                      <th>Opciones</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($camarasip as $camara) 
                                  <tr>
                                      <td>{{ $camara['id'] }}</td>
                                      <td>{{ $camara['username'] }}</td>
                                      <td>{{ $camara['passwd'] }}</td>
                                      <td>{{ $camara['modelo'] }}</td>
                                      <td>{{ $camara['url'] }}</td>
                                      <td>{{ $camara['ubicacion']['direccion'] }}</td>
                                      <td>{{ $camara['ubicacion']['referencia'] }}</td>
                                      <td>{{ $camara['ubicacion']['escena'] }}</td>
                                      <td>{{ $camara['estado'] }}</td>                                            
                                      <td> 
                                          <a href="/edit_camera/{{ $camara->id }}" class="btn btn-xs btn-success" >Editar</a> 
                                      </td> 
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