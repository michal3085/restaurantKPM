@extends('_layout')

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8 golden-frame">
                    <h1><span>{{ __('We sent your request to our restaurant') }}</span></h1>
                    <h2>{{ __('We will respond to your application as soon as possible') }}</h2>

                    <div class="btns">
                        <a href="{{ route('home') }}" class="btn-menu animated fadeInUp scrollto">{{__('Home')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection