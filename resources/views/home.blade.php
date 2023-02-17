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
                  data-bs-toggle="modal" data-bs-target="#example1">
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
                   @if($key < 3)
                       <a href="http://www.carousell.sg"
                          class="property flex flex-col items-center text-center
                            bg-[#f0f1f1] pt-[20px] pb-[10px]
                            rounded-lg w-[13%]
                            hover:translate-y-[-7px] transition-transform">
                           <img src="{{$ca}}"
                                alt="property"
                                class="w-[72px] mb-[10px]">
                           <p class="text-img text-[14px] leading-[22px]">{{$kindOfAll[$key]['name']}}</p>
                       </a>
                   @endif
               @endforeach

           </div>
            <div class="xl:hidden lg:hidden md:hidden sm:hidden
            mobile:flex mobile:overflow-y-auto mobile:flex-col">
                <div class="flex gap-[10px]">
                    @foreach($data['category'] as $key => $ca)
                       @if($key < 2)
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
                                    inline-block">{{$kindOfAll[$key]['name']}}</p>
                                </div>
                            </div>
                        @elseif($key < 3 && $key > 1)
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
                                    inline-block">{{$kindOfAll[$key]['name']}}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

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
            @foreach($posts as $key => $post)
                @php
                    $images = json_decode($post['post_images'])
                @endphp
                @include('components.product', [
                    'imgSrc' => $images[0],
                    'user_name' => $author[$key]['name'],
                    'time' => $post['updated_at'],
                    'post_title' => $post['post_title'],
                    'post_id' => $post['id'],
                    'product_price' => $post['product_price'],
                    'product_status' => $product_status[$key],
                    'count_buyer' => $post['order'],
                    'avatar' => $author[$key]['avatar']
                    ])
            @endforeach
        </div>

       <div class="w-full flex items-center justify-center mt-[30px]">
           {{$posts->links()}}
       </div>

    </div>
    <hr>

    <script type="text/javascript" src='http://127.0.0.1:8000/js/home.js'></script>
    <style>
    .pagination {
        list-style: none;
        display: flex;
    }

    .page-item {
        margin: 0px 5px 0px 5px;
        list-style: none;
        text-decoration: none;
    }

    .page-link {
        text-decoration: none;
        padding: 4px;
        border: #f0f0f1 0.5px;
        box-shadow: #f0f0f1 1px 2px;
        width: 18px;
        border-radius: 6px;
    }

    .active {
        background-color: #57585a;
        color: white;
        border-radius: 6px;
    }
</style>
@endsection


