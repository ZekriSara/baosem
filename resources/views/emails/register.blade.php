@component('mail::message')
# Une nouvelle offre qui pourrait vous intéresser! 

Une nouvelle annonce a été ajouté dans la rubrique bureautique et informatique !

@component('mail::button', ['url' => '/'])
voir 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
