@extends('web.template.template')

@section('main')
    <section id="team" class="team section-bg">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-in">{{ $publicacion->nombre }}</h2>
                <p data-aos="fade-in">Colegio Juan Pablo II</p>
            </div>
            <div class="row justify-content-center gy-4 mt-3">
                <div class="col-10">
                    <p>{{ $publicacionDetalle[0]->contenido }}</p>
                </div>
            </div>
            <div class="row gy-4 mt-3">
                <section id="portfolio" class="portfolio section-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul id="portfolio-flters">
                                    <li data-filter="*" class="filter-active">Todas</li>
                                    <li data-filter=".filter-lunes">Lunes</li>
                                    <li data-filter=".filter-martes">Martes</li>
                                    <li data-filter=".filter-miercoles">Miércoles</li>
                                    <li data-filter=".filter-jueves">Jueves</li>
                                    <li data-filter=".filter-viernes">Viernes</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row portfolio-container" data-aos="fade-up">
                            @foreach ($publicacionDetalle as $pbd)
                                @if ($pbd->tipoPublicacionDetalle->nombre === 'IMAGEN')                                
                                    <div class="col-lg-4 col-md-6 portfolio-item {{ $pbd->data_atributo }}">
                                        <div class="portfolio-wrap">
                                            <img src="{{ asset($pbd->contenido) }}" class="img-fluid" alt="">
                                            <div class="portfolio-links">
                                                <a href="{{ asset($pbd->contenido) }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="fas fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div> 
                </section>
            </div>
        </div>
    </section>
@endsection