@if(!empty($error))
    @include('components.user.no-product')
@else
    <div class="flex">
        @foreach($posts as $key => $post)
            <!-- @foreach(json_decode($post['post_images']) as $index => $uri)
                <div>
                    <img src="{{$uri}}" alt="" style="width:100px; height:100px">
                </div>
            @endforeach
            <div>
                <p>
                    {{$post['post_title']}}
                </p>
                <p>
                    {{$post['product_name']}}
                </p>
                <p>
                    {{$post['product_description']}}
                </p>
                <p>
                    {{$post['product_price']}}
                </p>

                <p>
                    {{$brands[$key]['name']}}
                </p>
                <p>
                    {{$categories[$key]['name']}}
                </p>
                <p>
                    {{$product_status[$key]['status']}}
                </p>
                <p>
                    {{$post_status[$key]['status']}}
                </p>
                
            </div>
            @if($editable)
                <div>
                    <form action="/user/sale/{{$post['id']}}">
                        <button type="submit">
                            Edit
                        </button>
                    </form>
                </div>

                <div>
                    <form action="/user/sale/{{$post['id']}}/delete" method="post" enctype="multipart/form-data">
                        @csrf
                        <button type="submit" onclick="confirmDelete()">
                            Xoa
                        </button>
                    </form>
                </div>
            @endif -->

            <!-- destop version -->
            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100 mobile:hidden">
                <div class="hover:cursor-pointer">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$post['id']}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-normal text-gray-900">
                        @foreach(json_decode($post['post_images']) as $index => $uri)
                            @if($index < 1)
                                <div>
                                    <img src="{{$uri}}" alt="" style="width:100px; height:100px" class="rounded-sm">
                                </div>
                            @endif
                        @endforeach
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$post['post_title']}}
                    </td>
                    
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$post['product_price']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$categories[$key]['name']}}
                    </td>
                    <td>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#post{{$post['id']}}"
                        class=" ml-[20px] px-[16px] py-[8px] bg-[#0d6efd] shadow-md rounded-md text-white">
                            Chi tiết
                        </button>
                    </td>
                </div>
                <td>
                    <form enctype="multipart/form-data" action="http://127.0.0.1:8000/user/sale/{{$post['id']}}">
                      
                        <button type="submit" 
                        class=" ml-[20px] px-[16px] py-[8px] bg-[#0d6efd] shadow-md rounded-md text-white">
                            Sửa
                        </button>
                    </form>
                    <form method="post" enctype="multipart/form-data" action="http://127.0.0.1:8000/user/sale/{{$post['id']}}/delete">
                        @csrf
                        <button type="submit"
                        class=" ml-[20px] px-[16px] py-[8px] bg-[#ff2636] shadow-md rounded-md text-white">
                            Xóa
                        </button>
                    </form>
                </td>
                
            </tr>

            <!-- mobile version -->
            <div  class="hidden mobile:flex justify-evenly my-[5px] border-b-[1px] border-solid border-[#f0f0f1] py-[5px] overflow-y-auto">
                <div class="flex items-center justify-center">
                    @foreach(json_decode($post['post_images']) as $key2 => $img)
                        @if($key2 == 0) 
                            <img src="{{$img}}" alt="" class="w-[100px] h-[100px] rounded-sm">
                        @endif
                    @endforeach
                </div>
                <div>
                    <p>ID: {{$post['id']}}</p>
                    <p>Tiêu đề bài đăng: {{$post['post_title']}}</p>
                    <p>Giá sản phẩm: {{$post['product_price']}}</p>
                    <p>Loại sản phẩm: {{$categories[$key]['name']}}</p>
                    <p>Hãng: {{$brands[$key]['name']}}</p>
                        
                    <div class="flex mt-[10px]">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#post{{$post['id']}}"
                        class=" px-[16px] py-[8px] bg-[#0d6efd] shadow-md rounded-md text-white">
                            Chi tiết
                        </button>
                        <form enctype="multipart/form-data" action="http://127.0.0.1:8000/user/sale/{{$post['id']}}">
                           
                            <button type="submit" 
                            class=" ml-[20px] px-[16px] py-[8px] bg-[#0d6efd] shadow-md rounded-md text-white">
                                Sửa
                            </button>
                        </form>
                        <form method="post" enctype="multipart/form-data" action="./sale/{{$post['id']}}/delete">
                            @csrf
                            <button type="submit"
                            class=" ml-[20px] px-[16px] py-[8px] bg-[#ff2636] shadow-md rounded-md text-white">
                                Xóa
                            </button>
                        </form>
                    </div>
                </div>
                
            </div>

            <!-- Modal -->
            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                id="post{{$post['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: rgba(0,0,0, 0.3);">
                <div class="modal-dialog relative w-auto pointer-events-none">
                    <div
                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div
                        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">{{$posts[$key]['post_title']}}</h5>
                        <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body relative p-4">
                        <div>
                            <p>Tên sản phẩm: {{$post['product_name']}}</p>
                            <p>Loại sản phẩm: {{$categories[$key]['name']}}</p>
                            <p>Thương hiệu sản phẩm: {{$brands[$key]['name']}}</p>
                            <p>Trạng thái sản phẩm: {{$product_status[$key]['status']}}</p>
                            <p>Giá sản phẩm: {{$post['product_price']}}</p>
                            <p>Trạng thái bài đăng: {{$post_status[$key]['status']}}</p>
                        </div>
                        <div class="mt-[16px]">
                            <p>Hình ảnh sản phẩm</p>
                            <div class="flex">
                                @foreach(json_decode($posts[$key]['post_images']) as $index => $uri)
                                    
                                    <div class="mx-[8px]">
                                        <img src="{{$uri}}" alt="" style="width:90px; height:90px" class="rounded-sm">
                                    </div>
                                    
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div
                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                        
                        <form method="post" enctype="multipart/form-data" action="./sale/{{$post['id']}}/delete">
                            @csrf
                            <button type="submit" class="px-6
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
                            ease-in-out">Xóa</button>
                        </form>
                        
                        
                        <form  enctype="multipart/form-data" action="/user/sale/{{$post['id']}}">
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
                            ml-1">Sửa</button>
                        </form>
                    </div>
                </div>
            </div>
</div>

        @endforeach
    </div>
    <script>
        function confirmDelete() {
            confirm("Xac nhan xoa")
        }
    </script>
@endif
