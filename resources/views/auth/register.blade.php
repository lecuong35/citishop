<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  {{-- gg font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100&display=swap"
          rel="stylesheet">
</head>
<body>
    <div class="flex justify-center border-b mx-auto">
        <img class="w-48 py-3" src="https://mweb-cdn.karousell.com/build/carousell-logo-title-2Nnf7YFiNk.svg" alt="">
    </div>
    <section class="min-h-screen mt-0 flex justify-center m-auto">
        <div class="md:w-[472px] rounded-lg mobile:w-[96%]
        px-5 mx-auto bg-white">
        <h1 class="font-bold text-4xl text-center mt-5">ĐĂNG KÝ TÀI KHOẢN</h1>
                <form action="/user/register" class="space-y-6 py-6" method="POST">
                    @csrf
                    <div class="">
                        <input type="text" name="name"
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput1"
                        placeholder="Tên người dùng"/>
                        @error('name')
                                <p class="mt-[8px] text-[14px] leading-[22px]" style="color: red;">
                                    {{$errors->first('name')}}
                                </p>
                            @enderror
                        </div>
                        <div class="">
                            <input type="text" name="email"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput3"
                            placeholder="Email"/>
                            @error('email')
                                <p class="mt-[8px] text-[14px] leading-[22px]" style="color: red;">
                                    {{$errors->first('email')}}
                                </p>
                            @enderror
                        </div>
                        <div class="">
                            <input type="password" name="password"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput4"
                            placeholder="Mật khẩu"/>
                            @error('password')
                                <p class="mt-[8px] text-[14px] leading-[22px]" style="color: red;">
                                    {{$errors->first('password')}}
                                </p>
                            @enderror
                        </div>
                        <div class="">
                            <input type="password" name="confirmPassword"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput5"
                            placeholder="Nhập lại mật khẩu"/>
                            @error('confirmPassword')
                                <p class="mt-[8px] text-[14px] leading-[22px]" style="color: red;">
                                    {{$errors->first('confirmPassword')}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <div  class="flex">
                            <label class="border text-lg py-2 px-3 mobile:hidden" for="">Số điện thoại</label>
                            <input type="text" name="phone"
                             class="form-control block  px-4 py-2 text-xl font-normal text-gray-700
                             bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                              mobile:w-full" 
                            id="exampleFormControlInput2" placeholder="Số điện thoại"/>
                            </div>
                            @error('phone')
                                <p class="mt-[8px] text-[14px] leading-[22px]" style="color: red;">
                                    {{$errors->first('phone')}}
                                </p>
                            @enderror

                        </div>
                    
                        
                        <div class="text-center">
                            <button class="w-full px-6 py-3 rounded-md bg-[#c5c5c6] transition hover:bg-sky-600 focus:bg-[#008f79]" type="submit">
                                <span class="font-semibold text-white text-lg">Tạo tài khoản</span>
                            </button>
                            <div class="mt-5">
                                <span class="text-lg">Bạn đã có tài khoản?<a class="text-[#57585a] font-semibold" href="/user/login"> Đăng nhập ngay</a></span>
                            </div>
                            <div class="mt-5">
                                <span class="text-ms text-[#57585a]">Bạn sẽ đồng ý với các điều kiện của CiTi Shop.</span>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
  