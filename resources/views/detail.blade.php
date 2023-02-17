@extends('Layouts.app')

@section('content')
    @php
        $showSlideProduct = Config::get('products.slide-product');
        $showSimilarProduct = Config::get('products.similar-product');
        $showItemSearchFor = Config::get('products.item-search-for');
    @endphp
    <section class="mt-10 m-auto">
        <div class="content w-full lg:w-10/12 m-auto">
            <div>
                <!-- start breadcrumb -->
            <ul class="breadcrumb-detail pt-4 hidden lg:flex my-[8px]">
                <li><a class="text-[#008f79] hover:text-[#008f79]" href="http://127.0.0.1:8000/home">Trang chủ</a></li>
                <svg class="mt-1 mx-1" fill="#c5c5c6" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M9.29 15.88L13.17 12 9.29 8.12c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0l4.59 4.59c.39.39.39 1.02 0 1.41L10.7 17.3c-.39.39-1.02.39-1.41 0-.38-.39-.39-1.03 0-1.42z"></path></svg>
                <li><a class="text-[#008f79] hover:text-[#008f79]" href="http://127.0.0.1:8000/home/{{$kind['id']}}">{{$kind['name']}}</a></li>
                <svg class="mt-1 mx-1" fill="#c5c5c6" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M9.29 15.88L13.17 12 9.29 8.12c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0l4.59 4.59c.39.39.39 1.02 0 1.41L10.7 17.3c-.39.39-1.02.39-1.41 0-.38-.39-.39-1.03 0-1.42z"></path></svg>
                <li><a class="text-[#008f79] hover:text-[#008f79]" href="http://127.0.0.1:8000/home/{{$kind['id']}}/{{$category['id']}}">{{$category['name']}}</a></li>
            </ul>
           

            <!-- slide-image start -->
            <div class="flex items-center justify-center w-full m-auto">
                <div class="w-full relative flex items-center justify-center">
                    <div class="w-full h-full mx-[10px]">
                        <div class="block m-auto" id="slider-img">
                            @foreach(json_decode($post['post_images']) as $image)
                            <div class="sm:mr-1">
                                <img src="{{$image}}" alt="" class="center w-full h-[452px] mobile:h-[150px]" />
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="arrow_prev absolute left-0 ml-20 mobile:ml-4 opacity-75">
                        @include('components.prev-slick')
                    </div>
                    <div class="arrow_next absolute right-0 mr-20 mobile:mr-4 opacity-75">
                        @include('components.next-slick')
                    </div>

                </div>
            </div>
           

            <!-- start breadcrumb-mobile-->
            <ul class="breadcrumb-detail pt-4 px-4 flex lg:hidden lg:px-0">
                <li><a class="text-[#008f79] hover:text-[#008f79]" href="http://127.0.0.1:8000/home">Trang chủ</a></li>
                <svg class="mt-1 mx-1" fill="#c5c5c6" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M9.29 15.88L13.17 12 9.29 8.12c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0l4.59 4.59c.39.39.39 1.02 0 1.41L10.7 17.3c-.39.39-1.02.39-1.41 0-.38-.39-.39-1.03 0-1.42z"></path></svg>
                <li><a class="text-[#008f79] hover:text-[#008f79]" href="http://127.0.0.1:8000/home/{{$kind['id']}}">{{$kind['name']}}</a></li>
                <svg class="mt-1 mx-1" fill="#c5c5c6" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M9.29 15.88L13.17 12 9.29 8.12c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0l4.59 4.59c.39.39.39 1.02 0 1.41L10.7 17.3c-.39.39-1.02.39-1.41 0-.38-.39-.39-1.03 0-1.42z"></path></svg>
                <li><a class="text-[#008f79] hover:text-[#008f79]" href="http://127.0.0.1:8000/home/{{$kind['id']}}/{{$category['id']}}">{{$category['name']}}</a></li>
            </ul>
            </div>
           

            <!-- product detail in here -->
            <div class="product-detail w-full px-4 flex lg:px-0 mobile:flex-col">
                <div class="lg:w-9/12">
                    <div>
                        <p id="title-detail" class="title text-2xl font-bold my-4 ">{{$post['post_title']}}</p>
                        <p id="price-detail"class="heading text-2xl lg:text-2xl mb-2">Giá sản phẩm: {{$post['product_price']}}k VNĐ</p>
                    </div>
                    <div class="mt-4">
                        <div class="w-full float-left">
                            <div class="dectiption">
                                <div>
                                    <div class="heading text-2xl lg:text-3xl">Mô tả sản phẩm</div>
                                    <div class="body">
                                        <div class="w-full content-attr flex text-[#57585a] mobile:flex mobile:flex-col">
                                                <div class="item w-3/12 mobile:inline-flex mobile:whitespace-nowrap mobile:items-center mobile:gap-[5px]">
                                                    <div class="item-label text-base">Được đăng: </div>
                                                    @if($day > 0)
                                                        <div class="value text-lg">{{$day}} ngày trước</div>
                                                    @else 
                                                        <div class="value text-lg">{{$hour}} giờ trước</div>
                                                    @endif
                                                </div>
                                                <div class="item w-3/12 mobile:inline-flex mobile:whitespace-nowrap mobile:items-center mobile:gap-[5px]">
                                                    <div class="item-label text-base">Loại:</div>
                                                    <div class="value text-lg">{{$kind['name']}}</div>
                                                </div>
                                        </div>
                                        <div class="content-detail mt-3 text-[#2c2c2d] text-lg mb-4">
                                            <p> Mô tả chi tiết sản phẩm: 
                                            {{$post['product_description']}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="block lg:flex text-[#57585a] mb:8 lg:mb-[20px]">
                                <div class="flex lg:hidden">
                                    <img alt="icon" class="h-5" src="https://sl3-cdn.karousell.com/components/dm/time_stamp.svg" title="">
                                    @if($day > 0) 
                                        <p class="text-base ml-3 lg:text-lg">{{$day}} ngày trước bởi <a href="" class="underline text-[#008f79]">{{$author['name']}}</a></p>
                                    @else 
                                        <p class="text-base ml-3 lg:text-lg">{{$time}} giờ trước bởi <a href="" class="underline text-[#008f79]">{{$author['name']}}</a></p>
                                    @endif
                                </div>
                                <div class="lg:hidden mb-2 flex">
                                    <svg class="w-5 h-5 lg:w-7 lg:h-7"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17 1c3.852 0 7 3.148 7 7 0 3.858-2.067 7.513-5.44 10.724C16.158 21.01 13.04 23 12 23s-4.158-1.99-6.56-4.276C2.067 15.514 0 11.858 0 8c0-3.852 3.148-7 7-7 1.917 0 3.688.79 5 2.13C13.312 1.79 15.083 1 17 1zm0 2c-1.677 0-3.205.854-4.176 2.267a1 1 0 0 1-1.648 0C10.205 3.854 8.676 3 7 3 4.252 3 2 5.252 2 8c0 3.215 1.804 6.406 4.82 9.276C8.86 19.218 11.652 21 12 21c.347 0 3.14-1.782 5.18-3.724C20.197 14.406 22 11.215 22 8c0-2.748-2.252-5-5-5z" fill="#57585a"></path></svg>
                                    <span class="ml-3">Likes</span>
                                </div>
                                <div class="flex">
                                    <img class="w-5 h-5 lg:w-7 lg:h-7" src="https://sl3-cdn.karousell.com/components/condition_v4_1.svg" alt="">
                                    <p class="text-base ml-3 lg:text-lg">Tình trạng sản phẩm: {{$product_status}}</p>
                                    <svg class="" fill="#57585a" fill-rule="nonzero" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12 24C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12-5.373 12-12 12zm0-2c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm1-6h1a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h1v-5h-1a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v6zM11.95 5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5z"></path></svg>
                                </div>
                                <div class="flex lg:px-44">
                                    <img class="w-5 h-5 lg:w-7 lg:h-7" src="https://sl3-cdn.karousell.com/components/icon_mailing_meetup.svg" alt="">
                                    <p class="text-base ml-3 lg:text-lg">Hãng: {{$brand['name']}}</p>
                                </div>
                                <div class="flex">
                                    <img class="w-5 h-5 lg:w-7 lg:h-7" src="https://sl3-cdn.karousell.com/components/location_v4_1.svg" alt="">
                                    <p class="text-base ml-3 lg:text-lg">Vị trí: Hà Nội</p>
                                </div>
                            </div>

                               
                                <div>
                                    <div class="heading text-2xl lg:text-3xl">Chi tiết người bán</div>
                                    <div class="w-full mt-10 lg:flex">
                                        <div class="user-info flex">
                                            <div class="avatar w-24 h-24">
                                                <img class="rounded-full" src="{{$author['avatar']}}" alt="">
                                            </div>
                                            <ul class="w-full ml-4 text-base text-[#57585a]">
                                                <li class="name text-xl font-semibold text-[#2c2c2d] lg:text-2xl">{{$author['name']}}</li>
                                                <li class="nickname py-2">@citishopseller</li>
                                                <li class="time-joined">
                                                    <img class="float-left mr-1 w-5 h-5" src="https://sl3-cdn.karousell.com/components/location_v4_1.svg" alt="">
                                                    Vị trí: Hà Nội
                                                </li>
                                                <li class="reponsive py-2">
                                                    <img alt="" class="float-left mr-1 w-5 h-5" src="https://mweb-cdn.karousell.com/build/response-rate-h-1v83pbBk4q.svg" title="">
                                                    Điện thoại: {{$author['phone']}}
                                                </li>
                                                <li>
                                                    <div class="">
                                                        <img class="float-left mr-1 w-5 h-5" alt="" class="D_gI D_gF D_bcn" src="https://mweb-cdn.karousell.com/build/verification-email-QvlRIiMUCh.svg" title="">
                                                        <p>Email: {{$author['email']}}</p>
                                                </li>
                                            </ul>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-3/12 lg:block mobile:w-[96%] mobile:fixed mobile:bottom-3 mobile:left-[10px]">
                    <div class="w-full p-4 shadow-2xl">
                        <div class="flex mobile:hidden">
                            <div class="avatar">
                                <img class="rounded-full w-11 h-11" src="{{$author['avatar']}}" alt="">
                            </div>
                            <div class="info-author ml-2">
                                <p class="name mb-1">{{$author['name']}}</p>
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
                        <div class="status detail text-white font-bold text-lg hover:border-indigo-300 active:border-2 border-rose-600">
                            <div class="bg-[#c5c5c6] active:border-2 text-center py-2 rounded-lg hover:bg-[#008f79] transition-all hover:cursor-pointer mobile:bg-[#008f79]"
                            data-bs-toggle="modal" data-bs-target="#bill-form">
                                <span>Mua</span>
                            </div>
                            @include('components.user.bill-form', ['post_id' => '{{$post->id}}', 'post_id' => '{{$post->seller_id}}'])
                        </div>
                    </div>
                </div>
            </div>
           

            <!-- Similar listings in here -->
           @if(!empty($posts)) 
            <div class="listings px-4 lg:px-0">
                    <div class="heading text-2xl lg:text-3xl mt-14">Các sản phẩm tương tự</div>
                    <div class="lg:grid lg:gap-2 lg:grid-cols-4 sm:grid sm:gap-2 sm:grid-cols-2 m-auto">
                        @foreach($posts as $key => $post)
                            @php
                                $images = json_decode($post['post_images'])
                            @endphp
                            @include('components.product', [
                                'imgSrc' => $images[0],
                                'user_name' => $authors[$key]['name'],
                                'time' => Carbon\Carbon::now()->diffInDays($post['updated_at']),
                                'post_title' => $post['post_title'],
                                'post_id' => $post['id'],
                                'product_price' => $post['product_price'],
                                'product_status' => $product_status[$key],
                                'count_buyer' => $post['order'],
                                'avatar' => $authors[$key]['avatar']
                                ])
                        @endforeach
                    </div>

                </div>
           @endif
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
    <script src='http://127.0.0.1:8000/js/detail.js' type="text/javascript"></script>
    <style>
        #sellButton {
            display: none;
        }
    </style>
@endsection
