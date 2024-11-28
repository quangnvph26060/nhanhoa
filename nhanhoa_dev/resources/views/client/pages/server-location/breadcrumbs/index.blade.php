@extends('client.layouts.master')


@section('content')
    @include('client.include.service-breadcrumbs')

    @include('client.include.section-service-banner-02')

    @include('client.include.section-table-dedicated-server')

    @include('client.include.section-why-cloud')

    @include('client.include.section-what-customers-about')

    @include('client.include.section-faq-service')

    @include('client.include.section-we-hosting')

    @include('client.include.section-connect-office')

    @include('client.include.popup-re-call')
@endsection
