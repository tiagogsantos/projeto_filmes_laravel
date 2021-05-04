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
                            <h4 class="card-title">Lista de Series</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="{{ route('admin.series.create') }}" class="btn btn-primary">Adicionar series</a>
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
@endsection

