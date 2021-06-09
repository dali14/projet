@component('mail::message')
# Boutique

bonjour,  {{$client->nom.' '.$client->prenom}}

Votre compte sur Boutique a été crée avec succès, pour l'activer et recevoir votre mot de passe cliquer sur le lien ci-dessous :
Activer mon compte sur Boutique

{{--@component('mail::button', ['url' => ''])
Button Text
@endcomponent--}}

Merci,<br>

@endcomponent
