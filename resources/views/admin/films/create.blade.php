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
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Adicionar Filme</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form action="{{ route('admin.films.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <input type="text" name="title" class="form-control" placeholder="Titulo do filme">
                                            </div>
                                            <div class="col-12 form_gallery form-group">
                                                <label id="gallery2" for="form_gallery-upload">Upload de Imagem</label>
                                                <input data-name="#gallery2" id="form_gallery-upload" class="form_gallery-upload"
                                                       type="file" accept=".png, .jpg, .jpeg">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <select class="form-control" name="films_category" id="exampleFormControlSelect1">
                                                    <option disabled="">Categorias</option>
                                                    <option value="Ação">Ação</option>
                                                    <option value="Comédia">Comédia</option>
                                                    <option value="Crime">Policial</option>
                                                    <option value="Drama">Drama</option>
                                                    <option value="Terror">Terror</option>
                                                    <option value="Românce">Românce</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <select class="form-control" name="quality_image" id="exampleFormControlSelect2">
                                                    <option disabled="">Qualidade de Imagem</option>
                                                    <option value="full_hd">FULLHD</option>
                                                    <option value="hd">HD</option>
                                                    <option value="4k">4K</option>
                                                </select>
                                            </div>
                                            <div class="col-12 form-group">
                                            <textarea id="text" name="sinopse" rows="5" class="form-control"
                                             placeholder="Sinopse"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <input type="text" id="lancament" id="lancament" name="lancament"  data-mask="00/00/0000" data-mask-reverse="true" class="form-control"
                                               placeholder="Data de lançamento">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <select class="form-control" name="language" id="exampleFormControlSelect3">
                                            <option selected disabled="">Idioma do filme</option>
                                            <option value="Dublado">Dublado</option>
                                            <option value="Legendado">Legendado</option>
                                            <option value="Espanhol">Espanhol</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <input type="text" name="duraction" class="form-control" placeholder="Duração de filme">
                                    </div>
                                    <div class="col-12 form-group ">
                                        <button type="submit" class="btn btn-primary">Criar filme</button>
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
