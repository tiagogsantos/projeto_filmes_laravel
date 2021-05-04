@extends('admin.master.master')

@section('content')

<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Listas de filmes cadastrados</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="{{ route('admin.films.create') }}" class="btn btn-primary">Adicionar filme</a>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-view">
                            <table class="data-tables table movie_table " style="width:100%">
                                <thead>
                                <tr>
                                    <th>Nome do Filme</th>
                                    <th>Categoria</th>
                                    <th>Ano de Lançamento</th>
                                    <th style="width: 30%;">Sinopse</th>
                                    <th style="width: 30%;">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($films))
                                    @foreach($films as $film)
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="iq-movie">
                                                        <a href="javascript:void(0);"><img
                                                                src="../assets/images/movie-thumb/06.jpg"
                                                                class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                                    </div>
                                                    <div class="media-body text-white text-left ml-3">
                                                        <p class="mb-0">{{ $film->title }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$film->films_category}}</td>
                                            <td>{{$film->lancament}}</td>
                                            <td>
                                                <p>{{ $film->sinopse }}</p>
                                            </td>
                                            <td>
                                                <div class="container">
                                                    <a>
                                                        <button class="btn btn-outline-success btn-sm">Visualizar</button>
                                                    </a>
                                                    <a href="{{ route('admin.films.edit', ['films' => $film->id]) }}">
                                                        <button class="btn btn-outline-light btn-sm">Editar</button>
                                                    </a>
                                                    <form method="POST" action="{{ route('admin.films.destroy', $film->id) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete">
                                                        <button class="btn btn-outline-warning btn-sm">Excluir</button>
                                                    </form>
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

@endsection
