@extends('Layouts.admin.dashboard')

@section('content')
    <?php
        $index = count($kinds);
    ?>
    <div class="pt-[30px] flex flex-col justify-center items-center">
        <p class="text-[20px] leading-[28px] font-bold text-center pb-[40px]">
            Thêm nhãn hàng
        </p>

        <form action="/admin/brand" method="post" enctype="multipart/form-data"
        class="px-[10px] py-[20px] pt-[30px] shadow-lg border-[1px] border-solid border-[#f0f0f1] rounded-md
        mobile:w-[96%] xl:w-[400px] lg:w-[400px] md:w-[320px] sm:w-[300px]">
            @csrf 
            <div class="w-full flex items-center justify-center pb-[20px]">
                <img src="https://firebasestorage.googleapis.com/v0/b/citishop-laravel.appspot.com/o/Images%2Fciti-logo2-removebg-preview.png?alt=media&token=8a6f94e7-ae5e-4a88-8f2f-59c45d1c0923" alt="" class=" h-[60px] rounded-md">
            </div>
            <div class="py-[10px] flex flex-col">
                <label for="nameOfBrand" class="py-[5px]">
                    Tên nhãn hàng
                </label>
                <input type="text" id="nameOfBrand" name="name" required
                class="h-[40px] outline-none border-[1px] border-solid border-[#f0f0f1] rounded-md px-[10px]
                focus:border-[#008f79] focus:ring-[4px] ring-[#cce9e4]">
            </div>

            <div class="flex flex-col gap-[5px]">
                <label for="kind_cate">Loại hàng</label>
                <select id="kind_cate" name="kind_id"
                class="h-[40px] outline-none border-[1px] border-solid border-[#f0f0f1] rounded-md px-[10px]
                focus:border-[#008f79] focus:ring-[4px] ring-[#cce9e4]">
                    @foreach($kinds as $key=>$kind)
                        <option value="{{$kind['id']}}">
                            {{$kind['name']}}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="px-[16px] py-[8px] bg-[#008f79] mt-[40px] w-full text-white rounded-md">
                Add
            </button>

        </form>
    </div>
@endsection

@section('script')
    <script src="../../js/utility-for-url.js"></script>
@endsection

<style>
    #brand {
        opacity: 1;
        color: white;
        padding-left: 10px;
        border-left: #fff solid 2px;
    }
</style>