<div style="display: none;" id="{{$id}}"
     class="absolute top-[50px] left-0 w-[300px] h-[250px] overflow-y-auto
                        bg-white shadow-xl rounded-lg
                        mobile:fixed mobile:w-full mobile:h-full
                        mobile:top-0 mobile:rounded-none mobile:z-[11]
                        mobile:overflow-y-auto ">
    <div class="hidden h-[60px] fixed top-0 left-0 w-full
                bg-white
                mobile:flex justify-between items-center
                shadow-md px-[16px]">
        <i class="fa fa-arrow-left" onclick="clickToggle('{{$id}}')"></i>
        <p class="text-[16px] leading-[24px] font-bold text-[#2c2c2d]">{{$title}}</p>
        <p class="text-[16px] leading-[24px] text-[#008f79]"
           onclick="clickToggle('{{$id}}')">
            Apply
        </p>
    </div>
    <div class="flex flex-col w-full mobile:mt-[65px]">
        @foreach($data as $ren)
            <div class="p-[12px] flex items-center gap-[10px] w-full
            border-b-[1px] border-solid border-[#c5c5c6]">
                <input type="checkbox" id="{{$ren}}" class="accent-[#026859] w-[20px] h-[20px]" onclick="chooseBody('{{$id}}', '{{$ren}}')">
                <label for="{{$ren}}">{{$ren}}</label>
            </div>
        @endforeach
    </div>
</div>
