<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ __('Contact')}}</h2>
            <p>{{__('Contact Us')}}</p>
        </div>
    </div>

    <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 400px;"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10094.13482996057!2d16.2618416!3d50.7656793!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470e57e501644ac1%3A0xc9646479713b9281!2sR%C3%AAve%20Bar%20%26%20Restaurant!5e0!3m2!1spl!2spl!4v1695849719115!5m2!1spl!2spl"
                frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container" data-aos="fade-up">

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>{{__('Location:')}}</h4>
                        <p>1 Maja 70, 58-300 Wałbrzych</p>
                    </div>

                    <div class="open-hours">
                        <i class="bi bi-clock"></i>
                        <h4>{{__('Open Hours:')}}</h4>
                        <p>
                            Monday-Saturday:<br>
                            15:00 - 21:00
                        </p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>H9123@accor.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>{{__('Phone')}}:</h4>
                        <p>+48 74 665 54 44</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                   placeholder="{{__('Name')}}" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="{{__('Your Email')}}" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject"
                               placeholder="{{__('Subject')}}" required>
                    </div>
                    <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="8" placeholder="{{__('Your message')}}"
                                          required></textarea>
                    </div>

                    <div class="form-check">
                        <div class="custom-control custom-switch">
                            <label class="custom-control-label" for="">
                                <div class="checkbox-container">
                                    <input type="checkbox" class="checkbox" name="contact_agree" id="" required>
                                    <span class="checkbox-label" style="font-size: 15px;">
                                {{ __('I have read the privacy policy, available at the link ') }}
                                        @if (session('locale') === 'pl' or session('locale') === null)
                                            <a href="{{ route('pl.policy.show') }}">(link)</a>
                                        @else
                                            <a href="{{ route('eng.policy.show') }}">(link)</a>
                                        @endif
                                        .
                                {{ __(' I am aware that the administrator of my personal data is Munro sp. z o.o., based at 27 Jana Pawła II Avenue, 00-867 Warsaw, and that the personal data will be processed for the purpose of contacting and handling my inquiry.') }}
                                <span style="color: red">*</span>
                            </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center">
                        <button type="submit">{{ __('Send Message') }}</button>
                    </div>
                </form>

            </div>

        </div>

    </div>
</section>