<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Seger Streamer - Filmes para Downloads</title>
    <!-- Favicon -->
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

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>


<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="{{route('admin.home')}}" class="header-logo">
            <img src="{{ asset('front/assets/img/logo.png') }}" class="img-fluid rounded-normal" alt="">
            <div class="logo-title">
                <span class="text-primary text-uppercase">Seger Streamer</span>
            </div>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="las la-bars"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li><a href="" class="text-primary"><i class="ri-arrow-right-line"></i><span>Visitar site</span></a></li>
                <li class="active active-menu"><a href="{{ route('admin.home') }}" class="iq-waves-effect"><i class="las la-home iq-arrow-left"></i><span>Dashboard</span></a></li>

                <li>
                    <a href="#movie" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Filmes</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="movie" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{ route('admin.films.create') }}"><i class="las la-user-plus"></i>Adicionar Filmes</a></li>
                        <li><a href="{{ route('admin.films.index') }}"><i class="las la-eye"></i>Lista de Filmes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#show" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                            class="las la-film"></i><span>Séries</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="show" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href=" {{ route('admin.series.create') }}"><i class="las la-user-plus"></i>Adicionar Séries</a></li>
                        <li><a href="{{ route('admin.series.index') }}"><i class="las la-eye"></i>Lista de Séries</a></li>
                        <li><a href="{{ route('admin.season.index') }}"><i class="las la-eye"></i>Listar Temporada</a></li>
                        <li><a href="{{ route('admin.season.create') }}"><i class="las la-eye"></i>Adicionar Temporada</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-menu-bt d-flex align-items-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="las la-bars"></i></div>
                </div>
                <div class="iq-navbar-logo d-flex justify-content-between">
                    <a href="{{ route('admin.home') }}" class="header-logo">
                        <img src="{{ asset('front/assets/img/logo.png') }}" class="img-fluid rounded-normal" alt="">
                        <div class="logo-title">
                            <span class="text-primary text-uppercase">Seger Streammer</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="iq-search-bar ml-auto">
                <form action="#" class="searchbox">
                    <input type="text" class="text search-input" placeholder="Procurar aqui...">
                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list">
                    <li class="nav-item nav-icon search-content">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                            <i class="ri-search-line"></i>
                        </a>
                        <form action="#" class="search-box p-0">
                            <input type="text" class="text search-input" placeholder="Type here to search...">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        </form>
                    </li>
                    <li class="nav-item nav-icon">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                            <i class="ri-notification-2-line"></i>
                            <span class="bg-primary dots"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <a class="text-red icon-sign-out" href="{{ route('admin.logout') }}">Sair</a>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Emma Watson Barry</h6>
                                                <small class="float-right font-size-12">Just Now</small>
                                                <p class="mb-0">95 MB</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="assets/images/user/02.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">New customer is join</h6>
                                                <small class="float-right font-size-12">5 days ago</small>
                                                <p class="mb-0">Cyst Barry</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="assets/images/user/03.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Two customer is left</h6>
                                                <small class="float-right font-size-12">2 days ago</small>
                                                <p class="mb-0">Cyst Barry</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="assets/images/user/04.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                <small class="float-right font-size-12">3 days ago</small>
                                                <p class="mb-0">Cyst Barry</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav-icon dropdown">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                            <i class="ri-mail-line"></i>
                            <span class="bg-primary dots"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="assets/images/user/01.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Barry Emma Watson</h6>
                                                <small class="float-left font-size-12">13 Jun</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="assets/images/user/02.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                <small class="float-left font-size-12">20 Apr</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="assets/images/user/03.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Why do we use it?</h6>
                                                <small class="float-left font-size-12">30 Jun</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="assets/images/user/04.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Variations Passages</h6>
                                                <small class="float-left font-size-12">12 Sep</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="assets/images/user/05.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                <small class="float-left font-size-12">5 Dec</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="line-height pt-3">

                            <button class="btn btn-white">
                            <a class="text-red" href="{{ route('admin.logout') }}">Sair</a></button>

                        <div class="iq-sub-dropdown iq-user-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white line-height">Hello Barry Tech</h5>
                                        <span class="text-white font-size-12">Available</span>
                                    </div>
                                    <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-file-user-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">My Profile</h6>
                                                <p class="mb-0 font-size-12">View personal profile details.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-profile-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Edit Profile</h6>
                                                <p class="mb-0 font-size-12">Modify your personal details.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-account-box-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Account settings</h6>
                                                <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-lock-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Privacy Settings</h6>
                                                <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                        <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div>
    @yield('content')
</div>

<script src="{{ url(mix('front/assets/js/jquery.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/login.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/popper.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/bootstrap.min.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/jquery.appear.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/countdown.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/waypoints.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/jquery.counterup.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/wow.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/select2.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/slick.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/owl.carousel.min.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/jquery.magnific-popup.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/smooth-scrollbar.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/chart-custom.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/flatpickr.min.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/jquery.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/jquery.form.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/jquery.mask.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/custom.js')) }}"></script>

@hasSection('js')
    @yield('js')
@endif

</body>
</html>
