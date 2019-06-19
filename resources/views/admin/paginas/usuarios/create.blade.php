@extends('admin.layout.master', ['seccion'=>'usuarios'])

@section('title', 'Home') 	

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Panel de control
        <small>Usuarios</small>
        <small>Crear usuario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Panel de control</a></li>
        <li class="active">Usuarios</li>
        <li class="active">Crear usuario</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class= "col-md-12">
              <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Nuevo usuario</h3>
                    </div>

                    <div class="box-body">
                        
                    <form method="POST" action="{{ route('nuevo_usuario') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de rol') }}</label>

                                    <div class="col-md-6">
                                        <select name="rol">
                                        @foreach($roles as $rol) 
                                            <option value="{{$rol['id']}}">{{$rol['name']}}</option> 
                                        @endforeach
                                        </select>
        
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Registrar') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>

 
    </section>

@endsection
