@extends('web.template.template')

@section('main')
    <section id="team" class="team section-bg">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-in">{{ $publicacion->nombre }}</h2>
                <p data-aos="fade-in">Colegio Juan Pablo II</p>
            </div>
            <div class="row gy-4 mt-3">
                <div class="col-xl-6 col-md-6 col-lg-12">
                    <img src={{ asset("plugins/assets/img/undraw_certification_re_ifll.svg") }} alt="">
                </div>
                <div class="col-xl-6 col-md-6 col-lg-12">
                    <div class="row">
                        <div class="col-md-12 icon-box" data-aos="fade-up">
                            <h4><a href="#">Preescolar</a></h4>
                            <table class="table table-sm table-bordered table-hover">
                                <thead>
                                    <tr class="bg-dark">
                                        <th class="text-white">Curso</th>
                                        <th class="text-white" align="center" width="50">Contenido</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pre-Kinder</td>
                                        <td align="center"><a class="btn btn-sm btn-success" href="{{ asset("archivos/lista-utiles-escolares/Lista de utiles Pre Kinder 2023.docx") }}" target="_blank"><i class="fa-solid fa-cloud-arrow-down"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Kinder</td>
                                        <td align="center"><a class="btn btn-sm btn-success" href="{{ asset("archivos/lista-utiles-escolares/lista de utiles kinder 2023.docx") }}" target="_blank"><i class="fa-solid fa-cloud-arrow-down"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12 icon-box" data-aos="fade-up">
                            <h4><a href="#">Básica</a></h4>
                            <table class="table table-sm table-bordered table-hover">
                                <thead>
                                    <tr class="bg-dark">
                                        <th class="text-white">Curso</th>
                                        <th class="text-white" align="center" width="50">Contenido</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1ero Básico</td>
                                        <td align="center"><a class="btn btn-sm btn-success" href="{{ asset("archivos/lista-utiles-escolares/Lista de utiles 1° básico 2023.docx") }}" target="_blank"><i class="fa-solid fa-cloud-arrow-down"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>2do Básico</td>
                                        <td align="center"><a class="btn btn-sm btn-success" href="{{ asset("archivos/lista-utiles-escolares/Lista de utiles 2° basico 2023.docx") }}" target="_blank"><i class="fa-solid fa-cloud-arrow-down"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>3ro Básico</td>
                                        <td align="center"><a class="btn btn-sm btn-success" href="{{ asset("archivos/lista-utiles-escolares/Lista de utiles 3° básico 2023.docx") }}" target="_blank"><i class="fa-solid fa-cloud-arrow-down"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>4to Básico</td>
                                        <td align="center"><a class="btn btn-sm btn-success" href="{{ asset("archivos/lista-utiles-escolares/Lista de utiles 4° básico 2023.docx") }}" target="_blank"><i class="fa-solid fa-cloud-arrow-down"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>5to Básico</td>
                                        <td align="center"><a class="btn btn-sm btn-success" href="{{ asset("archivos/lista-utiles-escolares/Lista de utiles 5° basico 2023.docx") }}" target="_blank"><i class="fa-solid fa-cloud-arrow-down"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>6to Básico</td>
                                        <td align="center"><a class="btn btn-sm btn-success" href="{{ asset("archivos/lista-utiles-escolares/Lista de utiles 6° basico 2023.docx") }}" target="_blank"><i class="fa-solid fa-cloud-arrow-down"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>7mo Básico</td>
                                        <td align="center"><a class="btn btn-sm btn-success" href="{{ asset("archivos/lista-utiles-escolares/lista de utiles 7° básico 2023.docx") }}" target="_blank"><i class="fa-solid fa-cloud-arrow-down"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>8vo Básico</td>
                                        <td align="center"><a class="btn btn-sm btn-success" href="{{ asset("archivos/lista-utiles-escolares/lista de utiles 8° básico 2023.docx") }}" target="_blank"><i class="fa-solid fa-cloud-arrow-down"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
