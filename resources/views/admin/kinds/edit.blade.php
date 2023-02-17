@extends('Layouts.admin.dashboard')

@section('content')
    <div>
        this is an edit page
    </div>
    <div>
        
            <form action="" method="post" enctype="multipart/form-data" id="kind{{$kind['id']}}">
                @csrf 
                <div>
                    <label for="kindName">Name</label>
                    <input type="text" id="kindName" name="name" value="<?php echo $kind->name ?>" required
                    class="outline-none border-[1px] border-[#f0f0f1] border-solid px-[12px] rounded-md
                    focus:border-[#008f79] focus:ring-[4px] focus:ring-[#cce9e4]"
                    onchange="changeName('updateKind')">
                </div>
                <button type="submit" 
                class="px-[16px] py-[8px] bg-[#008f79] rounded-md text-white
                hover:ring-[4px] hover:ring-[#cce9e4] cursor-not-allowed"
                disabled
                id="updateKind"
                onclick="postURL('/admin/kind/{{$kind['id']}}', 'kind{{$kind['id']}}')">
                    Update
                </button> 
            </form>
        
    </div>
@endsection

@section('script')
    <script src="../../../js/utility-for-url.js"></script>
@endsection

<style>
    #kind {
        opacity: 1;
        color: white;
        padding-left: 10px;
        border-left: #fff solid 2px;
    }
</style>