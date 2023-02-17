<div class="p-[24px] flex flex-col
rounded-md mt-[60px]
mobile:p-0 mobile:mt-0">
    <div class="bg-[rgba(0,143,121,0.2)]
    h-[296px] max-w-[515px] min-w-[360px]
    border-[1px] border-dashed border-[#008f79]
    flex flex-col items-center justify-center
     mobile:h-[168px] mobile:rounded-lg"
         id="chooseImg">
        <input type="file" multiple id="img" name="post_images[]" hidden onchange="addImg()">
        <label for="img" class="flex flex-col items-center justify-center">
            <div>
                <img class="w-[32px] h-[32px]"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Picture_icon_BLACK.svg/2312px-Picture_icon_BLACK.svg.png"
                style="color: #008f79">
            </div>
            <p class="px-[16px] py-[8px] bg-[#008f79] rounded-lg
            hover:opacity-[0.6] hover:cursor-pointer my-[8px]
            text-[16px] leading-[24px] font-bold text-white">
                Chọn ảnh 
            </p>
            <p>
                hoặc kéo thả vào đây
            </p>
            <p>
                    (Nhiều nhất 10 ảnh)
            </p>
        </label>
    </div>
    <p id="tooPics" style="display: none">Too many photos. Add at most 10.</p>
    <p id="noPics" style="display: none">Select photos.</p>
    <div class="grid grid-cols-3" id="img-box">
        @for($i = 0; $i < 10; $i++)
            <div class="relative p-[8px] shadow-md" id="box{{$i}}" style="display: none"
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
    const dt = new DataTransfer();

    function addImg() {
        // let imgBox = document.getElementById("img-box");
        let files = [];
        files = document.getElementById('img').files;
        // console.log(files.length);


        // document.getElementById("imgText").style.display = "none";

        for(let j = 0; j < files.length; j++) {
            dt.items.add(files[j]);
        }
        console.log(dt.files.length);
        document.getElementById('img').files = dt.files;
        // console.log(files.length);

        for (let i = 0; i < dt.items.length; i++) {
            let img = document.getElementById("img"+i);
            let imgBox = document.getElementById("box"+i);
            let textBox = document.getElementById("text"+i);
            
            textBox.innerHTML = (i+1).toString();
            textBox.style.display = "block";
            imgBox.style.display = "block";
            img.src = URL.createObjectURL(dt.files[i]);
        }
    }

    function delImg(id) {
        for (let i = 0; i < dt.items.length; i++) {
            let img = document.getElementById("img"+i);
            let imgBox = document.getElementById("box"+i);
            let textBox = document.getElementById("text"+i);
            
            textBox.style.display = "none";
            imgBox.style.display = "none";
        }
        dt.items.remove(id);
        document.getElementById('img').files = dt.files;
        console.log(dt.items.length);
        for (let i = 0; i < dt.items.length; i++) {
            let img = document.getElementById("img"+i);
            let imgBox = document.getElementById("box"+i);
            let textBox = document.getElementById("text"+i);
            
            textBox.innerHTML = (i+1).toString();
            textBox.style.display = "block";
            imgBox.style.display = "block";
            img.src = URL.createObjectURL(dt.files[i]);
        }
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
