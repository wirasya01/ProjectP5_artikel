<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="">
                Admin Web Artikel </a>
            <button class="navbar-toggler navbar-toggler-main" type="button" data-toggle="collapse" aria-expanded="false"
                aria-label="Toggle navigation" data-target="#sectionsNav">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="sectionsNav">
            <ul class="navbar-nav ml-auto">
                <li class="button-container dropdown nav-item mr-lg-2">
                    <a href target="_blank" class="btn btn-info btn-round btn-block dropdown-toggle"
                        data-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <form method="get" action="https://material-blog-pro-laravel.creative-tim.com/login"
                            style="display: none;" id="loginForm">
                            <input type="text" value name="role" id="roleType">
                        </form>
                        <a href="{{ url('login') }}" class="dropdown-item mx-2"
                            onclick="document.getElementById('roleType').value='1';
                                                                       document.getElementById('loginForm').submit();">
                            <strong>Login</strong>
                        </a>
                        <a href="{{ url('register') }}" class="dropdown-item mx-2"
                            onclick="document.getElementById('roleType').value='2';
                                                                       document.getElementById('loginForm').submit();">
                            <strong>Register</strong>&nbsp;
                        </a>
                        <a href="{{ url('logout') }}" class="dropdown-item mx-2"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            document.getElementById('loginForm').submit();">
                            <strong>Logout</strong>&nbsp;
                        </a>
                    </div>
                </li>
                {{-- form untuk logout --}}
                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
</nav>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
        style="display:none;visibility:hidden">
    </iframe></noscript>
<noscript>
    <img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
</noscript>

<div class="page-header header-filter header-small" data-parallax="true"
    style="background-image: url('https://images.pexels.com/photos/22668022/pexels-photo-22668022.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=500&w=1500');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h1 class="title">
                    Welcome To <br class="d-none d-xl-block"> Web Artikel
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation" data-target="#pagesNav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="pagesNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('artikel.index') }}"
                            class="nav-link"><strong>Artikel</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('kategori.index') }}"
                            class="nav-link"><strong>Kategori</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('penulis.index') }}"
                            class="nav-link"><strong>Penulis</strong></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="https://material-blog-pro-laravel.creative-tim.com/category/technology"
                            class="nav-link"><strong>Technology</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://material-blog-pro-laravel.creative-tim.com/category/fashion"
                            class="nav-link"><strong>Fashion</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://material-blog-pro-laravel.creative-tim.com/category/health"
                            class="nav-link"><strong>Health</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://material-blog-pro-laravel.creative-tim.com/all_articles"
                            class="nav-link"><strong>All Articles</strong></a>
                    </li> --}}
                </ul>
                <form action="https://material-blog-pro-laravel.creative-tim.com/search" class="form-inline ml-auto">
                    <div class="form-group no-border nav-category-search">
                        <input type="text" class="form-control" name="searching" placeholder="Search">
                    </div>
                    <button type="submit" style="margin-right: 30px;" class="btn btn-white btn-just-icon btn-round">
                        <i class="material-icons">search</i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
