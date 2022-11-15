@php
    $showBicycle = Config::get('products.bicycle');
    $showCoffee = Config::get('products.coffeeTable');
    $showLego = Config::get('products.lego');
    $showIkea = Config::get('products.ikea');
    $showBrompton = Config::get('products.brompton');
    $showPlant = Config::get('products.plant');
    $showCategories = Config::get('products.category');
    $showSlash = Config::get('products.slashPrice');
    $showRecommend = Config::get('products.recommendProduct');
    $showSlide = Config::get('products.slide');
    $cates = Config::get('products.categories');
    $sorts = Config::get('products.sorts');
    $brands = Config::get('products.brands');
    $genders = Config::get('products.genders');
    $types = Config::get('products.types');
    $accessories = Config::get('products.accessories');
    $conditions =  Config::get('products.conditions');
    $index = 20;
    $cateIndex = 14;
    $cateId = 1;
@endphp
@extends('Layouts.app')

@section('content')

    @php
        $items = Config::get('products.recommendProduct');
    @endphp
{{--    filter   --}}
    <div class="filters mx-auto
   mt-[100px] mobile:mt-[50px] bg-white
    xl:px-[15%] lg:px-[5%] md:px-[5%] sm:w-full mobile:mx-auto" >
        <div class="countResult pt-[4px] pb-[8px] px-[16px]">
            <p class="text-[24px] leading-[32px]
            font-bold mobile:font-normal
            text-[#57585a] w-[70%]
            mobile:text-[#57585a] mobile:text-[22px]">
                7,000+ search results in Singapore
            </p>
        </div>
        <div class="saveSearch flex py-[12px] gap-4 mobile:hidden px-[8px]">
            <p class="text-[16px] leading-[24px] text-[#2c2c2d]">
                Save this search
            </p>
            <div class="px-[2px] py-[2px] bg-[#f0f1f1] rounded-full
            w-[60px] h-fit
            flex items-center"
                 id="bgSave"
                 style="background-color: rgb(240 241 241 / var(--tw-bg-opacity))"
                onclick="changeBg('bgSave', 'save')">
                <div class="flex items-center justify-center h-fit">
                    <i class="fas fa-circle fa-xl
                    px-[2px] py-[2px]"
                       style="color: white;"
                       id="save"></i>
                </div>
            </div>
            <a href="https://www.carousell.sg" class="flex items-center justify-center">
                <i class="fas fa-cog"></i>
            </a>
        </div>
    </div>

{{--        filters    --}}
        <div class="filter mobile:top-[45px] sticky-top top-[105px]
        py-[12px] px-[8px]
         mobile:flex-row-reverse mobile:gap-[10px]
        mx-auto mobile:mt-[0px] bg-white flex items-center
        xl:px-[15%] lg:px-[5%] md:px-[5%] sm:w-full mobile:mx-auto"
        style="justify-content: left; z-index:9;" id="filter1">
           <div class="flex gap-[10px]">
               <div class="filter__box1 flex gap-[10px] items-center
                pr-[5px] mobile:border-none mobile:pr-0
                border-r-[1px] border-solid border-[#c5c5c6]">
                       <div class="box__category relative shadow-2xl rounded-xl bg-white">
                           <div class="flex items-center justify-center h-[40px]
                            px-[16px] py-[8px] gap-[10px] w-fit rounded-full
                            border-solid border-[1px] border-[#c5c5c6]" id="cateFilter"
                                onclick="cateFilter('cateFilterShow')">
                               <p class="text-[16px] leading-[24px]">Category</p>
                               <i class="fa fa-chevron-down"></i>
                           </div>
                           <div class="absolute top-[40px] h-[300px] overflow-y-auto
                            px-[10px] py-[15px] mobile:py-0 mobile:px-0
                            bg-white w-[350px]
                            border-solid border-[1px] border-[#c5c5c6]
                            mobile:top-[0px] mobile:fixed mobile:left-0
                            mobile:w-full mobile:h-full mobile:z-[10]
                            mobile:bg-white"
                                style="display: none"
                                id="cateFilterShow">
                               <div class="hidden fixed bg-white z-[10]
                               mobile:flex items-center w-full
                               h-[60px] shadow-md">
                                  <div class="flex relative items-center justify-center w-full">
                                      <i class="fas fa-times absolute top-[10px] left-[10px]" onclick="cateFilter('cateFilterShow')"></i>
                                      <p class="text-[18px] leading-[24px] font-bold">
                                          Select a category
                                      </p>
                                  </div>
                               </div>
                               <div class="flex px-[20px] items-center justify-between
                               border-[#c5c5c6] border-solid border-b-[1px]
                               bg-white mobile:mt-[70px]">
                                   <input type="text" placeholder="Search for category..."
                                          class="outline-none px-[10px] w-full h-[30px]">
                                   <i class="fa fa-search"></i>
                               </div>
                               <div class="relative">
                                   @foreach($cates as $ca)
                                       <div class="flex px-[16px] items-center justify-between
                                       border-[#c5c5c6] border-solid border-b-[1px]
                                       bg-white hover:bg-[#f0f0f1] py-[12px]" id="{{$ca}}"
                                            onclick="cateSubFilter('cateSubItems'+'{{$ca}}', 'cateSub'+'{{$ca}}')">
                                           <p class="text-[16px] leading-[24px] text-[#2c2c2d]">{{$ca}}</p>
                                           <i class="fa fa-chevron-right"></i>
                                       </div>
                                       <div id="cateSubItems{{$ca}}"
                                            class="hidden
                                            mobile:top-[0px] mobile:fixed mobile:left-0
                                            mobile:w-full mobile:h-full mobile:z-[10]
                                            mobile:bg-white">
                                           <div class="hidden fixed bg-white z-[10] mobile:flex items-center w-full
                                           h-[60px] shadow-md">
                                               <div class="flex relative items-center justify-center w-full">
                                                   <i class="fas fa-times absolute top-[10px] left-[10px]" onclick="cateFilter('cateSubItems'+'{{$ca}}')"></i>
                                                   <p class="text-[18px] leading-[24px] font-bold mt-[10px]">
                                                       {{$ca}}
                                                   </p>
                                               </div>
                                           </div>
                                           <div class="subItems mobile:block mobile:mt-[70px]" id="cateSub+{{$ca}}">
                                               <a href="https://www.carousell.sg"
                                                  class="px-[15px] py-[10px] text-[16px] leading-[24px]
                                                    bg-white hover:bg-[#f0f0f1] block">
                                                   Used cars of many brands</a>
                                               <a href="https://www.carousell.sg"
                                                  class="px-[15px] py-[10px] text-[16px] leading-[24px]
                                                    bg-white hover:bg-[#f0f0f1] block">
                                                   Used cars of many brands</a>
                                               <a href="https://www.carousell.sg"
                                                  class="px-[15px] py-[10px] text-[16px] leading-[24px]
                                                    bg-white hover:bg-[#f0f0f1] block">
                                                   Used cars of many brands</a>
                                               <a href="https://www.carousell.sg"
                                                  class="px-[15px] py-[10px] text-[16px] leading-[24px]
                                                    bg-white hover:bg-[#f0f0f1] block">
                                                   Used cars of many brands</a>
                                           </div>
                                       </div>
                                   @endforeach
                               </div>
                           </div>
                       </div>

                       <div class="box__sort relative shadow-2xl rounded-xl bg-white mobile:hidden">
                           <div class="flex items-center justify-center h-[35px]
                        px-[16px] py-[8px] h-[40px] gap-[10px] w-fit rounded-full
                        border-solid border-[1px] border-[#c5c5c6]" id="cateFilter"
                                onclick="cateFilter('sortFilterShow')">
                               <p class="text-[16px] leading-[24px] whitespace-nowrap inline-block">
                                <span class="text-[#2c2c2d] mr-[5px] opacity-50">
                                    Sort:
                                </span>
                                   Best Match
                               </p>
                               <i class="fa fa-chevron-down"></i>
                           </div>
                           <div class="absolute top-[40px] h-[270px]
                         w-[350px] overflow-y-auto
                         px-[10px] py-[15px] bg-white rounded-xl
                        border-solid border-[1px] border-[#c5c5c6]"
                                style="display: none"
                                id="sortFilterShow">
                               @foreach($sorts as $ca)
                                   <div class=" px-[10px] flex items-center
                               border-[#c5c5c6] border-solid border-b-[1px]
                               bg-white hover:bg-[#f0f0f1] py-[10px]" id="{{$ca}}">
                                       <input type="radio" name="sort"
                                              class="text-[16px] leading-[24px] text-[#2c2c2d]
                                           w-[20px] h-[20px] mr-[15px]" style="accent-color: #026958"
                                              id="sort{{$ca}}">
                                       <label for="sort{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                                   </div>
                               @endforeach
                           </div>
                       </div>
                   </div>

               <div class="filter__box2 flex items-center
                gap-[10px]  pr-[15]
                mobile:border-none mobile:pr-0
                border-r-[1px] border-solid border-[#c5c5c6]">
                   <a href="https://www.carousell.sg"
                      class="flex justify-between items-center
                   px-[16px] py-[8px] bg-white rounded-full
                   hover:border-[#026958] h-[40px]
                   border-solid border-[1px] border-[#c5c5c6]">
                       <img src="https://mweb-cdn.karousell.com/build/mall-listing-3oG3eaXEv2.svg" class="w-[16px] h-[16px]">
                       <p class="text-[16px] leading-[24px]">
                           InstantBuy
                       </p>
                   </a>

                   <div class="flex justify-between items-center
                   px-[16px] py-[8px] bg-white rounded-full
                   hover:border-[#026958] gap-[10px] mobile:hidden
                   border-solid border-[1px] border-[#c5c5c6]"
                        onclick="cateFilter('brandFilterShow')">
                       <p class="text-[16px] leading-[24px]">
                           Brand
                       </p>
                       <i class="fa fa-chevron-down"></i>
                       <div class="absolute top-[50px] h-[270px]
                         w-[350px] overflow-y-auto
                         px-[10px] py-[15px] bg-white rounded-xl
                        border-solid border-[1px] border-[#c5c5c6]"
                            style="display: none"
                            id="brandFilterShow">
                           @foreach($brands as $ca)
                               <div class=" px-[10px] flex items-center
                           border-[#c5c5c6] border-solid border-b-[1px]
                           bg-white hover:bg-[#f0f0f1] py-[10px]" id="{{$ca}}">
                                   <input type="checkbox" name="brand"
                                          class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                                          id="brand{{$ca}}">
                                   <label for="brand{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                               </div>
                           @endforeach
                       </div>
                   </div>

                   <div class="flex justify-between items-center
                   px-[16px] py-[8px] bg-white rounded-full
                   hover:border-[#026958] gap-[10px] mobile:hidden
                   border-solid border-[1px] border-[#c5c5c6]"
                        onclick="cateFilter('genderFilterShow')">
                       <p class="text-[16px] leading-[24px]">
                           Gender
                       </p>
                       <i class="fa fa-chevron-down"></i>
                       <div class="absolute top-[50px] h-[220px]
                     w-[350px] overflow-y-auto
                     px-[10px] py-[15px] bg-white rounded-xl
                    border-solid border-[1px] border-[#c5c5c6]"
                            style="display: none"
                            id="genderFilterShow">
                           @foreach($genders as $ca)
                               <div class=" px-[10px] flex items-center
                           border-[#c5c5c6] border-solid border-b-[1px]
                           bg-white hover:bg-[#f0f0f1] py-[10px]" id="{{$ca}}">
                                   <input type="checkbox" name="brand"
                                          class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                                          id="gender{{$ca}}">
                                   <label for="gender{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                               </div>
                           @endforeach
                       </div>
                   </div>

                   <div class="flex justify-between items-center
                   px-[16px] py-[8px] bg-white rounded-full
                   hover:border-[#026958] gap-[10px] mobile:hidden
                   border-solid border-[1px] border-[#c5c5c6]"
                        onclick="cateFilter('typeFilterShow')">
                       <p class="text-[16px] leading-[24px]">
                           Type
                       </p>
                       <i class="fa fa-chevron-down"></i>
                       <div class="absolute top-[50px] h-[220px]
                     w-[350px] overflow-y-auto
                     px-[10px] py-[15px] bg-white rounded-xl
                    border-solid border-[1px] border-[#c5c5c6]"
                            style="display: none"
                            id="typeFilterShow">
                           @foreach($types as $ca)
                               <div class=" px-[10px] flex items-center
                           border-[#c5c5c6] border-solid border-b-[1px]
                           bg-white hover:bg-[#f0f0f1] py-[10px]" id="{{$ca}}">
                                   <input type="checkbox" name="brand"
                                          class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                                          id="type{{$ca}}">
                                   <label for="type{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                               </div>
                           @endforeach
                       </div>
                   </div>

                   <div class="flex justify-between items-center
                   px-[16px] py-[8px] bg-white rounded-full
                   hover:border-[#026958] gap-[10px] mobile:hidden
                   border-solid border-[1px] border-[#c5c5c6]"
                        onclick="cateFilter('accessFilterShow')">
                       <p class="text-[16px] leading-[24px]">
                           Accessories
                       </p>
                       <i class="fa fa-chevron-down"></i>
                       <div class="absolute top-[50px] h-[220px]
                     w-[350px] overflow-y-auto
                     px-[10px] py-[15px] bg-white rounded-xl
                    border-solid border-[1px] border-[#c5c5c6]"
                            style="display: none"
                            id="accessFilterShow">
                           @foreach($accessories as $ca)
                               <div class=" px-[10px] flex items-center
                           border-[#c5c5c6] border-solid border-b-[1px]
                           bg-white hover:bg-[#f0f0f1] py-[10px]" id="{{$ca}}">
                                   <input type="checkbox" name="brand"
                                          class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                                          id="access{{$ca}}">
                                   <label for="access{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                               </div>
                           @endforeach
                       </div>
                   </div>

                   <div class="flex justify-between items-center
                   px-[16px] py-[8px] bg-white rounded-full
                   hover:border-[#026958] gap-[10px] mobile:hidden
                   border-solid border-[1px] border-[#c5c5c6]"
                        onclick="cateFilter('conditionFilterShow')">
                       <p class="text-[16px] leading-[24px]">
                           Condition
                       </p>
                       <i class="fa fa-chevron-down"></i>
                       <div class="absolute top-[50px] h-[220px]
                     w-[350px] overflow-y-auto
                     px-[10px] py-[15px] bg-white rounded-xl
                    border-solid border-[1px] border-[#c5c5c6]"
                            style="display: none"
                            id="conditionFilterShow">
                           @foreach($conditions as $ca)
                               <div class=" px-[10px] flex items-center
                           border-[#c5c5c6] border-solid border-b-[1px]
                           bg-white hover:bg-[#f0f0f1] py-[10px]" id="{{$ca}}">
                                   <input type="checkbox" name="brand"
                                          class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                                          id="condition{{$ca}}">
                                   <label for="condition{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                               </div>
                           @endforeach
                       </div>
                   </div>
               </div>
           </div>

            <div class="filter__box3 ml-[15px] mobile:ml-0 ">
                <div class="flex justify-between items-center
                   px-[16px] py-[8px] bg-white rounded-full
                   hover:border-[#026958]
                   gap-[10px] h-[40px]
                   border-solid border-[1px] border-[#c5c5c6]
                   mobile:border-none mobile:justify-left"
                   data-bs-target="#moreFilter" data-bs-toggle="modal">
                    <p class="text-[16px] leading-[24px] mobile:hidden whitespace-nowrap inline-block"
                    onclick="changeZ('filter1')">
                        More filters
                    </p>
                    <i class="fas fa-sliders-h"></i>
                </div>
               @include('components.modal-search')
            </div>
        </div>


{{--    show results   --}}
    <div class="recommend overflow-hidden grid grid-cols-4 relative
        mobile:grid-cols-2 mx-auto pt-[20px] mb-[50px]
         mobile:mt-[50px]
         ring-[1px] ring-[#f0f1f1]
         mobile:ring-0
        xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%]
        xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:mx-auto">
        @foreach($items as $re)
            @include('components.product', ['imgSrc' => $re])
        @endforeach
    </div>
@endsection

<script type="text/javascript" src="./js/searchPage.js"></script>
<script type="text/javascript" src="./js/utilities-functions.js"></script>
<style>
    .modal-backdrop{
        position:relative;
        z-index:100;
    }
</style>
