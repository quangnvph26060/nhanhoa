<!doctype html>
<html lang="en">

<head>
    <title>{{ isset($config->store_name) ? $config->store_name : '1sOnline' }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" href="{{ asset($config->icon) }}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- Start Style -->
    @include('client.layouts.partials.style')
    <script src="{{ asset('validator/validator.js') }}"></script>
    <!-- End Style -->

</head>

<body >

    <header>
        <div class="header-top fix_nav {{ request()->routeIs('page.domain-registration') ? 'bg-light' : '' }}">
            <div class="container">

                <!-- Start Header Web -->
                @include('client/layouts/partials/header-web')
                <!-- End Header Web -->

                <!-- Start Header Mobile -->
                @include('client/layouts/partials/header-mobile')
                <!-- End Header Mobile -->
            </div>
        </div>
    </header>

    <main class="skin-service view-groupemail">
        <!-- Start Content -->
        @yield('content')
        <!-- End Content -->
    </main>

    <footer class="footer-idx">
        <!-- Start Footer Top -->
        @include('client.layouts.partials.footer-top')
        <!-- End Footer Top -->

        <!-- Start Footer Bottom -->
        @include('client.layouts.partials.footer-bottom')
        <!-- End Footer Bottom -->
    </footer>


    <!-- Start Script -->
    @include('client.layouts.partials.script')
    <!-- End Script -->

    @include('client.include.section-vfone')

</body>

</html>
