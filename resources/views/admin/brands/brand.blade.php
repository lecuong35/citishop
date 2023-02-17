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
                    <div class="flex items-center justify-between">
                        <div class="pl-[20px]">
                            <p class="text-[18px] leading-[24px] font-bold">
                                Quản lý nhãn hàng
                            </p>
                        </div>
                        <form id="addCategory" action="">
                            <button type="submit" 
                            class="mobile:ml-0 ml-[20px] px-[16px] py-[8px] bg-[#0d6efd] shadow-md rounded-md text-white"
                            onclick="getAddURL('/admin/brand/create', 'addCategory')">
                                Thêm nhãn hàng
                            </button>
                        </form>
                    </div>
                    <table class="w-full ml-[30px] mobile:ml-0">
                        <thead class="bg-white border-b">
                            <tr>
                                <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 mobile:hidden">
                                    ID
                                </th>
                                <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 ">
                                    Loại hàng
                                </th>
                               
                                <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 ">
                                    Tên nhãn hàng
                                </th>
                                <th class="text-sm font-bold text-gray-900 px-6 py-4 ">
                                    Hành động
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($brands as $key => $cateItem)
                                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 mobile:hidden">
                                        {{$cateItem['id']}}                                       
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{$kinds[$key]['name']}}
                                    </td>
                                   
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{$cateItem['name']}}
                                    </td>
                                    <td>
                                        <form id="cate{{$cateItem['id']}}">
                                            <button type="submit" 
                                            class=" ml-[20px] px-[16px] py-[8px] bg-[#0d6efd] shadow-md rounded-md text-white mobile:ml-0"
                                            onclick="getURL('/admin/brand/', 'cate{{$cateItem['id']}}', '{{$cateItem['id']}}')">
                                                Sửa
                                            </button>
                                        </form>
                                    </td>
                                    
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
    #brand {
        opacity: 1;
        color: white;
        padding-left: 10px;
        border-left: #fff solid 2px;
    }
</style>