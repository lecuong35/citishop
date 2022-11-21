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

<div class="mt-[112px] mx-auto flex justify-center">
    <div class="flex flex-col w-[208px] min-w-[208px] mobile:hidden">
        @include('components.user.navigate-setting-button', ['content' => 'Edit profile', 'link' => '/edit-profile'])
        @include('components.user.navigate-setting-button', ['content' => 'Change password', 'link' => '/change-password'] )
        @include('components.user.navigate-setting-button', ['content' => 'Notification', 'link' => '/setting-notification'])
        @include('components.user.navigate-setting-button', ['content' => 'Data and privacy', 'link' => '/data-privacy'])
    </div>

    <div>
        @yield('content')
    </div>
</div>

@include('components.footer')

<script src="./js/utilities-functions.js"></script>
</body>
</html>
