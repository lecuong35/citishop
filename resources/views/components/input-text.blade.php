<div class="relative">
    <input 
    type="text" 
    name="{{$name}}"
    value="{{$value}}"
    class="outline-none w-full h-[44px] px-[16px] rounded-lg
    border-solid border-[#c5c5c6] mobile:rounded-md
    xl:border-[1px] lg:border-[1px] md:border-[1px] sm:border-[1px]
    mobile:border-[1px] mobile:focus:ring-0
focus:border-[#008f79] focus:ring-4 focus:ring-[#cce9e4]" 
    id="{{$id1}}"
    onclick="clickInputText('{{$id1}}', '{{$id2}}')"
    onblur="blurInputText('{{$id1}}', '{{$id2}}')" 
    onchange="changeValue()">
    <p class="absolute top-[-15px] px-[5px] left-[25px] bg-white
    z-[3] text-[#57585a] text-[14px] leading-[22px]
    mobile:left-[10px]" id="{{$id2}}">
        {{$placeholder}}
    </p>
</div>

<script>
    function changeValue() {
        if(document.getElementById('buttonSave')) {
            document.getElementById("buttonSave").style.backgroundColor = "#008f79";
            document.getElementById("buttonSave").style.cursor = "pointer";
        }

        if(document.getElementById('buttonSaved')) {
            document.getElementById("buttonSaved").style.color = "#008f79";
            document.getElementById("buttonSaved").style.cursor = "pointer";
        }
    }
</script>
