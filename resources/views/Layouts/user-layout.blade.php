<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @include('components.header');

    <title>User</title>
</head>
<body class="font-roboto">
{{-- navbar --}}
@include('components.navbar')

<div class="wrapper xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full
    mx-auto mobile:mx-0">
{{--    background Image  --}}
    <div class="bgImg w-full h-[200px]
    mobile:w-full mobile:h-[104px]"></div>

{{--    user infno  --}}
    <div class="info flex mobile:w-full
    mobile:flex-col">
{{--        info box     --}}
        <div class="min-w-[324px] w-[324px] pr-[24px] mobile:w-full mobile:px-[16px]">
            <div class="mobile:flex items-center justify-between">
                <img src="https://media.karousell.com/media/photos/profiles/2022/11/11/cuongle35280503_1668137390_8784d913.jpg"
                style="border-radius: 50%"
                class="w-[156px] h-[156px] p-[4px]
                    bg-white mt-[-50px]
                    mobile:h-[92px] mobile:w-[92px]">
                <a href="/settings" class=" mobile:block hidden">
                    <i class="fas fa-cog fa-xl"></i>
                </a>
            </div>
            <h2 class="text-[30px] leading-[38px] text-[#2c2c2d]
            mobile:text-[18px] leading-[26px] font-bold">
                Le Cuong
            </h2>
            <p class="text-[16px] leading-[24px] text-[#2c2c2d]
            mobile:hidden">
                @cuonglemanh352001
            </p>

            <div class="flex items-center px-[12px] py-[8px] mobile:py-[4px] mobile:px-0">
                <div class="mobile:hidden">
                    <i class="fa fa-star mr-[8px]" style="color: #57585a"></i>
                </div>
                <p class="text-[16px] leading-[24px] text-[#57585a]
                pl-[4px] pr-[8px] pb-[2px]
                mobile:text-[14px] mobile:px-0">
                    No rating yet
                </p>
                <div class="mobile:hidden">
                    <i class="fa fa-chevron-right" style="color: #57585a"></i>
                </div>
                <p class="text-[14px] leading-[22px] text-[#57585a] ml-[8px]">
                    Joined 8D
                </p>
            </div>
            <p class="text-[14px] leading-[22px] text-[#57585a] mobile:hidden">
                Singapore
                <span>
                    .
                </span>
                Joined 4D
            </p>

            <div class="flex items-center mt-[8px] gap-[3px] mobile:mt-[4px]">
                <p class="text-[14px] leading-[22px] text-[#57585a]">
                    Verified
                </p>
                <a href="https://facebook.com">
                   <img
                       src="https://mweb-cdn.karousell.com/build/verification-facebook-3Y1Xs4Ri26.svg"
                   class="w-[16px] h-[22px]">
                </a>
                <a href="https://gmail.google.com">
                    <img src="https://mweb-cdn.karousell.com/build/verification-email-QvlRIiMUCh.svg"
                         class="w-[16px] h-[22px]">
                </a>
                <div class="hidden mobile:flex">
                    <i class="fal fa-map-marker-alt"></i>
                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                        Singapore
                    </p>
                </div>
            </div>

            <div class="flex items-center mt-[24px] mobile:hidden">
                <a href="https://facebook.com" class="text-[14px] leading-[22px] text-[#57585a] mr-[24px]">
                    Followers 0
                </a>
                <a href="https://facebook.com" class="text-[14px] leading-[22px] text-[#57585a]">
                    Following 0
                </a>
            </div>


            <div class="mt-[36px] p-[16px] flex flex-wrap shadow-lg mobile:hidden">
                <div class="flex-col items-start w-full mb-[12px]">
                    <div class="flex items-center">
                        <img
                            class="w-[32px] h-[32px] mr-[8px]"
                            src="https://mweb-cdn.karousell.com/build/promote-inactive-3mUIVhwQJV.svg">
                        <p class="text-[20px] leading-[28px]">
                            0
                        </p>
                    </div>
                    <p class="text-[14px] leading-[22px] text-[#57585a]">
                        people viewed your profile today
                    </p>
                    <p></p>
                </div>
                <div>
                    <button class="px-[16px] py-[8px]
                    bg-[#008f79] rounded-lg
                    text-white text-[14px] font-bold
                    hover:bg-[#026958]"
                    data-bs-toggle="modal" data-bs-target="#userStatus">
                        View Status
                    </button>
                    @include('components.user.modal-status')
                </div>
            </div>

            <div class="hidden mobile:flex items-center justify-between my-[32px] mx-[8px]">
                <a href="/balance">
                    <img src="https://mweb-cdn.karousell.com/build/wallet-1KfoIpumr9.svg"
                    class="w-[64px] h-[64px] p-[16px] bg-[#f0f1f1] rounded-md">
                    <p class="text-[14px] leading-[22px] text-[#2c2c2d] mt-[12px] text-center">
                        Balance
                    </p>
                </a>

                <a href="/purchase-progress">
                    <img src="https://mweb-cdn.karousell.com/build/purchases-2FW7yf20ab.svg"
                         class="w-[64px] h-[64px] p-[16px] bg-[#f0f1f1] rounded-md">
                    <p class="text-[14px] leading-[22px] text-[#2c2c2d] mt-[12px] text-center">
                        Purchase
                    </p>
                </a>

                <a href="/sales-start">
                    <img src="https://mweb-cdn.karousell.com/build/sales-1nnCNNunhg.svg"
                         class="w-[64px] h-[64px] p-[16px] bg-[#f0f1f1] rounded-md">
                    <p class="text-[14px] leading-[22px] text-[#2c2c2d] mt-[12px] text-center">
                        Sales
                    </p>
                </a>

                <a href="/coin">
                    <img src="https://mweb-cdn.karousell.com/build/coin-2fj_L7WVuh.svg"
                         class="w-[64px] h-[64px] p-[16px] bg-[#f0f1f1] rounded-md">
                    <p class="text-[14px] leading-[22px] text-[#2c2c2d] mt-[12px] text-center">
                        Get Coins
                    </p>
                </a>
            </div>
        </div>

        <div class="w-[calc(100%-324px)] min-w-[668px] mobile:w-full mobile:min-w-[350px]">
            {{--        navigate bar   --}}
            <div class="flex justify-between items-center w-full
            border-b-[1px] border-solid border-[#f0f0f1]
            mobile: border-t-[1px]">
                <div class="flex mobile:w-full">
                    <a href="/info" class="mobile:w-[33%] text-center">
                        @include('components.user.navigate-button', ['content' => 'Listings'])
                    </a>
                    <a href="/review" class="mobile:w-[33%] text-center">
                        @include('components.user.navigate-button', ['content' => 'Review'])
                    </a>
                    <a href="/coin" class="mobile:hidden">
                        @include('components.user.navigate-button', ['content' => 'Coins'])
                    </a>
                    <a href="/balance" class="mobile:hidden">
                        @include('components.user.navigate-button', ['content' => 'Balance'])
                    </a>
                    <a href="/caroubiz" class="mobile:hidden">
                        @include('components.user.navigate-button', ['content' => 'CarouBiz'])
                    </a>

                    <a href="/about" class="hidden mobile:block mobile:w-[33%] text-center">
                        @include('components.user.navigate-button', ['content' => 'About'])
                    </a>
                </div>

                <a href="/edit-profile" class="mobile:hidden">
                    <button class="px-[16px] py-[8px] rounded-lg
                text-[14px] leading-[18px] font-medium
                border-solid border-[1px] border-[#c5c5c6]
                focus:ring-[#cce9e4] focus:ring-4 focus:border-[#008f79]
                hover:bg-[#f0f0f1]">
                        Edit Profile
                    </button>
                </a>
            </div>

    {{--        content    --}}
            <div class="w-full pt-[24px] mobile:pt-0">
                @yield('content')
            </div>
        </div>
    </div>

</div>

<div class="mobile:hidden">
    @include('components.footer')
</div>

<style>
    .bgImg {
        background-image: url("https://mweb-cdn.karousell.com/build/profile-bg-1hcJPlrNW6.jpg");
        background-position: center;
        background-repeat: repeat;
        background-size: 50%;
    }
</style>
<script src="./js/utilities-functions.js"></script>
</body>
</html>
