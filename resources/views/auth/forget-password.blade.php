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
    <section class="min-h-screen flex md:items-center max-md:mt-5 justify-center m-auto overflow-y-hidden">
        <div class="md:w-[472px] px-5 m-auto relative">
            <h1 class="font-bold text-4xl text-center">Quên mật khẩu</h1>
            <form action="/user/forget-password" method="POST" class="space-y-6 py-6">
                @csrf
                <div>
                    <input type="email"
                       class="form-control block w-full px-4 py-2
                       text-xl font-normal text-gray-700 bg-white bg-clip-padding
                       border border-solid border-gray-300 rounded transition ease-in-out m-0
                       focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                       id="email"
                       name="email"
                       placeholder="Email"
                       required/>
                        @error('email')
                            <p class="mt-[8px] text-[14px] leading-[22px]" style="color: red;">
                                {{$errors->first('email')}}
                            </p>
                        @enderror
                </div>
               
                <div class="text-center">
                    <button class="w-full px-6 py-3 rounded-md bg-[#c5c5c6] transition hover:bg-sky-600 focus:bg-[#008f79]"
                            type="submit"
                            id="login">
                        <span class="font-semibold text-white text-lg">Gửi mật khẩu tới email</span>
                    </button>
                    <div class="mt-5 flex flex-col">
                        <span class="text-lg">Bạn chưa có tài khoản?<a class="text-[#57585a] font-semibold" href="/user/register">Tạo tài khoản mới</a></span>
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
