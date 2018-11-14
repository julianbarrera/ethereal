@extends('layouts.app')

@section('body-class', 'landing-page')

@section('title', 'Bienvenido a Ethereal');

@section('content')

<div class="page-header header-filter" data-parallax="true" 
style="background-image: url('{{ asset('img/fondo.jpg') }} ');
  background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Bienvenido a Ethereal.</h1>
          <h4>Una red social acorde a tus necesidades y gustos.</h4>
          <br>
          <a href="https://www.youtube.com" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> ¿ Como funciona ?
          </a>
        </div>
      </div>
    </div>
  </div>
  
</div>



@endsection
