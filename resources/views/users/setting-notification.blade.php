@extends('Layouts.setting-info')

@section('content')
    <div class=" w-[720px] min-w-[615px] py-[32px] px-[40px] ml-[24px] mobile:m-0 mobile:p-0
    border-[#f0f0f1] border-solid border-[1px] rounded-lg shadow-lg
    mobile:w-full mobile:h-full mobile:fixed
    mobile:top-0 mobile:left-0 bg-white mobile:overflow-y-auto
    mobile:z-[11] mobile:min-w-[350px]">
        <div class="mobile:flex mobile:items-center mobile:justify-center hidden
        mobile:h-[64px] mobile:shadow-md mobile:fixed mobile:w-full mobile:bg-white">
            <div class="absolute top-[20px] left-[20px] hidden mobile:block">
                <a href="/settings">
                    <i class="fas fa-arrow-left fa-lg" style="opacity: 0.5"></i>
                </a>
            </div>
            <p class="text-[38px] leading-[46px] font-bold text-[#2c2c2d]
        mb-[44px] mobile:text-[16px] mobile:leading-[24px] mobile:m-0">
                Notifications
            </p>
        </div>

        <div class="p-[32px] mb-[24px]
        mobile:px-0 mobile:py-0 mobile:mb-0
        border-solid border-[#c5c5c6] border-[1px]
        rounded-lg shadow-md mobile:shadow-none mobile:border-none
        mobile:mt-[65px] mobile:rounded-none">

               <div class="mobile:flex mobile:items-center mobile:justify-between
                mobile:px-[24px] mobile:py-[12px]" onclick="clickToggleFlexCol('setting-transactions')">
                  <div class="mobile:flex mobile:items-center mobile:justify-center">
                      <img src="https://mweb-cdn.karousell.com/build/notification-center-transactions-1d-RS4P9Yf.svg"
                      class="hidden mobile:block h-[24px] w-[24px] mr-[16px]">
                     <div class="mobile:flex mobile:flex-col">
                         <p class="text-[24px] leading-[32px] text-[#2c2c2d] font-bold
                        mobile:text-[16px] mobile:leading-[24px]">
                             Transactions
                         </p>
                         <p class="hidden mobile:block text-[14px] leadidng-[22px] text-[#57585a]">
                             On
                         </p>
                     </div>
                  </div>
                   <div class="hidden mobile:block">
                       <i class="fa fa-chevron-down fa-lg" style="opacity: 0.5"></i>
                   </div>
               </div>
                <div class=" mobile:bg-[#f8f8f9] mobile:pt-[16px] mobile:hidden
                mobile:px-[24px] mobile:pb-[32px]" id="setting-transactions">
                    <p class="text-[14px] leading-[22px] text-[#6d6e71]">
                        These are important updates - no spams, we promise.
                        You may be notified via SMS, Push Notification or email.
                    </p>

                    <hr class="my-[24px]">

                    <div class="mt-[32px]">
                        <p class="text-[16px] leading-[24px] text-[#2c2c2d] font-bold">
                            More notification settings
                        </p>
                        <div>
                            @include('components.user.input-checkbox', ['id' => 'more', 'content' => 'Likes on  my listings', 'check' => 'checked'])
                        </div>
                    </div>

                    <div class="mt-[32px]">
                        <p class="text-[16px] leading-[24px] text-[#2c2c2d] font-bold">
                            Chanels
                        </p>
                        <div>
                            @include('components.user.input-checkbox', ['id' => 'email', 'content' => 'Email', 'check' => 'checked'])
                        </div>

                        <div>
                            @include('components.user.input-checkbox', ['id' => 'mobile', 'content' => 'Mobile app push notification', 'check' => 'checked'])
                        </div>
                    </div>
                </div>
        </div>

        <div class="p-[32px] mb-[24px]
        mobile:px-0 mobile:py-0 mobile:mb-0
        border-solid border-[#c5c5c6] border-[1px]
        rounded-lg shadow-md mobile:shadow-none mobile:border-none
        mobile:rounded-none">
            <div class="mobile:flex mobile:items-center mobile:justify-between
                mobile:px-[24px] mobile:py-[12px]" onclick="clickToggleFlexCol('setting-listing')">
                <div class="mobile:flex mobile:items-center mobile:justify-center">
                    <img src="https://mweb-cdn.karousell.com/build/notification-center-listingInterested-1AkMtIKSFq.svg"
                         class="hidden mobile:block h-[24px] w-[24px] mr-[16px]">
                    <div class="mobile:flex mobile:flex-col">
                        <p class="text-[24px] leading-[32px] text-[#2c2c2d] font-bold
                        mobile:text-[16px] mobile:leading-[24px]">
                            Listing you're interested in
                        </p>
                        <p class="hidden mobile:block text-[14px] leadidng-[22px] text-[#57585a]">
                            On
                        </p>
                    </div>
                </div>
                <div class="hidden mobile:block">
                    <i class="fa fa-chevron-down fa-lg" style="opacity: 0.5"></i>
                </div>
            </div>
            <div class=" mobile:bg-[#f8f8f9] mobile:pt-[16px] mobile:hidden
                mobile:px-[24px] mobile:pb-[32px]" id="setting-listing">
                <div>
                    @include('components.user.input-checkbox', ['id' => 'all1', 'content' => 'All notification', 'check' => 'checked'])
                    <p class="ml-[28px] text-[14px] leading-[22px] text-[#6d6e71]"> Price drops listing you liked and new saved search results </p>
                </div>
                <hr class="my-[24px]">

                <div class="mt-[32px]">
                    <p class="text-[16px] leading-[24px] text-[#2c2c2d] font-bold">
                        Chanels
                    </p>
                    <div>
                        @include('components.user.input-checkbox', ['id' => 'email1', 'content' => 'Email', 'check' => 'checked'])
                    </div>

                    <div>
                        @include('components.user.input-checkbox', ['id' => 'mobile1', 'content' => 'Mobile app push notification', 'check' => 'checked'])
                    </div>
                </div>
            </div>
        </div>

        <div class="p-[32px] mb-[24px]
        mobile:px-0 mobile:py-0 mobile:mb-0
        border-solid border-[#c5c5c6] border-[1px]
        rounded-lg shadow-md mobile:shadow-none mobile:border-none
        mobile:rounded-none">
            <div class="mobile:flex mobile:items-center mobile:justify-between
                mobile:px-[24px] mobile:py-[12px]" onclick="clickToggleFlexCol('setting-community')">
                <div class="mobile:flex mobile:items-center mobile:justify-center">
                    <img src="https://mweb-cdn.karousell.com/build/notification-center-fromCommunity-3aNqbtIToL.svg"
                         class="hidden mobile:block h-[24px] w-[24px] mr-[16px]">
                    <div class="mobile:flex mobile:flex-col">
                        <p class="text-[24px] leading-[32px] text-[#2c2c2d] font-bold
                        mobile:text-[16px] mobile:leading-[24px]">
                            From community
                        </p>
                        <p class="hidden mobile:block text-[14px] leadidng-[22px] text-[#57585a]">
                            On
                        </p>
                    </div>
                </div>
                <div class="hidden mobile:block">
                    <i class="fa fa-chevron-down fa-lg" style="opacity: 0.5"></i>
                </div>
            </div>
            <div class=" mobile:bg-[#f8f8f9] mobile:pt-[16px] mobile:hidden
                mobile:px-[24px] mobile:pb-[32px]" id="setting-community">
                <div>
                    @include('components.user.input-checkbox', ['id' => 'all2', 'content' => 'All notification', 'check' => 'checked'])
                    <p class="ml-[28px] text-[14px] leading-[22px] text-[#6d6e71]"> Price drops listing you liked and new saved search results </p>
                </div>

                <hr class="my-[24px]">

                <div class="mt-[32px]">
                    <p class="text-[16px] leading-[24px] text-[#2c2c2d] font-bold">
                        More notification settings
                    </p>
                    <div>
                        @include('components.user.input-checkbox', ['id' => 'newPost', 'content' => 'New posts and listings in my Groups', 'check' => 'checked'])
                    </div>
                    <div>
                        @include('components.user.input-checkbox', ['id' => 'rec', 'content' => 'Recommended Group', 'check' => 'checked'])
                    </div>

                    <div class="mt-[32px]">
                        <p class="text-[16px] leading-[24px] text-[#2c2c2d] font-bold">
                            Chanels
                        </p>
                        <div>
                            @include('components.user.input-checkbox', ['id' => 'email3', 'content' => 'Email', 'check' => 'checked'])
                        </div>

                        <div>
                            @include('components.user.input-checkbox', ['id' => 'mobile3', 'content' => 'Mobile app push notification', 'check' => 'checked'])
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-[32px] mb-[24px]
        mobile:px-0 mobile:py-0 mobile:mb-0
        border-solid border-[#c5c5c6] border-[1px]
        rounded-lg shadow-md mobile:shadow-none mobile:border-none
        mobile:rounded-none">
            <div class="mobile:flex mobile:items-center mobile:justify-between
                mobile:px-[24px] mobile:py-[12px]" onclick="clickToggleFlexCol('setting-carousell')">
                <div class="mobile:flex mobile:items-center mobile:justify-center">
                    <img src="https://mweb-cdn.karousell.com/build/notification-center-fromCarousell-rMy0dTvKz2.svg"
                         class="hidden mobile:block h-[24px] w-[24px] mr-[16px]">
                    <div class="mobile:flex mobile:flex-col">
                        <p class="text-[24px] leading-[32px] text-[#2c2c2d] font-bold
                        mobile:text-[16px] mobile:leading-[24px]">
                            From Carousell
                        </p>
                        <p class="hidden mobile:block text-[14px] leadidng-[22px] text-[#57585a]">
                            On
                        </p>
                    </div>
                </div>
                <div class="hidden mobile:block">
                    <i class="fa fa-chevron-down fa-lg" style="opacity: 0.5"></i>
                </div>
            </div>
            <div class=" mobile:bg-[#f8f8f9] mobile:pt-[16px] mobile:hidden
                mobile:px-[24px] mobile:pb-[32px]" id="setting-carousell">
                <div>
                    @include('components.user.input-checkbox', ['id' => 'all4', 'content' => 'All notification', 'check' => 'checked'])
                    <p class="ml-[28px] text-[14px] leading-[22px] text-[#6d6e71]"> Price drops listing you liked and new saved search results </p>
                </div>

                <hr class="my-[24px]">

                <div class="mt-[32px]">
                    <p class="text-[16px] leading-[24px] text-[#2c2c2d] font-bold">
                        More notification settings
                    </p>
                    <div>
                        @include('components.user.input-checkbox', ['id' => 'newPost2', 'content' => 'Advertising from our partners', 'check' => 'checked'])
                    </div>

                    <div class="mt-[32px]">
                        <p class="text-[16px] leading-[24px] text-[#2c2c2d] font-bold">
                            Chanels
                        </p>
                        <div>
                            @include('components.user.input-checkbox', ['id' => 'email5', 'content' => 'Email', 'check' => 'checked'])
                        </div>

                        <div>
                            @include('components.user.input-checkbox', ['id' => 'mobile5', 'content' => 'Mobile app push notification', 'check' => 'checked'])
                        </div>

                        <div>
                            @include('components.user.input-checkbox', ['id' => 'rec6', 'content' => 'SMS', 'check' => ''])
                        </div>

                        <div>
                            @include('components.user.input-checkbox', ['id' => 'rec7', 'content' => 'Carousell chat', 'check' => 'checked'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
