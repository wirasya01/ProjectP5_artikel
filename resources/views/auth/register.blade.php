<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76"
        href="https://material-blog-pro-laravel.creative-tim.com/material/img/apple-icon.png">
    <link rel="icon" type="image/png"
        href="https://material-blog-pro-laravel.creative-tim.com/material/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="canonical" href="https://www.creative-tim.com/product/material-blog-pro-laravel" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" />
    <title>Register Artikel Wrsya</title>
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://material-blog-pro-laravel.creative-tim.com/css/material-dashboard.css?v=2" rel="stylesheet" />
    <link href="https://material-blog-pro-laravel.creative-tim.com/material/demo/demo.css" rel="stylesheet" />
</head>

<body class="off-canvas-sidebar">
    <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://material-blog-pro-laravel.creative-tim.com">Artikel
                    Laravel</a>
                <button class="navbar-toggler navbar-toggler-main" type="button" data-toggle="collapse"
                    aria-expanded="false" aria-label="Toggle navigation" data-target="#sectionsNav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
        <div class="page-header login-page header-filter" filter-color="black"
            style="background-image: url('https://material-blog-pro-laravel.creative-tim.com/material/img/bg3.jpg'); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="card card-login card-hidden">
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Register</h4>
                                <div class="social-line">
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">face</i>
                                                </span>
                                            </div>
                                            <input type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus
                                                placeholder="Name">
                                        </div>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">email</i>
                                                </span>
                                            </div>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="Email Address">
                                        </div>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                            </div>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password"
                                                placeholder="Password">
                                        </div>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">lock</i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control" name="password_confirmation"
                                                required autocomplete="new-password" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <p class="text-dark">Already have an account? <a
                                                    href="{{ route('login') }}" class="text-primary">Login</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">Creative Tim</a>
                            </li>
                            <li>
                                <a href="https://creative-tim.com/presentation">About Us</a>
                            </li>
                            <li>
                                <a href="https://blog.creative-tim.com">Blog</a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license">Licenses</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.updivision.com">UPDIVISION</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> and <a
                            href="https://www.updivision.com" target="_blank">UPDIVISION</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/core/jquery.min.js"></script>
    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/core/popper.min.js"></script>
    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/core/bootstrap-material-design.min.js">
    </script>
    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/perfect-scrollbar.jquery.min.js">
    </script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/moment.min.js"></script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/sweetalert2.js"></script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/jquery.validate.min.js"></script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/jquery.bootstrap-wizard.js">
    </script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/bootstrap-selectpicker.js"></script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/bootstrap-datetimepicker.min.js">
    </script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/jquery.dataTables.min.js"></script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/bootstrap-tagsinput.js"></script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/jasny-bootstrap.min.js"></script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/fullcalendar.min.js"></script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/jquery-jvectormap.js"></script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/quill.min.js"></script>
    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/nouislider.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/arrive.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/chartist.min.js"></script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/plugins/bootstrap-notify.js"></script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/material-dashboard.js?v=2.2.0"
        type="text/javascript"></script>

    <script src="https://material-blog-pro-laravel.creative-tim.com/material/demo/demo.js"></script>
    <script src="https://material-blog-pro-laravel.creative-tim.com/material/js/application.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js">
    </script>
    <script>
        $(document).ready(function() {});
    </script>

    <script>
        function setSlug(element, slugElement) {
            let text = $(element).val();
            let slug = text.trim().replace(/\s+/g, '-').toLowerCase().replace(/[^0-9a-zA-Z ]/g, '-').replace(/-+/g, '-');
            if (slug[slug.length - 1] === '-') {
                slug = slug.substring(0, slug.length - 1);
            }

            $(slugElement).val(slug);
        }
    </script>
    <script>
        $(document).ready(function() {
            md.checkFullPageBackgroundImage();
            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700);
        });
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vef91dfe02fce4ee0ad053f6de4f175db1715022073587"
        integrity="sha512-sDIX0kl85v1Cl5tu4WGLZCpH/dV9OHbA4YlKCuCiMmOQIk4buzoYDZSFj+TvC71mOBLh8CDC/REgE0GX0xcbjA=="
        data-cf-beacon='{"rayId":"88c6a47a0a853dc9","version":"2024.4.1","token":"1b7cbb72744b40c580f8633c6b62637e"}'
        crossorigin="anonymous"></script>
</body>

</html>
