@extends('Layouts.car');

@section('topicTitle')
    <p class="text-[30px] leading-[38px] font-bold text-white
                mobile:text-[20px] mobile:leading-[28px]">
        Commercial Vehicles in Singapore
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
                mr-[30px] mobile:pr-0 text-[#2c2c2d]" style="display: block"
                   id="bodyToggleText">
                    Types:
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
       @include('components.modal-radio', ['data' => $data['typeNames'], 'title' => 'Type', 'id' => 'deToggle'])
    </div>
@endsection

@section('topic')

                @foreach($data['type'] as $key=>$to)
                    <div class=" bg-[#f0f1f1] px-[15px] pt-[15px] pb-[25px]
                    rounded-lg
                    xl:w-[15%] lg:w-[15%] md:w-[15%] sm:w-[15%]
                    hover:translate-y-[-7px] transition-transform">
                        <a href="http://www.carousell.sg"
                           class="property flex flex-col justify-center items-center text-center">
                            <img src="{{$to}}"
                                 alt="property"
                                 class="w-[72px] mb-[10px]">
                            <p class="text-img">{{$data['typeNames'][$key]}}</p>
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
        <div class="commercial__prev mobile:hidden ">
            @include('components.prev-slick')
        </div>

        {{--         button next--}}
        <div class="commercial__next mobile:hidden">
            @include('components.next-slick')
        </div>

        {{--         slides show--}}
        <div class="slides__commercial flex flex-row nowrap w-full h-fit">
            @foreach($data['showSlide'] as $slide)
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
    <div class="listed__price6 overflow-hidden flex flex-row nowrap relative
        mobile:overflow-y-auto h-fit">
        @foreach($data['listRentalCars'] as $key => $ca)
            @include('components.product', ['imgSrc' => $ca])
        @endforeach
    </div>
    {{-- button prev--}}
    <div class="listed__prev6">
        @include('components.prev-slick')
    </div>

    {{-- button next--}}
    <div class="listed__next6 ">
        @include('components.next-slick')
    </div>
@endsection

@section('popularCar')
    <div class="listed__price7 overflow-hidden flex flex-row nowrap relative h-fit
        mobile:overflow-y-auto">
        @foreach($data['listRentalCars'] as $key => $ca)
            @include('components.product', ['imgSrc' => $ca])
        @endforeach
    </div>
    {{-- button prev--}}
    <div class="listed__prev7">
        @include('components.prev-slick')
    </div>

    {{-- button next--}}
    <div class="listed__next7">
        @include('components.next-slick')
    </div>
@endsection

@section('script')
    <script src="./js/commercial-vehicles.js"></script>
    <script src="./js/utilities-functions.js"></script>
@endsection
