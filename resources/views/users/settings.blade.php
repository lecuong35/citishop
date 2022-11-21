<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @include('components.header')

    <title>User</title>
</head>
<body class="font-roboto">
    <div>
        <div class="h-[64px] w-full flex items-center justify-center relative
        shadow-md">
            <p class="text-[#2c2c2d] leading-[24px] text-[16px] font-bold">
                Settings
            </p>
            <div class="absolute top-[20px] left-[20px]">
                <a href="/info">
                    <i class="fas fa-arrow-left fa-lg" style="opacity: 0.5"></i>
                </a>
            </div>
        </div>

        <div class="flex flex-col mt-[24px]">
            <div class="w-full mx-[16px] py-[8px]
            border-solid border-[#f0f0f1] border-b-[1px]">
                <a href="/edit-profile" class="flex items-center justify-between">
                    <p class="text-[16px] leading-[24px] text-[#2c2c2d]">
                        Edit profile
                    </p>
                    <div>
                        <i class="fa fa-chevron-right fa-md" style="opacity: 0.75;"></i>
                    </div>
                </a>
            </div>
            <div class="w-full mx-[16px] py-[8px]
            border-solid border-[#f0f0f1] border-b-[1px]">
                <a href="/change-password" class="flex items-center justify-between">
                    <p class="text-[16px] leading-[24px] text-[#2c2c2d]">
                        Change password
                    </p>
                    <div>
                        <i class="fa fa-chevron-right fa-md" style="opacity: 0.75;"></i>
                    </div>
                </a>
            </div>
            <div class="w-full mx-[16px] py-[8px]
            border-solid border-[#f0f0f1] border-b-[1px]">
                <a href="/setting-notification" class="flex items-center justify-between">
                    <p class="text-[16px] leading-[24px] text-[#2c2c2d]">
                        Notifications
                    </p>
                    <div>
                        <i class="fa fa-chevron-right fa-md" style="opacity: 0.75;"></i>
                    </div>
                </a>
            </div>
            <div class="w-full mx-[16px] py-[8px]
            border-solid border-[#f0f0f1] border-b-[1px]">
                <a href="/data-privacy" class="flex items-center justify-between">
                    <p class="text-[16px] leading-[24px] text-[#2c2c2d]">
                        Data & privacy settings
                    </p>
                    <div>
                        <i class="fa fa-chevron-right fa-md" style="opacity: 0.75;"></i>
                    </div>
                </a>
            </div>
            <div class="w-full mx-[16px] py-[8px]">
                <a href="/login" class="flex items-center justify-between">
                    <p class="text-[16px] leading-[24px] text-[#ff2636]">
                        Log out
                    </p>
                    <div>
                        <i class="fa fa-chevron-right fa-md" style="opacity: 0.75;"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
<script src="./js/utilities-functions.js"></script>
</body>
</html>
