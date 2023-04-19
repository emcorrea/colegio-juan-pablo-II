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
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul id="portfolio-flters" class="nav nav-tabs">
                                <li data-filter=".filter-lunes" class="nav-item filter-active" style="width: 250px">
                                    <button class="nav-link active w-100">Lunes</button>
                                </li>
                                <li data-filter=".filter-martes" class="nav-item" style="width: 250px">
                                    <button class="nav-link w-100">Martes</button>
                                </li>
                                <li data-filter=".filter-miercoles" class="nav-item" style="width: 250px">
                                    <button class="nav-link w-100">Miércoles</button>
                                </li>
                                <li data-filter=".filter-jueves" class="nav-item" style="width: 250px">
                                    <button class="nav-link w-100">Jueves</button>
                                </li>
                                <li data-filter=".filter-viernes" class="nav-item" style="width: 250px">
                                    <button class="nav-link w-100">Viernes</button>
                                </li>
                            </ul>
                        </div>
                    </div>
            
                    <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" style="position: relative; height: 342px;">
                        <div class="col-lg-12 col-md-6 portfolio-item filter-lunes" style="position: absolute; left: 0px; top: 0px; display: none;">
                            <h4 class="m-3">Acto de Formación</h4>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/lunes/1.jpg") }}"  class="img-fluid rounded" alt="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/lunes/2.jpg") }}"  class="img-fluid rounded" alt="2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/lunes/3.jpg") }}"  class="img-fluid rounded" alt="3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/lunes/4.jpg") }}"  class="img-fluid rounded" alt="4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/lunes/5.jpg") }}"  class="img-fluid rounded" alt="5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/lunes/6.jpg") }}"  class="img-fluid rounded" alt="6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/lunes/7.jpg") }}"  class="img-fluid rounded" alt="7">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/lunes/8.jpg") }}"  class="img-fluid rounded" alt="8">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/lunes/9.jpeg") }}"  class="img-fluid rounded" alt="9">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/lunes/10.jpeg") }}"  class="img-fluid rounded" alt="10">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/lunes/11.jpeg") }}"  class="img-fluid rounded" alt="11">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/lunes/12.jpeg") }}"  class="img-fluid rounded" alt="12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/lunes/13.jpeg") }}"  class="img-fluid rounded" alt="13">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 portfolio-item filter-martes" style="position: absolute; left: 0px; top: 0px; display: none;">
                            <h4 class="m-3">Los Susurradores</h4>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/1.jpeg") }}"  class="img-fluid rounded" alt="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/2.jpeg") }}"  class="img-fluid rounded" alt="2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/3.jpeg") }}"  class="img-fluid rounded" alt="3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/4.jpeg") }}"  class="img-fluid rounded" alt="4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/5.jpeg") }}"  class="img-fluid rounded" alt="5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/6.jpeg") }}"  class="img-fluid rounded" alt="6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/7.jpeg") }}"  class="img-fluid rounded" alt="7">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/8.jpeg") }}"  class="img-fluid rounded" alt="8">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/9.jpeg") }}"  class="img-fluid rounded" alt="9">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/10.jpeg") }}"  class="img-fluid rounded" alt="10">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/11.jpeg") }}"  class="img-fluid rounded" alt="11">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/12.jpeg") }}"  class="img-fluid rounded" alt="12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/13.jpeg") }}"  class="img-fluid rounded" alt="13">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/14.jpeg") }}"  class="img-fluid rounded" alt="13">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/15.jpeg") }}"  class="img-fluid rounded" alt="13">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/16.jpeg") }}"  class="img-fluid rounded" alt="13">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/17.jpeg") }}"  class="img-fluid rounded" alt="13">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/18.jpeg") }}"  class="img-fluid rounded" alt="13">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/19.jpeg") }}"  class="img-fluid rounded" alt="13">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/20.jpeg") }}"  class="img-fluid rounded" alt="13">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex aos-init aos-animate" data-aos="fade-right">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset("archivos/semana-libro/martes/21.jpeg") }}"  class="img-fluid rounded" alt="13">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 portfolio-item filter-miercoles" style="position: absolute; left: 0px; top: 0px; display: none;">
                            <i class="m-3">Sin contenido</i>
                        </div>
                        <div class="col-lg-12 col-md-6 portfolio-item filter-jueves" style="position: absolute; left: 0px; top: 0px; display: none;">
                            <i class="m-3">Sin contenido</i>
                        </div>
                        <div class="col-lg-12 col-md-6 portfolio-item filter-viernes" style="position: absolute; left: 0px; top: 0px; display: none;">
                            <i class="m-3">Sin contenido</i>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
@endsection
