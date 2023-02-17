@extends('Layouts.setting-info')

@section('content')
@if(Session::has('success'))
    <p class="mt-[8px] text-[14px] leading-[22px] text-center
        text-white bg-[#28de4f] rounded-lg h-[40px]
        flex items-center justify-center my-[10px] ml-[24px]" >
        {{Session::get('success')}}
    </p>
@endif
<div class=" w-[720px] min-w-[615px] py-[32px] px-[40px] ml-[24px] mobile:m-0 mobile:p-0
    border-[#f0f0f1] border-solid border-[1px] rounded-lg shadow-lg
    mobile:w-full mobile:h-full mobile:fixed
    mobile:top-0 mobile:left-0 bg-white mobile:overflow-y-auto
    mobile:z-[11] mobile:min-w-[350px]">
    @error('image')
        <p class="mt-[8px] text-[14px] leading-[22px]" style="color: red;">
            {{$errors->first('image')}}
        </p>
    @enderror
    <div class="mobile:flex mobile:items-center mobile:justify-center
    mobile:h-[64px] mobile:shadow-md mobile:fixed mobile:w-full mobile:bg-white">
        <div class="absolute top-[20px] left-[20px] hidden mobile:block">
            <a href="http://127.0.0.1:8000/home">
                <i class="fas fa-arrow-left fa-lg" style="opacity: 0.5"></i>
            </a>
        </div>
        <p class="text-[38px] leading-[46px] font-bold text-[#2c2c2d]
        mb-[44px] mobile:text-[16px] mobile:leading-[24px] mobile:m-0">
            Cập nhật thông tin cá nhân
        </p>
        <form action="http://127.0.0.1:8000/user/edit/profile" method="post" enctype="multipart/form-data">
            @csrf
            <button type="submit" class="absolute top-[20px] right-[20px] hidden mobile:block
                text-[16px] font-medium text-[#c5c5c6]" id="buttonSaved">
                    Save
            </button>
        </form>
    </div>

    <form action="/user/edit/profile" method="post" enctype="multipart/form-data" 
    class="mobile:px-[16px] mobile:pt-[96px] mobile:pb-[64px]">
        @csrf
        <div>
            <p class="text-[24px] mobile:text-[22px] leading-[32px] font-bold text-[#2c2c2d]">
                Ảnh đại diện
            </p>
            <div class="mt-[20px] mb-[16px] flex items-center">
                <img src="{{$user['avatar']}}" id="imgUpload"
                     class="w-[160px] h-[160px] mobile:w-[96px] mobile:h-[96px]" style="border-radius: 50%">
                <div class="ml-[24px] flex flex-col mobile:ml-[16px]">
                    <p class="text-[14px] leading-[22px] text-[#57585a] mb-[16px] mobile:mb-[8px]">
                        Một ảnh đại diện đẹp để khách hàng có thể ấn tượng về bạn.
                    </p>
                    
                    <input type="file" id="fileUpload" name="avatar" hidden accept="image/*" onchange="changeValueImage('imgUpload', 'fileUpload')">
                    <label for="fileUpload"
                            class="px-[16px] py-[8px] rounded-lg
                            border-[#57585a] border-solid border-[1px]
                            text-[14px] leading-[22px] font-medium w-fit
                            hover:cursor-pointer">
                        Tải ảnh lên
                    </label>
                    
                </div>
            </div>
        </div>
        <div>
            <p class="text-[24px] mobile:text-[22px] leading-[32px] font-bold
        mt-[32px] mb-[16px]">
                Thông tin liên hệ cơ bản
            </p>
            <div class="mb-[20px] mobile:mb-[24px]">
                @include('components.input-text',['placeholder' => 'Tên người dùng', 'id1' => 'usernameinput', 'id2' => 'username', 'name'=> 'name', 'value'=> $user->name])
            </div>

            <div class="mb-[20px] mobile:mb-[24px]">
                @include('components.input-text',['placeholder' => 'Zalo', 'id1' => 'firstnameinput', 'id2' => 'firstname', 'name'=> 'zalo', 'value'=> $user->zalo])
            </div>

            <div class="mb-[20px] mobile:mb-[24px]">
                @include('components.input-text',['placeholder' => 'Facebook', 'id1' => 'lastnameinput', 'id2' => 'lastname', 'name'=> 'facebook', 'value'=> $user->facebook])
            </div>
        </div>

        <div class="mb-[20px] mobile:mb-[24px]">
            <p class="text-[24px] mobile:text-[22px] leading-[32px] font-bold
            mt-[32px] mb-[16px]">
                Thông tin liên hệ cá nhân
            </p>
            <!-- <div class="flex">
                <img src="https://mweb-cdn.karousell.com/build/lock-outlined-12sm0z41ew.svg"
                     class="w-[16px] h-[16px] mr-[8px]">
                <p class="text-[14px] leading-[22px] text-[#57585a]">
                    We do not share this information with other users
                    unless explicit permission is given by you.
                </p>
            </div> -->
            <div class="mt-[20px] mb-[10px] opacity-80">
            
                <input 
                    disabled
                    type="text" 
                    name="email"
                    value="{{$user['email']}}"
                    class="outline-none w-full h-[44px] px-[16px] rounded-lg bg-[#c5c5c6]
                    border-solid border-[#c5c5c6] hover:cursor-not-allowed" >
                <p class="absolute top-[-15px] px-[5px] left-[25px] bg-white
                    z-[9] text-[#57585a] text-[14px] leading-[22px]
                    mobile:left-[10px]">
                    Email
                </p>
            </div>
            <div class="my-[20px]">
                @include('components.input-text', ['placeholder' => 'Số điện thoại', 'id1' => 'mobileinput', 'id2' => 'mobile', 'name'=> 'phone', 'value'=> $user->phone])

            </div>
        </div> 

        <hr class="my-[24px] mobile:hidden">
        <div class="mt-[10px] flex justify-end mobile:hidden">
            <button class="px-[16px] py-[8px]
        bg-[#c5c5c6] rounded-lg hover:cursor-not-allowed
        text-[16px] leading-[24px] text-white font-bold" id="buttonSave">
                Lưu thay đổi
            </button>
        </div>
</form>
</div>

<style>
    #profile {
        border-left: #008f79 solid 2px;
        font-size: medium;
        color: #008f79;
    }
</style>
@endsection
