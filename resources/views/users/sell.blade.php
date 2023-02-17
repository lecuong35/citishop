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

<div class="flex gap-[20px] justify-center
mobile:flex-col mobile:fixed mobile:bg-white mobile:top-0 mobile:left-0
mobile:w-full mobile:h-full mobile:z-[9]">
    <div class="hidden mobile:block fixed top-0
    h-[60px] w-full bg-white z-[9] shadow-md">
        <a href="http://127.0.0.1:8000/home">
            <div class="pt-[20px] pl-[20px]">
                <i class="fas fa-times fa-xl" style="color: rgb(87, 88, 90);"></i>
            </div>
        </a>
    </div>

   <form class="mobile:mt-[80px] mobile:overflow-y-auto
   flex mobile:items-start
   xl:justify-center lg:justify-center md:justify-center sm:justify-center
   mobile:justify-start
    mobile:flex-col mobile:w-full mobile:h-full mobile:overflow-y-auto
    mobile:px-[16px]"
    action="user/sale"
    method="post" enctype="multipart/form-data">
        @csrf
       <div class="max-w-[515px] w-[510px]
       mobile:w-full">
           @include('components.user.sell-images')
       </div>
       <div class="mt-[60px] mobile:w-full mobile:mt-[32px]" id="sellForm" >
           @include('components.user.sell-form')
       </div>
</form>
</div>

<script src="../../js/utilities-functions.js"></script>
</body>
</html>
