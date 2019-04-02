@extends('admin.layout.master')

@section('title', 'Home') 	

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Panel de control 
        <small>Editar camara</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Panel de control</a></li>
        <li class="active">CamarasIp</li>
        <li class="active">Editar camara</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
        <div class="row">
            <div class= "col-md-12">
              <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editar camara ip</h3>
                    </div>

                    <div class="box-body">

                    <form method="POST" action="{{ route('post_camara')}}">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="text" class="form-control" id="password" placeholder="Password">
                        </div> 
                        <div class="form-group">
                            <label for="modelo">Modelo</label>
                            <input name="modelo" type="text" class="form-control" id="modelo" aria-describedby="emailHelp" placeholder="Modelo"> 
                        </div>
                        <div class="form-group">
                            <label for="url">Url</label>
                            <input name="url" type="text" class="form-control" id="url" aria-describedby="emailHelp" placeholder="Url"> 
                        </div>
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input name="direccion" type="text" class="form-control" id="direccion" aria-describedby="emailHelp" placeholder="Direccion"> 
                        </div>
                        <div class="form-group">
                            <label for="referencia">Referencia</label>
                            <input name="referencia" type="text" class="form-control" id="referencia" aria-describedby="emailHelp" placeholder="Referencia"> 
                        </div>
                        <div class="form-group">
                            <label for="escena">Escena</label>
                            <input name="escena" type="text" class="form-control" id="escena" aria-describedby="emailHelp" placeholder="Escena"> 
                        </div> 
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
 
                    </div>
                </div>
            </div>
        </div>
 
    </section>
    
@endsection