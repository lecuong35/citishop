@extends('Layouts.admin.dashboard')

@section('content')
        @if(Session::has('success'))
            <div class="px-[16px] py-[8px] bg-[#6d6f]">
                <p class="text-white">
                        {{Session::get('success')}}
                    </p>
            </div>
        @endif
    <div class="flex flex-col w-full">
        <div class="overflow-x-auto w-full">
            <div class="py-2 inline-block w-full">
                <div class="overflow-hidden">
                    <div class="pb-[30px] px-[20px]">
                        <p class="text-[20px] leading-[28px] font-bold">
                            Quản lý bài đăng
                        </p>
                    </div>
                    <table class="w-full ml-[30px] mobile:ml-0">
                        <thead class="bg-white border-b mobile:hidden">
                            <tr>
                                <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 ">
                                    ID
                                </th>
                                <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 ">
                                    Hình ảnh sản phẩm
                                </th>
                                <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 ">
                                    Tiêu đề bài đăng
                                </th>
                                <th class="text-sm font-bold text-gray-900 px-6 py-4 ">
                                    Giá sản phẩm
                                </th>
                                <th class="text-sm font-bold text-gray-900 px-6 py-4 ">
                                    Người bán
                                </th>
                                <th class="text-sm font-bold text-gray-900 px-6 py-4 ">
                                    Xem chi tiết
                                </th>
                                <th class="text-sm font-bold text-gray-900 px-6 py-4 ">
                                    Hành động
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($posts as $key=>$post)
                                <!-- destop version  -->
                                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100 mobile:hidden">
                                    <div class="hover:cursor-pointer">
                                        <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$post['id']}}</td>
                                        <td class="flex justify-center items-center px-3 py-4">
                                            @foreach(json_decode($post['post_images']) as $index => $uri)
                                                @if($index == 0)
                                                    <div>
                                                        <img src="{{$uri}}" alt="" style="width:60px; height:60px">
                                                    </div>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-3 py-4 whitespace-nowrap">
                                            {{$post['post_title']}}
                                        </td>
                                        
                                        <td class="text-sm text-gray-900 font-light px-3 py-4 whitespace-nowrap">
                                            {{$post['product_price']}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-3 py-4 whitespace-nowrap">
                                            {{$authors[$key]['name']}}
                                        </td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#confirm{{$post['id']}}"
                                            class=" ml-[20px] px-[16px] py-[8px] bg-[#0d6efd] shadow-md rounded-md text-white">
                                                Chi tiết
                                            </button>
                                        </td>
                                    </div>
                                    <td>
                                        <form method="post" enctype="multipart/form-data" action="./post/{{$post['id']}}/confirm">
                                            @csrf
                                            <button type="submit" 
                                            class=" ml-[20px] px-[16px] py-[8px] bg-[#0d6efd] shadow-md rounded-md text-white mobile:ml-0">
                                                Duyệt
                                            </button>
                                        </form>
                                        <form method="post" enctype="multipart/form-data" action="./post/{{$post['id']}}/delete">
                                            @csrf
                                            <button type="submit" onclick="confirm()"
                                            class=" ml-[20px] px-[16px] py-[8px] bg-[#ec586c] shadow-md rounded-md text-white mobile:ml-0">
                                                Xóa
                                            </button>
                                        </form>
                                    </td>
                                    
                                </tr>

                                <!-- mobile version  -->
                                <div  class="hidden mobile:flex justify-evenly my-[5px] border-b-[1px] border-solid border-[#f0f0f1] py-[5px] overflow-y-auto">
                                    <div class="flex items-center justify-center px-[5px]">
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
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#confirm{{$post['id']}}"
                                            class=" px-[16px] py-[8px] bg-[#0d6efd] shadow-md rounded-md text-white">
                                                Chi tiết
                                            </button>
                                            <form enctype="multipart/form-data" action="./post/{{$post['id']}}/confirm">
                                            
                                                <button type="submit" 
                                                class=" ml-[20px] px-[16px] py-[8px] bg-[#0d6efd] shadow-md rounded-md text-white">
                                                    Duyệt
                                                </button>
                                            </form>
                                            <form method="post" enctype="multipart/form-data" action="./post/{{$post['id']}}/delete">
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
                                id="confirm{{$post['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog relative w-auto pointer-events-none">
                                    <div
                                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                    <div
                                        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">{{$post['post_title']}}</h5>
                                        <button type="button"
                                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body relative p-4">
                                        <div>
                                            <p>Tên sản phẩm: {{$post['product_name']}}</p>
                                            <p>Loại sản phẩm: {{$categories[$key]['name']}}</p>
                                            <p>Thương hiệu sản phẩm: {{$brands[$key]['name']}}</p>
                                            <p>Mô tả sản phẩm: {{$post['product_description']}}</p>
                                            <p>Trạng thái sản phẩm: {{$product_status[$key]['status']}}</p>
                                            <p>Giá sản phẩm: {{$post['product_price']}}</p>
                                            <p>Người bán: {{$authors[$key]['name']}}</p>
                                            <p>Thời gian đăng bài: {{$post['updated_at']}}</p>
                                        </div>
                                        <div class="mt-[16px]">
                                            <p>Hình ảnh sản phẩm</p>
                                            <div class="flex">
                                                @foreach(json_decode($post['post_images']) as $index => $uri)
                                                   
                                                    <div class="mx-[8px]">
                                                        <img src="{{$uri}}" alt="" style="width:90px; height:90px">
                                                    </div>
                                                   
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                        
                                        <form method="post" enctype="multipart/form-data" action="./post/{{$post['id']}}/delete">
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
                                        
                                        
                                        <form method="post" enctype="multipart/form-data" action="./post/{{$post['id']}}/confirm">
                                            @csrf
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
                                            ml-1">Duyệt</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="../js/utility-for-url.js"></script>
    <script>
        function confirm() {
            alert("Xac nhan xoa bai viet?");
        }
    </script>
@endsection

<style>
    #post {
        opacity: 1;
        color: white;
        padding-left: 10px;
        border-left: #fff solid 2px;
    }
</style>