@extends('Layouts.car')

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
    @endphp

    @section('topicTitle')
        <p class="text-[30px] leading-[38px] font-bold text-white
                mobile:text-[20px] mobile:leading-[28px]">
            Car for Rent in Singapore
        </p>
    @endsection

    @section('search1')
        <div class="bodySearch relative mobile:w-full">
            <div class=" pr-[80px] mobile:pr-0 mobile:mb-[20px]" onclick="clickToggle('bodyToggle')">
                <div class="flex items-center gap-[5px]
                            mobile:flex mobile:justify-between">
                    <p class="text-[16px] leading-[24px] w-[70px]" style="display: block"
                       id="bodyToggleText">
                        Car Type
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
            @include('components.modal-checkbox', ['data' => $rentalCarNames, 'title' => 'Type', 'id' => 'bodyToggle'])
        </div>
    @endsection

    @section('search2')
        <div class="depreciationSearch relative mobile:w-full">
            <div class=" pr-[80px] mobile:pr-0 mobile:mb-[20px]" onclick="clickToggle('deToggle')">
                <div class="flex items-center gap-[5px]
                            mobile:flex mobile:justify-between">
                    <p class="text-[16px] leading-[24px] w-[70px] mr-[20px] mobile:pr-0" style="display: block"
                       id="bodyToggleText">
                        Option
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
            @include('components.modal-radio', ['data' => $options, 'title' => 'Options', 'id' => 'deToggle'])
        </div>
    @endsection

    @section('topic')
        <div class="w-full flex justify-between">
            @foreach($rentalTopics as $key=>$to)
                <div class="hover:translate-y-[-7px] transition-transform">
                    <a href="http://www.carousell.sg"
                       class="property flex flex-col justify-center
               items-center text-center">
                        <div class="px-[5px] py-[10px] shadow-xl
                    w-[82px] h-[92px]"
                             style="border-radius: 50%">
                            <img src="{{$to}}"
                                 alt="property"
                                 class="w-[72px] h-[72px]"
                                 style="border-radius: 50%">
                        </div>
                        <p class="text-img">{{$rentalCarNames[$key]}}</p>
                    </a>
                </div>
            @endforeach
        </div>
    @endsection

    @section('brands')
        {{--    none   --}}
    @endsection

    @section('slides')
        {{--     none   --}}
    @endsection

    @section('listedCar')
        <div class="listed__price1 overflow-hidden flex flex-row nowrap relative
        mobile:overflow-y-auto">
            @foreach($listRentalCars as $key => $ca)
                @include('components.product', ['imgSrc' => $ca])
            @endforeach
        </div>
        {{-- button prev--}}
        <div class="listed__prev1">
            @include('components.prev-slick')
        </div>

        {{-- button next--}}
        <div class="listed__next1 ">
            @include('components.next-slick')
        </div>
    @endsection

    @section('popularCar')
            <div class="listed__price2 overflow-hidden flex flex-row nowrap relative
        mobile:overflow-y-auto">
                @foreach($listRentalCars as $key => $ca)
                    @include('components.product', ['imgSrc' => $ca])
                @endforeach
            </div>
            {{-- button prev--}}
            <div class="listed__prev2 ">
                @include('components.prev-slick')
            </div>

            {{-- button next--}}
            <div class="listed__next2 ">
                @include('components.next-slick')
            </div>
    @endsection

    @section('script')
        <script src="./js/rental-cars.js"></script>
        <script src="./js/utilities-functions.js"></script>
    @endsection
