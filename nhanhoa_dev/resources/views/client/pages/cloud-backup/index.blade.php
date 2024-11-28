@extends('client.layouts.master')


@section('content')

    @include('client.include.service-breadcrumbs')

    @include('client.include.section-service-banner-1')

    @include('client.pages.cloud-backup.breadcrumbs.section-note-service-domail')

    @include('client.pages.cloud-backup.breadcrumbs.section-table-price-server')

    @include('client.pages.cloud-backup.breadcrumbs.section-why-cloud')

    @include('client.pages.cloud-backup.breadcrumbs.section-note-service-domail2')

    @include('client.include.section-faq-service')

    @include('client.include.popup-re-call')

    @include('client.include.section-connect-office')
@endsection
