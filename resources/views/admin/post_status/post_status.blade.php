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
                    <div class="flex items-center justify-between pb-[30px]">
                        <div class="pl-[20px]">
                            <p class="text-[18px] leading-[24px] font-bold">
                                Quản lý trạng thái bài đăng
                            </p>
                        </div>
                        <form id="addKind" action="">
                            <button type="submit" 
                            class=" ml-[20px] px-[16px] py-[8px] bg-[#0d6efd] shadow-md rounded-md text-white"
                            onclick="getAddURL('/admin/post-status/create', 'addKind')">
                                Thêm trạng thái
                            </button>
                        </form>
                    </div>
                    <table class="w-full ml-[30px] mobile:ml-0">
                        <thead class="bg-white border-b">
                            <tr>
                                <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 ">
                                    ID
                                </th>
                                <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 ">
                                    Trạng thái
                                </th>
                                <th class="text-sm font-bold text-gray-900 px-6 py-4 ">
                                    Hành động
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <!-- add -->
                            <tr id="addKind" class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    N/A
                                </td>
                                <form action="http://127.0.0.1:8000/admin/post-status" 
                                id="addKind" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <input type="text" 
                                        class="h-[40px] rounded-md px-[8px] outline-none border-[1px] border-[#c5c5c6] border-solid
                                        focus:border-[#008f79] focus:ring-[4px] focus:ring-[#cce9e4]" 
                                        name="status" placeholder="Trạng thái" required>
                                    </td>
                                    <td>
                                        <button type="submit" id="buttonAdd"
                                        class="mobile:ml-0 ml-[20px] px-[16px] py-[8px] bg-[#0d6efd] shadow-md rounded-md text-white">
                                            Thêm
                                        </button>
                                    </td>
                                </form>
                            </tr>
                            @foreach($postStatus as $kindItem)
                                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$kindItem['id']}}</td>
                                    <form action="http://127.0.0.1:8000/admin/post-status/{{$kindItem['id']}}" 
                                    id="kind{{$kindItem['id']}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <input type="text" 
                                            class="h-[40px] rounded-md px-[8px] outline-none border-solid focus:border-[1px]
                                             focus:border-[#008f79] focus:ring-[4px] focus:ring-[#cce9e4]
                                             mobile:border-[1px] mobile:border-[#c5c5c6]" 
                                            name="status" value="<?php echo $kindItem->status ?>"
                                            onclick="update('button{{$kindItem['id']}}')"
                                            onblur="blurUpdate('button{{$kindItem['id']}}')">
                                        </td>
                                        <td>
                                            <button type="submit" id="button{{$kindItem['id']}}"
                                            class="mobile:ml-0 ml-[20px] px-[16px] py-[8px] bg-[#c5c5c6] shadow-md rounded-md text-white cursor-not-allowed" disabled>
                                                Sửa
                                            </button>
                                        </td>
                                    </form>
                                    
                                </tr>
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
@endsection

<style>
    #post_status {
        opacity: 1;
        color: white;
        padding-left: 10px;
        border-left: #fff solid 2px;
    }
</style>