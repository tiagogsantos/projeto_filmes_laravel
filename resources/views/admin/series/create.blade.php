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
                                <h4 class="card-title">Adicionar Séries</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form action=" {{ route('admin.series.store') }}" method="post">

                                @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="title" class="form-control" placeholder="Título">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="form-control" name="language" id="exampleFormControlSelect1">
                                            <option selected disabled="">Idioma da Serie</option>
                                            <option value="Dublado">Dublado</option>
                                            <option value="Legendado">Legendado</option>
                                            <option value="Espanhol">Espanhol</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="form-control" name="category" id="exampleFormControlSelect2">
                                            <option disabled="">Categorias</option>
                                            <option value="Ação">Ação</option>
                                            <option value="Comédia">Comédia</option>
                                            <option value="Crime">Policial</option>
                                            <option value="Drama">Drama</option>
                                            <option value="Terror">Terror</option>
                                            <option value="Românce">Românce</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="form-control" name="quality" id="exampleFormControlSelect3">
                                            <option disabled="">Qualidade de Imagem</option>
                                            <option value="full_hd">FULLHD</option>
                                            <option value="hd">HD</option>
                                            <option value="4k">4K</option>
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
                                           placeholder="Sinopse"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <button type="submit" class="btn btn-primary">Criar série</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Wrapper END -->

@endsection
