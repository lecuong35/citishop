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
    <div class="pt-[60px] mobile:pt-0">
        <div class="mobile:h-[64px] mobile:flex mobile:items-center
        mobile:justify-center mobile:shadow-md">
            <div class="hidden mobile:block absolute top-[20px] left-[20px]">
                <a href="http://127.0.0.1:8000/home">
                    <i class="fas fa-arrow-left fa-lg" style="opacity: 0.5"></i>
                </a>
            </div>
            <p class="text-[30px] leading-[38px] text-[#2c2c2d] font-bold
            mobile:text-[16px] mobile:leading-[24px]">
                Giỏ hàng của tôi
            </p>
        </div>
        <div class="flex mt-[24px] mobile:mt-0
        mobile:px-[28px] mobile:gap-[24px]
        mobile:overflow-x-auto">
            <a href="http://127.0.0.1:8000/user/my-bill">
                @include('components.user.navigate-button', ['content' => 'Đang đặt', 'id'=>'customProgress'])
            </a>
            <a href="http://127.0.0.1:8000/user/my-bill/completed">
                @include('components.user.navigate-button', ['content' => 'Đã được xác nhận', 'id'=>'customCompleted'])
            </a>
            <a href="http://127.0.0.1:8000/user/my-bill/cancelled">
                @include('components.user.navigate-button', ['content' => 'Bị hủy', 'id'=>'customCancelled'])
            </a>
        </div>
        <hr>
    </div>
{{--    content   --}}
    <div>
        @if(!empty($bills))

            @if(Session::has('success'))
                <div class="px-[16px] py-[8px] bg-[#6d6f]">
                    <p class="text-white">
                            {{Session::get('success')}}
                        </p>
                </div>
            @endif
            @if(Session::has('error'))
                <div class="px-[16px] py-[8px] bg-[#ea7676]">
                    <p class="text-white">
                            {{Session::get('error')}}
                        </p>
                </div>
            @endif
            <table class="w-full ml-[30px]">
                <thead class="bg-white border-b mobile:hidden">
                    <tr>
                        <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 ">
                            ID
                        </th>
                        <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 ">
                            Tiêu đề bài đăng
                        </th>
                        <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 ">
                            Giá
                        </th>
                        <th class="text-sm font-bold text-gray-900 px-6 py-4 ">
                            Người bán
                        </th>
                        <th class="text-sm font-bold text-gray-900 px-6 py-4 ">
                            Thời gian nhận
                        </th>
                        <th class="text-sm font-bold text-gray-900 px-6 py-4 ">
                            Xem chi tiết
                        </th>
                        <th class="text-sm font-bold text-gray-900 px-6 py-4 ">
                            Xử lý
                        </th>
                    </tr>
                </thead>
                <tbody class="text-center">
                   @yield('content')
                </tbody>
            </table>
            @else
                @include('components.user.no-product')
        @endif
    </div>
</div>
<script src="http://127.0.0.1:8000/js/utilities-functions.js"></script>
</body>
</html>
