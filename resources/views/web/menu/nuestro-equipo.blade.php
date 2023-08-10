@extends('web.template.template')

@section('main')
<section id="team" class="team section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in">{{ $menuCargado->nombre }}</h2>
            <p data-aos="fade-in">Colegio Juan Pablo II</p>
        </div>
        <div class="row">
            @foreach ($equipo as $eq)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up">
                        <div class="pic"><img src={{ asset("plugins/assets/img/equipo/$eq->id.$eq->imagen") }} alt=""></div>
                        <h4>{{ $eq->nombre }}</h4>
                        <span>{{ $eq->cargo }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection