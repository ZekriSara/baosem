@component('mail::message')
# Alert : 
Votre compte va expirer dans {{$jourrestant}} jours.

@component('mail::button', ['url' => '/'])
Se connecter 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
