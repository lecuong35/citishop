@extends('Layouts.car');

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
    @foreach($data['access'] as $key=>$to)
        <div class=" bg-[#f0f1f1] px-[15px] pt-[15px] pb-[25px]
                    rounded-lg
                    xl:w-[15%] lg:w-[15%] md:w-[15%] sm:w-[15%]
                    hover:translate-y-[-7px] transition-transform">
            <a href="http://www.carousell.sg"
               class="property flex flex-col justify-center items-center text-center">
                <img src="{{$to}}"
                     alt="property"
                     class="w-[72px] mb-[10px]">
                <p class="text-img">{{$data['accessNames'][$key]}}</p>
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
        <div class="commercial__prev mobile:hidden">
            @include('components.prev-slick')
        </div>

        {{--         button next--}}
        <div class="commercial__next mobile:hidden">
            @include('components.next-slick')
        </div>

        {{--         slides show--}}
        <div class="slides__access flex flex-row nowrap w-full h-fit">
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
    <div class="listed__price8 overflow-hidden flex flex-row nowrap relative
        mobile:overflow-y-auto h-fit">
        @foreach($data['listRentalCars'] as $key => $ca)
            @include('components.product', ['imgSrc' => $ca])
        @endforeach
    </div>
    {{-- button prev--}}
    <div class="listed__prev8">
       @include('components.prev-slick')
    </div>

    {{-- button next--}}
    <div class="listed__next8 ">
        @include('components.next-slick')
    </div>
@endsection

@section('popularCar')
    <div class="listed__price9 overflow-hidden flex flex-row nowrap relative h-fit
        mobile:overflow-y-auto">
        @foreach($data['listRentalCars'] as $key => $ca)
            @include('components.product', ['imgSrc' => $ca])
        @endforeach
    </div>
    {{-- button prev--}}
    <div class="listed__prev9">
        @include('components.prev-slick')
    </div>

    {{-- button next--}}
    <div class="listed__next9">
        @include('components.next-slick')
    </div>
@endsection

@section('script')
    <script src="./js/accessories-car.js"></script>
    <script src="./js/utilities-functions.js"></script>
@endsection
