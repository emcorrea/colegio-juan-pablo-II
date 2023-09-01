@extends('web.template.template')

@section('main')
<section id="team" class="team section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in">{{ $menuCargado->nombre }}</h2>
            <p data-aos="fade-in">Colegio Juan Pablo II</p>
        </div>
        <div class="row">
            <div class="col-12 text-center">
               <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="860" height="550" class="embed-responsive-item" src="{{ $menuCargado->contenido }}" frameborder="0" allowfullscreen></iframe>
               </div>
            </div>
        </div>            
    </div>
  </section>
@endsection