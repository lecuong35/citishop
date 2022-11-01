@php
    $links = Config::get('products.footerLinks');
    $flags = Config::get('products.footerFlags');
@endphp
<div class="footer mobile:w-[98%] mx-auto">
    <div class="footer__banner mobile:hidden">
        <div class="banner__items flex justify-center items-center mb-[100px]">
            <img src="https://storage.googleapis.com/carousell-sl/homescreens/main/carousell_qrcode_cats.png"
            class="">
            <div class="flex flex-col justify-evenly">
                <p class="text-[38px] leading-[46px] font-bold text-white mb-[30px]">
                    Everyone Wins on Carousell
                </p>
                <p class="text-[20px] leading-[28px] text-white mb-[20px]">
                    Unlock exclusive features when you download the Carousell app today!
                </p>
                <div class="flex">
                    <div class="mr-[20px]">
                        <a href="https://carousell.sg/">
                            <img src="https://storage.googleapis.com/carousell-sl/homescreens/main/carousell_qrcode_apple_store.svg"
                            class="mb-[20px]">
                        </a>
                        <a href="https://carousell.sg/">
                            <img src="https://storage.googleapis.com/carousell-sl/homescreens/main/carousell_qrcode_gplay.svg">
                        </a>
                    </div>
                    <img src="https://storage.googleapis.com/carousell-sl/homescreens/main/carousell_qrcode_branch.png"
                    class="w-[122px] h-auto px-[10px] py-[10px]
                    bg-white rounded-md">
                </div>
            </div>
        </div>
    </div>
    <div class="footer__links mb-[30px] mx-auto
        xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full
        xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:mx-0">
        <p class="text-[12px] leading-[20px] font-bold mb-[20px]">
            Top searches
        </p>
       <div class="mb-[20px]">
           @foreach($links as $link)
               <a href="http://carousell.sg" class="text-[12px] leading-[20px] text-[#00bfa2]">
                   {{$link}}
               </a>
               <span>|</span>
           @endforeach
       </div>

        <hr>
    </div>

    <div class="footer__links mb-[30px]
        xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full
        xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:ml-0">
        <label class="mobile:flex mobile:justify-between">
            <p class="text-[12px] leading-[20px] font-bold mb-[10px]">
                Popular Used Car By Brand
            </p>
            <i class="fa fa-chevron-down
            xl:hidden lg:hidden md:hidden sm:hidden
            mobile:block"></i>
        </label>

        <div>
            @foreach($links as $link)
                <a href="http://carousell.sg" class="text-[12px] leading-[20px] text-[#57585a] hover:text-[#00bfa2] hover:underline">
                    {{$link}}
                </a>
                <i class="fa fa-circle scale-[0.4]"></i>
            @endforeach
        </div>
    </div>
    <div class="footer__links mb-[30px]
        xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full
        xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:ml-0">
        <p class="text-[12px] leading-[20px] font-bold mb-[10px]">
            Popular Used Car By Brand
        </p>
        @foreach($links as $link)
            <a href="http://carousell.sg" class="text-[12px] leading-[20px] text-[#57585a] hover:text-[#00bfa2] hover:underline">
                {{$link}}
            </a>
            <i class="fa fa-circle scale-[0.4]"></i>
        @endforeach
    </div>
    <div class="footer__links mb-[30px]
        xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full
        xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:ml-0">
        <p class="text-[12px] leading-[20px] font-bold mb-[10px]">
            Popular Used Car By Brand
        </p>
        @foreach($links as $link)
            <a href="http://carousell.sg" class="text-[12px] leading-[20px] text-[#57585a] hover:text-[#00bfa2] hover:underline">
                {{$link}}
            </a>
            <i class="fa fa-circle scale-[0.4]"></i>
        @endforeach
    </div>
    <div class="footer__links mb-[30px]
        xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full
        xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:ml-0">
        <p class="text-[12px] leading-[20px] font-bold mb-[10px]">
            Popular Used Car By Brand
        </p>
        @foreach($links as $link)
            <a href="http://carousell.sg" class="text-[12px] leading-[20px] text-[#57585a] hover:text-[#00bfa2] hover:underline">
                {{$link}}
            </a>
            <i class="fa fa-circle scale-[0.4]"></i>
        @endforeach
    </div>
    <div class="footer__links mb-[30px]
        xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full
        xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:ml-0">
        <p class="text-[12px] leading-[20px] font-bold mb-[10px]">
            Popular Used Car By Brand
        </p>
        @foreach($links as $link)
            <a href="http://carousell.sg" class="text-[12px] leading-[20px] text-[#57585a] hover:text-[#00bfa2] hover:underline">
                {{$link}}
            </a>
            <i class="fa fa-circle scale-[0.4]"></i>
        @endforeach
    </div>
    <div class="footer__links mb-[30px]
        xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full
        xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:ml-0">
        <p class="text-[12px] leading-[20px] font-bold mb-[10px]">
            Popular Used Car By Brand
        </p>
        @foreach($links as $link)
            <a href="http://carousell.sg" class="text-[12px] leading-[20px] text-[#57585a] hover:text-[#00bfa2] hover:underline">
                {{$link}}
            </a>
            <i class="fa fa-circle scale-[0.4]"></i>
        @endforeach
    </div>
    <hr>

    <div class="end grid grid-cols-[60%_40%] gap-[10px] mt-[20px]
    xl:w-[70%] lg:w-[90%] md:w-[90%] sm:w-full mobile:w-full
    xl:ml-[15%] lg:ml-[5%] md:ml-[5%] sm:w-full mobile:ml-0">
        <div class="flex justify-between items-center gap-[80px]">
            <div class="flex">
                <img src="https://play-lh.googleusercontent.com/kKAzG4q6hhx6dprYBdzFTsUeZocqwsuTL-dvuotPjHDaP1CdBdS2wO8VeQzTntNIo7-u"
                class="w-[32px] h-[32px]">
                <p class="text-[12px] leading-[20px] text-[#57585a]">
                    © 2022 <br>
                    Carousell
                </p>
            </div>
            <div class="block mobile:hidden">
                @foreach($links as $key => $link)
                   @if($key < 7)
                        <a href="http://carousell.sg" class="text-[12px] leading-[20px] text-[#57585a] hover:text-[#00bfa2] hover:underline">
                            Contact Us
                        </a>
                        <i class="fa fa-circle scale-[0.4]"></i>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="flex justify-between items-center">
            <div class="flex gap-[5px] mobile:hidden">
                @foreach($flags as $flag)
                    <a href="http://carousell.sg">
                        <img src="{{$flag}}" class="w-[24px] h-[24px]">
                    </a>
                @endforeach
            </div>
            <div>
                <select class="bg-white outline-none
                border-solid border-[.5px] border-[#57585a]
                hover:ring-[4px] hover:ring-[#cce9e4] hover:border-[#008f79]" style="height: 30px">
                    <option value="english">English</option>
                    <option value="chinese1">繁體中文 (台灣)</option>
                    <option value="chinese2">繁體中文</option>
                    <option value="indonesian">Bahasa Indonesia</option>
                </select>
            </div>
        </div>
    </div>
</div>

<style>
    .banner__items {
        background-image: url("https://storage.googleapis.com/carousell-sl/homescreens/main/carousell_qrcode_background.png");
        background-repeat: no-repeat;
        background-size: cover;
        width: calc(100vw - 15px);
    }
</style>
