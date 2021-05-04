@extends('admin.master.master')

@section('content')

    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Lista de Temporada</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="{{ route('admin.season.create') }}" class="btn btn-primary">Adicionar Temporada</a>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-view">
                                <table class="data-tables table movie_table " style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Temporada</th>
                                        <th>Numero do epdosio</th>
                                        <th>Nome do Epsodio</th>
                                        <th>Data do Epsodio</th>
                                        <th>Duração</th>
                                        <th>Ação</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($seasons))
                                        @foreach($seasons as $season)
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="iq-movie">
                                                            <a href="javascript:void(0);"><img src="../assets/images/show-thumb/08.jpg"
                                                            class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                                        </div>
                                                        <div class="media-body text-white text-left ml-3">
                                                            <p class="mb-0">{{ $season->season }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{$season->number_epsode}}</td>
                                                <td>{{$season->name_epsode}}</td>
                                                <td>{{$season->lancament_season}}</td>
                                                <td>{{$season->duracion_epsode}}</td>
                                                <td>
                                                    <div class="container">
                                                        <a>
                                                            <button class="btn btn-outline-success btn-sm">Visualizar</button>
                                                        </a>
                                                        <a href="{{ route('admin.season.edit', ['seasons' => $season->id]) }}">
                                                            <button class="btn btn-outline-light btn-sm">Editar</button>
                                                        </a>
                                                        <form method="POST" action="{{ route('admin.season.destroy', $season->id) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
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

