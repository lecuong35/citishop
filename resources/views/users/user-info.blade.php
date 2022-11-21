@extends('Layouts.user-layout')

@section('content')
    <div class="nav-wrapper pb-[16px] shadow-lg mobile:w-full mobile:shadow-none">
        <div class="listings-header flex items-center justify-between
        px-[32px] pt-[24px] pb-[8px] mobile:hidden">
            <p class="text-[24px] leading-[32px] font-bold text-[#2c2c2d]">
                Listings
            </p>
            <div class="flex items-center justify-end">
                <a href="/login"
                    class="text-[16px] leading-[24px] mr-[16px]
                    text-[#008f79] underline">
                    Manage quota
                </a>
                <div class="relative w-[233px]">
                    <input type="text" placeholder="Search listing..."
                    class="w-[233px] pl-[12px] pr-[20px] h-[36px] rounded-lg
                    focus:border-[#008f79] focus:ring-4 focus:ring-[#cce9e4]
                    outline-none border-[#c5c5c6] border-[1px] border-solid">
                    <div class="absolute top-[5px] right-[10px]">
                        <i class="fa fa-search" style="color: #c5c5c6"></i>
                    </div>
                </div>
                <div class="ml-[8px] relative">
                    <button class="px-[16px] py-[8px]
                    flex items-center justify-center rounded-lg
                    border-solid border-[1px] border-[#c5c5c6]
                    text-[14px] leading-[18px] font-medium" onclick="clickToggle('listing-filter')">
                        Filters
                        <img class="w-[12px] h-[12px] ml-[8px]"
                            src="https://mweb-cdn.karousell.com/build/filter-1QBSVfLmH5.svg">
                    </button>
                    <div class="filter-toggle absolute top-[52px] right-[-20px]" id="listing-filter"
                    style="display: none">
                        @include('components.user.listings-filter')
                    </div>
                </div>
            </div>
        </div>

        <div class="listings-body mt-[16px] mx-[20px] pb-[16px] flex mobile:w-full mobile:mx-0">
            <div class="mx-[4px] mb-[16px] p-[8px]
            h-[393px] w-[219px] flex
            flex-col items-center justify-between">
                <img class="w-[183px] h-[183px]"
                    src="https://mweb-cdn.karousell.com/build/mobile-verify-Sk9lfdih8-.svg">
                <p class="text-[14px] leading-[18px] font-medium text-[#991720]">
                    Buyers can’t see some of your listings
                </p>
                <p class="my-[8px] text-[14px] leading-[18px] text-[#2c2c2d]">
                    Verify your mobile number to make listings visible
                </p>
                <button class="px-[16px] py-[8px] w-full
                bg-[#ff2636] rounded-lg
                text-[14px] leading-[18px] font-medium text-white
                 mobile:whitespace-nowrap">
                    Verify mobile number
                </button>
            </div>

            @include('components.user.product-sell')
        </div>

    </div>
@endsection
