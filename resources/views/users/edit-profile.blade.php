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
            Edit Profile
        </p>
        <p class="absolute top-[20px] right-[20px] hidden mobile:block
        text-[16px] font-medium text-[#c5c5c6]" id="buttonSaved">
            Save
        </p>
    </div>

    <div class="mobile:px-[16px] mobile:pt-[96px] mobile:pb-[64px]">
        <div>
            <p class="text-[24px] mobile:text-[22px] leading-[32px] font-bold text-[#2c2c2d]">
                Profile Photo
            </p>
            <div class="mt-[20px] mb-[16px] flex items-center">
                <img src="https://media.karousell.com/media/photos/profiles/2022/11/18/cuongle35280503_1668747414_cf2a3c51.jpg"
                     class="w-[160px] h-[160px] mobile:w-[96px] mobile:h-[96px]" style="border-radius: 50%">
                <div class="ml-[24px] flex flex-col mobile:ml-[16px]">
                    <p class="text-[14px] leading-[22px] text-[#57585a] mb-[16px] mobile:mb-[8px]">
                        Clear frontal face photos are an important way for buyers
                        and sellers to learn about each other.
                    </p>
                    <form>
                        <input type="file" id="fileUpload" hidden />
                        <label for="fileUpload"
                               class="px-[16px] py-[8px] rounded-lg
                        border-[#57585a] border-solid border-[1px]
                        text-[14px] leading-[22px] font-medium
                        hover:cursor-pointer">
                            Upload a photo
                        </label>
                    </form>
                </div>
            </div>
        </div>
        <div>
            <p class="text-[24px] mobile:text-[22px] leading-[32px] font-bold
        mt-[32px] mb-[16px]">
                Public profile
            </p>
            <div class="mb-[20px] mobile:mb-[24px]">
                @include('components.input-text',['placeholder' => 'Username', 'id1' => 'usernameinput', 'id2' => 'username'])
            </div>

            <div class="mb-[20px] mobile:mb-[24px]">
                @include('components.input-text',['placeholder' => 'First name', 'id1' => 'firstnameinput', 'id2' => 'firstname'])
            </div>

            <div class="mb-[20px] mobile:mb-[24px]">
                @include('components.input-text',['placeholder' => 'Last name', 'id1' => 'lastnameinput', 'id2' => 'lastname'])
            </div>

            <div class="relative">
            <textarea maxlength="255" rows="5"
                      class="px-[16px] py-[12px] outline-none
            w-full
            border-solid border-[#c5c5c6]
            xl:border-[1px] lg:border-[1px] md:border-[1px] sm:border-[1px]
            mobile:border-b-[1px]
            mobile:focus:ring-0 mobile:rounded-none
            rounded-lg focus:ring-4 focus:ring-[#cce9e4] focus:border-[#008f79]" id="bioinput"
                      onclick="clickInputText('bioinput', 'bio')"
                      onblur="blurInputText('bioinput', 'bio')">
            </textarea>
                <p class="absolute top-[10px] px-[5px] left-[25px] bg-white z-[9] text-[#57585a] mobile:left-[10px]" id="bio">
                    Bio
                </p>
            </div>
        </div>

        <div>
            <p class="text-[24px] mobile:text-[22px] leading-[32px] font-bold
        mt-[32px] mb-[16px]">
                Location
            </p>
            <select class="w-full outline-none
        px-[16px] py-[10px] h-[46px]
        border-solid border-[#f0f0f1] border-[1px]
        focus:ring-[#cce9e4] focus:ring-4 focus:border-[#008f79]">
                @foreach($data['countries'] as $ctr)
                    <option value="{{$ctr}}"
                            class="w-full py-[12px] pl-[16px] bg-white hover:bg-[#f0f0f1]">
                        {{$ctr}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-[20px] mobile:mb-[24px]">
            <p class="text-[24px] mobile:text-[22px] leading-[32px] font-bold
        mt-[32px] mb-[16px]">
                Private information
            </p>
            <div class="flex">
                <img src="https://mweb-cdn.karousell.com/build/lock-outlined-12sm0z41ew.svg"
                     class="w-[16px] h-[16px] mr-[8px]">
                <p class="text-[14px] leading-[22px] text-[#57585a]">
                    We do not share this information with other users
                    unless explicit permission is given by you.
                </p>
            </div>
            <div class="mt-[20px]">
                @include('components.input-text', ['placeholder' => 'Email', 'id1' => 'emailinput', 'id2' => 'email'])
            </div>
            <div class="my-[20px]">
                @include('components.input-text', ['placeholder' => 'Mobile number', 'id1' => 'mobileinput', 'id2' => 'mobile'])

            </div>
            <div>
                <select class="w-full outline-none
            px-[16px] py-[10px] h-[46px]
            border-solid border-[#f0f0f1] border-[1px]
            focus:ring-[#cce9e4] focus:ring-4 focus:border-[#008f79]">
                    @foreach($data['genders'] as $ctr)
                        <option value="{{$ctr}}"
                                class="w-full py-[12px] pl-[16px] bg-white hover:bg-[#f0f0f1]">
                            {{$ctr}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-[20px]">
                <p class="text-[14px] leading-[22px] text-[#2c2c2d]">Birthday</p>
                <input type="date" class="w-full outline-none
            border-[#f0f0f1] border-solid border-[1px] px-[16px] py-[10px]
            focus:border-[#008f79] focus:ring-4 focus:ring-[#cce9e4]">
            </div>
        </div>

        <hr class="my-[24px] mobile:hidden">
        <div class="mt-[10px] flex justify-end mobile:hidden">
            <button class="px-[16px] py-[8px]
        bg-[#c5c5c6] rounded-lg hover:cursor-not-allowed
        text-[16px] leading-[24px] text-white font-bold" id="buttonSave">
                Save Changes
            </button>
        </div>
    </div>
</div>
@endsection
