@php
        session_start();
        $email = Config::get('login.email');
        $password = Config::get('login.password');
@endphp
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- awesome icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    {{-- gg font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100&display=swap"
          rel="stylesheet">
</head>
<body>
    <div class="flex justify-center border-b m-auto">
        <img class="w-48 py-4" src="https://firebasestorage.googleapis.com/v0/b/citishop-laravel.appspot.com/o/images%2F44e5f3319a9649f082f1d8079cad63d5.png?alt=media&token=01cd7adf-6c1c-42ac-9615-3b72305e022d" alt="">
    </div>
    <section class="min-h-screen flex md:items-center max-md:mt-5 justify-center m-auto overflow-y-hidden">
        <div class="md:w-[472px] px-5 m-auto relative">
            <h1 class="font-bold text-4xl text-center">ĐĂNG NHẬP</h1>
            <form action="/user/login" method="POST" class="space-y-6 py-6">
                @csrf
                @if(session('password'))
                    <p class="text-center text-[red]">
                        {{session('password')}}
                    </p>
                @endif
                <div>
                    <input type="email"
                       class="form-control block w-full px-4 py-2
                       text-xl font-normal text-gray-700 bg-white bg-clip-padding
                       border border-solid border-gray-300 rounded transition ease-in-out m-0
                       focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                       id="exampleFormControlInput2"
                       name="email"
                       placeholder="Email"/>
                    @error('email')
                            <p class="mt-[8px] text-[14px] leading-[22px]" style="color: red;">
                                {{$errors->first('email')}}
                            </p>
                        @enderror
                </div>
                <div>
                    <input type="password"
                           class="form-control block w-full px-4 py-2
                           text-xl font-normal text-gray-700 bg-white bg-clip-padding
                           border border-solid border-gray-300 rounded transition ease-in-out
                           m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                           name="password"
                           id="exampleFormControlInput3" placeholder="Mật khẩu"/>
                           @error('password')
                            <p class="mt-[8px] text-[14px] leading-[22px]" style="color: red;">
                                {{$errors->first('password')}}
                            </p>
                        @enderror
                    <div class="mt-1">
                        <button>
                            <a href="/user/forget-password"
                            class="text-[#57585a] text-lg hover:text-[#008f79] hover:underline" >Quên mật khẩu?</a>
                        </button>
                    </div>

                    <div>
                        @error('unauthorization')
                            <p class="mt-[8px] text-[14px] leading-[22px]" style="color: red;">
                                {{$errors->first('unauthorization')}}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <button class="w-full px-6 py-3 rounded-md bg-[#c5c5c6] transition hover:bg-sky-600 focus:bg-[#008f79]"
                            type="submit"
                            id="login">
                        <span class="font-semibold text-white text-lg">Đăng nhập</span>
                    </button>
                    <div class="mt-5 flex flex-col">
                        <span class="text-lg">Bạn chưa có tài khoản?<a class="text-[#57585a] font-semibold" href="/user/register">Tạo tài khoản mới</a></span>
                        <span class="text-lg">
                            <a href="/admin/login" 
                            class="text-[#57585a] font-semibold" href="/register">Admin đăng nhập</a>
                        </span>
                    </div>
                </div>
            </form>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script type="text/javascript">

        document.getElementById('login-face').addEventListener('click',
        function(){
            document.querySelector('.modal-login').style.display = 'inline';
        });
        document.querySelector('.close').addEventListener('click',
        function(){
            document.querySelector('.modal-login').style.display = 'none';
        });
    </script>
</body>
</html>
