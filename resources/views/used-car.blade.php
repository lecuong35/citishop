@extends('Layouts.app')

@php
    $headerSearch = Config::get('used-cars.headerSearch');
    $body = Config::get('used-cars.body');
    $depreciation = Config::get('used-cars.depreciation');
    $trending = Config::get('used-cars.trending');
    $topic = Config::get('used-cars.topic');
    $topicNames = Config::get('used-cars.topicNames');
    $popularBrands = Config::get('used-cars.popularBrands');
    $popularBrandNames = Config::get('used-cars.popularBrandNames');
    $cars = Config::get('used-cars.cars');
    $showSlide = Config::get('products.slide');
    $exploreCars = Config::get('used-cars.exploreCars');
    $topicSearch = Config::get('used-cars.topicSearch');
    $brandSearch = Config::get('products.footerLinks');
@endphp

@section('content')
    {{-- header search --}}
    <div class=" hidden flex overflow-x-auto
mobile:mt-[25px] fixed z-[9]
 mobile:flex bg-white w-full">
        @foreach($headerSearch as $he)
            <div class="px-[20px] py-[10px]">
                <a href="https://www.carousell.sg">
                    <p class="text-[16px] leading-[24px]
            hover:text-[#008f79] hover:underline inline-block overflow-x-hidden whitespace-nowrap">
                        {{$he}}
                    </p>
                </a>
            </div>
        @endforeach
    </div>

    {{--    searchs   --}}
    <div class="mt-[150px] xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full
        mobile:ml-0 mobile:mt-[100px]
        rounded-xl mobile:rounded-none
        mobile:flex-col
        xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full flex
        mx-auto">
        <div class="bgSearch w-full h-[458px]
        rounded-xl mobile:rounded-none
        mobile:w-full mobile:h-[250px]"></div>
        <div class="searchCarContent absolute top-[40%]
        w-[60%] ml-[5%] mobile:ml-0
        flex flex-col gap-[20px]
        mobile:relative mobile:mt-[-50px]
        mobile:w-full mobile:left-0">
            <div class="titleCar mobile:px-[10px]">
                <p class="text-[30px] leading-[38px] font-bold text-white
                mobile:text-[20px] mobile:leading-[28px]">
                    Over 10,000 Used Cars in Singapore
                </p>
            </div>
            <div class="searchCar w-[100%] mx-auto
            mobile:flex mobile:flex-col mobile:relative
            items-center justify-center mobile:px-[10px]
            mobile:bg-white mobile:rounded-xl">
                <div class="wrapperSearch flex w-full bg-white
                rounded-lg h-[44px] items-center px-[10px]
                mobile:h-fit
                mobile:flex mobile:flex-col mobile:py-[20px]">
                    {{-- for search 1 --}}
                    <div class="bodySearch relative mobile:w-full">
                        <div class=" pr-[80px] mobile:pr-0 mobile:mb-[20px]" onclick="clickToggle('bodyToggle')">
                            <div class="flex items-center gap-[5px]
                            mobile:flex mobile:justify-between">
                                <p class="text-[16px] leading-[24px] w-[70px]" style="display: block"
                                   id="bodyToggleText">
                                    Body
                                </p>

                                <div class="mobile:hidden">
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                            </div>
                            <div class="px-[10px] py-[10px] border-b-[1px]
                            border-solid border-[#c5c5c6] flex justify-between
                            w-full
                            hidden mobile:flex">
                                <p class="text-[16px] leading-[24px]">Any</p>
                                <i class="fa fa-chevron-right hidden mobile:block"></i>
                            </div>
                        </div>
                        <div style="display: none;" id="bodyToggle"
                             class="absolute top-[50px] left-0 w-[300px] h-[250px] overflow-y-auto
                        bg-white shadow-xl rounded-lg
                        mobile:fixed mobile:w-full mobile:h-full
                        mobile:top-0 mobile:rounded-none mobile:z-[9]
                        mobile:overflow-y-hidden mobile:px-[5px]">
                            <div class="hidden
                            mobile:flex justify-between items-center
                            shadow-xl pl-[20px] pr-[10px] py-[10px]">
                                <i class="fa fa-arrow-left" onclick="clickToggle('bodyToggle')"></i>
                                <p class="text-[20px] leading-[28px]">Body</p>
                                <p class="text-[20px] leading-[28px] text-[#008f79]"
                                   onclick="clickToggle('bodyToggle')">
                                    Apply
                                </p>
                            </div>
                            <div class="flex flex-col w-full">
                                @foreach($body as $bo)
                                    <div class="py-[5px] px-[10px] flex items-center gap-[10px] w-full hover:bg-[#f0f0f1]">
                                        <input type="checkbox" id="{{$bo}}" class="accent-[#026859] w-[20px] h-[20px]" onclick="chooseBody('bodyToggle', '{{$bo}}')">
                                        <label for="{{$bo}}">{{$bo}}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- for search 2 --}}
                    <div class="depreciationSearch relative mobile:w-full">
                        <div class=" pr-[80px] mobile:pr-0 mobile:mb-[20px]" onclick="clickToggle('deToggle')">
                            <div class="flex items-center gap-[5px]
                            mobile:flex mobile:justify-between">
                                <p class="text-[16px] leading-[24px] w-[70px] mr-[20px] mobile:pr-0" style="display: block"
                                   id="bodyToggleText">
                                    Depreciation
                                </p>

                                <div class="mobile:hidden">
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                            </div>
                            <div class="px-[10px] py-[10px] border-b-[1px]
                            border-solid border-[#c5c5c6] flex justify-between
                            w-full
                            hidden mobile:flex">
                                <p class="text-[16px] leading-[24px]">Any</p>
                                <i class="fa fa-chevron-right hidden mobile:block"></i>
                            </div>
                        </div>
                        <div style="display: none;" id="deToggle"
                             class="absolute top-[50px] left-0 w-[300px] h-[250px] overflow-y-auto
                        bg-white shadow-xl rounded-lg
                        mobile:fixed mobile:w-full mobile:h-full
                        mobile:top-0 mobile:rounded-none mobile:z-[9]
                        mobile:overflow-y-hidden mobile:px-[5px]">
                            <div class="hidden
                            mobile:flex justify-between items-center
                            shadow-xl pl-[20px] pr-[10px] py-[10px]">
                                <i class="fa fa-arrow-left" onclick="clickToggle('deToggle')"></i>
                                <p class="text-[20px] leading-[28px]">Depreciation</p>
                                <p class="text-[20px] leading-[28px] text-[#008f79]"
                                   onclick="clickToggle('deToggle')">
                                    Apply
                                </p>
                            </div>
                            <div class="flex flex-col w-full">
                                @foreach($depreciation as $de)
                                    <div class="py-[5px] px-[10px] flex items-center gap-[10px] w-full hover:bg-[#f0f0f1]">
                                        <input type="radio" name="depreciationSearch" id="{{$de}}" class="accent-[#026859] w-[20px] h-[20px]" onclick="chooseBody('deToggle', '{{$de}}')">
                                        <label for="{{$de}}">{{$de}}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="priceSearch relative mobile:w-full">
                        <div class="flex items-center gap-[5px] pr-[80px] mobile:hidden"
                             onclick="clickToggle('priceToggle')">
                            <p class="text-[16px] leading-[24px]">Price</p>
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <div class="absolute bg-white rounded-lg top-[50px] left-0 py-[10px]
                        hidden mobile:top-0 mobile:w-full
                        mobile:flex mobile:relative"
                             id="priceToggle">
                            <div class="px-[20px] flex flex-col gap-[10px] mobile:w-full mobile:px-0" >
                                <p class="text-[20px] leading-[28px] font-bold mb-[20px] mobile:font-normal
                                mobile:text-[16px]">Price</p>
                                <div class="flex justify-between gap-[20px] mobile:flex-col mobile:px-0">
                                    <div class="relative basis-2/5 mobile:w-full mobile:px-0">
                                        <input type="text"
                                               class="pl-[30px] pr-[5px] py-[5px] outline-none h-[44px]
                                        border-solid border-[#c5c5c6] w-[150px] mobile:w-full
                                        mobile:border-b-[1px] xl:border-[1px] lg:border-[1px] md:border-[1px] sm:border-[1px]
                                        focus:border-[#026958]" id="minUsedCarInput">
                                        <p class="absolute top-[10px] left-[5px]">S$</p>
                                        <p class="text-[#c5c6c6] absolute top-[10px] left-[35px]
                                        bg-white" id="minUsedCar">
                                            Minimum</p>
                                    </div>

                                    <div class="relative basis-2/5 mobile:w-full mobile:px-0">
                                        <input type="text"
                                               class="pl-[30px] pr-[5px] py-[5px] outline-none h-[44px]
                                           border-solid border-[#c5c5c6] w-[150px] mobile:w-full
                                            mobile:border-b-[1px] xl:border-[1px] lg:border-[1px] md:border-[1px] sm:border-[1px]
                                           focus:border-[#026958]" id="maxUsedCarInput">
                                        <p class="absolute top-[10px] left-[5px]">S$</p>
                                        <p class="text-[#c5c6c6] absolute top-[10px] left-[35px]
                                        bg-white" id="maxUsedCar">
                                            Maximum</p>
                                    </div>
                                </div>

                                <div class="flex gap-[10px] items-center
                                justify-end mt-[10px] mobile:hidden">
                                    <button class="px-[20px] py-[5px] rounded-lg
                                    border-[1px] border-solid border-[#c5c5c6]
                                    text-[18px] leading-[24px] font-bold bg-white
                                    hover:bg-[#f0f0f1] mobile:hidden"
                                            onclick="clickToggle('priceToggle')">
                                        Clear
                                    </button>

                                    <button class="px-[20px] py-[5px] rounded-lg
                                    border-[1px] border-solid border-[#c5c5c6]
                                    text-[18px] leading-[24px] font-bold text-white
                                    bg-[#026958] mobile:w-full mobile:py-[5px]
                                    hover:opacity-[0.6]"
                                            onclick="clickToggle('priceToggle')">
                                        Apply
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="inputSearch h-[44px] pr-[100px]
                    w-full flex items-center justify-start mobile:hidden">
                        <input placeholder="Search for an item"
                               class="h-[44px] outline-none w-full px-[10px]
                               hover:border-solid hover:border-[#026958] hover:border-[1px]
                               hover:ring-[4px] hover:ring-[#cce9e4]">
                    </div>
                    <div class="buttonSearch absolute right-[10px] top-[62px]
                    mobile:relative mobile:top-0
                    mobile:right-0 mobile:w-full mobile:pt-[20px]">
                        <button class="flex items-center gap-[10px] bg-[#008f79]
                        px-[10px] py-[5px] mobile:w-full
                        rounded-lg mobile:justify-center">
                            <i class="fa fa-search" style="color: white"></i>
                            <p class="text-[16px] leading-[24px] text-white">Search</p>
                        </button>
                    </div>
                </div>
            </div>

            <div class="trendingCar mobile:bg-white
            justify-center items-center w-full">
                <p class="text-[16px] leading-[24px] text-white
                font-bold mobile:font-normal mobile:text-[#000]
                mobile:py-[10px]">Trending: </p>
                <div class="text-[16px] leading-[24px] text-white flex
                mobile:overflow-x-auto mobile:flex">
                    @foreach($trending as $tre)
                        <div class="mobile:px-[10px] mobile:py-[5px] mobile:rounded-full
                            mobile:bg-[#f0f0f1] mobile:gap-[10px]">
                            <a href="https://www.carousell.sg"
                               class="hover:underline text-[#fff] mobile:text-[#000]
                                   mobile:whitespace-nowrap mobile:inline-block">
                                {{ $tre }},
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{--topics--}}
    <div class="menu xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%]
    mx-auto py-[20px] mt-[20px] mobile:mt-[50px]">
        <div class="menu__title flex flex-row justify-between mb-[20px]">
            <p class="text-[24px] leading-[32px] font-bold
            mobile:text-[18px] mobile:leading-[26px] mobile:text-[#2c2c2d]">
                What would you like to find?
            </p>
        </div>

        <div class="menu__items overflow-y-hidden">
            <div class="flex flex-row overflow-y-auto justify-start gap-[20px]">
                @foreach($topic as $key=>$to)
                    <div class=" bg-[#f0f1f1] px-[15px] pt-[15px] pb-[25px]
                    rounded-lg
                    xl:w-[15%] lg:w-[15%] md:w-[15%] sm:w-[15%]
                    hover:translate-y-[-7px] transition-transform">
                        <a href="http://www.carousell.sg"
                           class="property flex flex-col justify-center items-center text-center">
                            <img src="{{$to}}"
                                 alt="property"
                                 class="w-[72px] mb-[10px]">
                            <p class="text-img">{{$topicNames[$key]}}</p>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>

    </div>

    {{-- brands --}}
    <div class="menu xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%] mx-auto py-[30px]">
        <div class="menu__title flex flex-row justify-between mb-[20px]">
            <p class="text-[24px] leading-[32px] font-bold
            mobile:text-[18px] mobile:leading-[26px] mobile:text-[#2c2c2d]">
                Popular Brands
            </p>
        </div>

        <div class="menu__items relative">
            <div class="brandNames flex flex-row justify-start gap-[8px]">
                @foreach($popularBrands as $keyBrand=>$brand)
                    <div class="px-[15px] pt-[15px]
                    xl:w-[15%] lg:w-[15%] md:w-[15%] sm:w-[15%]
                    hover:translate-y-[-7px] transition-transform">
                        <a href="http://www.carousell.sg"
                           class="property flex flex-col justify-center items-center text-center">
                            <div class="shadow-xl p-[5px] w-[80px] h-[80px]
                       flex items-center justify-center"
                                 style="border-radius: 50%">
                                <img src="{{$brand}}"
                                     alt="property">
                            </div>
                            <p class="text-img">{{$popularBrandNames[$keyBrand]}}</p>
                        </a>
                    </div>
                @endforeach
            </div>
            {{-- button prev--}}
            <div class="brands__prev mobile:hidden">
                <i class="fas fa-chevron-left z-[9]
                   flex items-center justify-center
                   w-[36px] h-[36px]
                   absolute left-[-15px] top-[40%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
            </div>

            {{-- button next--}}
            <div class="brands__next mobile:hidden">
                <i class="fas fa-chevron-right z-[9]
                   flex items-center justify-center
                   w-[36px] h-[36px] right-[-15px]
                   absolute top-[40%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex"></i>
            </div>

        </div>

    </div>

    {{-- slides --}}
    <div class="slides relative mx-auto pt-[20px] mb-[50px]
   mt-[30px] mobile:mt-[50px]
    xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%]
    xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:mx-auto">
        {{--         button prev--}}
        <div class="slides__prev mobile:hidden">
            <i class="fas fa-chevron-left z-[9]
           flex items-center justify-center
           w-[36px] h-[36px]
           absolute left-[-15px] top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
        </div>

        {{--         button next--}}
        <div class="slides__next mobile:hidden">
            <i class="fas fa-chevron-right z-[9]
           flex items-center justify-center
           w-[36px] h-[36px]
           absolute right-[-15px] top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex"></i>
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

    {{-- listed car --}}
    <div class="listedCars xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%] mx-auto py-[20px] relative">
        <div class="listed__title flex justify-between items-center mb-[30px]">
            <p class="text-[24px] leading-[32px] font-bold">
                Recently Listed Cars
            </p>
        </div>

        {{-- topic items--}}
        <div class="listed__price overflow-hidden flex flex-row nowrap relative
        mobile:overflow-y-auto" >
            @foreach($cars as $key => $ca)
                <div class="bi p-[5px] w-[25%] hover:shadow-2xl flex flex-col justify-between h-[450px]">
                    <div>
                        <div class="listed__body px-[5px] flex flex-col">
                            <div class="relative imgBox1">
                                <div class="caItems w-[100%] h-[240px] relative"
                                     id="caItems{{$key}}">
                                    @foreach($ca as $caItem)
                                        <a href="https://www.carousell.sg">
                                            <img src="{{$caItem}}" alt=""
                                                 class="rounded-md my-[10px] w-[100%] h-[240px]">
                                        </a>
                                    @endforeach
                                </div>
                                {{--button prev--}}
                                <div class="item__prev z-[12]
                               absolute top-[50%] left-0
                               mobile:hidden"
                                     id="item__prev{{$key}}">
                                    <i class="fas fa-chevron-left z-[9]
                                   flex items-center justify-center
                                   w-[36px] h-[36px] opacity-30
                                   hover:opacity-75
                                   bg-white rounded-full hover:shadow-xl"
                                       style="display: flex;"></i>
                                </div>
                                {{--button next--}}
                                <div class="item__next z-[12] absolute top-[50%] right-0 mobile:hidden"
                                     id="item__next{{$key}}">
                                    <i class="fas fa-chevron-right z-[9]
                                   flex items-center justify-center
                                   w-[36px] h-[36px] opacity-30
                                   hover:opacity-75
                                   bg-white rounded-full hover:shadow-xl" style="display: flex"></i>
                                </div>
                            </div>
                            <div class="body__describe mt-[20px]">
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
                        </div>
                        <a class="bi__footer flex items-center gap-[5px] my-[5px]"
                           href="http://www.carousell.sg">
                            <i class="far fa-heart" style="color: #57585a"></i>
                            <p class="text-[12px] text-[#57585a] leading-[20px]">
                                12
                            </p>
                        </a>
                        <a href="http://www.carousell.sg"
                           class="listed__header flex flex-row gap-[5px]
                                items-center mt-[10px]">
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
                    </div>
                </div>
            @endforeach
        </div>

        {{-- button prev--}}
        <div class="listed__prev mobile:hidden">
            <i class="fas fa-chevron-left z-[9]
           flex items-center justify-center
           w-[36px] h-[36px]
           absolute left-[-15px] top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
        </div>

        {{-- button next--}}
        <div class="listed__next mobile:hidden">
            <i class="fas fa-chevron-right z-[9]
           flex items-center justify-center
           w-[36px] h-[36px] right-[-15px]
           absolute top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex" ></i>
        </div>

    </div>

    {{-- popular car --}}
    <div class="listedCars xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%] mx-auto py-[20px] relative">
        <div class="listed__title flex justify-between items-center mb-[30px]">
            <p class="text-[24px] leading-[32px] font-bold">
                Popular Cars
            </p>
            <a href="https://www.carousell.sg"
               class="text-[16px] leading-[24px] text-[#008f79]
            hover:underline">
                See all
                <span>
                <i class="fa fa-chevron-right"></i>
            </span>
            </a>
        </div>

        {{-- topic items--}}
        <div class="listed__price3 overflow-x-hidden flex flex-row nowrap relative
        mobile:overflow-x-auto" >
            @foreach($cars as $key => $ca)
                <div class="bi p-[5px] w-[25%] hover:shadow-2xl flex flex-col justify-between h-[450px]">
                    <div>
                        <div class="listed__body px-[5px] flex flex-col">
                            <div class="relative imgBox">
                                <div class="caItems3 w-[100%] h-[240px] relative"
                                     id="caItems3{{$key}}">
                                    @foreach($ca as $caItem)
                                        <a href="https://www.carousell.sg">
                                            <img src="{{$caItem}}" alt=""
                                                 class="rounded-md my-[10px] w-[100%] h-[240px]">
                                        </a>
                                    @endforeach
                                </div>
                                {{--button prev--}}
                                <div class="item__prev3 z-[12]
                               absolute top-[50%] left-0
                               mobile:hidden"
                                     id="item__prev3{{$key}}">
                                    <i class="fas fa-chevron-left z-[9]
                                   flex items-center justify-center
                                   w-[36px] h-[36px] opacity-30
                                   hover:opacity-75
                                   bg-white rounded-full hover:shadow-xl"
                                       style="display: flex;"></i>
                                </div>
                                {{--button next--}}
                                <div class="item__next3 z-[12] absolute top-[50%] right-0 mobile:hidden"
                                     id="item__next3{{$key}}">
                                    <i class="fas fa-chevron-right z-[9]
                                   flex items-center justify-center
                                   w-[36px] h-[36px] opacity-30
                                   hover:opacity-75
                                   bg-white rounded-full hover:shadow-xl" style="display: flex"></i>
                                </div>
                            </div>
                            <div class="body__describe mt-[20px]">
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
                        </div>
                        <a class="bi__footer flex items-center"
                           href="http://www.carousell.sg">
                            <i class="far fa-heart" style="color: #57585a"></i>
                            <p class="text-[12px] text-[#57585a] leading-[20px]">
                                12
                            </p>
                        </a>
                        <a href="http://www.carousell.sg"
                           class="listed__header flex flex-row gap-[5px]
                                items-center mt-[10px]">
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
                    </div>
                </div>
            @endforeach
        </div>

        {{-- button prev--}}
        <div class="listed__prev3 mobile:hidden">
            <i class="fas fa-chevron-left z-[9]
           flex items-center justify-center
           w-[36px] h-[36px]
           absolute left-[-15px] top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
        </div>

        {{-- button next--}}
        <div class="listed__next3 mobile:hidden">
            <i class="fas fa-chevron-right z-[9]
           flex items-center justify-center
           w-[36px] h-[36px] right-[-15px]
           absolute top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex" ></i>
        </div>

    </div>

    {{-- Explore Cars--}}
    <div class="relative mx-auto pt-[20px] mb-[50px]
   mt-[30px] mobile:mt-[50px]
    xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%]
    xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:mx-auto">
        <div class="listed__title flex justify-between items-center mb-[30px]">
            <p class="text-[24px] leading-[32px] font-bold">
                Explore Cars
            </p>
        </div>
        <div class="flex gap-[20px] overflow-x-hidden mobile:overflow-x-auto">
            @foreach($exploreCars as $ex)
                <div class="flex flex-col justify-between">
                    <img src="{{$ex}}" class="w-[300px] h-auto rounded-lg">
                    <a href="https://www.carousell.sg"
                       class="mt-[10px] flex flex-col gap-[5px]">
                        <p class="font-bold text-[16px] leading-[24px]">
                            Add your car into the Carousell Garage
                        </p>
                        <p class="text-[14px] leading-[22px] text-[#2c2c2d]">
                            See your car's market value and traffic fine
                        </p>
                        <p class="font-bold text-[16px] leading-[24px] text-[#008f79]">
                            Find out more
                        </p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Search Topics--}}
    <div  class="relative mx-auto pt-[20px] mb-[50px]
   mt-[30px] mobile:mt-[50px] mobile:hidden
    xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%]
    xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:mx-auto">
        <div class="flex justify-between gap-[10px]">
            @foreach($topicSearch as $to)
                <div class="flex flex-col gap-[10px]">
                    <p class="text-[12px] leading-[20px] font-bold">
                        {{$to}}
                    </p>
                    <div class="flex flex-col gap-[5px]">
                        @foreach($brandSearch as $brand)
                            <a href="https://www.carousell.sg"
                               class="text-[12px] leading-[20px]
                            hover:underline hover:text-[#008f79]">
                                {{$brand}}
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="./js/used-cars.js"></script>
    <script src="./js/utilities-functions.js"></script>
    <style>
        .bgSearch {
            background-image: linear-gradient(360deg, rgba(44, 44, 45, 0.08) 1.88%, rgba(44, 44, 45, 0.34) 29.75%, rgba(44, 44, 45, 0.34) 61.75%, rgba(44, 44, 45, 0.18) 97.85%), url("https://sl3-cdn.karousell.com/homescreens/web/bg_cars_homescreen_sg.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
@endsection
