<div>
    <div>
        <div class="flex items-center justify-start pb-[16px]">
            <input type="checkbox" id="meetUp" class="accent-[#026859] w-[18px] h-[18px]"
                   onclick="clickToggleFlexCol('meetLocation')">
            <label style="background-color: white"
                   class="pl-[8px] w-full"
                   for="meetUp">
                Meet-up
            </label>
        </div>
        <div class="relative pl-[24px] pt-[24px]" style="display:none" id="meetLocation">
            @include('components.input-text', ['id1' => 'meet1', 'id2' => 'meet2', 'placeholder' => 'Add location'])
            <div class="absolute top-[34px] right-[10px]">
                <i class="fa fa-search" style="color: #c5c5c6"></i>
            </div>
        </div>
    </div>
    <div>
        <div class="pb-[16px] flex items-center">
            <input type="checkbox" id="delivery" class="accent-[#026859] w-[18px] h-[18px]"
                   onclick="clickToggleFlexCol('deliveryMethod')">
            <label style="background-color: white"
                   class="pl-[8px] w-full"
                   for="delivery">
                Delivery
            </label>
        </div>
        <div class="ml-[32px] flex flex-col"
            id="deliveryMethod" style="display: none">
            <div>
                @include('components.user.deal-delivery',
                [
                    'sameDay' => 'sameDay',
                    'sameChosen' => 'sameChosen',
                    'sameFee' => 'sameFee',
                    'sameText' => 'sameText',
                    'content' => 'Same day delivery',
                    'typeFee' => 'typeFee',
                    'typeChosen' => 'typeChosen',
                ])
            </div>
            <div class="mt-[16px]">
                @include('components.user.deal-delivery',
                [
                    'sameDay' => 'sameDay1',
                    'sameChosen' => 'sameChosen1',
                    'sameFee' => 'sameFee1',
                    'sameText' => 'sameText1',
                    'content' => 'Express delivery',
                    'typeFee' => 'typeFee1',
                    'typeChosen' => 'typeChosen1',
                ])
            </div>

            <div class="mt-[16px]">
                @include('components.user.deal-delivery',
                [
                    'sameDay' => 'sameDay2',
                    'sameChosen' => 'sameChosen2',
                    'sameFee' => 'sameFee2',
                    'sameText' => 'sameText2',
                    'content' => 'Standard delivery',
                    'typeFee' => 'typeFee2',
                    'typeChosen' => 'typeChosen2',
                ])
            </div>

            <div class="mt-[16px]">
                @include('components.user.deal-delivery',
                [
                    'sameDay' => 'sameDay3',
                    'sameChosen' => 'sameChosen3',
                    'sameFee' => 'sameFee3',
                    'sameText' => 'sameText3',
                    'content' => 'Custom Courier',
                    'typeFee' => 'typeFee3',
                    'typeChosen' => 'typeChosen3',
                ])
            </div>
        </div>
    </div>

    <div class="bg-[#f0f1f1] rounded-xl p-[16px] mt-[32px]">
        <p class="text-[16px] leading-[24px] mb-[12px]">
            Tips for delivery
        </p>
        <ul class="list-disc ml-[32px]">
            <li class="flex items-center">
                <a href="/" class="text-[14px] leading-[22px] text-[#008f79] font-bold underline">
                    View delivery rates references
                </a>
                <div class="ml-[12px]">
                    <img src="https://mweb-cdn.karousell.com/build/top-right-arrow-8GEWZxtmVG.svg"
                    class="w-[12px] h-[12px]">
                </div>
            </li>
            <li class="flex items-center">
                <a href="/" class="text-[14px] leading-[22px] text-[#008f79] font-bold underline">
                    View delivery rates references
                </a>
                <div class="ml-[12px]">
                    <img src="https://mweb-cdn.karousell.com/build/top-right-arrow-8GEWZxtmVG.svg"
                         class="w-[12px] h-[12px]">
                </div>
            </li>
        </ul>
    </div>
</div>

<script>
    function checkShow(id1, id2, id3, id4) {
        let checkBox = document.getElementById(id1);
        let feeChosen = document.getElementById(id2);
        let feeInput = document.getElementById(id3);
        let feeText = document.getElementById(id4);

        if(checkBox.checked === true) {
            feeChosen.style.display = "block";
            feeInput.style.display = "block";
            feeText.style.display = "block";
        }
        else {
            feeChosen.style.display = "none";
            feeInput.style.display = "none";
            feeText.style.display = "none";
        }
    }
</script>
