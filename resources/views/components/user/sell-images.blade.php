<div class="p-[24px] flex flex-col
rounded-md mt-[160px]
mobile:p-0 mobile:mt-0">
    <div class="hidden mobile:block" id="mobileImg"
         onclick="clickAddImg('imgText', 'chooseImg', 'sellForm', 'mobileImg', 'sellToCarousell', 'category')">
           <p class="text-[18px] leading-[26px] font-bold text-[#2c2c2d] mb-[24px]">
               List anything yourself
           </p>
       <div class="flex flex-col items-center justify-center h-[112px] p-[8px]
       border-solid border-[#f0f0f1] border-[1px] rounded-md">
           <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Picture_icon_BLACK.svg/2312px-Picture_icon_BLACK.svg.png"
                class="w-[32px] h-[32px]" style="opacity: 0.75">
           <p class="text-[16px] leading-[24px] text-[#57585a]">
               Add a photo to start listing
           </p>
       </div>
    </div>
    <div class="flex flex-col mobile:hidden" id="imgText">
        <div class="mobile:flex mobile:h-[60px] mobile:bg-white mobile:items-center mobile:justify-center
        mobile:fixed mobile:w-full mobile:top-0 mobile:left-0 mobile:z-[9]">
            <div class="hidden mobile:block absolute top-[20px] left-[20px]"
                 onclick="clickAddImg('imgText', 'chooseImg', 'sellForm', 'mobileImg', 'sellToCarousell')">
                <i class="fa fa-arrow-left fa-xl" style="color: #57585a"></i>
            </div>
            <p class="text-[#2c2c2d] text-[20px] leading-[28px] font-bold mr-[8px] mobile:text-[16px]">
                List it yourself
            </p>
        </div>
        <div class="mb-[24px] mobile:hidden">
            <p class="text-[#2c2c2d] text-[14px] leading-[22px]">
                Find your own buyers
            </p>
        </div>
    </div>
    <div class="bg-[rgba(0,143,121,0.2)]
    h-[296px] max-w-[515px] min-w-[360px]
    border-[1px] border-dashed border-[#008f79]
    flex flex-col items-center justify-center
    mobile:hidden mobile:h-[168px] mobile:rounded-lg"
         id="chooseImg">
        <input type="file" multiple id="img" hidden onchange="addImg()">
        <label for="img" class="flex flex-col items-center justify-center">
            <div>
                <img class="w-[32px] h-[32px]"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Picture_icon_BLACK.svg/2312px-Picture_icon_BLACK.svg.png"
                style="color: #008f79">
            </div>
            <p class="px-[16px] py-[8px] bg-[#008f79] rounded-lg
            hover:opacity-[0.6] hover:cursor-pointer my-[8px]
            text-[16px] leading-[24px] font-bold text-white">
                Select photos
            </p>
            <p>
                or drag photos here
            </p>
            <p>
                    (Up to 10 photos)
            </p>
        </label>
    </div>
    <p id="tooPics" style="display: none">Too many photos. Add at most 10.</p>
    <p id="noPics" style="display: none">Select photos.</p>
    <div class="grid grid-cols-3" id="img-box">
        @for($i = 0; $i < 10; $i++)
            <div class="relative p-[8px]" id="box{{$i}}" style="display: none"
            onmouseover="hover('text{{$i}}', 'trash{{$i}}')" onmouseout="hover('text{{$i}}', 'trash{{$i}}')">
                <img src="#" id="img{{$i}}"
                class="w-[114px] h-[114px]">
                <div class="absolute top-[10px] left-[10px]
                flex justify-center items-center
                 w-[32px] h-[32px] bg-[#2c2c2d] rounded-full
                hover:opacity-[0.6] hover:cursor-pointer" onclick="delImg('{{$i}}')">
                    <i class="fas fa-trash-alt fa-md"
                       id="trash{{$i}}" style="display: none; color: white"></i>
                    <p id="text{{$i}}"
                       class="text-[14px] leading-[22px]
                       rounded-full text-white font-bold">

                    </p>
                </div>
            </div>
        @endfor
    </div>
</div>

<script>
    let index = 0;
    function addImg() {
        let imgBox = document.getElementById("img-box");
        let files = [];
        files = document.getElementById('img').files;
        console.log(files.length);

        document.getElementById("sellForm").style.display = "block";
        document.getElementById("sellToCarousell").style.display = "none";
        document.getElementById("imgText").style.display = "none";

        if(files.length > 0) {
            for(let i = 0; i < files.length; i++) {
                if(index < 10) {
                    let img = document.getElementById("img"+index);
                    let imgBox = document.getElementById("box"+index);
                    let textBox = document.getElementById("text"+index);
                    textBox.innerHTML = (index+1).toString();
                    textBox.style.display = "block";
                    imgBox.style.display = "block";
                    img.src = URL.createObjectURL(files[i]);
                    index = index + 1;
                }
                else {
                    document.getElementById("tooPics").style.display = "block";
                }
            }
            console.log(index);
        }
    }

    function delImg(id) {
        document.getElementById('box'+id).style.display = "none";
        let img = document.getElementById("img"+id);
        img.src = "";
        for(let i = id; i < 10; i++) {
            if(document.getElementById("text"+i)) {
                let content = document.getElementById("text"+i).innerHTML;
                content = parseInt(content) -1;
                content = content.toString();
                document.getElementById("text"+i).innerHTML = content;
            }
        }
        index = index - 1;
        // if(index < 0) index = 0;
        console.log(index);
    }

    function hover(textId, trashId) {
        let text = document.getElementById(textId);
        let trash = document.getElementById(trashId);

        if(text.style.display === "none") {
            text.style.display = "block";
            trash.style.display = "none";
        }
        else {
            text.style.display = "none";
            trash.style.display = "block";
        }
    }
</script>
