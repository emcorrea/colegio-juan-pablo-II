@extends('web.template.template')

@section('main')
    <section id="team" class="team section-bg">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-in">{{ $publicacion->nombre }}</h2>
                <p data-aos="fade-in">Colegio Juan Pablo II</p>
            </div>
            <div class="row justify-content-center gy-4 mt-3">
                <div class="col-xl-6 col-md-6 col-lg-12">
                    <img src="{{ asset("archivos/uniforme-escolar-2023/uniforme_escolar_2023.jpeg") }}" alt="">
                </div>
                <div class="col-xl-6 col-md-6 col-lg-12">
                    <img src="{{ asset("archivos/uniforme-escolar-2023/confecciones_uniforme_escolar_2023.jpeg") }}" alt="" width="400" height="400">
                </div>
            </div>
        </div>
    </section>
@endsection
