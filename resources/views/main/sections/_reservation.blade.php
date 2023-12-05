<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{__('Reservation')}}</h2>
            <p>{{__('Book a Table')}}</p>
        </div>

        <form action="{{ route('send.mail') }}" method="post" id="myForm" class="php-email-form">
            @csrf
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="{{__('Your Name')}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="{{__('Your Email')}}" data-rule="email" data-msg="Please enter a valid email" required>
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="{{__('Your Phone')}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="text" name="date" class="form-control" id="date" placeholder="{{__('Date')}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" readonly="readonly" required>
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required inputmode="numeric" required>
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="people" id="people" placeholder="{{__('# of people')}}" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="{{__('Message')}}" maxlength="2000"></textarea>
                <div class="validate"></div>
                <div id="charCount"></div>
            </div>

            <div class="form-check">
                <div class="custom-control custom-switch">
                    <label class="custom-control-label" for="customSwitch1">
                        <div class="checkbox-container">
                            <input type="checkbox" class="checkbox" name="reservation_agree" id="customSwitch1" required>
                            <span class="checkbox-label" style="font-size: 15px;">
                                {{ __('I have read the privacy policy, available at the link ') }}
                                @if (session('locale') === 'pl')
                                    <a href="{{ route('pl.policy.show') }}">(link)</a>
                                @else
                                    <a href="{{ route('eng.policy.show') }}">(link)</a>
                                @endif
                                .
                                {{ __(' I am aware that the administrator of my personal data is Munro sp. z o.o., based at 27 Jana Pawla II Avenue, 00-867 Warsaw, and that the personal data will be processed for the purpose of making the reservation.') }}
                                <span style="color: red">*</span>
                            </span>
                        </div>
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">{{__('Send')}}</button></div>
        </form>

    </div>
</section>
<script>
    $(document).ready(function () {
        $('#myForm').submit(function (event) {
            if (!$('#customSwitch1').prop('checked')) {
                alert('Zaakceptuj politykę prywatności przed przesłaniem formularza.');
                event.preventDefault(); // Zatrzymaj przesyłanie formularza
            }
        });
    });
</script>