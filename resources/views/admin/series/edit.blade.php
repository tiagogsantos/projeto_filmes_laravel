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
                                <h4 class="card-title">Editar Série</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form action="{{ route('admin.series.update', ['series' => $series->id]) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="title" class="form-control" placeholder="Título"
                                               value="{{ old('title') ?? $series->title }}">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="form-control" name="language" id="exampleFormControlSelect1">
                                            <option selected disabled="">Idioma da Serie</option>
                                            <option value="Dublado" {{ (old('language') == 'Dublado' ? 'selected' : ($series->language == 'Dublado' ? 'selected' : '')) }}>Dublado</option>
                                            <option value="Legendado" {{ (old('language') == 'Legendado' ? 'selected' : ($series->language == 'Legendado' ? 'selected' : '')) }}>Legendado</option>
                                            <option value="Espanhol" {{ (old('language') == 'Espanhol' ? 'selected' : ($series->language == 'Espanhol' ? 'selected' : '')) }}>Espanhol</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="form-control" name="category" id="exampleFormControlSelect2">
                                            <option disabled="">Categorias</option>
                                            <option value="Ação" {{ (old('category') == 'Ação' ? 'selected' : ($series->category == 'Ação' ? 'selected' : '')) }}>Ação</option>
                                            <option value="Comédia" {{ (old('category') == 'Comédia' ? 'selected' : ($series->category == 'Comédia' ? 'selected' : '')) }}>Comédia</option>
                                            <option value="Crime" {{ (old('category') == 'Crime' ? 'selected' : ($series->category == 'Crime' ? 'selected' : '')) }}>Policial</option>
                                            <option value="Drama" {{ (old('category') == 'Drama' ? 'selected' : ($series->category == 'Drama' ? 'selected' : '')) }}>Drama</option>
                                            <option value="Terror" {{ (old('category') == 'Terror' ? 'selected' : ($series->category == 'Terror' ? 'selected' : '')) }}>Terror</option>
                                            <option value="Românce" {{ (old('category') == 'Românce' ? 'selected' : ($series->category == 'Românce' ? 'selected' : '')) }}>Românce</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="form-control" name="quality" id="exampleFormControlSelect3">
                                            <option disabled="">Qualidade de Imagem</option>
                                            <option value="full_hd" {{ (old('quality') == 'full_hd' ? 'selected' : ($series->quality == 'full_hd' ? 'selected' : '')) }}>FULLHD</option>
                                            <option value="hd" {{ (old('quality') == 'hd' ? 'selected' : ($series->quality == 'hd' ? 'selected' : '')) }}>HD</option>
                                            <option value="4k" {{ (old('quality') == '4k' ? 'selected' : ($series->quality == '4k' ? 'selected' : '')) }}>4K</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form_gallery form-group">
                                        <label id="gallery2" for="form_gallery-upload">Upload Image</label>
                                        <input data-name="#gallery2" id="form_gallery-upload" name="gallery"
                                               class="form_gallery-upload" type="file" accept=".png, .jpg, .jpeg">
                                    </div>
                                    <div class="col-md-6 form_gallery form-group">
                                        <label id="gallery3" for="show2">Upload Capa</label>
                                        <input data-name="#gallery3" id="show2" name="gallery"
                                               class="form_gallery-upload"
                                               type="file" accept=".png, .jpg, .jpeg">
                                    </div>
                                    <div class="col-12 form-group">
                                 <textarea id="text1" name="sinopse" rows="5" class="form-control"
                                           placeholder="Sinopse"> {{ old($series->sinopse) ?? ($series->sinopse)  }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <button type="submit" class="btn btn-outline-success">Atualizar série</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
