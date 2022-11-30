<div>
    <div>
        <div class="flex">
            <div>
                <input type="checkbox" id="{{$sameDay}}" class="accent-[#026859] w-[18px] h-[18px]"
                       onclick="checkShow('{{$sameDay}}', '{{$sameChosen}}', '{{$sameFee}}', '{{$sameText}}')">
                <label style="background-color: white"
                       class="pl-[8px] w-full"
                       for="{{$sameDay}}">
                    {{$content}}
                </label>
            </div>

            <div class="relative" id="{{$sameChosen}}" style="display: none">
                <div class="px-[16px] py-[10px] ml-[24px] w-[115px]
                                border-solid border-[1px] border-[#c5c5c6]
                                flex items-center justify-between rounded-md hover:cursor-pointer
                                hover:ring-[#cce9e4] hover:ring-[4px] hover:border-[#008f79]"
                     onclick="clickToggleFlexCol('{{$typeFee}}')">
                    <input type="text" value="Custom" class="w-full outline-none h-full" disabled id="{{$typeChosen}}">
                    <div class="ml-[8px]">
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
                <div class="shadow-lg absolute top-[50px] left-0
                                bg-white z-[12] ml-[24px] w-[180px]" id="{{$typeFee}}" style="display: none">
                    <p class="py-[12px] pl-[16px] pr-[48px]
                                    hover:bg-[#cce9e4]"
                       onclick="chooseFee('Custom', '{{$typeFee}}', '{{$typeChosen}}', '{{$sameFee}}')">
                        Custom
                    </p>
                    <p class="py-[12px] pl-[16px] pr-[48px] hover:bg-[#cce9e4]"
                       onclick="chooseFee('Free', '{{$typeFee}}','{{$typeChosen}}', '{{$sameFee}}')">
                        Free Shipping
                    </p>
                </div>
            </div>
        </div>
        <div style="display: none" id="{{$sameText}}"
             class="mt-[16px] ml-[28px]">
            <p class="text-[16px] leading-[24px] text-[#2c2c2d]">
                Orders before 3pm: Buyer to receive on same day. After 3pm: Buyer to receive by next working day.
            </p>
        </div>
        <div id="{{$sameFee}}" style="display: none"
             class="mt-[24px]">
            <p class="mb-[8px]">
                Delivery fee
            </p>
            <div class="relative">
                <input type="text" placeholder="Buyer pays"
                       class="outline-none w-full h-[44px] pl-[36px] rounded-lg
                                    border-solid border-[#c5c5c6]
                                    xl:border-[1px] lg:border-[1px] md:border-[1px] sm:border-[1px]
                                    mobile:border-b-[1px] mobile:rounded-none mobile:focus:ring-0
                                    focus:border-[#008f79] focus:ring-4 focus:ring-[#cce9e4]">
                <p class="absolute top-[10px] left-[15px]">
                    S$
                </p>
            </div>
        </div>
    </div>
</div>
