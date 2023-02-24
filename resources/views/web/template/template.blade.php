<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Colegio Juan Pablo II</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href={{ asset("plugins/assets/img/logo/favicon.ico") }} rel="icon">
  <link href={{ asset("plugins/assets/img/apple-touch-icon.png") }} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{ asset("plugins/assets/vendor/aos/aos.css") }} rel="stylesheet">
  <link href={{ asset("plugins/assets/vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">
  <link href={{ asset("plugins/assets/vendor/bootstrap-icons/bootstrap-icons.css") }} rel="stylesheet">
  <link href={{ asset("plugins/assets/vendor/boxicons/css/boxicons.min.css") }} rel="stylesheet">
  <link href={{ asset("plugins/assets/vendor/glightbox/css/glightbox.min.css") }} rel="stylesheet">
  <link href={{ asset("plugins/assets/vendor/swiper/swiper-bundle.min.css") }} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{ asset("plugins/assets/css/style.css") }} rel="stylesheet">

  <!--Iconos-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <!-- ======= Menu ======= -->
  <header id="header">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="{{ route('home') }}">Colegio Juan Pablo II<span>.</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a  
              @if ($id == 'home')
                class="nav-link scrollto active"
              @else
                class="nav-link scrollto"
              @endif 
              href="{{ route('home') }}"
            >
              Home
            </a>
          </li>
          @foreach ($menu as $mn)
            <li
                @if ($mn->es_sub_menu == 1)
                    class="dropdown" 
                @endif
            >
                <a 
                    @if ($mn->es_sub_menu == 0 and $id == $mn->id)
                        class="nav-link scrollto active"
                    @elseif($mn->es_sub_menu == 1 and $id == $mn->id)
                      class="active"
                    @endif
                    href="{{ route('menu',['id' => $mn->id]) }}"
                >
                    @if ($mn->es_sub_menu == 1)
                        <span>{{ $mn->nombre }}</span>
                        <i class="bi bi-chevron-down"></i>
                    @else
                        {{ $mn->nombre }}
                    @endif
                </a>
                @if ($mn->es_sub_menu == 1)
                    <ul>
                        @foreach ($subMenu as $subMn)
                            @if ($mn->id == $subMn->menu_id)
                                <li><a href="{{ route('menu',['id' => $mn->id]) }}">{{ $subMn->nombre }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                @endif
            </li>
          @endforeach
          <li><a class="nav-link scrollto" href="#contacto">Contacto</a></li>
          <li><a class="getstarted scrollto" href="{{ route('login') }}">Ingresar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Menu -->

  @yield('hero')

  <main id="main">
    @yield('main')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <img src={{ asset("plugins/assets/img/logo/Logo.png") }} class="img-fluid" alt="">
            <p>Colegio Juan Pablo II<br>Coporación Educacional Los Cóndores</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Colegio Juan Pablo II</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Emilio Correa</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!--<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>-->

  <!-- Vendor JS Files -->
  <script src={{ asset("plugins/assets/vendor/aos/aos.js") }}></script>
  <script src={{ asset("plugins/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
  <script src={{ asset("plugins/assets/vendor/glightbox/js/glightbox.min.js") }}></script>
  <script src={{ asset("plugins/assets/vendor/isotope-layout/isotope.pkgd.min.js") }}></script>
  <script src={{ asset("plugins/assets/vendor/swiper/swiper-bundle.min.js") }}></script>
  <script src={{ asset("plugins/assets/vendor/php-email-form/validate.js") }}></script>
  
  <!-- Template Main JS File -->
  <script src={{ asset("plugins/assets/js/main.js") }}></script>
  <script src={{ asset("plugins/js/jquery.3.6.3.js"); }}></script>
  <script src={{ asset("plugins/bootbox/dist/bootbox.all.min.js"); }}></script>
  <script src={{ asset("plugins/bootbox/dist/bootbox.locales.min.js"); }}></script>

  <!--Recaptchas-->
  @if ($recaptchaFormulario == 1){
    <script src="https://www.google.com/recaptcha/api.js?render={{ $secret_web_recaptcha }}"></script>
    <script>
      document.addEventListener('submit', function(e){
        e.preventDefault();
          grecaptcha.ready(function() {
            grecaptcha.execute('{{ $secret_web_recaptcha }}', {action: 'submit'}).then(function(token) {
              let form    = e.target;
              let input   = document.createElement('input');
              input.type  = 'hidden';
              input.name  = 'g-recaptcha-response';
              input.value = token;
              form.appendChild(input);
              form.submit();
            });
          });
      })
    </script>
  }
      
  @endif

  @yield('main_js');

</body>

</html>