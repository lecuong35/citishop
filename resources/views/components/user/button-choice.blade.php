<div class="mobile:p-[12px] mobile:border-[#c5c5c6] mobile:h-[90px] mobile:border-solid mobile:border-b-[1px] mobile:relative"
onclick="chooseBrand('{{$content}}', 'condition123','conditionText')">
    <input type="radio" name="{{$name}}" id="{{$id}}" hidden>
    <label for="{{$id}}"
    class="px-[16px] py-[12px] text-[16px] leading-[24px] text-[#2c2c2d]
    border-[#c5c5c6] border-solid border-[1px] rounded-full
    mobile:border-none
    mobile:p-0 mobile:text-[18px] mobile:leading-[28px] mobile:text-[#2c2c2d] mobile:font-bold">
            {{$content}}
    </label>

    <div id="{{$textId}}" class="flex conditionText hidden absolute top-[38px] left-0 mobile:block mobile:px-[12px]">
        <div class="mobile:hidden mr-[8px]">
            <i class="fas fa-info-circle" style="color: #c5c5c6"></i>
        </div>
        <p class="text-[14px] leading-[22px] text-[#57585a] mobile:text-[16px] mobile:leading-[24px]">
            {{$textContent}}
        </p>
    </div>
</div>

<style>
    input:checked ~ label {
        background-color: rgba(0,143,121,.2);
        border-color: #026958;
        color: #026958;
    }

    input:checked ~ .conditionText {
        display: flex;
    }
</style>
