@extends('client.layouts.master')

@section('content')
    <!-- section-service-banner-->
    @include('client.include.section-service-banner-hosting')
    <!-- section-service-banner-->


    <!-- section-table-price-hosting-->
    @include('client.include.section-table-price-hosting')
    <!-- section-table-price-hosting-->


   <!-- section-why-cloud-->
    @include('client.include.section-why-cloud')
    <!-- section-why-cloud-->


  <!-- section-why-cloud-->
    @include('client.pages.linux-hosting.breadcrumbs.section-service-email-02')
    <!-- section-why-cloud-->


     <!-- section-faq-service-->
    @include('client.include.section-faq-service')
    <!-- section-faq-service-->


    @include('client.include.section-what-customers-about')


     <!-- section-we-hosting-->
   @include('client.include.section-we-hosting')
   <!-- section-we-hosting-->


  <!-- popup-re-call-->
   @include('client.include.popup-re-call')
   <!-- popup-re-call-->


    @include('client.include.section-connect-office')
@endsection
