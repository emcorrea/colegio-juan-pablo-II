@extends('web.template.template')

@section('main')
<section id="team" class="team section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in">{{ $menuCargado->nombre }}</h2>
            <p data-aos="fade-in">Colegio Juan Pablo II</p>
        </div>
        @if($publicaciones)
            <div class="row">
                @foreach ($publicaciones as $pb)    
                    <div class="col-md-3 d-flex mt-3" data-aos="fade-right">
                        <div class="card w-100">
                            <div class="card-body w-100">
                                <h5 class="card-title">
                                    <a 
                                        @if ($pb->path)                                            
                                            href="{{ route('publicacion',['id' => $pb->id,'idMenu' => 'home']) }}"
                                        @endif
                                    >
                                    {{ $pb->nombre }}
                                    </a>
                                </h5>
                                <p class="card-text">{{ $pb->descripcion }}</p>
                                <div class="read-more">
                                    <a 
                                        @if ($pb->path)
                                            href="{{ route('publicacion',['id' => $pb->id,'idMenu' => 'home']) }}"
                                        @endif
                                    >
                                        <i class="bi bi-arrow-right"></i> Leer más
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="row">
                <i>Sin contenido</i>
            </div>
        @endif
    </div>
  </section>
@endsection