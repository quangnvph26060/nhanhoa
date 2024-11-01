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

<body>
    <style>
        body {
            overflow-x: hidden;
        }

        /* Định dạng chung cho icon Zalo */
        .zalo-icon {
            position: fixed;
            bottom: 20px;
            /* Cách mép dưới 20px */
            right: 20px;
            /* Cách mép phải 20px */
            width: 60px;
            /* Chiều rộng của icon */
            height: 60px;
            /* Chiều cao của icon */
            background-color: #0084ff;
            /* Màu nền cho icon */
            border-radius: 50%;
            /* Tạo hình tròn */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            /* Bóng đổ cho icon */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1000;

        }


        .zalo-icon img {
            width: 70%;

            height: 70%;
            border-radius: 50%;
        }

        .zalo-icon:hover {
            transform: scale(1.1);

            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.4);
        }
    </style>

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
        <!-- HTML -->
        <div class="zalo-icon">
            <a href="https://zalo.me/{{ $config->phone_hotline }}" target="_blank"
                style="display: block; width: 100%; height: 100%;">
                <img alt="Zalo" src="https://sgomedia.vn/wp-content/plugins/button-contact-vr/img/zalo.png">
            </a>

        </div>

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
