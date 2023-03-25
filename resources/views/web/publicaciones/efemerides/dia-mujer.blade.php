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
                <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset("archivos/dia-mujer/1.jpeg") }}"  class="img-fluid rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset("archivos/dia-mujer/2.jpeg") }}"  class="img-fluid rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset("archivos/dia-mujer/3.jpeg") }}"  class="img-fluid rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset("archivos/dia-mujer/4.jpeg") }}"  class="img-fluid rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset("archivos/dia-mujer/5.jpeg") }}"  class="img-fluid rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset("archivos/dia-mujer/6.jpeg") }}"  class="img-fluid rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset("archivos/dia-mujer/7.jpeg") }}"  class="img-fluid rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset("archivos/dia-mujer/8.jpeg") }}"  class="img-fluid rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset("archivos/dia-mujer/9.jpeg") }}"  class="img-fluid rounded" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
