<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- gg font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100&display=swap" rel="stylesheet">

        {{-- awesome icon --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

        <link href="{{ asset('./TW-ELEMENTS-PATH/dist/js/index.min.js') }}">
        <link href="{{ asset('./node_modules/tw-elements/dist/js/index.min.js') }}">
        <script src="./node_modules/tw-elements/dist/js/index.min.js"></script>
        <script>
            import 'tw-elements';
        </script>
        <title>Carousell</title>
    </head>
    <body class="font-roboto">
        Hello world
    </body>
</html>
