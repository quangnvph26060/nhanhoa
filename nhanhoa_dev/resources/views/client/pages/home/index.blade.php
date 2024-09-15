@extends('client.layouts.master')

@section('content')
    @include('client.pages.home.breadcrumbs.section-service-nh')

    <!-- section-list-service -->
    @include('client.pages.home.breadcrumbs.section-list-service')
    <!-- section-list-service -->

    <!--section-register-service -->
    @include('client.pages.home.breadcrumbs.section-register-service')
    <!--section-register-service -->

    <!-- section-count-cline -->
    @include('client.pages.home.breadcrumbs.section-count-cline')
    <!-- section-count-cline -->

    <!-- section-partner -->
    @include('client.pages.home.breadcrumbs.section-partner')
    <!-- section-partner -->

    <!-- section-home_blogs -->
    @include('client.pages.home.breadcrumbs.section-home_blogs')
    <!-- section-home_blogs -->

    <!-- section-what-customers-about -->
    @include('client.include.section-what-customers-about')
    <!-- section-what-customers-about -->

    <!-- section-connect-office -->
    @include('client.include.section-connect-office')
    <!-- section-connect-office -->
@endsection
