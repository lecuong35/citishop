<div class="co p-[5px] hover:shadow-2xl flex flex-col justify-between
h-[450px] mobile:h-[385px]
mobile:border-solid
mobile:border-y-[0.5px]
mobile:border-l-[0.5px]
mobile:border-[#f0f1f1]">
    <div>
        <a href="/detail"
           class="bi__header flex flex-row gap-[5px]
                        items-center
                   mb-[8px] px-[10px] mobile:px-0">
            <img src="{{$avatar}}" alt=""
                 class="w-[32px] h-[32px] rounded-full">
            <div class="header__name flex flex-col justify-center">
                <p class="text-[14px] leading-[22px] font-bold text-[#2c2c2d]">
                    {{$user_name}}
                </p>
                <p class="text-[12px] leading-[20px] text-[#57585a]">
                    {{$time}} ngày trước
                </p>
            </div>
        </a>
        <a href="http://127.0.0.1:8000/user/sale/detail/{{$post_id}}"
           class="bi__body px-[5px]
           mobile:px-0
           flex flex-col">
            <img src="{{$imgSrc}}" alt=""
                 class="rounded-md w-[286px]
                  h-[286px] mb-[10px]
                  mobile:w-[179px]
                  mobile:h-[180px]">
            <div class="body__describe mb-[10px]">
                <p class="text-[14px] leading-[22px] text-[#57585a] mb-[8px]">
                    {{$post_title}}
                </p>
                <p class="text-[16px] leading-[24px] text-[#57585a] font-bold">
                    S$ {{$product_price}}
                </p>
                <p class="text-[14px] leading-[22px] text-[#57585a]">
                    {{$product_status}}
                </p>
            </div>
        </a>
    </div>
    <a class="bi__footer flex items-center gap-[5px] mobile:pb-[20px]"
       href="http://www.carousell.sg">
        <i class="far fa-heart" style="color: #57585a"></i>
        <p class="text-[12px] text-[#57585a] leading-[20px]">
            {{$count_buyer}}
        </p>
    </a>
</div>
