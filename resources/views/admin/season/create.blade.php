@extends('admin.master.master')

@section('content')

    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            @if($errors->all())
                @foreach($errors->all() as $error)
                    @message(['color' => 'orange'])
                    <div class="alert alert-danger" role="alert">
                        <p class="icon-asterisk">{{ $error }}</p>
                    </div>
                    @endmessage
                @endforeach
            @endif

            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-body">
                            <form action="{{ route('admin.season.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="text-white mb-3">Adicionar Temporada</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <select class="form-control" name="series"
                                                        id="exampleFormControlSelect5">
                                                    <option>Selecione a Série</option>
                                                    @foreach($series as $serie)
                                                        @if(!empty($selected))
                                                            <option value="{{ $serie->id }}" {{ ($serie->id === $selected->id ? 'selected' : '')  }}> {{ $serie->title }} </option>
                                                        @else
                                                            <option value="{{ $serie->id }}"> {{ $serie->title }} </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <select class="form-control" name="season"
                                                        id="exampleFormControlSelect5">
                                                    <option disabled="">Selecione a temporada</option>
                                                    <option value="season1">Temporada 1</option>
                                                    <option value="season2">Temporada 2</option>
                                                    <option value="season3">Temporada 3</option>
                                                    <option value="season4">Temporada 4</option>
                                                    <option value="season5">Temporada 5</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input type="text" class="form-control" name="number_epsode"
                                                       placeholder="Numero do epsodio">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input type="text" class="form-control" name="name_epsode"
                                                       placeholder="Nome do epsodio">
                                            </div>
                                            <div class="col-md-6 form_gallery form-group">
                                                <label id="gallery4" for="show3">Upload Image</label>
                                                <input data-name="#gallery4" id="show3" name="gallery"
                                                       class="form_gallery-upload" type="file"
                                                       accept=".png, .jpg, .jpeg">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input type="text" class="form-control" name="duracion_epsode"
                                                       placeholder="Minutos do epsodio">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input class="form-control" id="lancament"
                                                       placeholder="Data de lançamento" name="lancament_season"
                                                       data-mask="00/00/0000" data-mask-reverse="true">
                                            </div>

                                            <div class="col-12 form-group">
                                                <label>Sinopse do epsodio:</label>
                                                <textarea id="text" rows="5" class="form-control"
                                                          placeholder="Description"
                                                          name="description_epsode"> </textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                <label>Link para Donwload</label>

                                                <textarea id="text" rows="5" class="form-control"
                                                          placeholder="Insira a URL para Donwload"
                                                          name="url_link"> </textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12 form-group mt-4">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                        <button type="reset" class="btn btn-danger">Cancelar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper END -->

@endsection
