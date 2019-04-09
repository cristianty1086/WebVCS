@extends('admin.layout.master', ['seccion'=>'analisis'])

@section('title', 'Home') 	

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Panel de control
        <small>Analisis de videostream</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Panel de control</a></li>
        <li class="active">Analisis de videostream</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">  

    <div class="row">
      <div class= "col-md-12">
          <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Seleccione una camara ip</h3>
                  </div>

                  <div class="box-body"> 
                        <div class="form-group">
                            <label for="camaraip">Url de la camara</label>
                            <select name="camaraip" class="form-control" id="camaraip">                                  
                              @foreach($camarasip as $camara)  
                                  <option>{{ $camara['url'] }}</option> 
                              @endforeach
                            </select> 
                        </div> 
                  </div>
 
              </div>
          </div>
      </div>
 
      <div class="row">
          <div class= "col-md-12">
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Seleccione un metodo de analisis</h3>
                  </div> 

                  <div class="box-body"> 
                      <div class="form-group">
                            <label for="metodo">Metodo</label>
                            <select name="metodo" class="form-control" id="metodo">                                             
                              @foreach($metodos as $metodo)  
                                  <option>{{ $metodo['nombremetodo'] }}</option> 
                              @endforeach
                            </select> 
                      </div>  
                  </div>

                  <div class="box-footer">
                      <button class="btn btn-primary">Aceptar</button>
                  </div>
              </div>                
          </div>
      </div> 
    </section>
    
@endsection