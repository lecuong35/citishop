<form class="relative w-[252px] bg-white shadow-lg rounded-lg">
    <div class="modal-body relative overflow-y-auto h-[416px] w-full
    px-[16px] pt-[16px]">
        <div>
            <p class="text-[14px] leading-[18px] text-[#57585a]
            pt-[24px] pb-[4px]">
                Sort
            </p>
            @foreach($data['sorts'] as $ca)
                <div class="flex items-center
                     bg-white hover:bg-[#f0f0f1] py-[5px]" id="{{$ca}}">
                    <input type="radio" name="sort"
                           class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px]" style="accent-color: #026958"
                           id="sort1{{$ca}}">
                    <label for="sort1{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                </div>
            @endforeach
        </div>
        <div id="conditionModal" class="mb-[16px]">
            <p class="text-[14px] leading-[18px] text-[#57585a]
            pt-[24px] pb-[4px]">
                Item Condition
            </p>
            @foreach($data['conditions'] as $ca)
                <div class=" px-[10px] flex items-center
                                    bg-white hover:bg-[#f0f0f1] py-[5px]" id="{{$ca}}">
                    <input type="checkbox" name="brand"
                           class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                           id="condition1{{$ca}}">
                    <label for="condition1{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                </div>
            @endforeach
        </div>
        {{--    listing status --}}
        <div class="mb-[16px]">
            <p class="text-[14px] leading-[18px] text-[#57585a]
             pb-[4px]">
                Item Condition
            </p>
            @foreach($data['listingStatus'] as $ca)
                <div class=" px-[10px] flex items-center
                                    bg-white hover:bg-[#f0f0f1] py-[5px]" id="{{$ca}}">
                    <input type="checkbox" name="brand"
                           class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                           id="condition1{{$ca}}">
                    <label for="condition1{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                </div>
            @endforeach
        </div>

        <div class="pb-[16px]">
            <p class="text-[14px] leading-[18px] text-[#57585a] pt-[24px] pb-[4px]">Price</p>
            <div class="flex justify-between gap-[20px] flex-col">
                <div class="relative">
                    <input type="text"
                           class="pl-[30px] pr-[5px] py-[5px] outline-none h-[46px]
                                        border-solid border-[1px] border-[#c5c5c6] w-[200px] mobile:w-full
                                        focus:border-[#026958]" id="minUsedCarInput">
                    <p class="absolute top-[10px] left-[5px]">S$</p>
                    <p class="text-[#c5c6c6] absolute top-[10px] left-[35px]
                                        bg-white" id="minUsedCar">
                        Minimum</p>
                </div>

                <div class="relative">
                    <input type="text"
                           class="pl-[30px] pr-[5px] py-[5px] outline-none h-[46px]
                                           border-solid border-[1px] border-[#c5c5c6] w-[200px] mobile:w-full
                                           focus:border-[#026958]" id="maxUsedCarInput">
                    <p class="absolute top-[10px] left-[5px]">S$</p>
                    <p class="text-[#c5c6c6] absolute top-[10px] left-[35px]
                                        bg-white" id="maxUsedCar">
                        Maximum</p>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-start mb-[16px]" id="shipModal">
            <input type="checkbox"
                   class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                   id="freeShip">
            <label for="freeShip" class="text-[16px] leading-[24px]">Free shipping</label>
        </div>

        <div class="flex items-center justify-between mt-[20px] mb-[40px]" id="carousellModal">
            <input type="checkbox"
                   class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                   id="carouselProtect">
            <label for="carouselProtect" class="flex gap-[10px] pr-[28px]">
                <img src="https://sl3-cdn.karousell.com/components/Caroupay_v4.svg"
                     class="w-[32px] h-[32px] ml-[8px]">
                <p class="text-[16px] leading-[24px]">Carousell Protection</p>
            </label>
        </div>

        <div class=" mt-[16px]" id="dealModal">
            <p class="text-[16px] leading-[24px] mb-[8px]">
                Deal Option
            </p>
            <div class="flex flex-col gap-[10px]">
                <div class=" px-[10px] flex items-center
                                    bg-white hover:bg-[#f0f0f1] py-[5px]" >
                    <input type="checkbox" name="brand"
                           class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]" id="deal1">
                    <label for="deal1" class="text-[16px] leading-[24px]">Meet-up</label>
                </div>
                <div class=" px-[10px] flex items-center
                                    bg-white hover:bg-[#f0f0f1] py-[5px]" >
                    <input type="checkbox" name="brand"
                           class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]" id="deal2">
                    <label for="deal2" class="text-[16px] leading-[24px]">Mailing & Delivery</label>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="flex items-center justify-between brand
     py-[12px] pr-[16px]
     w-full h-[64px]
     bg-white" id="footerModal">
        <button class="px-[20px] py-[10px]
                                text-[16px] leading-[24px] font-bold bg-white
                                hover:bg-[#f0f0f1] mobile:hidden">
            Reset
        </button>

        <button class="px-[16px] py-[8px] rounded-lg
                                border-[1px] border-solid border-[#c5c5c6]
                                text-[16px] leading-[24px] font-bold text-white
                                bg-[#008f79] mobile:w-full mobile:py-[5px]
                                hover:opacity-[0.6]" data-bs-dismiss="modal" aria-label="Close">
            Apply
        </button>
    </div>
</form>
