<div class=" w-[772px] p-[24px]
mobile:w-full mobile:p-0">
    <div class="w-full relative">
        <div class="flex items-center justify-between
        px-[16px] py-[4px] rounded-lg h-[48px]
        border-solid border-[#c5c5c6] border-[1px]
        mobile:hidden" id="lapCategory"
        onclick="clickToggleFlexCol('category')">
            <div>
                <p id="cate" class="text-[16px] leading-[24px] text-[#2c2c2d] font-bold"></p>
                <p id="cateText" class="text-[14px] leading-[22px] text-[#57585a]">Select a category</p>
            </div>
            <div>
                <i class="fa fa-chevron-down"></i>
            </div>
        </div>

        <div class="w-[724px] rounded-lg mobile:border-none
        absolute top-[50px] mobile:w-full mobile:top-0
        border-[#c5c5c6] border-solid border-[1px]"
        id="category"
        style="display: none">
            <div class="bg-white z-[9] mobile:w-full">
                <div class="relative">
                    <input type="text" placeholder="search for a category..."
                           class="h-[48px] w-full px-[24px] outline-none
                            border-solid border-[#c5c5c6] border-b-[1px]">
                    <div class="absolute top-[12px] right-[10px]">
                        <i class="fa fa-search" style="color: #c5c5c6"></i>
                    </div>
                </div>
                <div class="flex flex-col
                h-[400px] overflow-y-auto
                mobile:h-full">
                    <div class="text-[16px] leading-[24px] text-[#2c2c2d]
                    border-solid border-b-[1px] border-[#c5c5c6]
                    h-[48px] p-[12px] flex items-center hover:cursor-pointer"
                    onclick="chooseCategory('Announcement', '')">
                        Announcement
                    </div>
                    <div class="w-full">
                        @foreach($data['category'] as $key => $ca)
                            <div class="w-full flex items-center justify-between
                            h-[48px] p-[12px] mobile:px-0 mobile:border-[#f0f0f1]
                            border-b-[1px] border-solid border-[#c5c5c6]"
                            id="filter{{$key}}" onclick="clickToggleFlexCol('filterBox{{$key}}')">
                                <div class="flex">
                                    <img src="{{$ca}}" class="w-[24px] h-[24px] mr-[8px]">
                                    <p class="text-[16px] leading-[24px] text-[#2c2c2d]">
                                        {{$data['categoryNames'][$key]}}
                                    </p>
                                </div>
                                <div>
                                    <i class="fa fa-chevron-right" style="color: #c5c5c6"></i>
                                </div>
                            </div>
                            <div id="filterBox{{$key}}" style="display: none"
                            class="mobile:bg-white mobile:h-full
                            mobile:fixed mobile:w-full mobile:top-0 mobile:left-0">
                                <div class="hidden mobile:flex h-[60px] flex
                                fixed top-0 left-0 z-[16] bg-white w-full shadow-md
                                items-center justify-center">
                                    <div class="absolute top-[20px] left-[20px]"
                                         onclick="clickToggleFlexCol('filterBox{{$key}}')">
                                        <i class="fa fa-arrow-left fa-xl" style="color: #57585a"></i>
                                    </div>
                                    <p class="text-[#2c2c2d] text-[20px] leading-[28px] font-bold mr-[8px] mobile:text-[16px]">
                                        {{$data['categoryNames'][$key]}}
                                    </p>
                                </div>
                                <div class="mobile:mt-[70px]">
                                    @foreach($data['filter'] as $fil)
                                        <div class="h-[48px] py-[12px] px-[32px] hover:cursor-pointer
                                    border-solid border-b-[1px] border-[#c5c5c6] mobile:border-[#f0f0f1]"
                                             onclick="chooseCategory( '{{$fil}}','in {{$data[categoryNames][$key]}}')">
                                            <p>
                                                {{$fil}}
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-[32px]" id="formContent" style="display: none">
        <div class="mb-[16px]">
            @include('components.input-text', ['placeholder' => 'Listing Title', 'id1' => 'listing1', 'id2' => 'listing2'])
        </div>

        <div class="mobile:pb-[80px]">
            <p class="text-[24px] leading-[32px] font-bold pt-[8px] pb-[16px]">
                About the item
            </p>
{{--            condition--}}
            <div class="mb-[16px]">
                <div class="mobile:flex items-center justify-between mobile:mb-[16px]
                mobile:border-[#57585a] mobile:border-solid mobile:border-b-[1px]"
                     onclick="clickToggleFlexCol('condition123')">
                    <div class="mobile:w-full">
                        <p class="mb-[16px] mt-[4px] mobile:text-[14px] mobile:text-[#57585a] mobile:mb-[4px]">
                            Condition
                        </p>
                        <input type="text" placeholder="Choose" id="conditionText" disabled
                        class=" hidden mobile:block w-full outline-none">
                    </div>
                    <div class="hidden mobile:block">
                        <i class="fa fa-chevron-right fa-sm" style="color: #57585a"></i>
                    </div>
                </div>
               <div id="condition123"
               class="mobile:hidden
               mobile:w-full mobile:h-full mobile:top-0 mobile:left-0
               mobile:bg-white mobile:fixed mobile:z-[12]">
                   <div class="h-[60px] flex hidden mobile:flex
                                fixed top-0 left-0 z-[16] bg-white w-full shadow-md
                                items-center justify-center">
                       <div class="absolute top-[20px] left-[20px]"
                            onclick="clickToggleFlexCol('condition123')">
                           <i class="fa fa-arrow-left fa-xl" style="color: #57585a"></i>
                       </div>
                       <p class="text-[#2c2c2d] text-[20px] leading-[28px] font-bold mr-[8px] mobile:text-[16px]">
                           Condition
                       </p>
                   </div>
                   <div class="flex gap-[20px] relative
                    mobile:flex-col mobile:mt-[75px]">
                       @include('components.user.button-choice', ['content' => 'Brand new', 'id' => 'condition1',
                               'name' => 'condition', 'textId' => 'text1',
                               'textContent' => 'Never used. May come with original packaging or tag.'])

                       @include('components.user.button-choice', ['content' => 'Like new', 'id' => 'condition2',
                              'name' => 'condition', 'textId' => 'text2',
                              'textContent' => 'Used once or twice. As good as new.'])

                       @include('components.user.button-choice', ['content' => 'Lightly used', 'id' => 'condition3',
                              'name' => 'condition', 'textId' => 'text3',
                              'textContent' => 'Used with care. Flaws, if any, are barely noticeable.'])

                       @include('components.user.button-choice', ['content' => 'Well used', 'id' => 'condition4',
                              'name' => 'condition', 'textId' => 'text4',
                              'textContent' => 'Has minor flaws or defects.'])

                       @include('components.user.button-choice', ['content' => 'Heavily used', 'id' => 'condition5',
                              'name' => 'condition', 'textId' => 'text5',
                              'textContent' => 'Has obvious signs of use or defects.'])
                   </div>
               </div>
            </div>
{{--            price--}}
           <div class="mt-[40px] mb-[16px]">
               <p>Price</p>
               <div class="relative mt-[12px]">
                   <div class="flex gap-[20px]">
                       <div>
                           <input type="radio" name="price" id="forSale" hidden onclick="forSales()">
                           <label for="forSale"
                                  class="px-[16px] py-[12px] text-[16px] leading-[24px] text-[#2c2c2d]
                        border-[#c5c5c6] border-solid border-[1px] rounded-full">
                               For Sale
                           </label>
                       </div>

                       <div>
                           <input type="radio" name="price" id="forFree" hidden onclick="forSales()">
                           <label for="forFree"
                                  class="px-[16px] py-[12px] text-[16px] leading-[24px] text-[#2c2c2d]
                        border-[#c5c5c6] border-solid border-[1px] rounded-full">
                               For Free
                           </label>
                       </div>
                   </div>
                   <div class="relative w-full mt-[20px] hidden" id="salePrice">
                       <input type="text" placeholder="Price of your listing"
                              class="pl-[40px] w-full h-[48px] outline-none
                               border-solid border-[#c5c5c6] border-[1px] rounded-lg
                               focus:ring-[#cce9e4] focus:ring-4 focus:border-[#008f79]">
                       <p class="absolute top-[12px] left-[15px]">
                           S$
                       </p>
                   </div>
               </div>
           </div>

{{--            description    --}}
            <div class="mb-[16px] pt-[20px]">
                <p class="mb-[8px]">
                    Description
                </p>
                <textarea rows='7'
                    placeholder="Describe what are you selling and include any details a buyer can be interested in. People love icons with stories!"
                    class="w-full outline-none px-[16px] py-[12px]
                    border-solid border-[#c5c5c6] rounded-lg mobile:rounded-none
                    xl:border-[1px] lg:border-[1px] md:border-[1px] sm:border-[1px] mobile:border-b-[1px]
                    focus:ring-[#cce9e4] focus:ring-4 focus:border-[#008f79] mobile:focus:ring-0"
                ></textarea>
            </div>

{{--            brand    --}}
            <div class="relative">
                <div class="relative" onclick="clickToggleFlexCol('brands')">
                    <input type="text" placeholder="Choose your brand"
                           class="pl-[40px] w-full h-[48px] outline-none mobile:hidden
                               border-solid border-[#c5c5c6] border-[1px] rounded-lg
                               focus:ring-[#cce9e4] focus:ring-4 focus:border-[#008f79]" id="brandText">
                    <div class="absolute top-[12px] left-[15px] mobile:hidden">
                        <i class="fa fa-search" style="color: #c5c5c6"></i>
                    </div>
                    <p class="absolute top-[-15px] left-[10px] mobile:hidden
                     px-[5px] bg-white text-[14px] leading-[22px] text-[#57585a]">
                        Brand
                    </p>

                    <div class="mobile:flex items-center justify-between mobile:mb-[16px]
                    mobile:border-[#57585a] mobile:border-solid mobile:border-b-[1px]">
                        <div class="mobile:w-full hidden mobile:block">
                            <p class="mb-[16px] mt-[4px] mobile:text-[14px] mobile:text-[#57585a] mobile:mb-[4px]">
                                Brand
                            </p>
                            <input type="text" placeholder="Choose" id="brandTexts" disabled
                                   class=" hidden mobile:block w-full outline-none">
                        </div>
                        <div class="hidden mobile:block">
                            <i class="fa fa-chevron-right fa-sm" style="color: #57585a"></i>
                        </div>
                    </div>


                </div>
                <div id="brands" class="mobile:fixed mobile:left-0 mobile:top-0 z-[13]
                mobile:bg-white mobile:w-full mobile:h-full" style="display: none">
                    <div class="hidden mobile:flex items-center justify-center h-[60px] bg-white fixed shadow-md mobile:w-full">
                        <p class="text-[18px] leading-[32px] font-medium">
                            Brand
                        </p>
                        <div class="absolute top-[20px] left-[20px]" onclick="clickToggleFlexCol('brands')">
                            <i class="fa fa-arrow-left fa-xl" style="color: #57585a"></i>
                        </div>
                    </div>
                    <div class="w-full absolute top-[50px] left-0 h-[300px] overflow-y-auto
                    border-solid border-[#c5c5c6] border-[1px] rounded-lg bg-white z-[12]
                    mobile:h-full mobile:border-none">
                        @foreach($data['brands'] as $brand)
                            <p class="px-[16px] py-[12px] w-full
                        border-[#f0f0f1] border-solid border-b-[1px]
                        hover:bg-[rgba(0,143,121,0.2)] hover:cursor-pointer"
                               onclick="chooseBrand('{{$brand}}', 'brands', 'brandTexts')">
                                {{$brand}}
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>

{{--          option detail  --}}
            <div class="pt-[16px]">
                <div class="flex items-center justify-between">
                    <p class="text-[24px] leading-[32px] font-bold pt-[8px] pb-[16px] text-[#2c2c2d]">
                        Optional details
                    </p>
                    <div class="p-[8px]" id="show"
                         onclick="clickShowHide('optionalDetail', 'show', 'hide')">
                        <div class="flex items-center justify-center gap-[8px]">
                            <p class="text-[16px] leading-[24px] text-[#008f79] font-bold">
                                Show
                            </p>
                            <i class="fa fa-chevron-down" style="color: #008f79;"></i>
                        </div>
                    </div>

                    <div class="p-[8px]" style="display: none" id="hide"
                    onclick="clickShowHide('optionalDetail', 'hide', 'show')">
                        <div class="flex items-center justify-center gap-[8px]">
                            <p class="text-[16px] leading-[24px] text-[#008f79] font-bold">
                                Hide
                            </p>
                            <i class="fa fa-chevron-up" style="color: #008f79;"></i>
                        </div>
                    </div>
                </div>
                <p class="pb-[20px] text-[14px] leading-[22px] text-[#57585a]">
                    With these details, buyers can find your listing more easily and ask fewer questions.
                </p>
                <div class="relative" id="optionalDetail" style="display: none">
                    <div class="relative" onclick="clickToggleFlexCol('optionalItems')">
                        <input type="text" placeholder="Choose"
                               class="pl-[40px] w-full h-[48px] outline-none
                               border-solid border-[#c5c5c6] border-[1px] rounded-lg
                               focus:ring-[#cce9e4] focus:ring-4 focus:border-[#008f79]" id="optionalChosen">
                        <div class="absolute top-[12px] right-[15px]">
                            <i class="fa fa-chevron-down" style="color: #c5c5c6"></i>
                        </div>
                        <p class="absolute top-[-15px] left-[10px]
                        px-[5px] bg-white text-[14px] leading-[22px] text-[#57585a]">
                            Features (Optional)
                        </p>
                    </div>
                    <div class="shadow-lg absolute bg-white z-[12] w-full top-[50px]" style="display: none" id="optionalItems">
                        @foreach($data['optionals'] as $key => $op)
                           <div class="px-[16px] py-[12px] hover:bg-[#f0f0f1]
                            border-[#f0f0f1] border-solid border-b-[1px]
                            flex justify-between items-center" id="checkBox{{$key}}">
                               <label for="op{{$key}}" class="w-full flex items-center justify-between">
                                   {{$op}}
                                   <div style="display: none" id="check{{$key}}">
                                       <i class="fas fa-check" style="color: #008f79"></i>
                                   </div>
                               </label>
                               <input type="checkbox" hidden id="op{{$key}}"
                                      onclick="chooseOptionals('{{$op}}', 'op{{$key}}', 'check{{$key}}', 'checkBox{{$key}}')">
                           </div>
                        @endforeach
                    </div>
                    <div class="flex pt-[16px]">
                        <input type="checkbox" id="markOption" class="w-[18px] h-[18px] accent-[#026859]">
                        <label for="markOption" class="pl-[8px]" style="background-color: white">
                            <p class="text-[16px] leading-[24px] text-[#2c2c2d]">
                                I have more than one of the same item
                            </p>
                            <p class="text-[14px] leading-[22px] text-[#57585a]">
                                Don't mark listing as reserved when I accept an offer
                            </p>
                        </label>
                    </div>
                </div>
            </div>

{{--            Deal method     --}}
            <div>
                <p class="text-[24px] leading-[32px] font-bold pt-[8px] pb-[16px]">
                    Deal Method
                </p>
                @include('components.user.deal-method')
            </div>

{{--            Payment methods--}}
            <div class="mt-[16px] mobile:hidden">
                <p class="text-[24px] leading-[32px] font-bold pt-[8px] pb-[16px]">
                    Payment Method
                </p>
                <div class="flex items-center justify-start pb-[16px]">
                    <input type="checkbox" id="pro"
                           class="accent-[#026859] w-[18px] h-[18px]
                           checked:ring-[#cce9e4] checked:ring-[2px] mr-[5px]" checked>
                    <label style="background-color: white"
                           class="pl-[8px] w-full"
                           for="pro">
                        Carousell Protection
                    </label>
                </div>
                <div class="pl-[28px]">
                    <div class="flex">
                        <img src="https://mweb-cdn.karousell.com/build/carousell-protection-logo-38XrUGk2B0.svg"
                        class="w-[48px] h-[48px] mr-[24px]">
                        <p class="text-[14px] leading-[22px] text-[#2c2c2d]">
                            Offer Carousell Protection as an additional option for your buyers. Enjoy 0% transaction fee.
                        </p>
                    </div>
                    <div class="mt-[16px] py-[8px] flex items-center justify-evenly
                     bg-[#f0f1f1] rounded-xl">
                        <div class="px-[20px] py-[16px] ">
                            <img src="https://sl3-cdn.karousell.com/components/caroupay_tutorial1_v4.svg"
                                 class="px-[20px] py-[16px] mb-[16px] max-w-[152px]">
                            <p class="text-[14px] leading-[22px] text-[#2c2c2d]">
                                Sell even faster. For free!
                            </p>
                        </div>
                        <div class="px-[20px] py-[16px]">
                            <img src="https://sl3-cdn.karousell.com/components/caroupay_tutorial2_v3.svg"
                                 class="px-[20px] py-[16px] mb-[16px] max-w-[152px]">
                            <p class="text-[14px] leading-[22px] text-[#2c2c2d]">
                                Sell even faster. For free!
                            </p>
                        </div>
                        <div class="px-[20px] py-[16px]">
                            <img src="https://sl3-cdn.karousell.com/components/caroupay_tutorial3_v4.svg"
                                 class="px-[20px] py-[16px] mb-[16px] max-w-[152px]">
                            <p class="text-[14px] leading-[22px] text-[#2c2c2d]">
                                Sell even faster. For free!
                            </p>
                        </div>
                    </div>
                    <div class="w-full flex items-center justify-end mt-[8px]">
                        <a href="/"
                            class="text-[14px] leading-[22px] text-[#008f79]">
                            How to use Carousell Protection
                        </a>
                        <img src="https://mweb-cdn.karousell.com/build/open-in-new-27bn0bVqZR.svg"
                        class="w-[12px] h-[12px] ml-[4px]">
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex items-center justify-end mt-[16px]
        mobile:fixed mobile:w-full mobile:bottom-0 mobile:left-0 mobile:p-[12px]
        mobile:bg-white">
            <button class="bg-[#008f79] rounded-lg text-[16px] leading-[24px]
             px-[16px] py-[8px] text-white font-bold mobile:w-full">
                List now
            </button>
        </div>
    </div>

</div>
