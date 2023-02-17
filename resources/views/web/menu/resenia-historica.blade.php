@extends('web.template.template')

@section('main')
    <section id="about" class="about section-bg">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-2">
                    <img src={{ asset("plugins/assets/img/logo/Logo.png") }} class="img-fluid" alt="">
                </div>
                <div class="col-xl-10">
                    <div class="content d-flex flex-column justify-content-center ps-0 ps-xl-4">
                        <h3 data-aos="fade-in" data-aos-delay="100">{{ $menuCargado->nombre }}</h3>
                            <p data-aos="fade-in">Colegio Juan Pablo II</p>
                        <div class="row gy-4 mt-3">
                            <div class="col-md-12 icon-box" data-aos="fade-up">
                                <i class="bx bx-receipt"></i>
                                <p align="justify">{{ $contenido[0] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>
@endsection