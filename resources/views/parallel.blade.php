@extends('Layouts.car');

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

    $rentalCarNames = Config::get('rental-cars.rentalCarNames');
    $options = Config::get('rental-cars.options');
    $rentalTopics = Config::get('rental-cars.rentalTopics');
    $listRentalCars = Config::get('rental-cars.listRentalCars');

    $transmissions = Config::get('parallel.transmissions');
@endphp

@section('topicTitle')
    <p class="text-[30px] leading-[38px] font-bold text-white
                mobile:text-[20px] mobile:leading-[28px]">
        Parallel Import in Singapore
    </p>
@endsection

@section('search1')
{{--    none  --}}
@endsection

@section('search2')
    <div class="depreciationSearch relative mobile:w-full">
        <div class=" pr-[80px] mobile:pr-0 mobile:mb-[20px]" onclick="clickToggle('deToggle')">
            <div class="flex items-center gap-[5px]
                            mobile:flex mobile:justify-between">
                <p class="text-[16px] leading-[24px] w-[70px]
                mr-[50px] mobile:pr-0 text-[#2c2c2d]" style="display: block"
                   id="bodyToggleText">
                    Transmission:
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
       @include('components.modal-radio', ['data' => $transmissions, 'title' => 'Transmission', 'id' => 'deToggle'])
    </div>
@endsection

@section('topic')
{{--   none  --}}
@endsection

@section('brands')
    {{--    none   --}}
@endsection

@section('slides')
    <div class="slides relative mx-auto pt-[20px] mb-[50px]
   mt-[30px] mobile:mt-[30px]
    xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%]
    xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:mx-auto">
        {{--         button prev--}}
        <div class="parallel__prev mobile:hidden ">
            @include('components.prev-slick')
        </div>

        {{--         button next--}}
        <div class="parallel__next mobile:hidden">
            @include('components.next-slick')
        </div>

        {{--         slides show--}}
        <div class="slides__parallel flex flex-row nowrap w-full h-fit">
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
@endsection

@section('listedCar')
    <div class="listed__price4 overflow-hidden flex flex-row nowrap relative
        mobile:overflow-y-auto h-fit">
        @foreach($listRentalCars as $key => $ca)
            @include('components.product', ['imgSrc' => $ca])
        @endforeach
    </div>
    {{-- button prev--}}
    <div class="listed__prev4">
        @include('components.prev-slick')
    </div>

    {{-- button next--}}
    <div class="listed__next4 ">
        @include('components.next-slick')
    </div>
@endsection

@section('popularCar')
    <div class="listed__price5 overflow-hidden flex flex-row nowrap relative
        mobile:overflow-y-auto">
        @foreach($listRentalCars as $key => $ca)
            @include('components.product', ['imgSrc' => $ca])
        @endforeach
    </div>
    {{-- button prev--}}
    <div class="listed__prev5">
        @include('components.prev-slick')
    </div>

    {{-- button next--}}
    <div class="listed__next5">
        @include('components.next-slick')
    </div>
@endsection

@section('script')
    <script src="./js/parallel.js"></script>
    <script src="./js/utilities-functions.js"></script>
@endsection
