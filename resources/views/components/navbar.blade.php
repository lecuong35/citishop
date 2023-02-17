@php
    session_start();
    $showCategories = Config::get('products.category');

    $index = 20;
    $cateIndex = 14;
    $cateId = 1;

@endphp
<div class="wrapper font-roboto w-full top-0 h-[50px]
        fixed bg-white z-10 mobile:z-[5]">
    <div class="xl:px-[15%] lg:px-[5%] md:px-[5%] sm:w-full mobile:ml-0
         flex mx-auto justify-between mobile:flex-row-reverse mobile:justify-between">
      {{-- navbar nav--}}
      <div class="navigate flex items-center h-[50px] mobile:hidden">
          {{-- navbar check--}}
          <a href="/home"
              class="navigate__logo h-full flex my-[2px]">
              <img src="{{$logo}}"
                   class="w-[153px] mr-[24px]
            xl:min-w-[150px] lg:min-w-[150px] md:min-w-[150px] sm:min-w-[100px] mobile:hidden" alt="">
          </a>
          <div class="flex navigate__items h-full
        xl:flex lg:flex md:hidden sm:hidden mobile:hidden">
              {{-- nav 1--}}
              @foreach($kindOfAll as $key => $ki)
                    @if($key < 3)
                        <div class="relative h-full">
                            <div class="electronic text-[16px] leading-[24px] h-full">
                                <form action="http://127.0.0.1:8000/home/{{$ki['id']}}" method="get" class="h-[50px]">
                                    <button type="submit" class="px-[16px] hover:bg-[#f0f1f1] h-full flex items-center hover:cursor-pointer">
                                        <span class="xl:hidden lg:hidden md:block sm:block mobile:block">
                                            <i class="fa fa-shipping-fast mr-[10px]
                                            xl:hidden lg:hidden md:block sm:block mobile:block"></i>
                                        </span>
                                        {{$ki['name']}}
                                    </button>
                                </form>
                            </div>
                            <div class="electronic__nav py-[5px] w-[300px]
                                rounded-sm shadow-sm shadow-gray-300 hidden z-[1]
                                absolute top-[50px] left-[0px] bg-white">
                                @foreach($cate[$key] as $ca)
                                    <form action="http://127.0.0.1:8000/home/{{$ki['id']}}/{{$ca['id']}}" method="get"
                                        class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1] hover:cursor-pointer" >
                                        <button type="submit" class="w-full flex justify-start items-center">
                                            {{$ca['name']}}
                                        </button>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    @endif
              @endforeach

              {{-- nav 4--}}
              <div class="categories text-[16px] leading-[24px] h-full relative">
                  <div class="px-[16px] hover:bg-[#f0f1f1] h-full flex items-center hover:cursor-pointer"
                  data-bs-target="#example1" data-bs-toggle="modal">
                      <p class="inline-block whitespace-nowrap">
                          Các loại sản phẩm
                      </p>
                      <span class="ml-[5px]
                         xl:block lg:hidden md:hidden sm:hidden mobile:hidden">
                        <i class="fa fa-heart" ></i>
                      </span>
                  </div>
                 <!-- Modal -->
                @include('components.cate-modal')

              </div>
          </div>
      </div>

      {{-- login register --}}
      <div class="auth-navigate flex items-center justify-end
      bg-white h-[50px]">
              @if(Auth::check())
                  <div class="px-[5px] py-[5px]
                   items-center justify-center
                  hidden mobile:flex
                  hover:bg-[#f0f0f1]" id="welcome-toggle-click"
                  onclick="account('welcome-toggle')">
                      <i class="fa fa-bars h-[20px] w-[20px]">
                      </i>
                  </div>

                  <div class="flex mx-[5px] h-full items-center justify-center">
                      <div class="relative h-full">
                          <div class="welcome px-[10px] py-[5px] w-fit h-full
                            hover:bg-[#f0f0f1]
                            mobile:hidden">
                                <div class="flex gap-[5px] h-full items-center justify-center">
                                    <img src="{{Auth::user()->avatar}}"
                                        class="w-[20px] h-[20px] " style="border-radius: 50%">
                                    <p class="text-[16px] leading-[24px] flex">
                                        Hello,
                                        <span class="font-bold">
                                        {{Auth::user()->name}}
                                    </span>
                                    </p>
                                </div>
                          </div>

                          <div class="welcomeToggle absolute z-10 bg-white shadow-md w-[200px] hidden
                          mobile:fixed mobile:w-full mobile:h-full
                          mobile:left-0 mobile:top-0 mobile:z-[9999]" id="welcome-toggle">
                              <div class="hidden mobile:flex items-center justify-between h-[64px]
                              px-[10px] py-[10px] shadow-xl">
                                  <i class="fas fa-arrow-left fa-xl"
                                     onclick="account('welcome-toggle')"></i>
                                  <p class="text-[18px] leading-[24px] font-bold mr-[25px]">
                                      Tài khoản của tôi
                                  </p>
                                  <div class="div-for-nothing">
                                  </div>
                              </div>
                              <a href="http://127.0.0.1:8000/user/edit/profile"
                                  class="flex gap-[10px] py-[10px] px-[10px]
                              hover:bg-[#f0f0f1] hover:text-[#008f79]">
                                  <div>
                                      <i class="fas fa-user-circle fa-xl  w-[20px] h-[20px]"></i>
                                  </div>
                                  <p>
                                      Thông tin cá nhân
                                  </p>
                              </a>
                              <a href="http://127.0.0.1:8000/user/edit/password"
                                  class="flex gap-[10px] py-[10px] px-[10px]
                              hover:bg-[#f0f0f1] hover:text-[#008f79]">
                                  <div>
                                      <i class="fas fa-cog fa-xl  w-[20px] h-[20px]"></i>
                                  </div>
                                  <p>
                                     Đổi mật khẩu
                                  </p>
                              </a>
                              <a href="http://127.0.0.1:8000/user/my-bill"
                                  class="flex gap-[10px] px-[10px] py-[10px]
                              hover:bg-[#f0f0f1] hover:text-[#008f79]">
                                <img src="https://mweb-cdn.karousell.com/build/my-purchases-3J6hHnKqGL.svg"
                                 class="w-[24px] h-[24px]">
                                  <p>
                                        Đơn hàng của tôi
                                  </p>
                              </a>
                              <a href="http://127.0.0.1:8000/user/bill"
                                  class="flex gap-[10px] px-[10px] py-[10px]
                              hover:bg-[#f0f0f1] hover:text-[#008f79]">
                                 <img src="https://mweb-cdn.karousell.com/build/my-purchases-3J6hHnKqGL.svg"
                                 class="w-[24px] h-[24px]">
                                  <p>
                                      Đơn hàng của khách
                                  </p>
                              </a>
                              <a href="http://127.0.0.1:8000/user/sale"
                                  class="flex gap-[10px] px-[10px] py-[10px]
                              hover:bg-[#f0f0f1] hover:text-[#008f79]">
                                  <img src="https://mweb-cdn.karousell.com/build/my-sales-3XOQDPjKCc.svg"
                                  class="w-[24px] h-[24px]">
                                  <p>
                                      Sản phẩm của tôi
                                  </p>
                              </a>
                              <a href="/user/login"
                                  class="flex gap-[10px] px-[10px] py-[10px]
                              hover:bg-[#f0f0f1] hover:text-[#008f79]">
                                  <div>
                                      <i class="fas fa-sign-out-alt fa-xl  w-[20px] h-[20px]"></i>
                                  </div>
                                  <p>
                                      Đăng xuất
                                  </p>
                              </a>
                          </div>
                      </div>
                     <div class="relative">
                        <div class="px-[10px] py-[5px]
                        flex items-center justify-center
                        hover:bg-[#f0f0f1] h-full" id="notifyIcon">
                            <i class="fa fa-comment"></i>
                        </div>
                        @if(count(Auth::user()->unreadNotifications) != 0)
                            <div class="rounded-full bg-[#ff2636] flex items-center justify-center w-[10px] h-[10px] absolute top-1 right-1">
                                <p class="text-white text-[8px]">
                                    {{count(Auth::user()->unreadNotifications)}}
                                </p>
                            </div>
                            <div class="hidden absolute shadow-md bg-white w-[150px] p-[8px]" id="notify" style="z-index: 12;">
                                @foreach(Auth::user()->unreadNotifications as $notify)
                                    <div>
                                        @if(isset($notify['data']['user']))
                                            <p>{{$notify['data']['user']}} da mua hang</p>
                                        @endif

                                        @if(isset($notify['data']['post_title']))
                                            <p>"{{$notify['data']['post_title']}}" da duoc phe duyet</p>
                                        @endif

                                        <a href="{{$notify['data']['links']}}">Den san pham </a>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                     </div>
                  </div>
              @else
                  <a href="/user/register"
                     class="text-[14px] font-bold leading-[22px] h-full px-[16px]
                     text-[#414244]
                       flex items-center hover:bg-[#f0f0f1] mobile:hidden">
                      Register
                  </a>
                  <a href="/user/login"
                     class="text-[14px] font-bold leading-[22px]
                     text-[#414244]
                      mobile:text-[#008f79]
                      h-full px-[16px] mobile:mt-[5px]
                      flex items-center hover:bg-[#f0f0f1]">
                      Login
                  </a>
              @endif

          <button class="bg-[#ff2636] rounded-sm px-[24px] py-[4px] rounded-[4px]
          ml-[10px]
            text-white font-bold text-[16px] leading-[24px]
            xl:block lg:block md:block sm:hidden
            mobile:hidden">
             <a href="/sell">
                 Sell
             </a>
          </button>
      </div>

{{-- mobile nav--}}
      <div class="nav__mobile w-full hidden mobile:flex
      sticky-top top-0 py-[5px]
      mobile:items-center mobile:justify-evenly">
          <a href="/home">
              <img src="https://play-lh.googleusercontent.com/kKAzG4q6hhx6dprYBdzFTsUeZocqwsuTL-dvuotPjHDaP1CdBdS2wO8VeQzTntNIo7-u"
              class="w-[48px] h-[48px]">
          </a>

          <div>
              <div class="search__form relative w-[230px]">
                  <i class="fa fa-search absolute top-[35%] left-[5px] opacity-60" ></i>
                  <input type="text" class="h-[40px] w-full bg-[#f0f1f1] rounded-md
                  pl-[25px] text-[14px] leading-[22px] "
                         placeholder="Search Carousell...">
              </div>
          </div>
      </div>
  </div>
    <hr class="mobile:hidden">
    <!-- <div class="py-[5px] mx-auto bg-white
    xl:px-[15%] lg:px-[5%] md:px-[5%] sm:w-full mobile:ml-0
    mobile:hidden">
        @include('components.search')
    </div>
    <hr> -->
</div>
<hr class="hr__tag">

<script type="text/javascript" src='http://127.0.0.1:8000/js/navbar.js'></script>
<style>
    .electronic:hover ~ .electronic__nav {
        display: block;
    }
    .electronic__nav:hover {
        display: block;
    }
    .modal-backdrop{
        position: relative;
        z-index: 10;
    }

    .welcome:hover ~ .welcomeToggle {
        display: block;
    }
    .welcomeToggle:hover {
        display: block;
    }

    #notifyIcon:hover ~ #notify {
        display: block;
    }
    #notify:hover {
        display: block;
    }
    #notifyIcon:hover {
        cursor: pointer;
    }
</style>
