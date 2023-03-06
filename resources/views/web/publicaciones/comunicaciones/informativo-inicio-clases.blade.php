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
                    <p>Estimada comunidad. Dado el comunicado del informativo de horario de clases para los primeros días se establece el horario del año escolar definitivo para este año. Decargalo 
                        <a href="{{ asset("archivos/horario-clases-2023/Horario_clases_2023.docx") }}" target="_blank">aquí</a>
                    </p>
                    <p>{{ $publicacionDetalle[0]->contenido }} <a href="{{ asset("archivos/informativo-anio-escolar-2023/informativo_anio_escolar_2023.pdf") }}" target="_blank">aquí</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
