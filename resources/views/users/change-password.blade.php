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
                <a href="http://127.0.0.1:8000/home">
                    <i class="fas fa-arrow-left fa-lg" style="opacity: 0.5"></i>
                </a>
            </div>
            <p class="text-[38px] leading-[46px] font-bold text-[#2c2c2d]
        mb-[44px] mobile:text-[16px] mobile:leading-[24px] mobile:m-0">
                Thay đổi mật khẩu
            </p>
            <form action="http://127.0.0.1:8000/user/edit/password" method="post" enctype="multipart/form-data">
                @csrf
                <button type="submit" class="absolute top-[20px] right-[20px] hidden mobile:block
                    text-[16px] font-medium text-[#c5c5c6]" id="buttonSaved">
                        Lưu
                </button>
            </form>
        </div>

      <form action="http://127.0.0.1:8000/user/edit/password" enctype="multipart/form-data" method="post"
      class="mobile:mt-[100px] mobile:px-[16px]">
            @csrf
          <div class="mb-[32px]">
              @include('components.input-text', ['placeholder' => 'Mật khẩu hiện tại', 'id1' => 'currentinput', 'id2'=>'current', 'name'=>'currentPassword', 'value'=>''])
              @error('password')
                <p class="mt-[8px] text-[14px] leading-[22px]" style="color: red;">
                    {{$errors->first('password')}}
                </p>
              @enderror
          </div>

          <div class="mb-[32px]">
              @include('components.input-text', ['placeholder' => 'Mật khẩu mới', 'id1' => 'newinput', 'id2'=>'new',  'name'=>'newPassword', 'value'=> ''])
              @error('newPassword')
                <p class="mt-[8px] text-[14px] leading-[22px]" style="color: red;">
                    {{$errors->first('newPassword')}}
                </p>
              @enderror
          </div>

          <div class="mb-[20px]">
              @include('components.input-text', ['placeholder' => 'Xác nhận mật khẩu', 'id1' => 'confirminput', 'id2'=>'confirm',  'name'=>'confirmPassword', 'value'=> ''])
              @error('confirmPassword')
                <p class="mt-[8px] text-[14px] leading-[22px]" style="color: red;">
                    {{$errors->first('confirmPassword')}}
                </p>
              @enderror
          </div>

          <hr class="mobile:hidden">
          <div class="mt-[10px] flex justify-end mobile:hidden">
                <button 
                type="submit"
                class="px-[16px] py-[8px]
                bg-[#c5c5c6] rounded-lg hover:cursor-not-allowed
                text-[16px] leading-[24px] text-white font-bold" 
                id="buttonSave">
                    Lưu thay đổi
                </button>
          </div>
      </form>
    </div>

<style>
    #password {
        border-left: #008f79 solid 2px;
        font-size: medium;
        color: #008f79;
    }
</style>
@endsection
