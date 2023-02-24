@extends('web.template.template')

@section('main')
<section id="team" class="team section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in">{{ $menuCargado->nombre }}</h2>
            <p data-aos="fade-in">Colegio Juan Pablo II</p>
        </div>
        <div class="row">
            @if ($publicaciones)
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="bg-dark">
                            <th class="text-white">#</th>
                            <th class="text-white">Nombre</th>
                            <th class="text-white">Descripción</th>
                            <th class="text-white">Fecha</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($publicaciones as $pb)    
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pb->nombre }}</td>
                            <td>{{ $pb->descripcion }}</td>
                            <td>{{ $pb->fecha }}</td>
                            <td class="text-center">
                                @if ($pb->path)
                                    <a href="{{ route('publicacion',['id' => $pb->id,'idMenu' => $id]) }}" class="btn btn-sm btn-success">Ver</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <i>Sin datos</i>
            @endif
        </div>            
    </div>
  </section>
@endsection