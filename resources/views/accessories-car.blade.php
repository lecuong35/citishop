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

    $access = Config::get('accessories.access');
    $accessNames = Config::get('accessories.accessNames');
@endphp

@section('topicTitle')
    <p class="text-[30px] leading-[38px] font-bold text-white
                mobile:text-[20px] mobile:leading-[28px]">
        Car Servicing in Singapore
    </p>
@endsection

@section('search1')
    {{--    none  --}}
@endsection

@section('search2')
{{--   none  --}}
@endsection

@section('topic')
    @foreach($access as $key=>$to)
        <div class=" bg-[#f0f1f1] px-[15px] pt-[15px] pb-[25px]
                    rounded-lg
                    xl:w-[15%] lg:w-[15%] md:w-[15%] sm:w-[15%]
                    hover:translate-y-[-7px] transition-transform">
            <a href="http://www.carousell.sg"
               class="property flex flex-col justify-center items-center text-center">
                <img src="{{$to}}"
                     alt="property"
                     class="w-[72px] mb-[10px]">
                <p class="text-img">{{$accessNames[$key]}}</p>
            </a>
        </div>
    @endforeach
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
        <div class="access__prev mobile:hidden ">
            <i class="fas fa-chevron-left z-[9]
           flex items-center justify-center
           w-[36px] h-[36px]
           absolute left-[-15px] top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
        </div>

        {{--         button next--}}
        <div class="access__next mobile:hidden">
            <i class="fas fa-chevron-right z-[9]
           flex items-center justify-center
           w-[36px] h-[36px]
           absolute right-[-15px] top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex"></i>
        </div>

        {{--         slides show--}}
        <div class="slides__access flex flex-row nowrap w-full h-fit">
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
    <div class="listed__price8 overflow-hidden flex flex-row nowrap relative
        mobile:overflow-y-auto h-fit">
        @foreach($listRentalCars as $key => $ca)
            <div class="bi p-[5px] w-[25%] hover:shadow-2xl flex flex-col justify-between h-[450px]">
                <div>
                    <div class="listed__body px-[5px] flex flex-col">
                        <div class="relative imgBox">
                            <div class="caItems w-[100%] h-[240px] relative">
                                <a href="https://www.carousell.sg">
                                    <img src="{{$ca}}" alt=""
                                         class="rounded-md my-[10px] w-[100%] h-[240px]">
                                </a>
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
    <div class="listed__prev8">
        <i class="fas fa-chevron-left z-[9]
           flex items-center justify-center
           w-[36px] h-[36px]
           absolute left-[-15px] top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
    </div>

    {{-- button next--}}
    <div class="listed__next8 ">
        <i class="fas fa-chevron-right z-[9]
           flex items-center justify-center
           w-[36px] h-[36px] right-[-15px]
           absolute top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex" ></i>
    </div>
@endsection

@section('popularCar')
    <div class="listed__price9 overflow-hidden flex flex-row nowrap relative
        mobile:overflow-y-auto">
        @foreach($listRentalCars as $key => $ca)
            <div class="bi p-[5px] w-[25%] hover:shadow-2xl flex flex-col justify-between h-[450px]">
                <div>
                    <div class="listed__body px-[5px] flex flex-col">
                        <div class="relative imgBox">
                            <div class="caItems w-[100%] h-[240px] relative">
                                <a href="https://www.carousell.sg">
                                    <img src="{{$ca}}" alt=""
                                         class="rounded-md my-[10px] w-[100%] h-[240px]">
                                </a>
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
    <div class="listed__prev9">
        <i class="fas fa-chevron-left z-[9]
           flex items-center justify-center
           w-[36px] h-[36px]
           absolute left-[-15px] top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
    </div>

    {{-- button next--}}
    <div class="listed__next9">
        <i class="fas fa-chevron-right z-[9]
           flex items-center justify-center
           w-[36px] h-[36px] right-[-15px]
           absolute top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex" ></i>
    </div>
@endsection

@section('script')
    <script src="./js/accessories-car.js"></script>
    <script src="./js/utilities-functions.js"></script>
@endsection
