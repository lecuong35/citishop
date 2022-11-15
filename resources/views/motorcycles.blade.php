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

    $typeMotorcycles = Config::get('motorcycles.typeMotorcycles');
    $motorTopicNames = Config::get('motorcycles.motorTopicNames');
    $motorTopics = Config::get('motorcycles.motorTopics');
    $motorBrands = Config::get('motorcycles.motorBrands');
    $motorBrandNames = Config::get('motorcycles.motorBrandNames');
    $motors = Config::get('motorcycles.motors');
@endphp

@section('topicTitle')
    <p class="text-[30px] leading-[38px] font-bold text-white
                mobile:text-[20px] mobile:leading-[28px]">
       Motorcycles in Singapore
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
                    Type:
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
       @include('components.modal-radio', ['data' => $typeMotorcycles, 'title' => 'Type', 'id' => 'deToggle'])
    </div>
@endsection

@section('topic')
    @foreach($motorTopics as $key=>$to)
        <div class=" bg-[#f0f1f1] px-[15px] pt-[15px] pb-[25px]
                    rounded-lg
                    xl:w-[15%] lg:w-[15%] md:w-[15%] sm:w-[15%]
                    hover:translate-y-[-7px] transition-transform">
            <a href="http://www.carousell.sg"
               class="property flex flex-col justify-center items-center text-center">
                <img src="{{$to}}"
                     alt="property"
                     class="w-[72px] mb-[10px]">
                <p class="text-img">{{$motorTopicNames[$key]}}</p>
            </a>
        </div>
    @endforeach
@endsection

@section('brands')
    <div class="menu xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%] mx-auto py-[30px]">
        <div class="menu__title flex flex-row justify-between mb-[20px]">
            <p class="text-[24px] leading-[32px] font-bold
            mobile:text-[18px] mobile:leading-[26px] mobile:text-[#2c2c2d]">
                Popular Brands
            </p>
        </div>

        <div class="menu__items relative">
            <div class="motorBrandNames flex flex-row justify-start gap-[8px] h-fit">
                @foreach($motorBrands as $keyBrand=>$brand)
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
                            <p class="text-img">{{$motorBrandNames[$keyBrand]}}</p>
                        </a>
                    </div>
                @endforeach
            </div>
            {{-- button prev--}}
            <div class="brands__prev1 mobile:hidden">
                @include('components.prev-slick')
            </div>

            {{-- button next--}}
            <div class="brands__next1 mobile:hidden">
                @include('components.next-slick')
            </div>

        </div>

    </div>

@endsection

@section('slides')
{{--  none  --}}
@endsection

@section('listedCar')
    <div class="listed__price10 overflow-hidden flex flex-row nowrap relative
        mobile:overflow-y-auto h-fit">
        @foreach($motors as $key => $ca)
            @include('components.product', ['imgSrc' => $ca])
        @endforeach
    </div>
    {{-- button prev--}}
    <div class="listed__prev10">
        @include('components.prev-slick')
    </div>

    {{-- button next--}}
    <div class="listed__next10 ">
        @include('components.next-slick')
    </div>
@endsection

@section('popularCar')
    <div class="listed__price11 overflow-hidden flex flex-row nowrap relative
        mobile:overflow-y-auto">
        @foreach($motors as $key => $ca)
            @include('components.product', ['imgSrc' => $ca])
        @endforeach
    </div>
    {{-- button prev--}}
    <div class="listed__prev11">
        @include('components.prev-slick')
    </div>

    {{-- button next--}}
    <div class="listed__next11">
        @include('components.next-slick')
    </div>
@endsection

@section('script')
    <script src="./js/motors.js"></script>
    <script src="./js/utilities-functions.js"></script>
@endsection
