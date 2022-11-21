@extends('Layouts.user-layout')

@section('content')
    <div class="w-full shadow-lg
    mobile:fixed mobile:top-0 mobile:left-0 mobile:bg-white
    mobile:w-full mobile:h-full mobile:z-[11]">
        <div class="p-[24px] text-[24px] leading-[32px] font-bold text-[#2c2c2d]
        mobile:text-[16px] mobile:leading-[24px] mobile:px-[16px] mobile:py-0
        mobile:h-[64px] mobile:items-center
        mobile:flex mobile:shadow-md">
            <div class="w-[22px] h-[16px] hidden mobile:block mr-[80px]">
                <a href="/info">
                    <i class="fas fa-arrow-left fa-lg" style="opacity: 0.5"></i>
                </a>
            </div>
            Carousell Coins
        </div>
       <div class="w-full px-[24px] mobile:px-[16px]">
           <p class="text-[22px] leading-[30px] py-[12px] text-[#2c2c2d] font-bold
           hidden mobile:block">
               Balance
           </p>
           <div class="p-[16px] border-solid border-[#f0f0f1] border-[1px] rounded-lg shadow-lg
        flex items-center justify-between mobile:h-[84px]">
               <div class="flex mobile:items-center mobile:justify-center mobile:h-[72px]">
                   <img src="https://mweb-cdn.karousell.com/build/coin-2fj_L7WVuh.svg"
                        class="w-[56px] h-[56px] mr-[16px]
                        mobile:w-[24px] mobile:h-[24px]">
                   <div class="h-[56px] mobile:flex mobile:items-center">
                       <p class="text-[30px] leading-[38px] font-bold
                       mobile:text-[22px] mobile:leading-[30px]">0</p>
                       <p class="text-[14px] leading-[22px] mobile:hidden">
                           Coins
                       </p>
                   </div>
               </div>

               <div>
                   <button class="px-[16px] py-[8px] text-white
                text-[16px] leading-[24px] font-medium
                bg-[#ff2636] rounded-lg" data-bs-toggle="modal" data-bs-target="#coinModal">
                       Get Coins
                   </button>
                   @include('components.user.modal-coin')
               </div>
           </div>
           <div class="mt-[12px] flex items-center justify-between mb-[30px] mobile:hidden">
               <p class="text-[14px] leading-[22px] text-[#57585a]">
                   Use Coins for Bump and Listing Fees
               </p>
               <a href="https://facebook.com"
                  class="text-[14px] leading-[22px] text-[#57585a]
               hover:text-[#008f79] hover:underline">
                   Read more about Coins
               </a>
           </div>

           <div class="w-full mobile:mt-[12px]">
               <p class="py-[12px] text-[20px] font-bold leading-[28px]">
                   Coin transaction history
               </p>
               <div class="p-[56px] flex flex-col items-center justify-center">
                   <img class="w-[184px] h-[184px] mb-[16px]"
                        src="https://mweb-cdn.karousell.com/build/no-coin-transaction-2QTRqJClkE.svg">
                   <p class="py-[12px] text-[20px] font-bold leading-[28px] text-[#57585a]
                   mobile:text-[18px] mobile:leading-[26px] mobile:font-normal">
                       There is no transaction history
                   </p>
               </div>
           </div>
       </div>
    </div>
@endsection
