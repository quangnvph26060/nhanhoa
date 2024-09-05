@if (!Request::routeIs('page.news'))
<link rel="stylesheet" href="{{ asset('client/assets/css/bootstrap/bootstrap.min.css') }}">
@endif

<link rel="stylesheet" href="{{asset('client/assets/css/vfone-call.css')}}">


<link rel="stylesheet" href="{{ asset('client/assets/css/main.css') }}">

@yield('style')
