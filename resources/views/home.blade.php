@extends('Layouts.app')

@section('content')
    @php
        $_SESSION['login'] = 0;

        $index = 20;
        $cateIndex = 14;
        $cateId = 1;
    @endphp

    {{-- slides --}}
   <div class="slides relative mx-auto pt-[20px]
   mb-[50px] mobile:mb-0
   mt-[80px] mobile:mt-[30px]
    xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%]
    xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:mx-auto">
{{--         button prev--}}
       <div class="button__prev" id="prev" style="display: none">
          @include('components.prev-slick')
       </div>

{{--         button next--}}
       <div class="button__next" id="next">
           @include('components.next-slick')
       </div>

{{--         slides show--}}
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

    {{-- categories --}}
    <div class="menu xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%]
    mx-auto pt-[10px] mb-[16px]">
        <div class="menu__title flex flex-row justify-between mb-[20px] mt-[32px]">
            <p class="text-[24px] leading-[32px] font-bold
            mobile:text-[18px] mobile:leading-[26px] text-[#2c2c2d]">
                What would you like to find?
            </p>
            <div class="menu__modal
            mobile:hidden">
                <!-- Button trigger modal -->
                <div class="px-6 py-2.5
                  text-[#008f79] text-[16px] leading-[24px]
                  rounded transition duration-150 ease-in-out"
                  data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa fa-shopping-cart"></i>
                    See all categories
                </div>

                <!-- Modal -->
                @include('components.cate-modal')
            </div>
        </div>

        <div class="menu__items overflow-y-hidden">
           <div class="flex flex-row overflow-y-auto justify-between gap-[7px] mobile:hidden">
               @foreach($data['category'] as $key => $ca)
                   @if($key < 7)
                       <a href="http://www.carousell.sg"
                          class="property flex flex-col items-center text-center
                            bg-[#f0f1f1] pt-[20px] pb-[10px]
                            rounded-lg w-[13%]
                            hover:translate-y-[-7px] transition-transform">
                           <img src="{{$ca}}"
                                alt="property"
                                class="w-[72px] mb-[10px]">
                           <p class="text-img text-[14px] leading-[22px]">{{$data['categoryNames'][$key]}}</p>
                       </a>
                   @endif
               @endforeach

           </div>
            <div class="xl:hidden lg:hidden md:hidden sm:hidden
            mobile:flex mobile:overflow-y-auto mobile:flex-col">
                <div class="flex gap-[10px]">
                    @foreach($data['category'] as $key => $ca)
                       @if($key < $cateIndex)
                            <div class="w-[96px] h-[104px]
                            flex-col items-center justify-center">
                               <div class="flex justify-center items-center">
                                   <img src="{{$ca}}" class="bg-[#f0f1f1]
                               h-[56px] w-[56px]"
                                        style="border-radius: 50%">
                               </div>
                                <div class="w-[96px] text-center">
                                    <p class=" text-[14px] leading-[22px]
                                     mt-[8px]
                                    inline-block">{{$data['categoryNames'][$key]}}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="flex mt-[5px] gap-[10px]">
                    @foreach($data['category'] as $key => $ca)
                        @if($key >= $cateIndex)
                            <div class="w-[96px] h-[104px]
                            flex-col items-center justify-center">
                                <div class="flex justify-center items-center">
                                    <img src="{{$ca}}" class="bg-[#f0f1f1]
                               h-[56px] w-[56px]"
                                         style="border-radius: 50%">
                                </div>
                                <div class="w-[96px] text-center">
                                    <p class=" text-[14px] leading-[22px]
                                     mt-[8px]
                                    inline-block">{{$data['categoryNames'][$key]}}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>

    </div>

{{-- trending now --}}
    <div class="trending xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:hidden
    mx-auto relative mb-[16px]">
        <div class="trending__title flex justify-between items-center mb-[4px]
        pb-[20px] pt-[32px]">
            <p class="text-[24px] leading-[32px] font-bold">
                Trending now
            </p>
            <a href="http://www.carousell.sg"
                class="text-[16px] text-[#008f79] hover:underline">
                See more 'Bicycle'
                <span class="mx-[5px]">
                    <i class="fa fa-chevron-right"></i>
                </span>
            </a>
        </div>

    {{-- trending topic --}}
        <div class="trending__topic flex flex-row justify-start gap-[10px] mb-[20px]">
            <button class="bicycle text-[16px] leading-[24px] px-[16px] py-[8px]
            border-[1px] border-solid border-gray-300 rounded-full
            focus:bg-[rgba(0,143,121,.2)] focus:text-[#026958] focus:border-[#026958]"
            onclick="clickTopic(1)">
                Bicycle
            </button>
            <button class="bicycle text-[16px] leading-[24px] px-[16px] py-[8px]
            border-[1px] border-solid border-gray-300 rounded-full
            focus:bg-[rgba(0,143,121,.2)] focus:text-[#026958] focus:border-[#026958]"
            onclick="clickTopic(2)">
                Coffee table
            </button>
            <button class="bicycle text-[16px] leading-[24px] px-[16px] py-[8px]
            border-[1px] border-solid border-gray-300 rounded-full
            focus:bg-[rgba(0,143,121,.2)] focus:text-[#026958] focus:border-[#026958]"
            onclick="clickTopic(3)">
                Lego
            </button>
            <button class="bicycle text-[16px] leading-[24px] px-[16px] py-[8px]
            border-[1px] border-solid border-gray-300 rounded-full
            focus:bg-[rgba(0,143,121,.2)] focus:text-[#026958] focus:border-[#026958]"
            onclick="clickTopic(4)">
                Ikea
            </button>
            <button class="bicycle text-[16px] leading-[24px] px-[16px] py-[8px]
            border-[1px] border-solid border-gray-300 rounded-full
            focus:bg-[rgba(0,143,121,.2)] focus:text-[#026958] focus:border-[#026958]"
            onclick="clickTopic(5)">
                Brompton
            </button>
            <button class="bicycle text-[16px] leading-[24px] px-[16px] py-[8px]
            border-[1px] border-solid border-gray-300 rounded-full
            focus:bg-[rgba(0,143,121,.2)] focus:text-[#026958] focus:border-[#026958]"
            onclick="clickTopic(6)">
                Plants
            </button>
        </div>

        {{-- topic items--}}
        <div id="bi1" class="w-full">
            <div class="bicycle__topic overflow-hidden flex flex-row nowrap relative" style="display: flex">
                @foreach($data['bicycle'] as $bi)
                    @include('components.product', ['imgSrc' => $bi])
                @endforeach
            </div>
            {{-- button prev--}}
            <div class="bi__prev">
                @include('components.prev-slick')
            </div>

            {{-- button next--}}
            <div class="bi__next">
                @include('components.next-slick')
            </div>
        </div>

        <div style="display: none;" id="co2">
            <div class="coffee__topic overflow-hidden flex flex-row nowrap relative">
                @foreach($data['coffeeTable'] as $co)
                   @include('components.product', ['imgSrc' => $co])
                @endforeach
            </div>
{{--            button prev--}}
            <div class="co__prev">
                @include('components.prev-slick')
            </div>

{{--            button next--}}
            <div class="co__next">
                @include('components.next-slick')
            </div>
        </div>

        <div style="display: none;" id="le3" class="w-full">
            <div class="lego__topic overflow-hidden flex flex-row nowrap relative w-full">
                @foreach($data['lego'] as $le)
                   @include('components.product', ['imgSrc' => $le])
                @endforeach
            </div>
{{--            button prev--}}
            <div class="le__prev">
                @include('components.prev-slick')
            </div>

{{--            button next--}}
            <div class="le__next">
                @include('components.next-slick')
            </div>
        </div>

        <div style="display: none" id="ik4">
            <div class="ikea__topic overflow-hidden flex flex-row nowrap relative">
                @foreach($data['ikea'] as $ik)
                  @include('components.product', ['imgSrc' => $ik])
                @endforeach
            </div>
{{--            button prev--}}
            <div class="ik__prev">
                @include('components.prev-slick')
            </div>

{{--            button next--}}
            <div class="ik__next">
                @include('components.next-slick')
            </div>
        </div>

        <div style="display: none" id="bro5">
            <div class="brompton__topic overflow-hidden flex flex-row nowrap relative">
                @foreach($data['bicycle'] as $bro)
                    @include('components.product', ['imgSrc' => $bro])
                @endforeach
            </div>
{{--            button prev--}}
            <div class="bro__prev">
                @include('components.prev-slick')
            </div>

{{--            button next--}}
            <div class="bro__next">
                @include('components.next-slick')
            </div>
        </div>

        <div style="display: none" id="pl6">
            <div class="plants__topic overflow-hidden flex flex-row nowrap relative">
                @foreach($data['plant'] as $pl)
                    @include('components.product', ['imgSrc' => $pl])
                @endforeach
            </div>

{{--            button prev--}}
            <div class="pl__prev">
                @include('components.prev-slick')
            </div>

{{--            button next--}}
            <div class="pl__next">
                @include('components.next-slick')
            </div>
        </div>
    </div>

{{-- slash price --}}
    <div class="trending xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full
    mobile:w-[96%] mx-auto relative mb-[16px]">
        <div class="trending__title flex justify-between items-center
         mb-[20px] pt-[32px]">
            <p class="text-[24px] leading-[32px] font-bold">
                Slashed Prices
            </p>
        </div>

        {{-- topic items--}}
        <div class="slashed__price overflow-hidden flex flex-row nowrap relative
        mobile:overflow-y-auto" >
            @foreach($data['slashPrice'] as $slash)
                @include('components.product', ['imgSrc' => $slash])
            @endforeach
        </div>

        {{-- button prev--}}
        <div class="slash__prev">
            @include('components.prev-slick')
        </div>

        {{-- button next--}}
        <div class="slash__next">
            @include('components.next-slick')
        </div>

    </div>

{{-- Recommended For You--}}
    <div class="trending xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%] mx-auto py-[20px]">
        <div class="trending__title flex justify-between items-center mb-[20px] pt-[32px]">
            <p class="text-[24px] leading-[32px] font-bold">
                Recommended For You
            </p>
        </div>

        {{-- topic items--}}
        <div class="recommend overflow-hidden grid grid-cols-4 relative
        mobile:grid-cols-2">
            @foreach($data['recommendProduct'] as $re)
                @include('components.product', ['imgSrc' => $re])
            @endforeach
        </div>

       <div class="w-full flex items-center justify-center mt-[30px]">
           <button class="py-[10px] px-[20px]
            border-solid border-[1px] border-[#c5c5c6]
            rounded-md
            hover:ring-[4px] hover:ring-[#cce9e4] hover:bg-[#f0f0f1]
            text-[16px] leading-[24px] font-bold"
           onclick="viewMore()">
                   View more
           </button>
       </div>

    </div>
    <hr>

{{-- home footer--}}
   @include('components.home-footer')
    <script type="text/javascript" src='./js/home.js'></script>
@endsection


