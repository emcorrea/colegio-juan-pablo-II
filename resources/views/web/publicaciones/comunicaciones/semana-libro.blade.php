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
            <div class="row justify-content-center gy-4 mt-3">
                <div class="col-12 text-center">
                    <object data="{{ asset("archivos/semana-libro/comunicacion-semana-libro.pdf") }}" type="application/pdf" width="100%" height="1200px">
                    </object>
                </div>
            </div>
        </div>
    </section>
@endsection
