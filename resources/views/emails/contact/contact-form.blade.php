@component('mail::message')
# Bonjour

Vous avez réçu un nouveau message de {{$data['name']}} ({{$data['prenom']}}) ({{$data['email']}}).

Message:
{{$data['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
