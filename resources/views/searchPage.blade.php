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
    <div class="filters mx-auto pt-[20px]
   mt-[100px] mobile:mt-[50px] bg-white
    xl:px-[15%] lg:px-[5%] md:px-[5%] sm:w-full mobile:mx-auto" >
        <div class="countResult">
            <p class="text-[24px] leading-[32px] font-bold text-[#57585a]
            mobile:text-[#57585a] mobile:text-[22px] mobile:px-[10px]">
                7,000+ search results in Singapore
            </p>
        </div>
        <div class="saveSearch flex my-[30px] gap-4 mobile:hidden">
            <p class="text-[16px] leading-[24px] text-[#2c2c2d]">
                Save this search
            </p>
            <div class="px-[2px] py-[2px] bg-[#f0f1f1] rounded-full w-[50px]
            flex items-center"
                 id="bgSave"
                 style="background-color: rgb(240 241 241 / var(--tw-bg-opacity))"
            onclick="changeBg('bgSave', 'save')">
                <div class="flex items-center justify-center">
                    <i class="fas fa-circle
                    px-[2px] py-[2px]"
                       style="color: white; height:20px;"
                       id="save"></i>
                </div>
            </div>
            <a href="https://www.carousell.sg" class="flex items-center justify-center">
                <i class="fas fa-cog "></i>
            </a>
        </div>
    </div>

{{--        filters    --}}
        <div class="filter mobile:top-[45px] sticky-top top-[105px]
        py-[10px] mobile:flex-row-reverse mobile:gap-[10px]
        mx-auto mobile:mt-[0px] bg-white flex items-center
        xl:px-[15%] lg:px-[5%] md:px-[5%] sm:w-full mobile:mx-auto"
        style="justify-content: left; z-index:9;" id="filter1">
           <div class="flex gap-[10px]">
               <div class="filter__box1 flex gap-[20px] items-center
                pr-[15] mobile:border-none mobile:pr-0
                border-r-[1px] border-solid border-[#c5c5c6]">
                       <div class="box__category relative shadow-2xl rounded-xl bg-white">
                           <div class="flex items-center justify-center h-[35px]
                            px-[10px] py-[5px] gap-[10px] w-fit rounded-full
                            border-solid border-[1px] border-[#c5c5c6]" id="cateFilter"
                                onclick="cateFilter('cateFilterShow')">
                               <p class="text-[16px] leading-[24px]">Category</p>
                               <i class="fa fa-chevron-down"></i>
                           </div>
                           <div class="absolute top-[40px] h-[300px] overflow-y-auto
                            px-[10px] py-[15px] bg-white w-[350px]
                            border-solid border-[1px] border-[#c5c5c6]
                            mobile:top-[0px] mobile:fixed mobile:left-0
                            mobile:w-full mobile:h-full mobile:z-[10]
                            mobile:bg-white"
                                style="display: none"
                                id="cateFilterShow">
                               <div class="hidden fixed bg-white z-[10] mobile:flex items-center w-full">
                                  <div class="flex relative items-center justify-center w-full">
                                      <i class="fas fa-times absolute top-[10px] left-[10px]" onclick="cateFilter('cateFilterShow')"></i>
                                      <p class="text-[18px] leading-[24px] font-bold">
                                          Select a category
                                      </p>
                                  </div>
                               </div>
                               <div class="flex px-[10px] items-center justify-between
                               border-[#c5c5c6] border-solid border-b-[1px]
                               bg-white mobile:mt-[50px]">
                                   <input type="text" placeholder="Search for category..."
                                          class="outline-none px-[10px] w-full h-[30px]">
                                   <i class="fa fa-search"></i>
                               </div>
                               <div class="relative">
                                   @foreach($cates as $ca)
                                       <div class="flex px-[10px] items-center justify-between
                                       border-[#c5c5c6] border-solid border-b-[1px]
                                       bg-white hover:bg-[#f0f0f1] py-[10px]" id="{{$ca}}"
                                            onclick="cateSubFilter('cateSubItems'+'{{$ca}}', 'cateSub'+'{{$ca}}')">
                                           <p class="text-[16px] leading-[24px] text-[#2c2c2d]">{{$ca}}</p>
                                           <i class="fa fa-chevron-right"></i>
                                       </div>
                                       <div id="cateSubItems{{$ca}}"
                                            class="hidden
                                            mobile:top-[0px] mobile:fixed mobile:left-0
                                            mobile:w-full mobile:h-full mobile:z-[10]
                                            mobile:bg-white">
                                           <div class="hidden fixed bg-white z-[10] mobile:flex items-center w-full">
                                               <div class="flex relative items-center justify-center w-full">
                                                   <i class="fas fa-times absolute top-[10px] left-[10px]" onclick="cateFilter('cateSubItems'+'{{$ca}}')"></i>
                                                   <p class="text-[18px] leading-[24px] font-bold mt-[10px]">
                                                       {{$ca}}
                                                   </p>
                                               </div>
                                           </div>
                                           <div class="subItems mobile:block mobile:mt-[50px]" id="cateSub+{{$ca}}">
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
                        px-[10px] py-[5px] gap-[10px] w-fit rounded-full
                        border-solid border-[1px] border-[#c5c5c6]" id="cateFilter"
                                onclick="cateFilter('sortFilterShow')">
                               <p class="text-[16px] leading-[24px]">
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

               <div class="filter__box2 flex items-center ml-[15px]
                gap-[10px]  pr-[15]
                mobile:border-none mobile:pr-0
                border-r-[1px] border-solid border-[#c5c5c6]">
                   <a href="https://www.carousell.sg"
                      class="flex justify-between items-center
                   px-[10px] py-[5px] bg-white rounded-full
                   hover:border-[#026958]
                   border-solid border-[1px] border-[#c5c5c6]">
                       <img src="https://mweb-cdn.karousell.com/build/mall-listing-3oG3eaXEv2.svg" class="w-[16px] h-[16px]">
                       <p class="text-[16px] leading-[24px]">
                           InstantBuy
                       </p>
                   </a>

                   <div class="flex justify-between items-center
                   px-[10px] py-[5px] bg-white rounded-full
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
                   px-[10px] py-[5px] bg-white rounded-full
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
                   px-[10px] py-[5px] bg-white rounded-full
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
                   px-[10px] py-[5px] bg-white rounded-full
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
                   px-[10px] py-[5px] bg-white rounded-full
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
                   px-[10px] py-[5px] bg-white rounded-full
                   hover:border-[#026958]
                   gap-[10px] h-[35px]
                   border-solid border-[1px] border-[#c5c5c6]
                   mobile:border-none mobile:justify-left"
                   data-bs-target="#moreFilter" data-bs-toggle="modal">
                    <p class="text-[16px] leading-[24px] mobile:hidden"
                    onclick="changeZ('filter1')">
                        More filters
                    </p>
                    <i class="fas fa-sliders-h"></i>
                </div>
                <div class="modal fade fixed top-0 left-0 w-full h-full
                outline-none overflow-x-hidden overflow-y-auto
                flex justify-start"
                     style="background-color: rgba(0, 0, 0, 0.5); display: none;"
                id="moreFilter" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog relative max-w-[440px] pointer-events-none
                    my-0 mt-0 mobile:ml-0 ml-[calc(100%-440px)] mobile:ml-0
                    z-[1]" >
                        <div class="modal-content border-none shadow-lg relative
                            flex flex-col w-full pointer-events-auto bg-white
                            bg-clip-padding rounded-none outline-none text-current" id="modalContent1">
                            <div
                                class="modal-header flex flex-shrink-0 items-center
                                fixed w-full bg-white z-10
                                justify-between p-4 border-b border-gray-200 rounded-t-md">
                                <h5 class="text-xl font-medium leading-normal text-gray-800"
                                    id="exampleModalLabel2">Filters and Sort</h5>
                                <button type="button"
                                        class="btn-close box-content w-4 h-4 p-1 text-black
                                        border-none rounded-none opacity-50 focus:shadow-none
                                        focus:outline-none focus:opacity-100 hover:text-black
                                        hover:opacity-75 hover:no-underline"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body relative p-4 mt-[80px] h-fit">
                                <p class="text-[20px] leading-[28px] text-[#2c2c2d] font-bold">
                                  Sort
                                </p>
                                @foreach($sorts as $ca)
                                    <div class=" px-[10px] flex items-center
                                       bg-white hover:bg-[#f0f0f1] py-[5px]" id="{{$ca}}">
                                        <input type="radio" name="sort"
                                               class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px]" style="accent-color: #026958"
                                               id="sort1{{$ca}}">
                                        <label for="sort1{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="relative p-4 mt-[20px] h-fit px-[10px]">
                                <div class="block">
                                    <p class="text-[20px] leading-[28px] text-[#2c2c2d] font-bold hidden mobile:block">
                                        Product Detail
                                    </p>
                                    <p class="text-[20px] leading-[28px] text-[#2c2c2d] font-bold
                                        mobile:text-[16px] mobile:font-normal">
                                        Brand
                                    </p>
                                    <div class="hidden mobile:flex justify-between items-center py-[3px]
                                        border-solid border-b-[1px] border-[#c5c5c6]" onclick="showModalSearch('brandModal')">
                                        <p>
                                            Select
                                        </p>
                                        <i class="fa fa-chevron-right"></i>
                                    </div>
                                </div>
                                <div id="brandModal" class="mobile:absolute top-[-250px] mobile:w-full mobile:h-full
                                mobile:bg-white z-[9] mobile:hidden">
                                    <div class="hidden mobile:flex items-center justify-between py-[10px]
                                    bg-white w-[94%] z-[9] fixed top-0" >
                                        <i class="fas fa-arrow-left" onclick="showModalSearch('brandModal')"></i>
                                        <p class="font-bold text-[16px] leading-[22px]" id="brandLabel">
                                            Brand
                                        </p>
                                        <p class="font-bold text-[16px] leading-[22px] text-[#026958]" onclick="showModalSearch('brandModal')">
                                            Apply
                                        </p>
                                    </div>
                                    <div class="mobile:w-full mobile:bg-white mobile:ml-[-10px] mobile:pl-[10px]">
                                        @foreach($brands as $ca)
                                            <div class=" mobile:px-[0px] px-[10px] flex items-center
                                        bg-white hover:bg-[#f0f0f1] py-[5px]" id="{{$ca}}">
                                                <input type="checkbox" name="brand"
                                                       class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                                                       id="brand1{{$ca}}">
                                                <label for="brand1{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="relative p-4 mt-[20px] h-fit" id="genderModal">
                                <p class="text-[20px] leading-[28px] text-[#2c2c2d] font-bold">
                                    Gender
                                </p>
                                @foreach($genders as $ca)
                                    <div class=" px-[10px] flex items-center
                                    bg-white hover:bg-[#f0f0f1] py-[5px]" id="{{$ca}}">
                                        <input type="checkbox" name="brand"
                                               class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                                               id="gender1{{$ca}}">
                                        <label for="gender1{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="relative p-4 mt-[20px] h-fit" id="typeModal">
                                <p class="text-[20px] leading-[28px] text-[#2c2c2d] font-bold">
                                    Type
                                </p>
                                @foreach($types as $ca)
                                    <div class=" px-[10px] flex items-center
                                    bg-white hover:bg-[#f0f0f1] py-[5px]" id="{{$ca}}">
                                        <input type="checkbox" name="brand"
                                               class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                                               id="type1{{$ca}}">
                                        <label for="type1{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="relative p-4 mt-[20px] h-fit" id="accessModal">
                                <p class="text-[20px] leading-[28px] text-[#2c2c2d] font-bold">
                                    Accessories
                                </p>
                                @foreach($accessories as $ca)
                                    <div class=" px-[10px] flex items-center
                                    bg-white hover:bg-[#f0f0f1] py-[5px]" id="{{$ca}}">
                                        <input type="checkbox" name="brand"
                                               class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                                               id="access1{{$ca}}">
                                        <label for="access1{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="relative p-4 mt-[20px] h-fit" id="conditionModal">
                                <p class="text-[20px] leading-[28px] text-[#2c2c2d] font-bold">
                                    Condition
                                </p>
                                @foreach($conditions as $ca)
                                    <div class=" px-[10px] flex items-center
                                    bg-white hover:bg-[#f0f0f1] py-[5px]" id="{{$ca}}">
                                        <input type="checkbox" name="brand"
                                               class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                                               id="condition1{{$ca}}">
                                        <label for="condition1{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="px-[20px]" id="priceModal">
                                <p class="text-[20px] leading-[28px] font-bold mb-[20px]">Price</p>
                                <div class="flex justify-between gap-[20px] mobile:flex-col">
                                    <div class="relative basis-2/5">
                                        <input type="text"
                                        class="pl-[30px] pr-[5px] py-[5px] outline-none h-[44px]
                                        border-solid border-[1px] border-[#c5c5c6] w-[150px] mobile:w-full
                                        focus:border-[#026958]" id="minimumInput">
                                        <p class="absolute top-[10px] left-[5px]">S$</p>
                                        <p class="text-[#c5c6c6] absolute top-[10px] left-[35px]
                                        bg-white" id="minimum">
                                            Minimum</p>
                                    </div>

                                    <div class="relative basis-2/5">
                                        <input type="text"
                                               class="pl-[30px] pr-[5px] py-[5px] outline-none h-[44px]
                                           border-solid border-[1px] border-[#c5c5c6] w-[150px] mobile:w-full
                                           focus:border-[#026958]" id="maximumInput">
                                        <p class="absolute top-[10px] left-[5px]">S$</p>
                                        <p class="text-[#c5c6c6] absolute top-[10px] left-[35px]
                                        bg-white" id="maximum">
                                            Maximum</p>
                                    </div>
                                </div>

                            </div>

                            <div class="flex items-center justify-between px-[20px] mt-[20px]" id="shipModal">
                                <p class="text-[20px] leading-[28px] font-bold">Free shipping</p>
                                <div class="px-[2px] py-[2px] bg-[#f0f1f1] rounded-full w-[50px]
                                        flex items-center"
                                     id="bgShip"
                                     style="background-color: rgb(240 241 241 / var(--tw-bg-opacity))"
                                     onclick="changeBg('bgShip', 'ship')">
                                    <div class="flex items-center justify-center">
                                        <i class="fas fa-circle
                                                px-[2px] py-[2px]"
                                           style="color: white; height:20px;"
                                           id="ship"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between px-[20px] mt-[20px]" id="carousellModal">
                                <div class="flex gap-[10px]">
                                    <img src="https://sl3-cdn.karousell.com/components/Caroupay_v4.svg" class="w-[32px] h-[32px]">
                                    <p class="text-[20px] leading-[28px] font-bold">Carousell Protection</p>
                                </div>
                                <div class="px-[2px] py-[2px] bg-[#f0f1f1] rounded-full w-[50px]
                                        flex items-center"
                                     id="bgPro"
                                     style="background-color: rgb(240 241 241 / var(--tw-bg-opacity))"
                                     onclick="changeBg('bgPro', 'pro')">
                                    <div class="flex items-center justify-center">
                                        <i class="fas fa-circle
                                                px-[2px] py-[2px]"
                                           style="color: white; height:20px;"
                                           id="pro"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="px-[20px] mt-[30px] mb-[70px]" id="dealModal">
                                <p class="text-[20px] leading-[20px] font-bold mb-[20px]">
                                    Deal Option
                                </p>
                                <div class="flex flex-col gap-[10px]">
                                    <div class=" px-[10px] flex items-center
                                    bg-white hover:bg-[#f0f0f1] py-[5px]" >
                                        <input type="checkbox" name="brand"
                                               class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]" id="deal1">
                                        <label for="deal1" class="text-[16px] leading-[24px]">Meet-up</label>
                                    </div>
                                    <div class=" px-[10px] flex items-center
                                    bg-white hover:bg-[#f0f0f1] py-[5px]" >
                                        <input type="checkbox" name="brand"
                                               class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]" id="deal2">
                                        <label for="deal2" class="text-[16px] leading-[24px]">Mailing & Delivery</label>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="flex gap-[10px] items-center
                            justify-end mt-[10px] px-[20px] w-[440px]
                            mobile:w-full mobile:py-[10px] mobile:shadow-xl
                            fixed bottom-0 bg-white" id="footerModal">
                                <button class="px-[20px] py-[10px] rounded-lg
                                border-[1px] border-solid border-[#c5c5c6]
                                text-[18px] leading-[24px] font-bold bg-white
                                hover:bg-[#f0f0f1] mobile:hidden">
                                    Clear
                                </button>

                                <button class="px-[20px] py-[10px] rounded-lg
                                border-[1px] border-solid border-[#c5c5c6]
                                text-[18px] leading-[24px] font-bold text-white
                                bg-[#026958] mobile:w-full mobile:py-[5px]
                                hover:opacity-[0.6]" data-bs-dismiss="modal" aria-label="Close">
                                    Apply
                                </button>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>


{{--    show results   --}}
    <div class="recommend overflow-hidden grid grid-cols-4 relative
        mobile:grid-cols-2 mx-auto pt-[20px] mb-[50px]
    mt-[100px] mobile:mt-[50px]
    xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-[96%]
    xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:mx-auto">
        @foreach($items as $re)
            <div class="bi p-[5px] hover:shadow-2xl flex flex-col justify-between h-[450px] mb-[20px]">
                <div>
                    <a href="http://www.carousell.sg"
                       class="bi__header flex flex-row gap-[5px]
                        items-center
                        px-[10px]">
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
                    <a href="http://www.carousell.sg"
                       class="bi__body px-[5px] flex flex-col">
                        <img src="{{$re}}" alt=""
                             class="rounded-md w-[100%] h-[240px] my-[10px]">
                        <div class="body__describe">
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
                    </a>
                </div>
                <a class="bi__footer flex items-center"
                   href="http://www.carousell.sg">
                    <i class="far fa-heart" style="color: #57585a"></i>
                    <p class="text-[12px] text-[#57585a] leading-[20px]">
                        12
                    </p>
                </a>
            </div>
        @endforeach
    </div>
@endsection

<script type="text/javascript" src="./js/searchPage.js"></script>
<style>
    .modal-backdrop{
        position:relative;
        z-index:100;
    }
</style>
