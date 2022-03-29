@component('mail::message')
![{{ config('app.name') }}]<br>

## Bonjour M. SARR, <br>

{{$contact->prenom}}-{{$contact->nom}} vous a envoyé un message via le formulaire de contact de votre site.
Voici les détail de l'information:
> {{$contact->message}}

- ## Email:  {{ $contact->email }}

@component('mail::button', ['url' => request()->getSchemeAndHttpHost() ])
Ouvrir {{ config('app.name') }}
@endcomponent

Cordialement, <br>
{{ config('app.name') }}
@endcomponent

Cordialement, **{{ config('app.name') }}**.
@endcomponent
