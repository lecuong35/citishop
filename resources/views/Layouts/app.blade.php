<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @include('components.header');

    <title>Carousell</title>
</head>
<body class="font-roboto">
<button class="bg-[#ff2636] rounded-sm px-[26px] py-[14px] 
            text-white font-bold text-[18px] leading-[24px] hidden
            mobile:fixed top-[90%] right-[15px] mobile:block z-[9]" id="sellButton">
   <a href="/sell">
       Sell +
   </a>
</button>
{{-- navbar --}}
@include('components.navbar')
{{--@include('Layouts.search')--}}


@yield('content')

@include('components.footer')
</body>
</html>
