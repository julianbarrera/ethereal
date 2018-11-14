@extends('layouts.app')

@section('body-class', 'profile-page')

@section('title', 'Editar publicación seleccionada');

@section('content')

<div class="page-header header-filter" data-parallax="true" 
style="background-image: url('{{ asset('img/fondo4.jpg') }} ');
  background-size: cover; background-position: top center;">
  </div>
  <div class="main main-raised">
    <div class="section">
      <h2 class="title text-center">Editar publicación seleccionada</h2>
      <form method="post" action="{{ url('/publications/'.$publication->id.'/edit') }}">
        {{ csrf_field() }}

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group label-floating">
              <label class="control-label">Titulo de la publicación</label>
              <input type="text" class="form-control" name="title" value=" {{ $publication->title }}">
            </div>
          </div>
            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Imagen (Ruta web)</label>
                <input type="text" class="form-control" name="image_messaje" value=" {{ $publication->image_messaje }}">
              </div>
            </div>
        </div>


        <div class="row">
          <div class="col-sm-12">
            <div class="form-group label-floating">
              <textarea class="form-control" placeholder="Mensaje" rows="5" name="messaje">{{ $publication->messaje }}</textarea>
            </div>
          </div>
        </div>
           
      </div>

        <center><button class="btn btn-primary btn-round">Actualizar publicación</button>
        <a href="{{ url('/publications') }}" class="btn btn-default">Cancelar</a></center>
      </form>
        </div>
  </div>
</body>
</html>

@endsection
