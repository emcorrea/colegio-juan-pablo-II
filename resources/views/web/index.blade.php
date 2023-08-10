 @extends('web.template.template')

 @section('hero')
     <section id="hero">

         <div class="container">
             <div class="row d-flex align-items-center"">
                 <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
                     <h1>Reconocido por el estado</h1>
                     <h2>Con mas de 30 años promoviendo nuestros valores.</h2>
                     <a href="{{ route('login') }}" class="btn-get-started scrollto">Ingresar</a>
                 </div>
                 <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                     <img src={{ asset('plugins/assets/img/hero-img.png') }} class="img-fluid" alt="">
                 </div>
             </div>
         </div>

     </section>
 @endsection

 @section('main')
     <!-- ======= Numero de personas  ======= -->
     <section id="clients" class="contact section-bg">
         <div class="container" data-aos="fade-up">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="row justify-content-center">
                         <div class="col-md-2">
                             <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                 <h2>2</h2>
                                 <p>Directivos</p>
                             </div>
                         </div>
                         <div class="col-md-2">
                             <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                 <h2>15</h2>
                                 <p>Profesores</p>
                             </div>
                         </div>
                         <div class="col-md-2">
                             <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                 <h2>9</h2>
                                 <p>Asistentes</p>
                             </div>
                         </div>
                         <div class="col-md-2">
                             <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                 <h2>10</h2>
                                 <p>Cursos</p>
                             </div>
                         </div>
                         <div class="col-md-2">
                             <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                 <h2>240</h2>
                                 <p>Alumnos</p>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </section>
     <!-- End Numero de personas -->

     <!-- ======= últimas actualizaciones ======= -->
     <section id="actualizaciones" class="services section-bg">
         <div class="container">

             <div class="section-title">
                 <h2 data-aos="fade-in">Últimas Actualizaciones</h2>
             </div>

             <div class="row mt-5">
                @foreach ($actualizaciones as $act)    
                    <div class="col-md-3 d-flex mt-3" data-aos="fade-right">
                        <div class="card">
                            <div class="card-body w-100">
                                <h5 class="card-title">
                                    <a 
                                        @if ($act->path)                                            
                                            href="{{ route('publicacion',['id' => $act->id,'idMenu' => 'home']) }}"
                                        @endif
                                    >
                                    {{ $act->nombre }}
                                    </a>
                                </h5>
                                <p class="card-text">{{ $act->descripcion }}</p>
                                <div class="read-more">
                                    <a 
                                        @if ($act->path)
                                            href="{{ route('publicacion',['id' => $act->id,'idMenu' => 'home']) }}"
                                        @endif
                                    >
                                        <i class="bi bi-arrow-right"></i> Leer más
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
             </div>
         </div>
     </section>
     <!-- ======= End últimas Actualizaciones ======= -->

     <!-- ======= Nuestro Establecimiento ======= -->
     <section id="about" class="about section-bg">
         <div class="container">

             <div class="row gy-4">
                 <div class="col-xl-5">
                     <img src={{ asset('plugins/assets/img/features-4.svg') }} class="img-fluid" alt="">
                 </div>
                 <div class="col-xl-7">
                     <div class="content d-flex flex-column justify-content-center ps-0 ps-xl-4">
                         <h3 data-aos="fade-in" data-aos-delay="100">Nuestro establecimiento</h3>
                         <p data-aos="fade-in">
                             Colegio Juan Pablo II
                         </p>
                         <div class="row gy-4 mt-3">
                             <div class="col-md-12 icon-box" data-aos="fade-up">
                                 <i class="bx bx-receipt"></i>
                                 <p>Establecimiento educacional que imparte educación de párvulos y educación básica, con
                                     mas
                                     de 30 años promoviendo nuestros valores. Respeto, honestidad, inclusión y respeto al
                                     medio ambiente ...</p>
                             </div>
                             <div class="col-12" data-aos="fade-up">
                                 <a class="btn btn-warning rounded" href="{{ route('menu', ['id' => 1]) }}">Leer más</a>
                             </div>
                         </div>
                     </div><!-- End .content-->
                 </div>
             </div>

         </div>
     </section>
     <!-- End Nuestro Establecimiento -->

     <!-- ======= Corporación Educacional los condores ======= -->
     <section id="team" class="team section-bg">
         <div class="container">

             <div class="section-title">
                 <h2 data-aos="fade-in">Corporación Educacional los Cóndores</h2>
                 <p data-aos="fade-in">Colegio Juan Pablo II</p>
             </div>

             <div class="row justify-content-center">
                 <div class="col-xl-3 col-lg-6 col-md-6">
                     <div class="member" data-aos="fade-up" data-aos-delay="100">
                         <div class="pic"><img src={{ asset('plugins/assets/img/equipo/Fernando_Padilla.jpg') }}
                                 class="img-fluid" alt="" height="380"></div>
                         <h4>Fernando Padilla</h4>
                         <span>Sostenedor y Administrador Ejecutivo</span>
                     </div>
                 </div>
                 <div class="col-xl-3 col-lg-6 col-md-6">
                     <div class="member" data-aos="fade-up" data-aos-delay="100">
                         <div class="pic"><img src={{ asset('plugins/assets/img/equipo/Francisca_Morales.jpeg') }}
                                 alt="" height="410"></div>
                         <h4>Francisca Morales</h4>
                         <span>Directora</span>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- End Corporación Educacional los condores -->

     <!-- ======= Contacto ======= -->
     <section id="contacto" class="contact section-bg">
         <div class="container" data-aos="fade-up">

             <div class="section-title">
                 <h2>Contacto</h2>
                 <p>Colegio Juan Pablo II</p>
             </div>
             <div class="row">
                 <div class="col-lg-6">

                     <div class="row">
                         <div class="col-md-12">
                             <div class="info-box" data-aos="fade-up">
                                 <i class="bx bx-map"></i>
                                 <h3>Dirección</h3>
                                 <p class="mb-3">Los Condores #399, Comuna La Florida<br>Santiago, Región Metropolitana
                                     Chile<br>Fono: (56-22) 7691746</p>
                                 <iframe
                                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d831.4673717576586!2d-70.59918297885433!3d-33.5307787623316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d08ce97f5573%3A0x1cd642ce3217059f!2sEscuela%20B%C3%A1sica%20Papa%20Juan%20Pablo%20II!5e0!3m2!1ses-419!2scl!4v1676494426431!5m2!1ses-419!2scl"
                                     width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                     referrerpolicy="no-referrer-when-downgrade"></iframe>
                             </div>
                         </div>
                     </div>

                 </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <form action="{{ route('envio_email_contacto') }}" method="post" role="form" class="php-email-form w-100" data-aos="fade-up">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="mensaje" rows="5" placeholder="Mensaje" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Su mensaje ha sido enviado correctamente</div>
                        </div>
                        <div class="text-center"><button type="submit"><i class="fa-regular fa-envelope"></i> Enviar</button></div>
                    </form>
                </div>
             </div>

         </div>
     </section>
     <!-- End Contacto -->
 @endsection

 @section('main_js')
    @if ($mensaje_inicio)   
        @if($mensaje_inicio[0]->ruta)
            <script>
                $( document ).ready(function() {
                    bootbox.alert({
                        title: 'Atención!',
                        message: '{{ $mensaje_inicio[0]->valor }}<a href={{ $mensaje_inicio[0]->ruta }}>aquí</a>'
                    });
                });
            </script>
        @else
            <script>
                $( document ).ready(function() {
                    bootbox.alert({
                        title: 'Atención!',
                        message: '{{ $mensaje_inicio[0]->valor }}'
                    });
                });
            </script>
        @endif
    @endif
 @endsection