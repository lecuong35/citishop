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
        @include('components.user.navigate-setting-button', ['content' => 'Cập nhật thông tin', 'link' => 'http://127.0.0.1:8000/user/edit/profile', 'id'=>'profile'])
        @include('components.user.navigate-setting-button', ['content' => 'Đổi mật khẩu', 'link' => 'http://127.0.0.1:8000/user/edit/password', 'id'=>'password'] )
    </div>

    <div>
        @yield('content')
    </div>
</div>

@include('components.footer')

<script src="../../js/utilities-functions.js"></script>
</body>
</html>
