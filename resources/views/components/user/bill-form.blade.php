<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto bg-[rgba(0,0,0,0.35)] mobile:top-[30px]"
  id="bill-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog relative w-auto pointer-events-none mobile:top-[30%]">
    <div
      class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Đặt đơn cho sản phẩm</h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- bill form -->
      <form action="http://127.0.0.1:8000/user/my-bill" method="post" enctype="multipart/form-data">
        @csrf 
        <div class="modal-body relative p-4">
            <input type="text" hidden name="post_id" value="{{$post['id']}}">
            <input type="text" hidden name="seller_id" value="{{$post['seller_id']}}">
            <div>
              <label for="time" class="text-black font-normal">Chọn thời gian nhận</label>
              <input type="date" id="time" name="time_receive" 
              class="outline-none border-[#c5c5c6] px-[8px] py-[2px] text-black font-normal
              w-full border-[1px] rounded-md focus:border-[#008f79] focus:ring-[4px] focus:ring-[#cce9e4]">
            </div>
            <div class="mt-4">
              <label for="location" class="text-black font-normal">Chọn vị trí nhận hàng</label>
              <input type="text" id="location" name="location_receive" 
              class="outline-none border-[#c5c5c6] px-[8px] py-[2px] text-black font-normal
              w-full border-[1px] rounded-md focus:border-[#008f79] focus:ring-[4px] focus:ring-[#cce9e4]">
            </div>
        </div>



        <div
          class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
          <button type="button" class="px-6
            py-2.5
            bg-purple-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-purple-700 hover:shadow-lg
            focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-purple-800 active:shadow-lg
            transition
            duration-150
            ease-in-out" data-bs-dismiss="modal">Exit</button>
          <button type="submit" class="px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out
            ml-1">Mua</button>
        </div>
      </form>
    </div>
  </div>
</div>