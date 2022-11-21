<div class="modal fade fixed top-0 left-0 w-full h-full
                outline-none overflow-x-hidden overflow-y-auto
                flex justify-start"
     style="background-color: rgba(0, 0, 0, 0.5); display: none;"
     id="moreFilter" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog relative max-w-[440px] pointer-events-none
                    my-0 mt-0
                    mobile:m-0 ml-[calc(100%-440px)]
                    z-[1]" >
        <div class="modal-content border-none shadow-lg relative
                            flex flex-col w-full pointer-events-auto bg-white
                            bg-clip-padding rounded-none outline-none text-current" id="modalContent1">
            <div
                class="modal-header flex flex-shrink-0 items-center
                                fixed w-full bg-white z-[10]
                                justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800"
                    id="exampleModalLabel2">Filters and Sort</h5>
                <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black
                                        border-none rounded-none opacity-50 focus:shadow-none
                                        focus:outline-none focus:opacity-100 hover:text-black
                                        hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative mt-[70px] h-fit px-[24px] mb-[40px]">
                <p class="text-[20px] leading-[28px] text-[#2c2c2d] font-bold">
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
            <div class="relative p-4 mt-[20px] h-fit px-[24px]">
                <div class="block">
                    <p class="text-[20px] leading-[28px] text-[#2c2c2d] font-bold hidden mobile:block">
                        Product Detail
                    </p>
                    <p class="text-[20px] leading-[28px] text-[#2c2c2d] font-bold
                                        mobile:text-[16px] mobile:font-normal">
                        Brand
                    </p>
                    <div class="hidden mobile:flex justify-between items-center py-[3px]
                                        border-solid border-b-[1px] border-[#c5c5c6]" onclick="clickToggle('brandModal')">
                        <p id="brandModalText">
                            Select
                        </p>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </div>
                @include('components.modal-checkbox', ['id' => 'brandModal', 'title' => 'Brand', 'data' => $data['brands']])

                <div class="flex flex-col w-full mt-[8px]
                mobile:hidden">
                    @foreach($data['brands'] as $ren)
                        <div class="mb-[8px] flex items-center gap-[10px] w-full">
                            <input type="checkbox" id="{{$ren}}" class="accent-[#026859] w-[18px] h-[18px]">
                            <label for="{{$ren}}">{{$ren}}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="relative mt-[20px] h-fit px-[24px] mb-[40px]" id="genderModal">
                <p class="text-[20px] leading-[28px] text-[#2c2c2d] font-bold">
                    Gender
                </p>
                @foreach($data['genders'] as $ca)
                    <div class=" px-[10px] flex items-center
                                    bg-white hover:bg-[#f0f0f1] py-[5px]" id="{{$ca}}">
                        <input type="checkbox" name="brand"
                               class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                               id="gender1{{$ca}}">
                        <label for="gender1{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                    </div>
                @endforeach
            </div>
            <div class="relative mt-[20px] h-fit px-[24px] mb-[40px]" id="typeModal">
                <p class="text-[20px] leading-[28px] text-[#2c2c2d] font-bold">
                    Type
                </p>
                @foreach($data['types'] as $ca)
                    <div class=" px-[10px] flex items-center
                                    bg-white hover:bg-[#f0f0f1] py-[5px]" id="{{$ca}}">
                        <input type="checkbox" name="brand"
                               class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                               id="type1{{$ca}}">
                        <label for="type1{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                    </div>
                @endforeach
            </div>
            <div class="relative mt-[20px] h-fit px-[24px] mb-[40px]" id="accessModal">
                <p class="text-[20px] leading-[28px] text-[#2c2c2d] font-bold">
                    Accessories
                </p>
                @foreach($data['accessories'] as $ca)
                    <div class=" px-[10px] flex items-center
                                    bg-white hover:bg-[#f0f0f1] py-[5px]" id="{{$ca}}">
                        <input type="checkbox" name="brand"
                               class="text-[16px] leading-[24px] text-[#2c2c2d]
                                       w-[20px] h-[20px] mr-[15px] accent-[#026859]"
                               id="access1{{$ca}}">
                        <label for="access1{{$ca}}" class="text-[16px] leading-[24px]">{{$ca}}</label>
                    </div>
                @endforeach
            </div>
            <div class="relative mt-[20px] h-fit px-[24px] mb-[40px]" id="conditionModal">
                <p class="text-[20px] leading-[28px] text-[#2c2c2d] font-bold">
                    Condition
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
            <div class="px-[24px] mb-[40px]" id="priceModal">
                <p class="text-[20px] leading-[28px] font-bold mb-[20px]">Price</p>
                <div class="flex justify-between gap-[20px] mobile:flex-col">
                    <div class="relative basis-2/5">
                        <input type="text"
                               class="pl-[30px] pr-[5px] py-[5px] outline-none h-[44px]
                                        border-solid border-[1px] border-[#c5c5c6] w-[150px] mobile:w-full
                                        focus:border-[#026958]" id="minimumInput">
                        <p class="absolute top-[10px] left-[5px]">S$</p>
                        <p class="text-[#c5c6c6] absolute top-[10px] left-[35px]
                                        bg-white" id="minimum">
                            Minimum</p>
                    </div>

                    <div class="relative basis-2/5">
                        <input type="text"
                               class="pl-[30px] pr-[5px] py-[5px] outline-none h-[44px]
                                           border-solid border-[1px] border-[#c5c5c6] w-[150px] mobile:w-full
                                           focus:border-[#026958]" id="maximumInput">
                        <p class="absolute top-[10px] left-[5px]">S$</p>
                        <p class="text-[#c5c6c6] absolute top-[10px] left-[35px]
                                        bg-white" id="maximum">
                            Maximum</p>
                    </div>
                </div>

            </div>

            <div class="flex items-center justify-between px-[24px] mb-[40px]" id="shipModal">
                <p class="text-[20px] leading-[28px] font-bold">Free shipping</p>
                <div class="px-[2px] py-[2px] bg-[#f0f1f1] rounded-full w-[60px]
                      h-fit flex items-center"
                     id="bgShip"
                     style="background-color: rgb(240 241 241 / var(--tw-bg-opacity))"
                     onclick="changeBg('bgShip', 'ship')">
                    <div class="flex items-center justify-center h-fit">
                        <i class="fas fa-circle fa-xl
                                  px-[2px] py-[2px]"
                           style="color: white; "
                           id="ship"></i>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between mt-[20px] px-[24px] mb-[40px]" id="carousellModal">
                <div class="flex gap-[10px]">
                    <img src="https://sl3-cdn.karousell.com/components/Caroupay_v4.svg" class="w-[32px] h-[32px]">
                    <p class="text-[20px] leading-[28px] font-bold">Carousell Protection</p>
                </div>
                <div class="px-[2px] py-[2px] bg-[#f0f1f1] rounded-full w-[60px]
                           h-fit flex items-center"
                     id="bgPro"
                     style="background-color: rgb(240 241 241 / var(--tw-bg-opacity))"
                     onclick="changeBg('bgPro', 'pro')">
                    <div class="flex items-center h-fit justify-center">
                        <i class="fas fa-circle fa-xl
                        px-[2px] py-[2px]"
                           style="color: white;"
                           id="pro"></i>
                    </div>
                </div>
            </div>

            <div class=" mt-[30px] px-[24px] mb-[40px]" id="dealModal">
                <p class="text-[20px] leading-[20px] font-bold mb-[20px]">
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
            <hr>

            <div class="flex gap-[10px] items-center brand
                            justify-end mt-[10px] px-[20px]
                            w-[440px] h-[70px]
                            mobile:w-full mobile:py-[10px] mobile:shadow-xl
                            fixed bottom-0 bg-white" id="footerModal">
                <button class="px-[20px] py-[10px] rounded-lg
                                border-[1px] border-solid border-[#c5c5c6]
                                text-[18px] leading-[24px] font-bold bg-white
                                hover:bg-[#f0f0f1] mobile:hidden">
                    Clear
                </button>

                <button class="px-[20px] py-[10px] rounded-lg
                                border-[1px] border-solid border-[#c5c5c6]
                                text-[18px] leading-[24px] font-bold text-white
                                bg-[#026958] mobile:w-full mobile:py-[5px]
                                hover:opacity-[0.6]" data-bs-dismiss="modal" aria-label="Close">
                    Apply
                </button>
            </div>



        </div>
    </div>
</div>
