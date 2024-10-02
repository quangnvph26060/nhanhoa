@extends('client.layouts.master')

<style>
    *:not(.description) {
        color: #000 !important;
        font-weight: 300 !important;
    }

    .main-menu ul.navbar-nav>li.nav-item>ul.entry-menu>li>a>.item-menu>.icon img {
        max-width: 25px !important;
        margin-top: 8px !important;
    }
</style>

@section('content')
@include('client/pages/server-backup/breadcrumbs/i3zmkdh')

@include('client/pages/server-backup/breadcrumbs/5p90ibo')

@include('client/pages/server-backup/breadcrumbs/o0zlwe1')

@include('client/pages/server-backup/breadcrumbs/txjuimo')

@include('client/pages/server-backup/breadcrumbs/pvm08s7')

@include('client/pages/server-backup/breadcrumbs/8m4jchl')

@include('client/pages/server-backup/breadcrumbs/epyskqg')
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('client/assets/css/custom.css')}}">
@endsection
