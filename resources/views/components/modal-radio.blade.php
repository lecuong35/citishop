<div style="display: none;" id="{{$id}}"
     class="absolute top-[50px] left-0 w-[300px] h-[70px] overflow-y-auto
                        bg-white shadow-xl rounded-lg
                        mobile:fixed mobile:w-full mobile:h-full
                        mobile:top-0 mobile:rounded-none mobile:z-[9]
                        mobile:overflow-y-hidden">
    <div class="hidden h-[60px] mobile:flex
                flex justify-center items-center
                shadow-md px-[16px]">
        <div class="absolute top-[20px] left-[20px]">
            <i class="fa fa-arrow-left fa-xl" onclick="clickToggle('{{$id}}')"></i>
        </div>
        <p class="text-[20px] leading-[28px]">{{$title}}</p>
    </div>
    <div class="flex flex-col w-full">
        @foreach($data as $de)
            <div class="p-[12px] flex items-center gap-[10px] w-full
             border-b-[1px] border-solid border-[#c5c5c6]">
                <input type="radio" name="depreciationSearch" id="{{$de}}" class="accent-[#026859] w-[20px] h-[20px]" onclick="chooseBody('{{$id}}', '{{$de}}')">
                <label for="{{$de}}" class="text-[#2c2c2d]">{{$de}}</label>
            </div>
        @endforeach
    </div>
</div>
