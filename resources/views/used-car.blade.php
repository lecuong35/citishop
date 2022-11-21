@extends('Layouts.car')

@section('topicTitle')

    <p class="text-[30px] leading-[38px] font-bold text-white
                mobile:text-[20px] mobile:leading-[28px]">
        Over 10,000 Used Cars in Singapore
    </p>
@endsection

@section('search1')
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
        @include('components.modal-checkbox', ['data' =>  $data['body'], 'title' => 'Body', 'id' => 'bodyToggle'])
    </div>
@endsection

@section('search2')
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
        @include('components.modal-radio', ['data'  => $data['depreciation'], 'title' => 'Depreciation', 'id' => 'deToggle'])
    </div>
@endsection

@section('topic')
    @foreach($data['topic'] as $key=>$to)
        <div class=" bg-[#f0f1f1] px-[15px] pt-[15px] pb-[25px]
                    rounded-lg
                    xl:w-[15%] lg:w-[15%] md:w-[15%] sm:w-[15%]
                    hover:translate-y-[-7px] transition-transform">
            <a href="http://www.carousell.sg"
               class="property flex flex-col justify-center items-center text-center">
                <img src="{{$to}}"
                     alt="property"
                     class="w-[72px] mb-[10px]">
                <p class="text-img">{{$data['topicNames'][$key]}}</p>
            </a>
        </div>
    @endforeach
@endsection

@section('brands')
    <div class="menu xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%] mx-auto py-[30px] h-fit">
        <div class="menu__title flex flex-row justify-between mb-[20px]">
            <p class="text-[24px] leading-[32px] font-bold
            mobile:text-[18px] mobile:leading-[26px] mobile:text-[#2c2c2d]">
                Popular Brands
            </p>
        </div>

        <div class="menu__items relative">
            <div class="brandNames flex flex-row justify-start gap-[8px]">
                @foreach($data['popularBrands'] as $keyBrand=>$brand)
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
                            <p class="text-img">{{$data['popularBrandNames'][$keyBrand]}}</p>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="brands__prev mobile:hidden">
                @include('components.prev-slick')
            </div>
            <div class="brands__next mobile:hidden">
                @include('components.next-slick')
            </div>

        </div>

    </div>
@endsection

@section('slides')
    <div class="slides relative mx-auto pt-[20px] mb-[50px]
   mt-[30px] mobile:mt-[50px] h-fit
    xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%]
    xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:mx-auto">
        <div class="slides__prev mobile:hidden">
            @include('components.prev-slick')
        </div>

        <div class="slides__next mobile:hidden">
            @include('components.next-slick')
        </div>

        <div class="slides__show flex flex-row nowrap w-full">
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
    <div class="listed__price overflow-hidden flex flex-row nowrap relative
        mobile:overflow-y-auto h-fit" >
        @foreach($data['cars'] as $key => $ca)
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

                            <div class="item__next z-[12] absolute top-[50%] right-0 mobile:hidden"
                                 id="item__next{{$key}}">
                                <i class="fas fa-chevron-right z-[9]
                                   flex items-center justify-center
                                   w-[36px] h-[36px] opacity-30
                                   hover:opacity-75
                                   bg-white rounded-full hover:shadow-xl"
                                   style="display: flex;"></i>
                            </div>
                        </div>
                        <div class="body__describe mt-[20px] mb-[10px]" style="margin-bottom: 10px">
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


    <div class="listed__prev mobile:hidden">
        @include('components.prev-slick')
    </div>


    <div class="listed__next mobile:hidden">
        @include('components.next-slick')
    </div>
@endsection

@section('popularCar')
    <div class="listed__price3 overflow-x-hidden flex flex-row nowrap relative
        mobile:overflow-x-auto h-fit" >
        @foreach($data['cars'] as $key => $ca)
            <div class="bi p-[5px] w-[25%] hover:shadow-2xl flex flex-col justify-between h-[450px]">
                <div>
                    <div class="listed__body px-[5px] mb-[10px] flex flex-col">
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

                            <div class="item__next3 z-[12] absolute top-[50%] right-0 mobile:hidden"
                                 id="item__next3{{$key}}">
                                <i class="fas fa-chevron-right z-[9]
                                   flex items-center justify-center
                                   w-[36px] h-[36px] opacity-30
                                   hover:opacity-75
                                   bg-white rounded-full hover:shadow-xl"
                                   style="display: flex;"></i>
                            </div>
                        </div>
                        <div class="body__describe mt-[20px] flex flex-col gap-[10px]" style="margin-bottom: 10px">
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
                    <a class="bi__footer flex items-center gap-[10px]"
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


    <div class="listed__prev3 mobile:hidden">
        @include('components.prev-slick')
    </div>


    <div class="listed__next3 mobile:hidden">
        @include('components.next-slick')
    </div>
@endsection

@section('script')
    <script src="./js/used-cars.js"></script>
    <script src="./js/utilities-functions.js"></script>
@endsection
<style>
    .bgSearch {
        background-image: linear-gradient(360deg, rgba(44, 44, 45, 0.08) 1.88%, rgba(44, 44, 45, 0.34) 29.75%, rgba(44, 44, 45, 0.34) 61.75%, rgba(44, 44, 45, 0.18) 97.85%), url("https://sl3-cdn.karousell.com/homescreens/web/bg_cars_homescreen_sg.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
</style>
