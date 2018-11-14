@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')

<div class="page-header header-filter" data-parallax="true" 
style="background-image: url('{{ asset('img/fondo.jpg') }} ');
  background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
              <form class="form" method="POST" action="{{ route('register') }}">
                @csrf

              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Registro</h4>
                <!--<div class="social-line">
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </div>-->
              </div>
              <p class="description text-center">Completa tus datos</p>

              <div class="card-body">  
                  <div class="input-group">
                    <span class ="input-group-text">
                        <i class="material-icons">face</i>
                    </span>    
                    <input type="text" class="form-control" placeholder="Nombre" name="name"
                    value="{{ old('name') }}" required autofocus>
                </div>

              
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input id="email" type="email" placeholder="Correo Electrónico..." class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input id="password" type="password" placeholder="Contraseña..." class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                </div>
              </div>
              <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" placeholder="Confirmar Contraseña..." class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                </div>
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Confirmar Registro</a>
              </div>
              <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a>-->
            </form>
          </div>
        </div>
      </div>
    </div>
   
  </div>

@endsection
