<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="icon" href="{{ asset('assets/img/kaiadmin/favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('login/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('login/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('login/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('login/css/style.css') }}">

    <title>Login</title>
</head>

<body>


    <div class="d-md-flex half">
        <div class="bg" style="background-image: url('{{ asset('login/images/bg_1.jpg') }}');"></div>
        <div class="contents">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="form-block mx-auto">
                            <div class="text-center mb-5">
                                <h3 class="text-uppercase">Login to <strong>Colorlib</strong></h3>
                            </div>
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group first">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" placeholder="your-email@gmail.com"
                                        name="email" id="username">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Your Password"
                                        name="password" id="password">
                                </div>

                                <div class="d-sm-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>

                                <input type="submit" value="Log In" class="btn btn-block py-2 btn-primary">

                                <span class="text-center my-3 d-block">or</span>


                                <div class="">
                                    <a href="{{ route('auth.google') }}" class="btn btn-block py-2 btn-facebook">
                                        <span class="icon-facebook mr-3"></span> Login with Facebook
                                    </a>
                                    <a href="{{ route('auth.google') }}" class="btn btn-block py-2 btn-google">
                                        <span class="icon-google mr-3"></span> Login with Google
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('login/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('login/js/popper.min.js') }}"></script>
    <script src="{{ asset('login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('login/js/main.js') }}"></script>
</body>

</html>
