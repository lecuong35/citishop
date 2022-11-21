<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @include('components.header');

    <title>Carousell</title>
</head>

<body class="font-roboto">
<button class="bg-[#ff2636] rounded-sm px-[26px] py-[14px] rounded-[30px]
            text-white font-bold text-[18px] leading-[24px] hidden
            mobile:fixed top-[90%] right-[15px] mobile:block z-[9]">
    Sell +
</button>
{{-- navbar --}}
@include('components.navbar')

@php
    $headerSearch = Config::get('used-cars.headerSearch');
    $headerLinks = Config::Get('used-cars.headerLinks');
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

{{-- content --}}
    {{-- header search --}}
    <div class=" hidden flex overflow-x-auto
        mobile:mt-[25px] fixed z-[9]
         mobile:flex bg-white w-full">
        @foreach($headerSearch as $key => $he)
            <div class="px-[20px] py-[10px]">
                <a href="{{$headerLinks[$key]}}">
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
                @yield('topicTitle')
            </div>
            <div class="searchCar w-[100%] mx-auto
            mobile:flex mobile:flex-col mobile:relative
            items-center justify-center mobile:px-[10px]
            mobile:bg-white mobile:rounded-xl">
                <div class="wrapperSearch flex w-full bg-white
                rounded-lg h-[44px] items-center px-[10px]
                mobile:h-fit
                mobile:flex mobile:flex-col mobile:py-[20px]">
                    @yield('search1')
                    @yield('search2')
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
            justify-center items-center w-full
            mobile:px-[16px]">
                <p class="text-[16px] leading-[24px] text-white
                font-bold mobile:font-normal mobile:text-[#57585a]
                mobile:py-[16px] mobile:pl-[6px]">
                    Trending:
                </p>
                <div class="text-[16px] leading-[24px]
                text-white inline-flex
                whitespace-nowrap flex-wrap
                gap-[5px] mobile:flex-nowrap
                mobile:overflow-x-auto mobile:flex mobile:gap-[10px]">
                    @foreach($trending as $tre)
                        <div class="mobile:px-[16px] mobile:py-[8px] mobile:rounded-full
                            mobile:bg-[#f0f0f1] mobile:gap-[10px]">
                            <a href="https://www.carousell.sg"
                               class="hover:underline text-[#fff] mobile:text-[#57585a]
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
                @yield('topic')
            </div>

        </div>

    </div>

    {{-- brands --}}
    @yield('brands')
    {{-- slides --}}
    @yield('slides')

    {{-- listed car --}}
    <div class="listedCars xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%] mx-auto py-[20px] relative">
        <div class="listed__title flex justify-between items-center mb-[30px]">
            <p class="text-[24px] leading-[32px] font-bold">
                Recently Listed Cars
            </p>
        </div>

        {{-- topic items--}}
        @yield('listedCar')
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
            @yield('popularCar')
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


@yield('script')


{{-- footer --}}
@include('components.footer')
</body>
<style>
    .bgSearch {
        background-image: linear-gradient(360deg, rgba(44, 44, 45, 0.08) 1.88%, rgba(44, 44, 45, 0.34) 29.75%, rgba(44, 44, 45, 0.34) 61.75%, rgba(44, 44, 45, 0.18) 97.85%), url("https://sl3-cdn.karousell.com/homescreens/web/bg_cars_homescreen_sg.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
</style>
</html>
