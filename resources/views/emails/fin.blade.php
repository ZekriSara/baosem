@component('mail::message')
# Expiration
 Votre compte a expiré ! Veuillez renouveller votre abonnement.

@component('mail::button', ['url' => ''])
Renouveller !
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
