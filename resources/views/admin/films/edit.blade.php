@extends('admin.master.master')

@section('content')

<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container-fluid">

        @if($errors->all())
            @foreach($errors->all() as $error)
                @message(['color' => 'orange'])
                <p class="icon-asterisk">{{$error}}</p>
                @endmessage
            @endforeach
        @endif

        @if(session()->exists('message'))
            @message(['color' => session()->get('color')])
            <p class="icon-asterisk">{{ session()->get('message') }}</p>
            @endmessage
        @endif

        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Editar Filme</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form action="{{ route('admin.films.update', ['films' => $films->id]) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <input type="text" name="title" class="form-control" placeholder="Titulo do filme"
                                            value="{{ old('title') ?? $films->title }}">
                                        </div>
                                        <div class="col-12 form_gallery form-group">
                                            <label id="gallery2" for="form_gallery-upload">Upload de Imagem</label>
                                            <input data-name="#gallery2" id="form_gallery-upload" class="form_gallery-upload"
                                                   type="file" accept=".png, .jpg, .jpeg">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <select class="form-control" name="films_category" id="exampleFormControlSelect1">
                                                <option disabled="">Categorias</option>
                                                <option value="Ação" {{ old('films_category') == 'Ação' ? 'selected' : ($films->films_category == 'Ação' ? 'selected' : '') }}>Ação</option>
                                                <option value="Comédia" {{ old('films_category') == 'Comédia' ? 'selected' : ($films->films_category == 'Comédia' ? 'selected' : '') }}>Comédia</option>
                                                <option value="Crime" {{ old('films_category') == 'Crime' ? 'selected' :   ($films->films_category == 'Crime' ? 'selected' : '' ) }}>Policial</option>
                                                <option value="Drama" {{ old('films_category') == 'Drama' ? 'selected' : ($films->films_category == 'Drama' ? 'selected' : '') }}>Drama</option>
                                                <option value="Terror" {{ old('films_category') == 'Terror' ? 'selected' : ($films->films_category == 'Terror' ? 'selected' : '') }}>Terror</option>
                                                <option value="Românce" {{ old('films_category') == 'Românce' ? 'selected' : ($films->films_category == 'Românce' ? 'selected' : '') }}>Românce</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <select class="form-control" name="quality_image" id="exampleFormControlSelect2">
                                                <option disabled="">Qualidade de Imagem</option>
                                                <option value="full_hd" {{ old('films_category') == 'full_hd' ? 'selected' : ($films->films_category) == 'full_hd' ? 'selected' : '' }} >FULLHD</option>
                                                <option value="hd" {{ old('films_category') == 'hd' ? 'selected' : ($films->films_category) == 'hd' ? 'selected' : '' }}>HD</option>
                                                <option value="4k" {{ old('films_category') == '4k' ? 'selected' : ($films->films_category) == '4k' ? 'selected' : '' }}>4K</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-group">
                                        <textarea id="text" name="sinopse" rows="5" class="form-control"
                                                  placeholder="Sinopse"> {{ old('lancament') ?? $films->sinopse }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="d-block position-relative">
                                        <div class="form_video-upload">
                                            <input type="file" accept="video/mp4,video/x-m4v,video/*" multiple>
                                            <p>Upload de video</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input type="text" name="lancament" class="form-control" placeholder="Ano de lançamento" value="{{ old('lancament') ?? $films->lancament }}">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" name="language" id="exampleFormControlSelect3">
                                        <option selected disabled="">Idioma do filme</option>
                                        <option value="Dublado" {{ old('language') == 'Dublado' ? 'selected' : ($films->language) == 'Dublado' ? 'selected' : '' }}>Dublado</option>
                                        <option value="Legendado" {{ old('language' == 'Legendado' ? 'selected' : ($films->language) == 'Legendado' ? 'selected' : '') }}>Legendado</option>
                                        <option value="Espanhol" {{ old('language' == 'Espanhol' ? 'selected' : ($films->language) == 'Espanhol' ? 'selected' : '') }}>Espanhol</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <input type="text" name="duraction" class="form-control" placeholder="Duração de filme" value=" {{ old('duraction') ?? $films->duraction }}">
                                </div>
                                <div class="col-12 form-group ">
                                    <button type="submit" class="btn btn-outline-success">Atualizar filme</button>
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
