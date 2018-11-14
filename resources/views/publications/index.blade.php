@extends('layouts.app')

@section('body-class', 'profile-page')

@section('title', 'Ethereal | Listado de publicaciones');

@section('content')

<div class="page-header header-filter" data-parallax="true" 
style="background-image: url('{{ asset('img/fondo4.jpg') }} ');
  background-size: cover; background-position: top center;">
</div>

<div class="main main-raised">
  <div class="container">
    <div class="section text-center">
      <h2 class="title">Listado de publicaciones</h2>
      <div class="team">
        <div class="row">
          <center><a href="{{ url('/publications/create') }}" type="button" class="btn btn-lg btn-primary" disabled>Nueva Publicación</a><center>
          <table class="table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Titulo</th>
                    <th class="col-md-2 text-center">Mensaje</th>
                    <th class="text-center">Imagen</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($publications as $publication)
                <tr>
                    <td class="text-center">{{ $publication->id }}</td>
                    <td> {{ $publication->title }}</td>
                    <td>{{ $publication->messaje }}</td>
                    <td>{{ $publication->image_messaje }}</td>
                    <td class="td-actions text-right">
                        <a href="{{ url('/publications/'.$publication->id.'/edit') }}" rel="tooltip" title="Editar publicación" class="btn btn-success btn-simple btn-xs">
                            <i class="fa fa-edit"></i>
                        </a>


                        <form method="post" action="{{ url('/publications/'.$publication->id.'/delete') }}">
                          {{ csrf_field() }}


                          <button type="submit" rel="tooltip" title="Eliminar publicación" class="btn btn-danger btn-simple btn-xs"> 
                            <i class="fa fa-times"></i>
                          </button>
                        </form>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>


@endsection