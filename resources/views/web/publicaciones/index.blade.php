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
            @foreach ($publicacionDetalle as $pd)
                @if ( $pd->tipo_publicacion_detalle_id === 2 )        

                    <div class="row gy-4 mt-3">
                        <section id="portfolio" class="portfolio section-bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul id="portfolio-flters">
                                            <li data-filter="*" class="filter-active">Todas</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row portfolio-container" data-aos="fade-up">
                                    @foreach ($data as $key => $item)    
                                        @foreach ($item as $dt)                       
                                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $key }}">
                                                <div class="portfolio-wrap">
                                                    <img src="{{ asset($key.'/'. $dt) }}" class="img-fluid" alt="">
                                                    <div class="portfolio-links">
                                                        <a href="{{ asset($key.'/'. $dt) }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="fas fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>
                            </div> 
                        </section>
                    </div>
                
                @elseif( $pd->tipo_publicacion_detalle_id === 4 )

                    @foreach ($data as $keyDt => $dt)                        
                        <div class="row gy-4 mt-3">
                            <div class="col-12">
                                <embed src="{{ asset($keyDt.'/'.$dt[2]) }}" type="application/pdf" width="100%" height="600px" />
                            </div>
                        </div>
                    @endforeach
                
                @elseif( $pd->tipo_publicacion_detalle_id === 5 )

                    @foreach ($data as $keyDt => $dt)                        
                        <div class="row gy-4 mt-3">
                            <div class="col-12 text-center">
                                <img src="{{ asset($keyDt.'/'.$dt[2]) }}" />
                            </div>
                        </div>
                    @endforeach

                @endif

            @endforeach
        </div>
    </section>
@endsection