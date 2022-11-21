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

{{--content--}}
<div class="xl:px-[15%] lg:px-[5%] md:px-[5%] sm:w-full mobile:px-auto
            bg-[#f8f8f9] h-[100vh] mobile:z-[11]
            mobile:fixed mobile:top-0 mobile:left-0
            mobile:bg-white mobile:h-full mobile:w-full">
{{--    header   --}}
    <div class="pt-[144px] mobile:pt-0">
        <div class="mobile:h-[64px] mobile:flex mobile:items-center
        mobile:justify-center">
            <div class="hidden mobile:block absolute top-[20px] left-[20px]">
                <a href="/">
                    <i class="fas fa-arrow-left fa-lg" style="opacity: 0.5"></i>
                </a>
            </div>
            <p class="text-[30px] leading-[38px] text-[#2c2c2d] font-bold
            mobile:text-[16px] mobile:leading-[24px]">
                My purchases
            </p>
        </div>
        <div class="flex mt-[24px] mobile:mt-0
        mobile:px-[28px] mobile:gap-[24px]
        mobile:overflow-x-auto">
            <a href="/purchase-progress">
                @include('components.user.navigate-button', ['content' => 'In progress'])
            </a>
            <a href="/purchase-completed">
                @include('components.user.navigate-button', ['content' => 'Completed'])
            </a>
            <a href="/purchase-returns">
                @include('components.user.navigate-button', ['content' => 'Returns'])
            </a>
            <a href="/purchase-cancelled">
                @include('components.user.navigate-button', ['content' => 'Cancelled'])
            </a>
        </div>
        <hr>
    </div>
{{--    content   --}}
    @yield('content')
</div>
<script src="./js/utilities-functions.js"></script>
</body>
</html>
