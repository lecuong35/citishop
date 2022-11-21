@extends('Layouts.setting-info')

@section('content')
    <div class=" w-[720px] min-w-[615px] py-[32px] px-[40px] ml-[24px] mobile:m-0 mobile:p-0
    border-[#f0f0f1] border-solid border-[1px] rounded-lg shadow-lg
    mobile:w-full mobile:h-full mobile:fixed
    mobile:top-0 mobile:left-0 bg-white mobile:overflow-y-auto
    mobile:z-[11] mobile:min-w-[350px]">
        <div class="mobile:flex mobile:items-center mobile:justify-center
        mobile:h-[64px] mobile:shadow-md mobile:fixed mobile:w-full mobile:bg-white">
            <div class="absolute top-[20px] left-[20px] hidden mobile:block">
                <a href="/settings">
                    <i class="fas fa-arrow-left fa-lg" style="opacity: 0.5"></i>
                </a>
            </div>
            <p class="text-[38px] leading-[46px] font-bold text-[#2c2c2d]
            mb-[44px] mobile:text-[16px] mobile:leading-[24px] mobile:m-0">
                Data & Privacy settings
            </p>
            <p class="absolute top-[20px] right-[20px] hidden mobile:block
            text-[16px] font-medium text-[#c5c5c6]" id="buttonSaved">
                Save
            </p>
        </div>

        <div class="mobile:px-[16px] mobile:pt-[50px] mobile:pb-[64px]">
            <p class="mt-[48px] mb-[12px] text-[#2c2c2d] text-[24px] leading-[32px] font-bold">
                Privacy preferences
            </p>
            <p class="text-[14px] leading-[22px] text-[#57585a] mb-[24px]">
                Carousell may share information that do not constitute personal data
                with our advertising and analytics partners.
                This contributes to Carousell’s business sustainability in the long run,
                so that we can keep our basic features free for all users. Thank you for your support.
                <span>
                <a href="https://www.carousell.sg" class="underline">More info</a>
            </span>
            </p>
            <div onclick="changeSaveSetting()">
                @include('components.user.input-checkbox', ['id' => 'interest', 'content' => 'Interest-based information', 'check' => 'checked'])
            </div>
            <div onclick="changeSaveSetting()">
                @include('components.user.input-checkbox', ['check' => 'checked','id' => 'lo_based', 'content' => 'Location-based information'])
            </div>
            <div onclick="changeSaveSetting()">
                @include('components.user.input-checkbox', ['check' => 'checked','id' => 'demo-gr', 'content' => 'Demographic information'])
            </div>

            <p class="mt-[48px] mb-[12px] text-[#2c2c2d] text-[24px] leading-[32px] font-bold">
                Advertising preferences
            </p>
            <p class="text-[14px] leading-[22px] text-[#57585a] mb-[24px]">
                If you turn off the settings below, you'll still see the same number of ads, but
                they may be less relevant to you.
                <span>
                <a href="https://www.carousell.sg" class="underline">More info.</a>
            </span>
            </p>
            <div onclick="changeSaveSetting()">
                @include('components.user.input-checkbox', ['id' => 'Interest-based', 'content' => 'Interest-based advertising', 'check'=>'checked'])
            </div>

            <p class="mt-[48px] mb-[12px] text-[#2c2c2d] text-[24px] leading-[32px] font-bold">
                Survey preferences
            </p>

            <div onclick="changeSaveSetting()">
                @include('components.user.input-checkbox', ['id' => 'interest-based', 'content' => 'Participate in external surveys', 'check'=>""])
            </div>

            <hr class="my-[24px] mobile:hidden">

            <button class="px-[16px] py-[8px] bg-[#c5c5c6] rounded-lg
           ml-[498px] mobile:hidden
            text-white text-[16px] leading-[24px] font-bold hover:cursor-not-allowed"
                    id="buttonSave">
                Save Changes
            </button>
        </div>


    </div>
@endsection
