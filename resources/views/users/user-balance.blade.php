@extends('Layouts.user-layout')

@section('content')
    <div class="w-full pt-[16px] px-[24px] mt-[24px]
    border-solid border-[#f0f0f1] border-[1px]
    shadow-lg rounded-lg
    mobile:px-0
    mobile:fixed mobile:top-0 mobile:left-0 mobile:mt-0 mobile:pt-0
    mobile:w-full mobile:h-full mobile:bg-white mobile:z-[12]">
        <div class="pb-[32px] flex justify-between items-start mobile:w-full">
            <div class="flex justify-start items-center
            mobile:h-[64px] mobile:px-[16px] mobile:items-center
             mobile:w-full mobile:justify-between mobile:shadow-lg">
                <div class="hidden mobile:block">
                    <a href="/info">
                        <i class="fas fa-arrow-left fa-xl"></i>
                    </a>
                </div>
                <p class="text-[24px] leading-[32px] font-bold text-[#2c2c2d]
                mobile:text-[16px] mobile:leading-[24px]">
                    My Balance
                </p>
                <div class="hidden mobile:block">
                    <i class="fas fa-cog fa-xl"></i>
                </div>
                <img src="https://mweb-cdn.karousell.com/build/info-icon-green-3EmPT5-2px.svg"
                class="w-[16px] h-[16px] ml-[8px] mobile:hidden">

            </div>
            <a href="https://localhost:8080"
            class="text-[16px] leading-[32px] text-[#008f79] font-medium mobile:hidden">
                View withdrawal details
            </a>
        </div>

        <div class="flex h-[104px] mobile:flex-col">
            <div class="w-[70%] mobile:w-full
            flex items-center justify-between mobile:flex-col
            py-[24px] px-[24px] pb-[20px] mobile:py-0 mobile:px-[16px]
            border-solid border-[#f0f0f1] border-[1px] mobile:border-none
            rounded-lg shadow-lg mobile:shadow-none">
                <div class="flex gap-[16px] w-[480px] mobile:w-full
                mobile:flex-col mobile:justify-center mobile:items-center">
                    <img src="https://mweb-cdn.karousell.com/build/wallet-1KfoIpumr9.svg"
                    class="w-[48px] h-[60px] mobile:hidden">
                    <div class="mobile:w-full mobile:text-center">
                        <p class="text-[14px] leading-[22px] text-[#57585a]">
                            Available Balance
                        </p>
                        <p class="text-[30px] leading-[38px] text-[#2c2c2d] font-bold">
                            $0.00
                        </p>
                    </div>
                </div>
                <button class="bg-[#c5c5c6] px-[16px] py-[8px]
                m-[4px] h-[40px] mobile:w-full mobile:mb-[16px]
                text-[16px] leading-[22px] text-white font-medium
                rounded-lg">
                    Withdraw
                </button>
                <p class="text-[12px] leading-[20px] text-[#6d6e71]
                hidden mobile:block mobile:mb-[32px]">
                    If your available Balance exceeds S$1000, it’ll be transferred to your bank account automatically
                </p>
            </div>

            <button class="w-[30%] mobile:w-full mobile:px-[16px] mobile:py-0
            mobile:ml-0
            ml-[16px] pt-[24px] px-[24px] pb-[20px]
             border-solid border-[#f0f0f1] border-[1px] mobile:border-y-[1px]
            rounded-lg shadow-lg flex items-center justify-between mobile:shadow-none"
            data-bs-toggle="modal" data-bs-target="#pending-balance">
                <div class="mobile:w-full mobile:flex mobile:justify-between
                mobile:py-[12px]">
                    <p class="text-[14px] leading-[22px] text-[#57585a]
                    mobile:text-[16px] mobile:leading-[24px]">
                        Pending Balance
                    </p>
                    <p class="text-[30px] leading-[38px] text-[#2c2c2d] font-bold
                    mobile:mr-[8px] mobile:text-[16px] mobile:leading-[24px] mobile:font-normal">
                        $0.00
                    </p>
                </div>
                <div>
                    <i class="fa fa-chevron-right pr-[15px]" style="color: #57585a;"></i>
                </div>
            </button>
            @include('components.user.pending-balance')
        </div>

        <div class="mt-[16px] flex items-center justify-start mobile:mt-[200px] mobile:hidden">
            <img src="https://mweb-cdn.karousell.com/build/tip-35QF5oOuKi.svg"
            class="w-[16px] h-[16px] mr-[12px]">
            <p class="text-[12px] leading-[20px] text-[#6d6e71] mobile:hidden">
                If your available Balance exceeds S$1000, it’ll be transferred to your bank account automatically
            </p>
        </div>

        <div class="my-[48px] mobile:px-[16px] mobile:py-[32px] mobile:mt-[132px]">
            <p class="mb-[32px] text-[24px] leading-[32px] text-[#2c2c2d] font-bold
            mobile:text-[18px] mobile:leading-[26px] mobile:mb-[24px]">
                Transaction history
            </p>
            <div class="flex flex-col items-center justify-center">
                <img src="https://mweb-cdn.karousell.com/build/no-wallet-transaction-3bib3e4oh-.svg"
                class="w-[128px] h-[128px] mt-[48px] mb-[96px]
                mobile:mb-[16px] mobile:mt-0">
                <p class="text-[14px] leading-[22px] text-[#2c2c2d] mobile:text-center">
                    Start selling with Carousell Protection and get money in your Balance!
                </p>
            </div>
        </div>
    </div>
@endsection
