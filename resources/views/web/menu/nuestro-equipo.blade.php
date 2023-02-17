@extends('web.template.template')

@section('main')
<section id="team" class="team section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in">{{ $menuCargado->nombre }}</h2>
            <p data-aos="fade-in">Colegio Juan Pablo II</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Fernando_Padilla.jpg") }} alt=""></div>
                    <h4>Fernando Padilla</h4>
                    <span>Sostenedor</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Cyntia_Saez.jpg") }} alt=""></div>
                    <h4>Cyntia Sáez</h4>
                    <span>Inspectora</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Rocio_Cea.jpg") }} alt=""></div>
                    <h4>Rocío Cea</h4>
                    <span>Psicóloga</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Mirna_Zambrano.jpg") }} alt=""></div>
                    <h4>Mirna Zambrano</h4>
                    <span>Encargada CRA</span>
                </div>
            </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up">
                <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Belinda_Zubicueta.jpg") }} alt=""></div>
                <h4>Belinda Zubicueta</h4>
                <span>Profesora Biodanza</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Alejandra_vargas.jpg") }} alt=""></div>
                <h4>Alejandra Vargas</h4>
                <span>Profesora Jefe</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Rodolfo_Maturana.jpg") }} alt=""></div>
                <h4>Rodolfo Maturana</h4>
                <span>Profesor Jefe</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Karen_Araya.jpg") }} alt=""></div>
                <h4>Karen Araya</h4>
                <span>Profesora Jefe</span>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Andrea_Serrano.jpg") }} alt=""></div>
                    <h4>Andrea Serrano</h4>
                    <span>4to Básico</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Betsy_Carrizo.jpg") }} alt=""></div>
                    <h4>Betsy Carrizo</h4>
                    <span>Profesora Jefe</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Delinda_Arcos.jpg") }} alt=""></div>
                    <h4>Delinda Arcos</h4>
                    <span>Asistente de Aula</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Maria_Eugenia.jpg") }} alt=""></div>
                    <h4>Ma Eugenia Pirela</h4>
                    <span>Asistente de Aula</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Carolina_Galaz.jpg") }} alt=""></div>
                    <h4>Carolina Galaz</h4>
                    <span>Educadora Párvulo</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Jeannette_Bravo.jpg") }} alt=""></div>
                    <h4>Jeannette Bravo</h4>
                    <span>Educadora Diferencial</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Caroline_Serrano.jpg") }} alt=""></div>
                    <h4>Caroline Serrano</h4>
                    <span>Educadora Párvulo</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Isabel_Rozas.jpg") }} alt=""></div>
                    <h4>Isabel Rozas</h4>
                    <span>Educadora Diferencial</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Pamela_Vera.jpg") }} alt=""></div>
                    <h4>Pamela Vera</h4>
                    <span>Asistente de Aula</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Karen_Munoz.jpg") }} alt=""></div>
                    <h4>Karen Muñoz</h4>
                    <span>Asistente de Servicios Menores</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="pic"><img src={{ asset("plugins/assets/img/equipo/Tatiana_Gaete.jpg") }} alt=""></div>
                    <h4>Tatiana Gaete</h4>
                    <span>Asistente de Servicios Menores</span>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection