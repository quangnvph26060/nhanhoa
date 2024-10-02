@extends('client.layouts.master')

@section('content')
    @include('client.include.service-breadcrumbs')

    @include('client.include.section-service-banner-vps-qt')

    @include('client.pages.cloud-international.breadcrumbs.section-table-price-server')

    @include('client.include.section-internal-feature-sever')

    @include('client.include.section-why-cloud-quoc-te')

    @include('client.include.section-what-customers-about')

    @include('client.include.section-faq-service')

    @include('client.include.section-we-hosting')

    @include('client.include.section-connect-office')

    @include('client.include.popup-re-call')
@endsection


@section('script')
    <script src="{{ asset('client/assets/js/cloud-vps.js') }}"></script>

    {{-- <script src="{{ asset('client/assets/js/js_service_2023.js') }}"></script> --}}
@endsection
