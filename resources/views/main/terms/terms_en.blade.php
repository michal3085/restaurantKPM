@extends('_layout')

@section('content')
    <section id="about" class="about" style="height: 20vh; position: relative; padding-top: 200px;">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <div class="section-title">
                        <p style="font-size: 50px;">{{__('Privacy policy')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="drink" class="drink section-bg">
        <div class="row justify-content-center">
            <iframe src="{{ asset('assets/img/pdf/eng.pdf') }}" width="50%" height="1200">
                This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('assets/img/pdf/eng.pdf') }}">Download PDF</a>
            </iframe>
        </div>
    </section>
@endsection