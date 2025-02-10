<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade-Templating</title>
</head>
<body>
    <x-page-title/>
    <x-main-nav/>
    <x-alert>
    Dit is een alert! Idris is Gay! Idris is supergay!
    </x-alert>
    <x-alert type="error">
        Let op!! Een gay persoon zal je overtuigen! Idris is een gay persoon! En die zal u proberen te overtuigen om rugriddertje te spelen!
    </x-alert>
    @if($ingelogd)
    <p>Welkom op de Gay Website van Idris</p>
    @else
    <p>Je bent niet ingelogd</p>
    @endif

    @foreach($users as $user)
    <x-user-display :user="$user"/>
    @endforeach
</body>
</html>