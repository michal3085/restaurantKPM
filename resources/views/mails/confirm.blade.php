@extends('_layout')

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8 golden-frame">
                    <h1><span>{{ __('Wysłaliśmy Twoje zapytanie do naszej restauracji') }}</span></h1>
                    <h2>Odpowiemy na Twoje zgłoszenie, najszbciej jak to możliwe.</h2>

                    <div class="btns">
                        <a href="{{ route('home') }}" class="btn-menu animated fadeInUp scrollto">{{__('Home')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection