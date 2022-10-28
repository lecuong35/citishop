@extends('Layouts.app')

@section('content')
    @php
        $showBicycle = Config::get('products.bicycle');
        $showCoffee = Config::get('products.coffeeTable');
        $showLego = Config::get('products.lego');
        $showIkea = Config::get('products.ikea');
        $showBrompton = Config::get('products.brompton');
        $showPlant = Config::get('products.plant');
        $showCategories = Config::get('products.category');
        $showSlash = Config::get('products.slashPrice');
        $showRecommend = Config::get('products.recommendProduct');
        $showSlide = Config::get('products.slide');

        $index = 20;
        $cateId = 1;
    @endphp

    {{-- slides --}}
   <div class="slides relative mx-auto pt-[20px] mb-[50px] mt-[50px]
    xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full
    xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:ml-0">
{{--         button prev--}}
       <div class="button__prev">
           <i class="fas fa-chevron-left z-10
           flex items-center justify-center
           w-[36px] h-[36px]
           absolute left-[-15px] top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: none;" id="prev"></i>
       </div>

{{--         button next--}}
       <div class="button__next">
           <i class="fas fa-chevron-right z-10
           flex items-center justify-center
           w-[36px] h-[36px]
           absolute right-[-15px] top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex" id="next"></i>
       </div>

{{--         slides show--}}
       <div class="slides__show flex flex-row nowrap w-full">
           @foreach($showSlide as $slide)
               <a href="http://www.carousell.sg" class="w-[50%] h-auto rounded-lg mx-[5px]">
                   <img src="{{$slide}}"
                        alt="img"
                        class="rounded-lg"
                   >
               </a>
           @endforeach
       </div>
   </div>

    {{-- categories --}}
    <div class="menu xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full mx-auto py-[20px]">
        <div class="menu__title flex flex-row justify-between mb-[20px]">
            <p class="text-[24px] leading-[32px] font-bold">
                What would you like to find?
            </p>
            <div class="menu__modal">
                <!-- Button trigger modal -->
                <div class="px-6 py-2.5
                  text-[#008f79] text-[16px] leading-[24px]
                  rounded transition duration-150 ease-in-out"
                  data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa fa-shopping-cart"></i>
                    See all categories
                </div>

                <!-- Modal -->
                <div class="modal fade hidden fixed top-0 left-0 w-full h-full
                outline-none overflow-x-hidden overflow-y-auto
                flex justify-start z-[9999]"
                     id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog relative max-w-[440px] pointer-events-none
                    my-0 mt-0" style="margin-left: calc(100% - 440px)">
                        <div
                            class="modal-content border-none shadow-lg relative
                            flex flex-col w-full pointer-events-auto bg-white
                            bg-clip-padding rounded-none outline-none text-current">
                            <div
                                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">All Categories</h5>
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
                                                 onclick="showItems({{$cateId}})">
                                                <i class="fa fa-chevron-down" id="{{$cateId}}chevron"
                                                style="transition: transform .5s ease-in-out"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cars__items pb-[15px]" id="{{$cateId}}" style="display: none">
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

        <div class="menu__items flex flex-row justify-between gap-[7px]">
            <a href="http://www.carousell.sg"
                class="property flex flex-col justify-center items-center
            bg-[#f0f1f1] px-[35px] pt-[25px] pb-[45px] rounded-lg
            hover:translate-y-[-7px] transition-transform">
                <img src="https://media.karousell.com/media/photos/country-collections/icons/73/2020/01/22/56-Property-cxxhdpi_1579664037.67.png"
                     alt="property"
                     class="w-[72px] mb-[10px]">
                <p class="text-img">Property</p>
            </a>

            <a href="http://www.carousell.sg"
               class="property flex flex-col justify-center items-center
            bg-[#f0f1f1] px-[35px] pt-[25px] pb-[45px] rounded-lg
            hover:translate-y-[-7px] transition-transform">
                <img src="https://media.karousell.com/media/photos/country-collections/icons/22/2020/01/22/56-Cars-cxxhdpi_1579663915.34.png"
                     alt="property"
                     class="w-[72px] mb-[10px]">
                <p class="text-img">Cars</p>
            </a>

            <a href="http://www.carousell.sg"
               class="property flex flex-col justify-center items-center
            bg-[#f0f1f1] px-[35px] pt-[25px] pb-[45px] rounded-lg
            hover:translate-y-[-7px] transition-transform">
                <img src="https://media.karousell.com/media/photos/country-collections/icons/1908/2019/08/01/56-Home_Services-c_1564657665.98.png"
                     alt="Home Services"
                     class="w-[72px] mb-[10px]">
                <p class="text-img">Home Services</p>
            </a>

            <a href="http://www.carousell.sg"
               class="property flex flex-col justify-center items-center
            bg-[#f0f1f1] px-[35px] pt-[25px] pb-[45px] rounded-lg
            hover:translate-y-[-7px] transition-transform">
                <img src="https://media.karousell.com/media/photos/country-collections/icons/main_v2/02_mobile_phones_gadgets.png"
                     alt="property"
                     class="w-[72px] mb-[10px]">
                <p class="text-img">Mobile Phone & Gadgets</p>
            </a>

            <a href="http://www.carousell.sg"
               class="property flex flex-col justify-center items-center
            bg-[#f0f1f1] px-[35px] pt-[25px] pb-[45px] rounded-lg
            hover:translate-y-[-7px] transition-transform">
                <img src="https://media.karousell.com/media/photos/country-collections/icons/main_v2/08_womens_fashion.png"
                     alt="property"
                     class="w-[72px] mb-[10px]">
                <p class="text-img">Women's Fashion</p>
            </a>

            <a href="http://www.carousell.sg"
               class="property flex flex-col justify-center items-center
            bg-[#f0f1f1] px-[35px] pt-[25px] pb-[45px] rounded-lg
            hover:translate-y-[-7px] transition-transform">
                <img src="https://media.karousell.com/media/photos/country-collections/icons/main_v2/09_mens_fashion.png"
                     alt="property"
                     class="w-[72px] mb-[10px]">
                <p class="text-img">Women's Man</p>
            </a>

            <a href="http://www.carousell.sg"
               class="property flex flex-col justify-center items-center
            bg-[#f0f1f1] px-[35px] pt-[25px] pb-[45px] rounded-lg
            hover:translate-y-[-7px] transition-transform">
                <img src="https://media.karousell.com/media/photos/country-collections/icons/main_v2/10_luxury.png"
                     alt="property"
                     class="w-[72px] mb-[10px]">
                <p class="text-img">Luxury</p>
            </a>
        </div>

    </div>

{{-- trending now --}}
    <div class="trending xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full mx-auto py-[20px] relative">
        <div class="trending__title flex justify-between items-center mb-[30px]">
            <p class="text-[24px] leading-[32px] font-bold">
                Trending now
            </p>
            <a href="http://www.carousell.sg"
                class="text-[16px] text-[#008f79] hover:underline">
                See more 'Bicycle'
                <span class="mx-[5px]">
                    <i class="fa fa-chevron-right"></i>
                </span>
            </a>
        </div>

    {{-- trending topic --}}
        <div class="trending__topic flex flex-row justify-start gap-[10px] mb-[20px]">
            <button class="bicycle text-[16px] leading-[24px] px-[20px] py-[10px]
            border-[1px] border-solid border-gray-300 rounded-full
            focus:bg-[rgba(0,143,121,.2)] focus:text-[#026958] focus:border-[#026958]"
            onclick="clickTopic(1)">
                Bicycle
            </button>
            <button class="bicycle text-[16px] leading-[24px] px-[20px] py-[10px]
            border-[1px] border-solid border-gray-300 rounded-full
            focus:bg-[rgba(0,143,121,.2)] focus:text-[#026958] focus:border-[#026958]"
            onclick="clickTopic(2)">
                Coffee table
            </button>
            <button class="bicycle text-[16px] leading-[24px] px-[20px] py-[10px]
            border-[1px] border-solid border-gray-300 rounded-full
            focus:bg-[rgba(0,143,121,.2)] focus:text-[#026958] focus:border-[#026958]"
            onclick="clickTopic(3)">
                Lego
            </button>
            <button class="bicycle text-[16px] leading-[24px] px-[20px] py-[10px]
            border-[1px] border-solid border-gray-300 rounded-full
            focus:bg-[rgba(0,143,121,.2)] focus:text-[#026958] focus:border-[#026958]"
            onclick="clickTopic(4)">
                Ikea
            </button>
            <button class="bicycle text-[16px] leading-[24px] px-[20px] py-[10px]
            border-[1px] border-solid border-gray-300 rounded-full
            focus:bg-[rgba(0,143,121,.2)] focus:text-[#026958] focus:border-[#026958]"
            onclick="clickTopic(5)">
                Brompton
            </button>
            <button class="bicycle text-[16px] leading-[24px] px-[20px] py-[10px]
            border-[1px] border-solid border-gray-300 rounded-full
            focus:bg-[rgba(0,143,121,.2)] focus:text-[#026958] focus:border-[#026958]"
            onclick="clickTopic(6)">
                Plants
            </button>
        </div>

        {{-- topic items--}}
        <div id="bi1" class="w-full">
            <div class="bicycle__topic overflow-hidden flex flex-row nowrap relative" style="display: flex">
                @foreach($showBicycle as $bi)
                    <div class="bi p-[5px] w-[20%] hover:shadow-2xl flex flex-col justify-between h-[450px]">
                        <div>
                            <a href="http://www.carousell.sg"
                               class="bi__header flex flex-row gap-[5px]
                        items-center
                        px-[10px]">
                                <img src="https://media.karousell.com/media/photos/profiles/2021/04/18/tonytoh8888_1618750501.jpg" alt=""
                                     class="w-[32px] h-[32px] rounded-full">
                                <div class="header__name flex flex-col justify-center">
                                    <p class="text-[14px] leading-[22px] font-bold text-[#2c2c2d]">
                                        planet888
                                    </p>
                                    <p class="text-[12px] leading-[20px] text-[#57585a]">
                                        26 minutes ago
                                    </p>
                                </div>
                            </a>
                            <a href="http://www.carousell.sg"
                               class="bi__body px-[5px] flex flex-col">
                                <img src="{{$bi}}" alt=""
                                     class="rounded-md w-[100%] h-[240px] my-[10px]">
                                <div class="body__describe">
                                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                                        Kids balance bicycle
                                    </p>
                                    <p class="text-[16px] leading-[24px] text-[#57585a] font-bold">
                                        S$ 70
                                    </p>
                                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                                        Lightly used
                                    </p>
                                </div>
                            </a>
                        </div>
                        <a class="bi__footer flex items-center"
                           href="http://www.carousell.sg">
                            <i class="far fa-heart" style="color: #57585a"></i>
                            <p class="text-[12px] text-[#57585a] leading-[20px]">
                                12
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
            {{-- button prev--}}
            <div class="bi__prev">
                <i class="fas fa-chevron-left z-10
                   flex items-center justify-center
                   w-[36px] h-[36px]
                   absolute left-[-15px] top-[50%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex;" id="biPrev"></i>
            </div>

            {{-- button next--}}
            <div class="bi__next">
                <i class="fas fa-chevron-right z-10
                   flex items-center justify-center
                   w-[36px] h-[36px] right-[-15px]
                   absolute top-[50%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex" id="biNext"></i>
            </div>
        </div>

        <div style="display: none;" id="co2">
            <div class="coffee__topic overflow-hidden flex flex-row nowrap relative">
                @foreach($showCoffee as $co)
                    <div class="co p-[5px] w-[20%] hover:shadow-2xl flex flex-col justify-between h-[450px]">
                        <div>
                            <a href="http://www.carousell.sg"
                               class="bi__header flex flex-row gap-[5px]
                        items-center
                        px-[10px]">
                                <img src="https://media.karousell.com/media/photos/profiles/2021/04/18/tonytoh8888_1618750501.jpg" alt=""
                                     class="w-[32px] h-[32px] rounded-full">
                                <div class="header__name flex flex-col justify-center">
                                    <p class="text-[14px] leading-[22px] font-bold text-[#2c2c2d]">
                                        planet888
                                    </p>
                                    <p class="text-[12px] leading-[20px] text-[#57585a]">
                                        26 minutes ago
                                    </p>
                                </div>
                            </a>
                            <a href="http://www.carousell.sg"
                               class="bi__body px-[5px] flex flex-col">
                                <img src="{{$co}}" alt=""
                                     class="rounded-md w-[100%] h-[240px] my-[10px]">
                                <div class="body__describe">
                                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                                        Kids balance bicycle
                                    </p>
                                    <p class="text-[16px] leading-[24px] text-[#57585a] font-bold">
                                        S$ 70
                                    </p>
                                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                                        Lightly used
                                    </p>
                                </div>
                            </a>
                        </div>
                        <a class="bi__footer flex items-center"
                           href="http://www.carousell.sg">
                            <i class="far fa-heart" style="color: #57585a"></i>
                            <p class="text-[12px] text-[#57585a] leading-[20px]">
                                12
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
{{--            button prev--}}
            <div class="co__prev">
                <i class="fas fa-chevron-left z-10
                   flex items-center justify-center
                   w-[36px] h-[36px]
                   absolute left-[-15px] top-[50%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
            </div>

{{--            button next--}}
            <div class="co__next">
                <i class="fas fa-chevron-right z-10
                   flex items-center justify-center
                   w-[36px] h-[36px] right-[-15px]
                   absolute top-[50%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex"></i>
            </div>
        </div>

        <div style="display: none;" id="le3" class="w-full">
            <div class="lego__topic overflow-hidden flex flex-row nowrap relative w-full">
                @foreach($showLego as $le)
                    <div class="bi p-[5px] w-[20%] hover:shadow-2xl flex flex-col justify-between h-[450px]">
                        <div>
                            <a href="http://www.carousell.sg"
                               class="bi__header flex flex-row gap-[5px]
                        items-center
                        px-[10px]">
                                <img src="https://media.karousell.com/media/photos/profiles/2021/04/18/tonytoh8888_1618750501.jpg" alt=""
                                     class="w-[32px] h-[32px] rounded-full">
                                <div class="header__name flex flex-col justify-center">
                                    <p class="text-[14px] leading-[22px] font-bold text-[#2c2c2d]">
                                        planet888
                                    </p>
                                    <p class="text-[12px] leading-[20px] text-[#57585a]">
                                        26 minutes ago
                                    </p>
                                </div>
                            </a>
                            <a href="http://www.carousell.sg"
                               class="bi__body px-[5px] flex flex-col">
                                <img src="{{$le}}" alt=""
                                     class="rounded-md w-[100%] h-[240px] my-[10px]">
                                <div class="body__describe">
                                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                                        Kids balance bicycle
                                    </p>
                                    <p class="text-[16px] leading-[24px] text-[#57585a] font-bold">
                                        S$ 70
                                    </p>
                                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                                        Lightly used
                                    </p>
                                </div>
                            </a>
                        </div>
                        <a class="bi__footer flex items-center"
                           href="http://www.carousell.sg">
                            <i class="far fa-heart" style="color: #57585a"></i>
                            <p class="text-[12px] text-[#57585a] leading-[20px]">
                                12
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
{{--            button prev--}}
            <div class="le__prev">
                <i class="fas fa-chevron-left z-10
                   flex items-center justify-center
                   w-[36px] h-[36px]
                   absolute left-[-15px] top-[50%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
            </div>

{{--            button next--}}
            <div class="le__next">
                <i class="fas fa-chevron-right z-10
                   flex items-center justify-center
                   w-[36px] h-[36px] right-[-15px]
                   absolute top-[50%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex"></i>
            </div>
        </div>

        <div style="display: none" id="ik4">
            <div class="ikea__topic overflow-hidden flex flex-row nowrap relative">
                @foreach($showIkea as $ik)
                    <div class="bi p-[5px] w-[20%] hover:shadow-2xl flex flex-col justify-between h-[450px]">
                        <div>
                            <a href="http://www.carousell.sg"
                               class="bi__header flex flex-row gap-[5px]
                        items-center
                        px-[10px]">
                                <img src="https://media.karousell.com/media/photos/profiles/2021/04/18/tonytoh8888_1618750501.jpg" alt=""
                                     class="w-[32px] h-[32px] rounded-full">
                                <div class="header__name flex flex-col justify-center">
                                    <p class="text-[14px] leading-[22px] font-bold text-[#2c2c2d]">
                                        planet888
                                    </p>
                                    <p class="text-[12px] leading-[20px] text-[#57585a]">
                                        26 minutes ago
                                    </p>
                                </div>
                            </a>
                            <a href="http://www.carousell.sg"
                               class="bi__body px-[5px] flex flex-col">
                                <img src="{{$ik}}" alt=""
                                     class="rounded-md w-[100%] h-[240px] my-[10px]">
                                <div class="body__describe">
                                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                                        Kids balance bicycle
                                    </p>
                                    <p class="text-[16px] leading-[24px] text-[#57585a] font-bold">
                                        S$ 70
                                    </p>
                                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                                        Lightly used
                                    </p>
                                </div>
                            </a>
                        </div>
                        <a class="bi__footer flex items-center"
                           href="http://www.carousell.sg">
                            <i class="far fa-heart" style="color: #57585a"></i>
                            <p class="text-[12px] text-[#57585a] leading-[20px]">
                                12
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
{{--            button prev--}}
            <div class="ik__prev">
                <i class="fas fa-chevron-left z-10
                   flex items-center justify-center
                   w-[36px] h-[36px]
                   absolute left-[-15px] top-[50%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
            </div>

{{--            button next--}}
            <div class="ik__next">
                <i class="fas fa-chevron-right z-10
                   flex items-center justify-center
                   w-[36px] h-[36px] right-[-15px]
                   absolute top-[50%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex"></i>
            </div>
        </div>

        <div style="display: none" id="bro5">
            <div class="brompton__topic overflow-hidden flex flex-row nowrap relative">
                @foreach($showBicycle as $bro)
                    <div class="bi p-[5px] w-[20%] hover:shadow-2xl flex flex-col justify-between h-[450px]">
                        <div>
                            <a href="http://www.carousell.sg"
                               class="bi__header flex flex-row gap-[5px]
                        items-center
                        px-[10px]">
                                <img src="https://media.karousell.com/media/photos/profiles/2021/04/18/tonytoh8888_1618750501.jpg" alt=""
                                     class="w-[32px] h-[32px] rounded-full">
                                <div class="header__name flex flex-col justify-center">
                                    <p class="text-[14px] leading-[22px] font-bold text-[#2c2c2d]">
                                        planet888
                                    </p>
                                    <p class="text-[12px] leading-[20px] text-[#57585a]">
                                        26 minutes ago
                                    </p>
                                </div>
                            </a>
                            <a href="http://www.carousell.sg"
                               class="bi__body px-[5px] flex flex-col">
                                <img src="{{$bro}}" alt=""
                                     class="rounded-md w-[100%] h-[240px] my-[10px]">
                                <div class="body__describe">
                                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                                        Kids balance bicycle
                                    </p>
                                    <p class="text-[16px] leading-[24px] text-[#57585a] font-bold">
                                        S$ 70
                                    </p>
                                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                                        Lightly used
                                    </p>
                                </div>
                            </a>
                        </div>
                        <a class="bi__footer flex items-center"
                           href="http://www.carousell.sg">
                            <i class="far fa-heart" style="color: #57585a"></i>
                            <p class="text-[12px] text-[#57585a] leading-[20px]">
                                12
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
{{--            button prev--}}
            <div class="bro__prev">
                <i class="fas fa-chevron-left z-10
                   flex items-center justify-center
                   w-[36px] h-[36px]
                   absolute left-[-15px] top-[50%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
            </div>

{{--            button next--}}
            <div class="bro__next">
                <i class="fas fa-chevron-right z-10
                   flex items-center justify-center
                   w-[36px] h-[36px] right-[-15px]
                   absolute top-[50%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex"> </i>
            </div>
        </div>

        <div style="display: none" id="pl6">
            <div class="plants__topic overflow-hidden flex flex-row nowrap relative">
                @foreach($showPlant as $pl)
                    <div class="bi p-[5px] w-[20%] hover:shadow-2xl flex flex-col justify-between h-[450px]">
                        <div>
                            <a href="http://www.carousell.sg"
                               class="bi__header flex flex-row gap-[5px]
                        items-center
                        px-[10px]">
                                <img src="https://media.karousell.com/media/photos/profiles/2021/04/18/tonytoh8888_1618750501.jpg" alt=""
                                     class="w-[32px] h-[32px] rounded-full">
                                <div class="header__name flex flex-col justify-center">
                                    <p class="text-[14px] leading-[22px] font-bold text-[#2c2c2d]">
                                        planet888
                                    </p>
                                    <p class="text-[12px] leading-[20px] text-[#57585a]">
                                        26 minutes ago
                                    </p>
                                </div>
                            </a>
                            <a href="http://www.carousell.sg"
                               class="bi__body px-[5px] flex flex-col">
                                <img src="{{$pl}}" alt=""
                                     class="rounded-md w-[100%] h-[240px] my-[10px]">
                                <div class="body__describe">
                                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                                        Kids balance bicycle
                                    </p>
                                    <p class="text-[16px] leading-[24px] text-[#57585a] font-bold">
                                        S$ 70
                                    </p>
                                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                                        Lightly used
                                    </p>
                                </div>
                            </a>
                        </div>
                        <a class="bi__footer flex items-center"
                           href="http://www.carousell.sg">
                            <i class="far fa-heart" style="color: #57585a"></i>
                            <p class="text-[12px] text-[#57585a] leading-[20px]">
                                12
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>

{{--            button prev--}}
            <div class="pl__prev">
                <i class="fas fa-chevron-left z-10
                   flex items-center justify-center
                   w-[36px] h-[36px]
                   absolute left-[-15px] top-[50%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
            </div>

{{--            button next--}}
            <div class="pl__next">
                <i class="fas fa-chevron-right z-10
                   flex items-center justify-center
                   w-[36px] h-[36px] right-[-15px]
                   absolute top-[50%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex"></i>
            </div>
        </div>
    </div>

{{-- slash price --}}
    <div class="trending xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full mx-auto py-[20px] relative">
        <div class="trending__title flex justify-between items-center mb-[30px]">
            <p class="text-[24px] leading-[32px] font-bold">
                Slashed Prices
            </p>
        </div>

        {{-- topic items--}}
        <div class="slashed__price overflow-hidden flex flex-row nowrap relative">
            @foreach($showSlash as $slash)
                <div class="bi p-[5px] w-[20%] hover:shadow-2xl flex flex-col justify-between h-[450px]">
                    <div>
                        <a href="http://www.carousell.sg"
                           class="bi__header flex flex-row gap-[5px]
                        items-center
                        px-[10px]">
                            <img src="https://media.karousell.com/media/photos/profiles/2021/04/18/tonytoh8888_1618750501.jpg" alt=""
                                 class="w-[32px] h-[32px] rounded-full">
                            <div class="header__name flex flex-col justify-center">
                                <p class="text-[14px] leading-[22px] font-bold text-[#2c2c2d]">
                                    planet888
                                </p>
                                <p class="text-[12px] leading-[20px] text-[#57585a]">
                                    26 minutes ago
                                </p>
                            </div>
                        </a>
                        <a href="http://www.carousell.sg"
                           class="bi__body px-[5px] flex flex-col">
                            <img src="{{$slash}}" alt=""
                                 class="rounded-md w-[100%] h-[240px] my-[10px]">
                            <div class="body__describe">
                                <p class="text-[14px] leading-[22px] text-[#57585a]">
                                    Kids balance bicycle
                                </p>
                                <p class="text-[16px] leading-[24px] text-[#57585a] font-bold">
                                    S$ 70
                                </p>
                                <p class="text-[14px] leading-[22px] text-[#57585a]">
                                    Lightly used
                                </p>
                            </div>
                        </a>
                    </div>
                    <a class="bi__footer flex items-center"
                       href="http://www.carousell.sg">
                        <i class="far fa-heart" style="color: #57585a"></i>
                        <p class="text-[12px] text-[#57585a] leading-[20px]">
                            12
                        </p>
                    </a>
                </div>
            @endforeach
        </div>

        {{-- button prev--}}
        <div class="slash__prev">
            <i class="fas fa-chevron-left z-10
           flex items-center justify-center
           w-[36px] h-[36px]
           absolute left-[-15px] top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex;" id="biPrev"></i>
        </div>

        {{-- button next--}}
        <div class="slash__next">
            <i class="fas fa-chevron-right z-10
           flex items-center justify-center
           w-[36px] h-[36px] right-[-15px]
           absolute top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex" id="biNext"></i>
        </div>

    </div>

{{-- Recommended For You--}}
    <div class="trending xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full mx-auto py-[20px]">
        <div class="trending__title flex justify-between items-center mb-[30px]">
            <p class="text-[24px] leading-[32px] font-bold">
                Recommended For You
            </p>
        </div>

        {{-- topic items--}}
        <div class="recommend overflow-hidden grid grid-cols-4 relative">
            @foreach($showRecommend as $re)
                <div class="bi p-[5px] hover:shadow-2xl flex flex-col justify-between h-[450px] mb-[20px]">
                        <div>
                            <a href="http://www.carousell.sg"
                               class="bi__header flex flex-row gap-[5px]
                        items-center
                        px-[10px]">
                                <img src="https://media.karousell.com/media/photos/profiles/2021/04/18/tonytoh8888_1618750501.jpg" alt=""
                                     class="w-[32px] h-[32px] rounded-full">
                                <div class="header__name flex flex-col justify-center">
                                    <p class="text-[14px] leading-[22px] font-bold text-[#2c2c2d]">
                                        planet888
                                    </p>
                                    <p class="text-[12px] leading-[20px] text-[#57585a]">
                                        26 minutes ago
                                    </p>
                                </div>
                            </a>
                            <a href="http://www.carousell.sg"
                               class="bi__body px-[5px] flex flex-col">
                                <img src="{{$re}}" alt=""
                                     class="rounded-md w-[100%] h-[240px] my-[10px]">
                                <div class="body__describe">
                                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                                        Kids balance bicycle
                                    </p>
                                    <p class="text-[16px] leading-[24px] text-[#57585a] font-bold">
                                        S$ 70
                                    </p>
                                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                                        Lightly used
                                    </p>
                                </div>
                            </a>
                        </div>
                        <a class="bi__footer flex items-center"
                           href="http://www.carousell.sg">
                            <i class="far fa-heart" style="color: #57585a"></i>
                            <p class="text-[12px] text-[#57585a] leading-[20px]">
                                12
                            </p>
                        </a>
                    </div>
            @endforeach
        </div>

       <div class="w-full flex items-center justify-center mt-[30px]">
           <button class="py-[10px] px-[20px]
            border-solid border-[1px] border-[#c5c5c6]
            rounded-md
            hover:ring-[4px] hover:ring-[#cce9e4] hover:bg-[#f0f0f1]
            text-[16px] leading-[24px] font-bold"
           onclick="viewMore()">
                   View more
           </button>
       </div>

    </div>
    <hr>

{{-- home footer--}}
    <div class="home__footer my-[100px] mx-auto
    xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full
    xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:ml-0">
        <div class="sab mb-[50px]">
            <p class="sab__title flex justify-center items-center
            text-[24px] leading-[32px] text-[#2c2c2d] font-bold">
                Sell and buy every kinda thing on Carousell
            </p>
            <div class="sab__items flex justify-between">
                <div class="item1 flex flex-col justify-center items-center w-[calc(100% / 3)]">
                    <img src="https://sl3-cdn.karousell.com/homescreens/main/sg_web_homepage/main/blob1.gif" alt=""
                    class="w-[30%] h-auto mt-[20%] mx-[35%] mb-[10%]">
                    <p class="text-[20px] leading-[28px] text-[#57585a] font-bold mb-[15px]">
                        Sell and declutter
                    </p>
                    <p class="text-[16px] leading-[24px] text-[#57585a]">
                        make money while saving the earth
                    </p>
                </div>
                <div class="item1 flex flex-col justify-center items-center w-[calc(100% / 3)]">
                    <img src="https://sl3-cdn.karousell.com/homescreens/main/sg_web_homepage/main/blob2.gif" alt=""
                         class="w-[30%] h-auto mt-[20%] mx-[35%] mb-[10%]">
                    <p class="text-[20px] leading-[28px] text-[#57585a] font-bold mb-[15px]">
                        Sell and declutter
                    </p>
                    <p class="text-[16px] leading-[24px] text-[#57585a]">
                        make money while saving the earth
                    </p>
                </div>
                <div class="item1 flex flex-col justify-center items-center w-[calc(100% / 3)]">
                    <img src="https://sl3-cdn.karousell.com/homescreens/main/sg_web_homepage/main/blob3.gif" alt=""
                         class="w-[30%] h-auto mt-[20%] mx-[35%] mb-[10%]">
                    <p class="text-[20px] leading-[28px] text-[#57585a] font-bold mb-[15px]">
                        Sell and declutter
                    </p>
                    <p class="text-[16px] leading-[24px] text-[#57585a]">
                        make money while saving the earth
                    </p>
                </div>
            </div>
        </div>

        <div class="transact">
            <p class="sab__title flex justify-center items-center
            text-[24px] leading-[32px] text-[#2c2c2d] font-bold
            mb-[50px]">
                Transact with a trusted local community
            </p>
            <div class="transact__items flex justify-evenly">
                <div class="flex flex-col justify-start w-[20%]">
                    <div class="flex justify-start mb-[10px]">
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                    </div>
                    <p class="text-[16px] leading-[24px] text-[#57585a] font-bold mb-[15px]">
                        Awesome community
                    </p>
                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                        Safe, reliable & easy to use user interface. Overall an awesome community to be in! 😁
                    </p>
                    <p class="text-[14px] leading-[22px] text-[#6d6e71]">
                        @md.helmi
                    </p>
                </div>
                <div class="flex flex-col justify-start w-[20%]">
                    <div class="flex justify-start mb-[10px]">
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                    </div>
                    <p class="text-[16px] leading-[24px] text-[#57585a] font-bold mb-[15px]">
                        Awesome community
                    </p>
                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                        Safe, reliable & easy to use user interface. Overall an awesome community to be in! 😁
                    </p>
                    <p class="text-[14px] leading-[22px] text-[#6d6e71]">
                        @md.helmi
                    </p>
                </div>
                <div class="flex flex-col justify-start w-[20%]">
                    <div class="flex justify-start mb-[10px]">
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                    </div>
                    <p class="text-[16px] leading-[24px] text-[#57585a] font-bold mb-[15px]">
                        Awesome community
                    </p>
                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                        Safe, reliable & easy to use user interface. Overall an awesome community to be in! 😁
                    </p>
                    <p class="text-[14px] leading-[22px] text-[#6d6e71]">
                        @md.helmi
                    </p>
                </div>
                <div class="flex flex-col justify-start w-[20%]">
                    <div class="flex justify-start mb-[10px]">
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                        <i class="fas fa-star" style="color:rgb(0, 143, 121)"></i>
                    </div>
                    <p class="text-[16px] leading-[24px] text-[#57585a] font-bold mb-[15px]">
                        Awesome community
                    </p>
                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                        Safe, reliable & easy to use user interface. Overall an awesome community to be in! 😁
                    </p>
                    <p class="text-[14px] leading-[22px] text-[#6d6e71]">
                        @md.helmi
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src='./js/home.js'></script>
@endsection

