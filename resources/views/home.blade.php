@extends('layouts.app')

@section('body-class', 'profile-page')

@section('title', 'Ethereal | Muro');

@section('content')

<div class="page-header header-filter" data-parallax="true" 
style="background-image: url('{{ asset('img/fondo4.jpg') }} ');
  background-size: cover; background-position: top center;">
  </div>
  <div class="main main-raised">
    <div class="profile-content"">
      <div class="container">
        <h2 class="title text-center">Muro</h2>
        @if (session('status'))
          <div class="alert alert-sucess">
            {{ session('status') }}
          </div>
        @endif

  <link rel="stylesheet" href="{{ asset('/css/style.css') }}"

  <div class="row">
    @foreach ($publications as $publication)
        <div class="timeline-centered">

        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-success">
                    <i class="entypo-feather"></i>
                </div>

                <div class="timeline-label">
                    <h2><a href="#">{{ $publication->user ? $publication->category->name: 'General' }}</a> <span>ha publicado la siguiente actualización: <strong>{{
                      $publication->title }}</strong></span></h2>
                    <p>{{ $publication->messaje }}</p>
                    <center><img src= "{{ $publication->image_messaje }}" alt="Thumbnail Image" class="img-raised img-circle"</center>
                </div>
            </div>

        </article>

        <article class="timeline-entry begin">

            <div class="timeline-entry-inner">

                <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                    <i class="entypo-flight"></i> +
                </div>

            </div>

        </article>
    @endforeach
    </div>

    
  </div>
</div>
     
          
    </div>
  </section>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js'></script>

    <script src="{{ asset('/js/index.js') }}"></script>

</body>
</html>

    </div>
  </div>

@endsection