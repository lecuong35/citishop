<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @include('components.header');

    <title>User</title>
</head>
<body class="font-roboto">
{{-- navbar --}}
@include('components.navbar')

<script src="./js/utilities-functions.js"></script>
</body>
</html>
