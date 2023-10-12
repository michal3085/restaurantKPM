@extends('_layout')

@section('content')

    <!-- ======= Hero Section ======= -->
        @include('main.sections._welcome')
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
            @include('main.sections._about')
        <!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
            @include('main.sections._why_us')
        <!-- End Why Us Section -->

        <!-- ======= Menu Section ======= -->
            @include('main.sections._menu')
        <!-- End Menu Section -->

        <!-- ======= Specials Section ======= -->
            @include('main.sections._specials')
        <!-- End Specials Section -->

        <!-- ======= Events Section ======= -->
            @include('main.sections._events')
        <!-- End Events Section -->

        <!-- ======= Book A Table Section ======= -->
            @include('main.sections._reservation')
        <!-- End Book A Table Section -->

        <!-- ======= Testimonials Section ======= -->
            @include('main.sections._testimonials')
        <!-- End Testimonials Section -->

        <!-- ======= Gallery Section ======= -->
            @include('main.sections._gallery')
        <!-- End Gallery Section -->

        <!-- ======= Chefs Section ======= -->
            @include('main.sections._chefs')
        <!-- End Chefs Section -->

        <!-- ======= Contact Section ======= -->
            @include('main.sections._contact')
        <!-- End Contact Section -->

    </main><!-- End #main -->

@endsection