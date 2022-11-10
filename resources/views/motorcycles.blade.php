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
        <div style="display: none;" id="deToggle"
             class="absolute top-[50px] left-0 w-[300px] h-[70px] overflow-y-auto
                        bg-white shadow-xl rounded-lg
                        mobile:fixed mobile:w-full mobile:h-full
                        mobile:top-0 mobile:rounded-none mobile:z-[9]
                        mobile:overflow-y-hidden mobile:px-[5px]">
            <div class="hidden
                            mobile:flex justify-between items-center
                            shadow-xl pl-[20px] pr-[10px] py-[10px]">
                <i class="fa fa-arrow-left" onclick="clickToggle('deToggle')"></i>
                <p class="text-[20px] leading-[28px]">Type</p>
                <p class="text-[20px] leading-[28px] text-[#008f79]"
                   onclick="clickToggle('deToggle')">
                    Apply
                </p>
            </div>
            <div class="flex flex-col w-full">
                @foreach($typeMotorcycles as $de)
                    <div class="py-[5px] px-[10px] flex items-center gap-[10px] w-full hover:bg-[#f0f0f1]">
                        <input type="radio" name="depreciationSearch" id="{{$de}}" class="accent-[#026859] w-[20px] h-[20px]" onclick="chooseBody('deToggle', '{{$de}}')">
                        <label for="{{$de}}">{{$de}}</label>
                    </div>
                @endforeach
            </div>
        </div>
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
                <i class="fas fa-chevron-left z-[9]
                   flex items-center justify-center
                   w-[36px] h-[36px]
                   absolute left-[-15px] top-[40%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
            </div>

            {{-- button next--}}
            <div class="brands__next1 mobile:hidden">
                <i class="fas fa-chevron-right z-[9]
                   flex items-center justify-center
                   w-[36px] h-[36px] right-[-15px]
                   absolute top-[40%]
                   bg-white rounded-full hover:shadow-xl" style="display: flex"></i>
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
    <div class="listed__prev10">
        <i class="fas fa-chevron-left z-[9]
           flex items-center justify-center
           w-[36px] h-[36px]
           absolute left-[-15px] top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
    </div>

    {{-- button next--}}
    <div class="listed__next10 ">
        <i class="fas fa-chevron-right z-[9]
           flex items-center justify-center
           w-[36px] h-[36px] right-[-15px]
           absolute top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex" ></i>
    </div>
@endsection

@section('popularCar')
    <div class="listed__price11 overflow-hidden flex flex-row nowrap relative
        mobile:overflow-y-auto">
        @foreach($motors as $key => $ca)
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
    <div class="listed__prev11">
        <i class="fas fa-chevron-left z-[9]
           flex items-center justify-center
           w-[36px] h-[36px]
           absolute left-[-15px] top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex;"></i>
    </div>

    {{-- button next--}}
    <div class="listed__next11">
        <i class="fas fa-chevron-right z-[9]
           flex items-center justify-center
           w-[36px] h-[36px] right-[-15px]
           absolute top-[50%]
           bg-white rounded-full hover:shadow-xl" style="display: flex" ></i>
    </div>
@endsection

@section('script')
    <script src="./js/motors.js"></script>
    <script src="./js/utilities-functions.js"></script>
@endsection