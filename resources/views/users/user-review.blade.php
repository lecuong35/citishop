@extends('Layouts.user-layout')

@section('content')
    <div class="wrapper-review w-full
    border-[#f0f0f1] border-solid border-[1px]
    rounded-lg shadow-lg mobile:shadow-none mobile:border-none">
        <div class="w-full px-[24px] py-[8px] h-[71px]
        border-solid border-[#f0f0f1] border-b-[1px]
        flex justify-between items-center relative
        mobile:hidden">
            <p class="text-[24px] leading-[32px] font-bold">
                Reviews
            </p>

            <button class="px-[16px] py-[16px] h-[46px]
            border-[1px] border-[#f0f0f1] border-solid
            rounded-lg flex items-center
            focus:ring-4 focus:ring-[#cce9e4] focus:border-[#008f79]
            " onclick="clickToggle('review-toggle')">
                <div class="flex items-center justify-center relative gap-[4px]">
                    <p class="text-[16px] leading-[24px] text-[#2c2c2d]">
                        Newest
                    </p>
                    <i class="fa fa-chevron-down" style="color: #2c2c2d"></i>

                        <p class="text-[14px] leading-[18px] text-[#2c2c2d]
                        px-[4px] absolute top-[-20px]  bg-white z-[10]">
                            Sort by
                        </p>

                </div>
            </button>
            <div style="display: none" id="review-toggle"
                 class="absolute top-[72px] right-[-30px]
                 flex flex-col shadow-lg bg-white">
                <p class="text-[16px] leading-[24px] py-[12px] pl-[16px] pr-[48px]
                hover:bg-[#cce9e4] hover:cursor-pointer">
                    Newest
                </p>
                <p class="text-[16px] leading-[24px] py-[12px] pl-[16px] pr-[48px]
                hover:bg-[#cce9e4] hover:cursor-pointer">Oldest</p>
                <p class="text-[16px] leading-[24px] py-[12px] pl-[16px] pr-[48px]
                hover:bg-[#cce9e4] hover:cursor-pointer">Highest Rating</p>
                <p class="text-[16px] leading-[24px] py-[12px] pl-[16px] pr-[48px]
                hover:bg-[#cce9e4] hover:cursor-pointer">Lowest Rating</p>
            </div>
        </div>
        <div>
            @include('components.user.review-none', ['name' => 'LeCuong35'])
        </div>
    </div>
@endsection
