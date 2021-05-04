<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">

    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico')}} " />

    <link rel="stylesheet" href="{{ url(mix('front/assets/css/bootstrap.min.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('front/assets/css/dataTables.bootstrap4.min.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('front/assets/css/typography.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('front/assets/css/style.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('front/assets/css/responsive.css')) }}">
    <!--datatable CSS -->

    @hasSection('css')
        @yield('css')
    @endif

    <link rel="icon" type="image/png" href="{{ url(asset('backend/assets/images/favicon.png')) }}"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Seger - Site Control</title>
</head>
<body>

<div class="ajax_response"></div>

<section class="sign-in-page">
    <div class="container">
        <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-lg-5 col-md-12 align-self-center">
                <div class="sign-user_card ">
                    <div class="sign-in-page-data">
                        <div class="sign-in-from w-100 m-auto">
                            <h3 class="mb-3 text-center">Entrar na Seger Streammer</h3>

                            <form name="login" action="{{ route('admin.login.do') }}" method="post" autocomplete="off">

                                <div class="form-group">
                                    <input type="text" name="email" class="form-control mb-0" placeholder="Digite seu e-mail">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_check" class="form-control mb-0" placeholder="Digite a sua senha">
                                </div>
                                <div class="sign-info">
                                    <button type="submit" class="btn btn-primary">Entrar</button>

                                    <div class="custom-control custom-checkbox d-inline-block">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Lembrar-me</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="d-flex justify-content-center links">
                            Ainda não tem conta <a href="sign-up.html" class="text-primary ml-2">Cadastrar-se</a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            <a href="pages-recoverpw.html" class="f-link">Deseja resetar a sua senha?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign in END -->
        <!-- color-customizer -->
    </div>
</section>

<script src="{{ url(mix('front/assets/js/jquery.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/login.js')) }}"></script>

<style>

    .iq-card-block.iq-card-height {
        height: calc(50% - 30px);
    }

</style>


</body>
</html>
