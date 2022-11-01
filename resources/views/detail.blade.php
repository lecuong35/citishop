@extends('layouts.app')

@section('content')
    @php
        $showSlideProduct = Config::get('products.slide-product');
        $showSimilarProduct = Config::get('products.similar-product');
        $showItemSearchFor = Config::get('products.item-search-for');
    @endphp
    <section class="mt-10 m-auto">
        <div class="content w-full lg:w-10/12 m-auto">
            <!-- start breadcrumb -->
            <ul class="breadcrumb-detail pt-4 hidden lg:flex">
                <li><a class="text-[#008f79] hover:text-[#008f79]" href="">Sport Equipment</a></li>
                <svg class="mt-1 mx-1" fill="#c5c5c6" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M9.29 15.88L13.17 12 9.29 8.12c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0l4.59 4.59c.39.39.39 1.02 0 1.41L10.7 17.3c-.39.39-1.02.39-1.41 0-.38-.39-.39-1.03 0-1.42z"></path></svg>
                <li><a class="text-[#008f79] hover:text-[#008f79]" href="">Bycycles & Parts</a></li>
                <svg class="mt-1 mx-1" fill="#c5c5c6" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M9.29 15.88L13.17 12 9.29 8.12c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0l4.59 4.59c.39.39.39 1.02 0 1.41L10.7 17.3c-.39.39-1.02.39-1.41 0-.38-.39-.39-1.03 0-1.42z"></path></svg>
                <li><a class="text-[#008f79] hover:text-[#008f79]" href="">Bicycles</a></li>
            </ul>
            <!-- end breadcrumb -->

            <!-- slide-image start -->
            <div class="flex items-center justify-center w-full m-auto">
                <div class="w-full relative flex items-center justify-center">
                    <div class="w-full h-full mx-auto">
                        <div class="slider-img block m-auto">
                            @foreach($showSlideProduct as $slidePro)
                            <div class="sm:mr-1">
                                <img src="{{$slidePro}}" alt="black chair and white table" class="w-full" />
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="arrow_prev absolute left-0 ml-20">
                        <span><i class="fa-solid fa-circle-chevron-left text-white text-3xl" style="font-size: 32px;"></i></span>
                    </div>
                    <div class="arrow_next absolute right-0 mr-20">
                        <span><i class="fa-solid fa-circle-chevron-right text-white text-3xl" style="font-size: 32px;"></i></span>
                    </div>
                    <a href="" class="absolute mb-60 mr-32 z-30 right-0 text-[#2c2c2d] hover:text-[#2c2c2d] hidden lg:inline-block">
                        <div class="bg-white flex py-2 px-2 rounded-md hover:bg-gray-300">
                            <svg class="D_aNI" fill="#57585a" fill-rule="nonzero" height="25" viewBox="0 0 16 16" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M4.86197 3.52794L7.52828 0.861631L7.53151 0.858423C7.59476 0.795922 7.6674 0.748648 7.74485 0.716601C7.82346 0.684006 7.90965 0.666016 8.00004 0.666016C8.18414 0.666016 8.3508 0.740635 8.47145 0.861278L11.1381 3.52794C11.3985 3.78829 11.3985 4.2104 11.1381 4.47075C10.8778 4.7311 10.4557 4.7311 10.1953 4.47075L8.66671 2.94216V10.666C8.66671 11.0342 8.36823 11.3327 8.00004 11.3327C7.63185 11.3327 7.33337 11.0342 7.33337 10.666V2.94216L5.80478 4.47075C5.54443 4.7311 5.12232 4.7311 4.86197 4.47075C4.60162 4.2104 4.60162 3.78829 4.86197 3.52794Z" fill="#57585a"></path><path d="M13.3334 14.666V7.33268H11.3334C10.9652 7.33268 10.6667 7.0342 10.6667 6.66602C10.6667 6.29783 10.9652 5.99935 11.3334 5.99935H14C14.3682 5.99935 14.6667 6.29783 14.6667 6.66602V15.3327C14.6667 15.7009 14.3682 15.9993 14 15.9993H2.00004C1.63185 15.9993 1.33337 15.7009 1.33337 15.3327V6.66602C1.33337 6.29783 1.63185 5.99935 2.00004 5.99935H4.66671C5.0349 5.99935 5.33337 6.29783 5.33337 6.66602C5.33337 7.0342 5.0349 7.33268 4.66671 7.33268H2.66671V14.666H13.3334Z" fill="#57585a"></path></svg>
                            <span class="ml-2">share</span>
                        </div>
                    </a> 
                    <a href="" class="absolute mb-60 mr-10 z-30 right-0 text-[#2c2c2d] hover:text-[#2c2c2d] hidden lg:inline-block">
                        <div class="bg-white flex py-2 px-2 rounded-md hover:bg-gray-300">
                            <svg class="D_aNI" height="25" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M17 1c3.852 0 7 3.148 7 7 0 3.858-2.067 7.513-5.44 10.724C16.158 21.01 13.04 23 12 23s-4.158-1.99-6.56-4.276C2.067 15.514 0 11.858 0 8c0-3.852 3.148-7 7-7 1.917 0 3.688.79 5 2.13C13.312 1.79 15.083 1 17 1zm0 2c-1.677 0-3.205.854-4.176 2.267a1 1 0 0 1-1.648 0C10.205 3.854 8.676 3 7 3 4.252 3 2 5.252 2 8c0 3.215 1.804 6.406 4.82 9.276C8.86 19.218 11.652 21 12 21c.347 0 3.14-1.782 5.18-3.724C20.197 14.406 22 11.215 22 8c0-2.748-2.252-5-5-5z" fill="#57585a"></path></svg>
                            <span class="ml-2">Likes</span>
                        </div>
                    </a> 
                    <button id="box-img-show" data-modal-target="#modal" class="absolute mt-60 mr-10 z-30 right-0 text-[#2c2c2d] hover:text-[#2c2c2d]">
                        <div class="bg-white flex py-2 px-2 rounded-md hover:bg-gray-300">
                            <svg class="D_aNI" height="25" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M3 3v18h18V3H3zM2 1h20a1 1 0 0 1 1 1v20a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm4.7 15.7a1 1 0 1 1-1.4-1.4l2-2a1 1 0 0 1 1.3 0l4.3 3.4 4.4-4.4a1 1 0 0 1 1.4 1.4l-5 5a1 1 0 0 1-1.3 0L8 15.4l-1.4 1.4zM11 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" fill="#57585a" fill-rule="nonzero"></path></svg>
                            <span class="ml-2"> 5 images</span>
                        </div>
                    </button>   
                </div>
            </div>
            <!-- slide-image end -->

            <!-- start breadcrumb-mobile-->
            <ul class="breadcrumb-detail pt-4 px-4 flex lg:hidden lg:px-0">
                <li><a class="text-[#008f79] hover:text-[#008f79]" href="">Sport Equipment</a></li>
                <svg class="mt-1 mx-1" fill="#c5c5c6" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M9.29 15.88L13.17 12 9.29 8.12c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0l4.59 4.59c.39.39.39 1.02 0 1.41L10.7 17.3c-.39.39-1.02.39-1.41 0-.38-.39-.39-1.03 0-1.42z"></path></svg>
                <li><a class="text-[#008f79] hover:text-[#008f79]" href="">Bycycles & Parts</a></li>
                <svg class="mt-1 mx-1" fill="#c5c5c6" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M9.29 15.88L13.17 12 9.29 8.12c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0l4.59 4.59c.39.39.39 1.02 0 1.41L10.7 17.3c-.39.39-1.02.39-1.41 0-.38-.39-.39-1.03 0-1.42z"></path></svg>
                <li><a class="text-[#008f79] hover:text-[#008f79]" href="">Bicycles</a></li>
            </ul>
             <!-- end breadcrumb-mobile-->

            <!-- product detail in here -->
            <div class="product-detail w-full px-4 flex lg:px-0">
                <div class="lg:w-9/12">
                    <div>
                        <p id="title-detail" class="title text-2xl font-normal mt-4 ">Gcycle - Foldable bike folding bicycle Foldie 3sixty </p>
                        <p id="price-detail"class="heading text-2xl lg:text-3xl">$75</p>
                    </div>
                    <div class="">
                        <div class="w-full float-left">
                            <div class="block lg:flex text-[#57585a] mb:8 lg:mb-20">
                                <div class="flex lg:hidden">
                                    <img alt="icon" class="h-5" src="https://sl3-cdn.karousell.com/components/dm/time_stamp.svg" title="">
                                    <p class="text-base ml-3 lg:text-lg">1 week ago by <a href="" class="underline text-[#008f79]">dyllyz</a></p>
                                </div>
                                <div class="lg:hidden mb-2 flex">
                                    <svg class="w-5 h-5 lg:w-7 lg:h-7"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17 1c3.852 0 7 3.148 7 7 0 3.858-2.067 7.513-5.44 10.724C16.158 21.01 13.04 23 12 23s-4.158-1.99-6.56-4.276C2.067 15.514 0 11.858 0 8c0-3.852 3.148-7 7-7 1.917 0 3.688.79 5 2.13C13.312 1.79 15.083 1 17 1zm0 2c-1.677 0-3.205.854-4.176 2.267a1 1 0 0 1-1.648 0C10.205 3.854 8.676 3 7 3 4.252 3 2 5.252 2 8c0 3.215 1.804 6.406 4.82 9.276C8.86 19.218 11.652 21 12 21c.347 0 3.14-1.782 5.18-3.724C20.197 14.406 22 11.215 22 8c0-2.748-2.252-5-5-5z" fill="#57585a"></path></svg>
                                    <span class="ml-3">Likes</span>
                                </div>
                                <div class="flex">
                                    <img class="w-5 h-5 lg:w-7 lg:h-7" src="https://sl3-cdn.karousell.com/components/condition_v4_1.svg" alt="">
                                    <p class="text-base ml-3 lg:text-lg">Well used</p>
                                    <svg class="" fill="#57585a" fill-rule="nonzero" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12 24C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12-5.373 12-12 12zm0-2c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm1-6h1a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h1v-5h-1a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v6zM11.95 5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5z"></path></svg>
                                </div>
                                <div class="flex lg:px-44">
                                    <img class="w-5 h-5 lg:w-7 lg:h-7" src="https://sl3-cdn.karousell.com/components/icon_mailing_meetup.svg" alt="">
                                    <p class="text-base ml-3 lg:text-lg">Meetup</p>
                                </div>
                                <div class="flex">
                                    <img class="w-5 h-5 lg:w-7 lg:h-7" src="https://sl3-cdn.karousell.com/components/location_v4_1.svg" alt="">
                                    <p class="text-base ml-3 lg:text-lg">Compass One</p>
                                </div>
                            </div>
                            <div class="dectiption">
                                <div>
                                    <div class="heading text-2xl lg:text-3xl">Description</div>
                                    <div class="body">
                                        <div class="w-full content-attr flex text-[#57585a]">
                                                <div class="item w-3/12">
                                                    <div class="item-label text-base">posted</div>
                                                    <div class="value text-lg">1 week ago</div>
                                                </div>
                                                <div class="item w-3/12">
                                                    <div class="item-label text-base">type</div>
                                                    <div class="value text-lg">Other Bicycles</div>
                                                </div>
                                        </div>
                                        <div class="content-detail mt-3 text-[#2c2c2d] text-lg">
                                            <p>24" Wheels,<br>
                                                In good condition <br>
                                                21 gear speed <br>
                                                Front 3 gears, Back 7 gears <br>
                                                Good for 9-13 year olds <br>
                                                Comes with water bottle holder <br>
                                                Bought at $270 ,<br>
                                                Reason for selling: Clearing space <br>
                                                PM me for more detail <br>
                                                Can negotiate <br>
                                                Viewing in Sengkang area</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="meet-up mb-12">
                                    <div class="heading mb-2 text-2xl lg:text-3xl">Meet-up</div>
                                    <div class="flex text-[#57585a]">
                                        <img class="w-7 h-7" src="https://sl3-cdn.karousell.com/components/location_v4_1.svg" alt="">
                                        <p class="text-lg ml-2">Compass One</p>
                                        <img alt="" class="w-4 h-7 ml-3" src="https://sl3-cdn.karousell.com/components/external_link.svg" title="" data-measuring="true">
                                    </div>
                                </div>
                                <div>
                                    <div class="heading text-2xl lg:text-3xl">Meet the seller</div>
                                    <div class="w-full mt-10 lg:flex">
                                        <div class="user-info flex">
                                            <div class="avatar w-24 h-24">
                                                <img class="rounded-full" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                                            </div>
                                            <ul class="w-full ml-4 text-base text-[#57585a]">
                                                <li class="name text-xl font-semibold text-[#2c2c2d] lg:text-2xl">Dylan Lee</li>
                                                <li class="nickname py-2">@dyllyz</li>
                                                <li class="time-joined">
                                                    <img class="float-left mr-1 w-5 h-5" src="https://sl3-cdn.karousell.com/components/location_v4_1.svg" alt=""> 
                                                    Joined 1 year ago
                                                </li>
                                                <li class="reponsive py-2">
                                                    <img alt="" class="float-left mr-1 w-5 h-5" src="https://mweb-cdn.karousell.com/build/response-rate-h-1v83pbBk4q.svg" title=""> 
                                                    Very Responsive
                                                </li>
                                                <li>
                                                    <div class="">
                                                        <img class="float-left mr-1 w-5 h-5" alt="" class="D_gI D_gF D_bcn" src="https://mweb-cdn.karousell.com/build/verification-email-QvlRIiMUCh.svg" title="">
                                                        <img class="float-left mr-1 w-5 h-5" alt="" class="D_gI D_gF D_bcn" src="https://mweb-cdn.karousell.com/build/verification-mobile-2iJwuSTuFi.svg" title=""><span class="">Verified</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="comment ml-24 mt-2">
                                            <div class="w-full text-base text-[#57585a]">
                                                <div class="name text-xl float-left font-semibold text-[#2c2c2d] lg:text-2xl">Review for @dyllyz <span class="text-[#57585a] font-normal">5.0 </span>
                                                    <div class="stars flex float-right ml-2">
                                                        <div class="star w-4 h-4">
                                                            <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                                        </div>
                                                        <div class="star w-4 h-4">
                                                            <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                                        </div>
                                                        <div class="star w-4 h-4">
                                                            <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                                        </div>
                                                        <div class="star w-4 h-4">
                                                            <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                                        </div>
                                                        <div class="star w-4 h-4">
                                                            <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-cmt flex w-full mt-3">
                                                    <div class="avatar w-16 h-16">
                                                        <img class="rounded-full" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                                                    </div>
                                                    <ul class="w-full ml-3">
                                                        <li class="nickname">@Coco_Singapore <span class="time">. 2 days ago</span></li>
                                                        <li class="star flex p-2">
                                                            <div class="star w-4 h-4">
                                                                <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                                            </div>
                                                            <div class="star w-4 h-4">
                                                                <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                                            </div>
                                                            <div class="star w-4 h-4">
                                                                <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                                            </div>
                                                            <div class="star w-4 h-4">
                                                                <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                                            </div>
                                                            <div class="star w-4 h-4">
                                                                <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                                            </div>
                                                        </li>
                                                        <li class="cmt">Friendly, reliable and wonderful to deal with.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="" class="read-more float-left text-[#008f79] text-lg hover:text-[#008f79] ">Read all reviews
                                                <svg class="float-right" fill="#008f79" height="32" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M9.29 15.88L13.17 12 9.29 8.12c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0l4.59 4.59c.39.39.39 1.02 0 1.41L10.7 17.3c-.39.39-1.02.39-1.41 0-.38-.39-.39-1.03 0-1.42z"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-3/12 hidden lg:block">
                    <div class="w-full p-4 shadow-2xl">
                        <div class="flex">
                            <div class="avatar">
                                <img class="rounded-full w-11 h-11" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                            </div>
                            <div class="info-author ml-2">
                                <p class="name mb-1">Dylan Lee<span class="nickname">@dyllyz</span></p>
                                <p class="rate-star float-left">5.0
                                        <div class="stars float-left flex ml-2">
                                            <div class="star w-4 h-4">
                                                <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                            </div>
                                            <div class="star w-4 h-4">
                                                <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                            </div>
                                            <div class="star w-4 h-4">
                                                <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                            </div>
                                            <div class="star w-4 h-4">
                                                <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                            </div>
                                            <div class="star w-4 h-4">
                                                <svg class="" fill="#008f79" fill-rule="nonzero" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.01 10.54l4.1-8.3a1 1 0 0 1 1.79 0l4.09 8.3 9.15 1.33a1 1 0 0 1 .56 1.7l-6.63 6.46 1.57 9.11a1 1 0 0 1-1.45 1.06L16 25.9l-8.19 4.3a1 1 0 0 1-1.45-1.06l1.57-9.11-6.63-6.46a1 1 0 0 1 .56-1.7L11 10.54z" stroke="#008f79" stroke-width="2"></path></svg>
                                            </div>
                                        </div>
                                    (1 review)
                                </p>
                            </div>
                        </div>
                        <a href="" class="status detail text-white font-bold text-lg hover:border-indigo-300 active:border-2 border-rose-600">
                            <div class="bg-[#c5c5c6] active:border-2 text-center py-2 rounded-lg">
                                <span>Sold</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- product detail end -->
            
            <!-- What others also search for in here -->
            <div class="list-tags px-4 lg:px-0">
                <div class="heading text-2xl lg:text-3xl mt-10">What others also search for</div>
                <div class="tag-items mt-4">
                    @foreach($showItemSearchFor as $itemSearch)
                        <a href="" class="tag-item text-[#57585a] m-2 hover:text-[#57585a]">
                            <div class="bg-gray-200 hover:bg-gray-400 inline-block rounded-full px-4 py-2 mt-2">
                                <span>{{$itemSearch}}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <!-- What others also search for end -->

            <!-- Similar listings in here -->
            <div class="listings px-4 lg:px-0">
                <div class="heading text-2xl lg:text-3xl mt-14">Similar listings</div>
                <div class="lg:grid lg:gap-2 lg:grid-cols-4 sm:grid sm:gap-2 sm:grid-cols-2 m-auto">
                    @foreach($showSimilarProduct as $proSimilar)
                        <div class="p-3 text-[#2c2c2d] hover:shadow-2xl rounded-2xl">
                            <div class="w-full flex">
                                <div class="avatar-icon w-10 h-10">
                                    <img class="rounded-3xl" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                                </div>
                                <div class="px-2 py-0">
                                    <p class="username mb-0">Myname</p>
                                    <span class="time text-sm text-[#57585a]">4 day ago</span>
                                </div>
                            </div>
                            <div class="w-full mt-2">
                                <div class="">
                                    <img class="product-img h-[300px] w-full object-fill rounded-md" src="{{$proSimilar}}" alt="">
                                </div>
                                <p class="product-name mb-0 mt-2 text-base">Foldable Bicycle</p>
                                <p class="product-price mb-0 text-lg font-semibold">S$190</p>
                                <span class="status-product text-[#57585a]">Like new</span>
                                <div class="flex mt-3">
                                    <a href=""><svg class="D_Te " height="20" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17 1c3.852 0 7 3.148 7 7 0 3.858-2.067 7.513-5.44 10.724C16.158 21.01 13.04 23 12 23s-4.158-1.99-6.56-4.276C2.067 15.514 0 11.858 0 8c0-3.852 3.148-7 7-7 1.917 0 3.688.79 5 2.13C13.312 1.79 15.083 1 17 1zm0 2c-1.677 0-3.205.854-4.176 2.267a1 1 0 0 1-1.648 0C10.205 3.854 8.676 3 7 3 4.252 3 2 5.252 2 8c0 3.215 1.804 6.406 4.82 9.276C8.86 19.218 11.652 21 12 21c.347 0 3.14-1.782 5.18-3.724C20.197 14.406 22 11.215 22 8c0-2.748-2.252-5-5-5z" fill="#57585a"></path></svg></a>
                                    <span class="ml-2 text-[#57585a]">8</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
               
            </div>
            <!-- Similar listings end -->
        </div>
    </section>
     <!-- start show images detail -->
     <div id="modal" class="bg-modal z-100 w-full h-screen box-img-modal fixed bg-white hidden">
        <div class="modal-content flex relative">
            <div class="close right-0 mr-12 mt-12 p-2 bg-black rounded-full absolute cursor-pointer hover:shadow-[rgba(0, 0, 0, 0.3)]"><svg class="bg-black" fill="#ffffff" fill-rule="nonzero" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><title>Close Icon</title><path d="M13.414 12l5.293 5.293a1 1 0 0 1-1.414 1.414L12 13.414l-5.293 5.293a1 1 0 1 1-1.414-1.414L10.586 12 5.293 6.707a1 1 0 0 1 1.414-1.414L12 10.586l5.293-5.293a1 1 0 0 1 1.414 1.414L13.414 12z"></path></svg></div>
            <div class="box-img w-10/12 block m-auto">
                <div class="main">
                    <div class="slider slider-for w-12/12 m-auto mt-4 lg:w-10/12 sm:w-full">
                        @foreach($showSlideProduct as $slidePro)
                            <div class=""><img class="w-8/12 m-auto" src="{{$slidePro}}" alt=""></div>
                        @endforeach
                    </div>
                    <div class="slider slider-nav w-6/12 m-auto lg:6/10 sm:w-full">
                        @foreach($showSlideProduct as $slidePro)
                            <div class="p-2 w-64 block"><img class="w-64" src="{{$slidePro}}" alt=""></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!-- end show images detail -->
@endsection