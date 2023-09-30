<b>Imię i Nazwisko:</b> {{$data['name']}} <br>
<b>E-mail:</b> {{$data['email']}} <br>
<b>Telefon:</b> {{$data['phone']}} <br>
<b>Data:</b> {{$data['date']}} <br>
<b>Godzina:</b> {{$data['time']}} <br>
<b>Ilość osób:</b> {{$data['people']}} <br>
<b>Wybrany język strony:</b> @if(Config::get('app.locale') === 'pl') Polski @else Angielski @endif <br>
<b>Uwagi:</b><br> {{$data['message']}} <br>