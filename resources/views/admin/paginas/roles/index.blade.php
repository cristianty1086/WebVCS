@extends('admin.layout.master')

@section('title', 'Home') 	

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Panel de control
        <small>Roles</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Panel de control</a></li>
        <li class="active">Roles</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">  

    <div class="row" style="display: flex; justify-content: center; align-items: center;">
        <div class= "col-md-4">
            </br>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Roles de usuario</h3>
                </div>
                <!-- /.box-header -->                
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table" cellspacing="0" width="100%" id = "dataTable" name ="dataTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role) 
                                <tr>
                                    <td>{{ $role['id'] }}</td>
                                    <td>{{ $role['nombre'] }}</td>
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