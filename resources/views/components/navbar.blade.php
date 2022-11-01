@php
    $showCategories = Config::get('products.category');

    $index = 20;
    $cateIndex = 14;
    $cateId = 1;
@endphp
<div class="wrapper font-roboto w-full
        fixed bg-white z-10 mobile:z-[5]">

  <div class="xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:ml-0
        xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full
         flex mx-auto justify-between mobile:flex-row-reverse mobile:justify-between">
      {{-- navbar nav--}}
      <div class="navigate flex items-center h-[50px] mobile:hidden">
          {{-- navbar check--}}
          <div class="navigate__logo h-full flex">
              <img src="https://mweb-cdn.karousell.com/build/carousell-logo-title-2Nnf7YFiNk.svg"
                   class="w-[168px] mr-[24px]
            xl:min-w-[150px] lg:min-w-[150px] md:min-w-[150px] sm:min-w-[100px] mobile:hidden" alt="">
          </div>
          <div class="flex navigate__items h-full
        xl:flex lg:flex md:hidden sm:hidden mobile:hidden">
              {{-- nav 1--}}
              <div class="relative h-full">
                  <div class="electronic text-[16px] leading-[24px] h-full">
                      <p class="px-[16px] hover:bg-[#f0f1f1] h-full flex items-center">
                        <span class="xl:hidden lg:hidden md:block sm:block mobile:block">
                            <i class="fa fa-shipping-fast mr-[10px]
                            xl:hidden lg:hidden md:block sm:block mobile:block"></i>
                        </span>
                          Electronics
                      </p>
                  </div>
                  <div class="electronic__nav py-[5px] w-[300px]
                rounded-sm shadow-sm shadow-gray-300 hidden z-[1]
                absolute top-[50px] left-[0px] bg-white">
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech Computer & Tech</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech</p>
                  </div>
              </div>

              {{-- nav 2--}}
              <div class="relative h-full">
                  <div class="electronic text-[16px] leading-[24px] h-full">
                      <p class="px-[16px] hover:bg-[#f0f1f1] h-full flex items-center">
                         <span class="xl:hidden lg:hidden md:block sm:block mobile:block">
                            <i class="fa fa-shipping-fast mr-[10px]
                            xl:hidden lg:hidden md:block sm:block mobile:block"></i>
                        </span>
                          Fashion
                      </p>
                  </div>
                  <div class="electronic__nav py-[5px] w-[180px] rounded-sm
            shadow-sm shadow-gray-300 absolute top-[50px] left-[0px] z-[1]
            hidden bg-white ">
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Women's Fashion</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Men's Fashion</p>
                  </div>
              </div>

              {{-- nav 3--}}
              <div class="relative h-full">
                  <div class="electronic text-[16px] leading-[24px] h-full">
                      <p class="px-[16px] hover:bg-[#f0f1f1] h-full flex items-center">
                         <span class="xl:hidden lg:hidden md:block sm:block mobile:block">
                            <i class="fa fa-shipping-fast mr-[10px]
                            xl:hidden lg:hidden md:block sm:block mobile:block"></i>
                        </span>
                          Luxury
                      </p>
                  </div>
                  <div class="electronic__nav py-[5px] w-[300px] rounded-sm shadow-sm
            shadow-gray-300 absolute top-[50px] left-[0px] hidden z-[1]
            bg-white ">
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech Computer & Tech</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech</p>
                  </div>
              </div>

              {{-- nav 4--}}
              <div class="relative h-full">
                  <div class="electronic text-[16px] leading-[24px] h-full">
                      <p class="px-[16px] hover:bg-[#f0f1f1] h-full flex items-center">
                         <span class="xl:hidden lg:hidden md:block sm:block mobile:block">
                            <i class="fa fa-shipping-fast mr-[10px]
                            xl:hidden lg:hidden md:block sm:block mobile:block"></i>
                        </span>
                          Service
                      </p>
                  </div>
                  <div class="electronic__nav py-[5px] w-[300px] rounded-sm shadow-sm
            shadow-gray-300 absolute top-[50px] left-[0px] z-[1]
            bg-white hidden">
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech Computer & Tech</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Computer & Tech</p>
                  </div>
              </div>

              {{-- nav 5--}}
              <div class="relative h-full">
                  <div class="electronic text-[16px] leading-[24px] h-full">
                      <p class="px-[16px] hover:bg-[#f0f1f1] h-full flex items-center">
                         <span class="xl:hidden lg:hidden md:block sm:block mobile:block">
                            <i class="fa fa-shipping-fast mr-[10px]
                            xl:hidden lg:hidden md:block sm:block mobile:block"></i>
                        </span>
                          Car
                      </p>
                  </div>
                  <div class="electronic__nav py-[5px] w-[200px] rounded-sm
            shadow-sm shadow-gray-300 absolute top-[50px] left-[0px] z-[1]
            bg-white hidden">
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Used Car</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Car Rental</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Parallel Import</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Commercial Vehicles</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Car Accessories</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Motorcycles</p>
                  </div>
              </div>

              {{-- nav 6--}}
              <div class="relative h-full">
                  <div class="electronic text-[16px] leading-[24px] h-full">
                      <p class="px-[16px] hover:bg-[#f0f1f1] h-full flex items-center">
                         <span class="xl:hidden lg:hidden md:block sm:block mobile:block">
                            <i class="fa fa-shipping-fast mr-[10px]"></i>
                        </span>
                          Property
                      </p>
                  </div>
                  <div class="electronic__nav py-[5px] w-[150px] rounded-sm
            shadow-sm shadow-gray-300 absolute top-[50px] left-[0px] z-[1]
            bg-white hidden">
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">For Sale</p>
                      <p class="w-full px-[10px] py-[10px] hover:bg-[#f0f0f1]">Rentals</p>
                  </div>
              </div>

              {{-- nav 7--}}
              <div class="categories text-[16px] leading-[24px] h-full relative">
                  <div class="px-[16px] hover:bg-[#f0f1f1] h-full flex items-center"
                  data-bs-target="#example1" data-bs-toggle="modal">
                      All Categories
                      <span class="ml-[5px]
                         xl:block lg:hidden md:hidden sm:hidden mobile:hidden">
                        <i class="fa fa-heart" ></i>
                      </span>
                  </div>
                  <div class="modal fade hidden fixed top-0 left-0 w-full h-full
                    outline-none overflow-x-hidden overflow-y-auto
                    flex justify-start "
                       style="background-color: rgba(0, 0, 0, 0.5)"
                       id="example1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                      <div class="modal-dialog relative max-w-[440px] pointer-events-none
                        my-0 mt-0" style="margin-left: calc(100% - 440px)">
                          <div
                              class="modal-content border-none shadow-lg relative
                            flex flex-col w-full pointer-events-auto bg-white
                            bg-clip-padding rounded-none outline-none text-current">
                              <div
                                  class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                  <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel1">All Categories</h5>
                                  <button type="button"
                                          class="btn-close box-content w-4 h-4 p-1 text-black
                                        border-none rounded-none opacity-50 focus:shadow-none
                                        focus:outline-none focus:opacity-100 hover:text-black
                                        hover:opacity-75 hover:no-underline"
                                          data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body relative p-4">
                                  <div class="modal__search">
                                      <input type="text"
                                             placeholder="Search categories"
                                             class="mt-1 pl-[30px] h-[44px] w-full
                                           text-[16px] leading-[16px] text-[#57585a]
                                           border-solid border-[1px] border-[#57585a]
                                           outline-none rounded-[6px]
                                           focus:ring-[#cce9e4] focus:ring-4
                                           focus:border-[#008f79]">
                                      <i class="fa fa-search opacity-70 absolute top-[34px] left-[20px]"></i>

                                  </div>
                              </div>
                              <div class="category__items">
                                  <a href="https://www.carousell.sg/" class="following flex items-center h-[73px]
                                border-t-[1px] border-solid border-[#f0f1f1]
                                hover:bg-[#f0f1f1]">
                                      <img
                                          src="https://media.karousell.com/media/photos/country-collections/icons/1/2020/01/22/56-Following-cxxhdpi_1579663947.19.png"
                                          alt="following"
                                          class="w-[32px] h-[32px] mx-[15px]"
                                      >
                                      <p>
                                          Following
                                      </p>
                                  </a>

                                  @foreach($showCategories as $ca)
                                      <div class="cars items-center justify-between h-[73px]
                                    border-t-[1px] border-solid border-[#f0f1f1]">
                                          <div class="grid grid-cols-[367px_73px]">
                                              <a href="https://www.carousell.sg/"
                                                 class="following flex items-center h-[73px] w-[367px] hover:bg-[#f0f0f1]">
                                                  <img
                                                      src="{{$ca}}"
                                                      alt="following"
                                                      class="w-[32px] h-[32px] mx-[15px]"
                                                  >
                                                  <p>
                                                      Cars
                                                  </p>
                                              </a>
                                              <div class="w-[73px] h-[73px] flex items-center justify-center hover:bg-[#f0f0f1]"
                                                   onclick="showItemNav({{$cateId}})">
                                                  <i class="fa fa-chevron-down" id="{{$cateId}}chevron1"
                                                     style="transition: transform .5s ease-in-out"></i>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="cars__items pb-[15px]" id="{{$cateId}}chev" style="display: none">
                                          <div href="https://www.carousell.sg/"
                                               class="ml-[15px]
                                       py-[8px] pr-[260px] pl-[47px]
                                        w-[400px] hover:bg-[#f0f0f1]">
                                              <a href="https://www.carousell.sg/">Used cars</a>
                                          </div>
                                          <div href="https://www.carousell.sg/"
                                               class="ml-[15px]
                                       py-[8px] pr-[260px] pl-[47px]
                                        w-[400px] hover:bg-[#f0f0f1]">
                                              <a href="https://www.carousell.sg/">Used cars</a>
                                          </div>
                                          <div href="https://www.carousell.sg/"
                                               class="ml-[15px]
                                       py-[8px] pr-[260px] pl-[47px]
                                        w-[400px] hover:bg-[#f0f0f1]">
                                              <a href="https://www.carousell.sg/">Used cars</a>
                                          </div>
                                          <div href="https://www.carousell.sg/"
                                               class="ml-[15px]
                                       py-[8px] pr-[260px] pl-[47px]
                                        w-[400px] hover:bg-[#f0f0f1]">
                                              <a href="https://www.carousell.sg/">Used cars</a>
                                          </div>
                                      </div>
                                      @php
                                          $cateId++;
                                      @endphp
                                  @endforeach
                              </div>

                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>

      {{-- login register --}}
      <div class="auth-navigate flex items-center justify-end bg-white">
          <a href="http://carousell.sg"
              class="text-[16px] font-bold leading-[21px] h-full px-[16px]
          flex items-center hover:bg-[#f0f0f1] mobile:hidden">
              Register
          </a>
          <a href="http://carousell.sg"
              class="text-[16px] font-bold leading-[24px]
          mobile:text-[#008f79]
          h-full px-[16px]
          flex items-center hover:bg-[#f0f0f1]">
              Login
          </a>
          <button class="bg-[#ff2636] rounded-sm px-[24px] py-[4px] rounded-[4px]
            text-white font-bold text-[16px] leading-[24px]
            xl:block lg:block md:block sm:hidden
            mobile:hidden">
              Sell
          </button>
      </div>

{{-- mobile nav--}}
      <div class="nav__mobile w-full hidden mobile:flex
      sticky-top top-0
      mobile:items-center mobile:justify-evenly">
          <a href="http://carousell.sg">
              <img src="https://play-lh.googleusercontent.com/kKAzG4q6hhx6dprYBdzFTsUeZocqwsuTL-dvuotPjHDaP1CdBdS2wO8VeQzTntNIo7-u"
              class="w-[48px] h-[48px]">
          </a>

          <div>
              <div class="search__form relative">
                  <i class="fa fa-search absolute top-[35%] left-[5px] opacity-60" ></i>
                  <input type="text" class="h-[40px] w-full bg-[#f0f1f1] rounded-md
                  pl-[25px] text-[14px] leading-[22px] "
                         placeholder="Search Carousell...">
              </div>
          </div>
      </div>
  </div>
    <hr class="mobile:hidden">
    <div class="my-[5px] mx-auto
    xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:ml-0
    xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:hidden">
        @include('components.search')
    </div>
    <hr>
</div>
<hr class="hr__tag">

<script type="text/javascript" src='./js/navbar.js'></script>
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
</style>
