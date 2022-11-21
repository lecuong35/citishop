<div class="mt-[16px] flex items-center gap-[10px] w-full
           border-solid border-[#c5c5c6]" onclick="changePrivacy()">
    <input type="checkbox" id="{{$id}}" class="accent-[#026859] w-[18px] h-[18px] pr-[29px]" {{$check}}>
    <label for="{{$id}}" class="text-[#2c2c2d]
    text-[16px] leading-[24px]
    inline-block whitespace-nowrap">{{$content}}</label>
</div>

<script>
    function changePrivacy() {
        if(document.getElementById('buttonSave')) {
            document.getElementById("buttonSave").style.backgroundColor = "#008f79";
            document.getElementById("buttonSave").style.cursor = "pointer";
        }
    }

    function changeSaveSetting() {
        if(document.getElementById('buttonSaved')) {
            document.getElementById("buttonSaved").style.color = "#008f79";
            document.getElementById("buttonSaved").style.cursor = "pointer";
        }
    }
</script>
