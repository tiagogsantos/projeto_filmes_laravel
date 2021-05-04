@extends('admin.master.master')

<div class="wrapper">

@section('content')

        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between align-items-center">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Melhores Filmes</h4>
                                </div>
                                <a href="{{ route('admin.films.create') }}"><button class="btn btn-outline-success">Adicionar novo filme</button></a>
                                <div id="top-rated-item-slick-arrow" class="slick-aerrow-block"></div>
                            </div>
                            <div class="iq-card-body">

                                <ul class="list-unstyled row top-rated-item mb-0">
                                    @foreach($films as $film)
                                    <li class="col-sm-6 col-lg-4 col-xl-4 iq-rated-box">
                                        <div class="iq-card mb-0">
                                            <div class="iq-card-body p-0">
                                                <div class="iq-thumb">
                                                    <a href="javascript:void(0)">
                                                        <img src="{{ asset('front/assets/img/dashboard/01.jpg') }}" class="img-fluid w-100 img-border-radius" alt="">
                                                    </a>
                                                </div>
                                                <div class="iq-feature-list">
                                                    <h6 class="font-weight-600 mb-0">{{ $film->title }}</h6>
                                                    <p class="mb-0 mt-2">Categoria: {{ $film->quality_image }} / {{ $film->language }}</p>
                                                    <div class=" my-2">
                                                        <a><button class="btn btn-outline-success btn-sm">Visualiar</button></a>&nbsp;
                                                        <a href="{{ route('admin.films.edit', ['films' => $film->id]) }}"><button class="btn btn-outline-light btn-sm">Editar</button></a>&nbsp;

                                                        <form method="POST" action="{{ route('admin.films.destroy', $film->id) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
                                                            @csrf
                                                            <input type="hidden" name="_method" value="delete">
                                                            <button class="btn btn-outline-warning btn-sm">Excluir</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Séries cadastradas Recentemente</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-view">
                                <table class="data-tables table movie_table " style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Série</th>
                                        <th>Qualidade</th>
                                        <th>Categoria</th>
                                        <th>Qualidade</th>
                                        <th>Idioma</th>
                                        <th style="width:30%">Sinopse</th>
                                        <th>Ação</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($series))
                                        @foreach($series as $serie)
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="iq-movie">
                                                            <a href="javascript:void(0);"><img src="../assets/images/show-thumb/08.jpg"
                                                                                               class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="media-body text-white text-left ml-3">
                                                            <p class="mb-0">{{ $serie->title }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $serie->quality }}</td>
                                                <td>{{ $serie->category }}</td>
                                                <td>{{ $serie->quality }}</td>
                                                <td>{{ $serie->language }}</td>
                                                <td>
                                                    <p>{{ $serie->sinopse }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="flex align-items-center list-user-action">
                                                        <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="View" href="#"><i class="lar la-eye"></i></a>

                                                        <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="Edit" href="{{ route('admin.series.edit', ['series' => $serie->id]) }}"><i class="las la-edit"></i></a>

                                                        <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="Delete" href="#"><i
                                                                class="las la-trash-alt"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
<!-- Wrapper END -->
<!-- Footer -->
<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                Copyright 2020 <a href="https://www.tiagogsantos.com.br">SegerStreamer</a> Todos os direitos reservados.
            </div>
        </div>
    </div>
</footer>




@endsection
