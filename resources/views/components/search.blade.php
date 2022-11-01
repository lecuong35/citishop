@php
    $suggest = Config::get('products.footerLinks');
    $location = Config::get('products.locations');
@endphp
<div class="search flex flex-row justify-between gap-[5px] mobile:hidden z-[10]">
    <div class="search__input1 relative" style="width: calc(100% - 350px)">
        <div class="relative">
            <i class="fa fa-search absolute top-[35%] left-[15px] opacity-60" ></i>
            <input type="text" class="h-[44px] bg-[#f0f1f1] rounded-md
                  pl-[40px] text-[16px] leading-[22px] outline-none w-full
                  focus:ring-[4px] focus:ring-[#cce9e4] focus:bg-white
                  focus:border-[1px] focus:border-solid focus:border-[#008f79]"
                   placeholder="Search for anything and everything"
                   id="input1"
            onclick="myFunction({{json_encode($suggest)}})"
            onblur="yourFunction()">
        </div>
        <div class="absolute top-[50px] z-[9] bg-white w-full
        shadow-2xl rounded-xl" id="suggest__search">
            @foreach($suggest as $su)
                <a href="https://carousell.sg"
                    class="text-[16px] leading-[24px]
                 h-[35px] px-[10px] hover:bg-[#f0f0f1]
                 flex items-center justify-center"
                   id="{{$su}}" style="display: none">
                    {{$su}}
                </a>
            @endforeach
        </div>
    </div>
    <div class="search__input2 w-[350px] relative" id="inputSearch2">
        <input type="checkbox" hidden id="input2__search1" class="ini">
        <label for="input2__search1" class="relative ini"  id="input2__button">
            <i class="fas fa-map-marker-alt absolute top-[15%] left-[10px] opacity-60"></i>
            <input type="text" placeholder="All of Singapore"
            class="h-[44px] bg-[#f0f1f1]
            w-full px-[30px]
            rounded-lg outline-none">
            <button class="bg-[#026958] rounded-lg px-[15px] py-[5px]
            h-[38px] absolute top-[-10px] ml-[-80px]
            text-[14px] leading-[22px] text-white font-bold">
                Search
            </button>
        </label>

        {{-- input 2 suggest--}}
        <div class="input2__suggest absolute top-[50px] z-[10]
        w-[80%] bg-white z-[9] shadow-xl rounded-lg" id="input2__toggle"
        style="display: none">
            <div class="suggest__selected inline-block
            w-full px-[5px]
            overflow-y-auto hidden" id="selected__word">
                @foreach($location as $lo)
                    <div class="rounded-md bg-[#f0f1f1]
                    mb-[5px] mx-0 w-fit
                    px-[5px] py-[3px] flex justify-between hidden"
                    id="mrt1_{{$lo}}">
                        <p class="text-[14px] leading-[20px]">
                            {{$lo}}
                        </p>
                        <i class="fas fa-times ml-[5px]"
                           onclick="removeItemMrt({{json_encode($lo)}})"></i>
                    </div>
                @endforeach

                    @foreach($location as $lo)
                        <div class="rounded-md bg-[#f0f1f1]
                    mb-[5px] mx-0 w-fit
                    px-[5px] py-[3px] flex justify-between hidden"
                             id="area1_{{$lo}}">
                            <p class="text-[14px] leading-[20px]">
                                {{$lo}}
                            </p>
                            <i class="fas fa-times ml-[5px]"
                               onclick="removeItemArea({{json_encode($lo)}})"></i>
                        </div>
                    @endforeach

                    @foreach($location as $lo)
                        <div class="rounded-md bg-[#f0f1f1]
                    mb-[5px] mx-0 w-fit
                    px-[5px] py-[3px] flex justify-between hidden"
                             id="nbh1_{{$lo}}">
                            <p class="text-[14px] leading-[20px]">
                                {{$lo}}
                            </p>
                            <i class="fas fa-times ml-[5px]"
                               onclick="removeItemNbh({{json_encode($lo)}})"></i>
                        </div>
                    @endforeach
            </div>

            <div class="suggest__location my-[10px]">
                <div class="flex px-[20px] py-[5px] mb-[10px] hover:bg-[#f0f0f1] items-center ">
                   <img src="https://mweb-cdn.karousell.com/build/current-location-14BeLMAJ9Q.svg"
                   class="w-[16px] h-[16px] mr-[20px]" alt="asd">
                    <p class="text-[#2c2c2d] text-[16px] leading-[22px]">
                        Listing near me
                    </p>
                </div>
                <div class="flex px-[20px] py-[5px] hover:bg-[#f0f0f1] items-center ">
                   <img src="https://mweb-cdn.karousell.com/build/location-marker-3oFjIUvG4o.svg"
                        class="w-[16px] h-[16px] mr-[20px]" alt="sadf">
                    <p class="text-[#2c2c2d] text-[16px] leading-[22px]">
                        All of Singapore
                    </p>
                </div>
            </div>

            <div class="suggest__recent mb-[10px]">
                <p class="text-[#6d6e71] text-[14px] leading-[22px] mb-[10px] ml-[20px]">Recent</p>
               <div class="flex hover:bg-[#f0f0f1] py-[5px] px-[20px]">
                   <img src="https://mweb-cdn.karousell.com/build/clock-2QIIRh0xeB.svg"
                        class="w-[16px] h-[16px] mr-[20px]" alt="">
                   <p class="text-[#2c2c2d] text-[16px] leading-[22px]">
                       102 Thai Thinh
                   </p>
               </div>
            </div>

            {{-- suggest words list--}}
            <div class="suggest__checkbox">
                <p class="text-[#6d6e71] text-[14px] leading-[22px] mb-[10px] ml-[20px]">Recent</p>
                <div class="mrt flex items-center justify-between hover:bg-[#f0f0f1] py-[5px] px-[20px] mb-[10px]">
                    <div class="flex items-center">
                        <img src="https://mweb-cdn.karousell.com/build/location-mrt-1ByybWDm38.svg"
                             class="w-[16px] h-[16px] mr-[20px]" alt="">
                        <p class="text-[#2c2c2d] text-[16px] leading-[22px]">
                            MRT
                        </p>
                    </div>
                    <i class="fa fa-chevron-right opacity-60"></i>
                </div>
                <div class="mrt__toggle h-[450px] w-[300px]
                absolute top-0 right-[-108%] hidden
                overflow-y-auto shadow-xl py-[20px] opacity-0
                bg-white rounded-xl z-[9]" style="transition: opacity .5s ease-in-out">
                    @foreach($location as $lo)
                        <div class="py-[10px] pl-[20px] flex items-center hover:bg-[#f0f0f1]">
                            <input type="checkbox" id="mrt_{{$lo}}"
                                   class="rounded-lg w-[20px] h-[20px] mr-[10px]"
                            onclick="isCheckMrt({{json_encode($lo)}})">
                            <label for="mrt{{$lo}}" class="text-[16px] leading-[22px] text-[#2c2c2d]">
                                {{$lo}}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="area flex items-center justify-between hover:bg-[#f0f0f1] py-[5px] px-[20px] mb-[10px]">
                    <div class="flex items-center">
                        <img src="https://mweb-cdn.karousell.com/build/location-mrt-1ByybWDm38.svg"
                             class="w-[16px] h-[16px] mr-[20px]" alt="">
                        <p class="text-[#2c2c2d] text-[16px] leading-[22px]">
                            Area
                        </p>
                    </div>
                    <i class="fa fa-chevron-right opacity-60"></i>
                </div>
                <div class="area__toggle h-[450px] w-[300px]
                absolute top-0 right-[-108%] hidden
                overflow-y-auto shadow-xl py-[20px] opacity-0
                bg-white rounded-xl z-[9]" style="transition: opacity .5s ease-in-out">
                    @foreach($location as $lo)
                        <div class="py-[10px] pl-[20px] flex items-center hover:bg-[#f0f0f1]">
                            <input type="checkbox" id="area_{{$lo}}"
                                   class="rounded-lg w-[20px] h-[20px] mr-[10px]"
                                   onclick="isCheckArea({{json_encode($lo)}})">
                            <label for="area_{{$lo}}" class="text-[16px] leading-[22px] text-[#2c2c2d]">
                                {{$lo}}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="neighbourhood flex items-center justify-between hover:bg-[#f0f0f1] py-[5px] px-[20px] mb-[10px]">
                    <div class="flex items-center">
                        <img src="https://mweb-cdn.karousell.com/build/location-mrt-1ByybWDm38.svg"
                             class="w-[16px] h-[16px] mr-[20px]" alt="">
                        <p class="text-[#2c2c2d] text-[16px] leading-[22px]">
                            Neighbourhood
                        </p>
                    </div>
                    <i class="fa fa-chevron-right opacity-60"></i>
                </div>
                <div class="neighbourhood__toggle h-[450px] w-[300px]
                absolute top-0 right-[-108%] hidden
                overflow-y-auto shadow-xl py-[20px] opacity-0
                bg-white rounded-xl z-[9]" style="transition: opacity .5s ease-in-out">
                    @foreach($location as $lo)
                        <div class="py-[10px] pl-[20px] flex items-center hover:bg-[#f0f0f1]">
                            <input type="checkbox" id="nbh_{{$lo}}"
                                   class="rounded-lg w-[20px] h-[20px] mr-[10px]"
                                   onclick="isCheckNbh({{json_encode($lo)}})">
                            <label for="nbh_{{$lo}}" class="text-[16px] leading-[22px] text-[#2c2c2d]">
                                {{$lo}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="./js/search.js"></script>
</div>

<style>
   .mrt:hover ~ .mrt__toggle {
       display: block;
       opacity: 1;
   }
   .mrt__toggle:hover {
       display: block;
       opacity: 1;
   }

   .area:hover ~ .area__toggle {
       display: block;
       opacity: 1;
   }
   .area__toggle:hover {
       display: block;
       opacity: 1;
   }

   .neighbourhood:hover ~ .neighbourhood__toggle {
       display: block;
       opacity: 1;
   }
   .neighbourhood__toggle:hover {
       display: block;
       opacity: 1;
   }
</style>
