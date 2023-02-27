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
                    <p>{{ $publicacionDetalle[0]->contenido }} <a href="{{ asset("archivos/informativo-anio-escolar-2023/informativo_anio_escolar_2023.pdf") }}" target="_blank">aquí</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
