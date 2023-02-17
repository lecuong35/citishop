<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="http://127.0.0.1:8000/js/utilities-functions.js"></script>

    @include('components.header')
</head>
<body class="font-roboto">
    <div class="flex mobile:flex-col">
        <div class="w-[30%] max-w-[300px] bg-[#021222] h-[100vh] px-[16px] py-[10px] mobile:h-fit mobile:w-[100vw] mobile:max-w-[100vw]">
            <div class="pb-[10px] mobile:flex mobile:items-center mobile:justify-between">
                <img src="https://firebasestorage.googleapis.com/v0/b/citishop-laravel.appspot.com/o/Images%2Fciti-logo2-removebg-preview.png?alt=media&token=8a6f94e7-ae5e-4a88-8f2f-59c45d1c0923" alt="" class="w-[100px]">
                <div class="hidden mobile:block" onclick="clickToggle('navbar')">
                    <i class="fa fa-bars" style="color:white;"></i>
                </div>
            </div>
            <div 
                class="mobile:hidden mobile:flex mobile:flex-col mobile:absolute mobile:top-[40px] mobile:right-1 mobile:bg-[#021222] mobile:p-[10px] mobile:rounded-md" 
                id="navbar">
                <div class="manage" id="kind">
                    <a href="/admin/kind" >
                        Quản lý loại hàng
                    </a>
                </div>

                <div  class="manage" id="brand">
                    <a href="/admin/brand" >
                        Quản lý nhãn hàng
                    </a>
                </div>

                <div  class="manage" id="category">
                    <a href="/admin/category" >
                        Quản lý dòng hàng
                    </a>
                </div>

                <div  class="manage" id="post_status">
                    <a href="/admin/post-status" >
                    Quản lý trạng thái bài đăng
                    </a>
                </div>

                <div  class="manage" id="product_status">
                    <a href="/admin/product-status" >
                    Quản lý trạng thái sản phẩm
                    </a>
                </div>

                <div  class="manage" id="order_status">
                    <a href="/admin/order-status" >
                    Quản lý trạng thái đơn 
                    </a>
                </div>

                <div  class="manage" id="post">
                    <a href="/admin/post" >
                        Duyệt các bài đăng
                    </a>
                </div>
            </div>
        </div>
        <div class="w-[80%] pr-[30px] mobile:pr-0 mobile:w-full">
            @yield('content')
        </div>
    </div>

    <script>
        function update(id) {
            let ele = document.getElementById(id);
            ele.style.cursor = "pointer";
            ele.style.backgroundColor = "#0d6efd";
            ele.disabled = false;
        }

        function blurUpdate(id) {
            let ele = document.getElementById(id);
            ele.style.cursor = "not-allowed";
            ele.style.backgroundColor = "#c5c5c6";
            
        }

        function clickShow(id) {
            let ele = document.getElementById(id);
            ele.style.display = "block";
        }
   
    </script>
    @yield('script')
    <style>
        .manage {
            margin: 10px 0px 10px 0px;
            opacity: 0.75;
            color: #c5c5c6;
        }

        
    </style>
</body>
</html>
