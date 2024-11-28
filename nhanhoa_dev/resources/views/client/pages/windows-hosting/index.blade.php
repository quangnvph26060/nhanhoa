@extends('client.layouts.master')


@section('content')
    <!-- section-service-banner-->
    @include('client.include.section-service-banner-1')
    <!-- section-service-banner-->


    <!-- section-table-price-hosting-->
    @include('client.include.section-table-price-hosting')
    <!-- section-table-price-hosting-->


    <!-- section-why-cloud-->
    @include('client.include.section-why-cloud')
    <!-- section-why-cloud-->


    @include('client.include.section-what-customers-about')


    <!-- section-we-hosting-->
    @include('client.include.section-we-hosting')
    <!-- section-we-hosting-->


    <!-- popup-re-call-->
    @include('client.include.popup-re-call')
    <!-- popup-re-call-->

    @include('client.include.section-connect-office')
@endsection

