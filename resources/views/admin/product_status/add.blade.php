@extends('Layouts.admin.dashboard')

@section('content')
    <div>
        <p>
            This is a create-product-status page
        </p>

        <form action="/admin/product-status" method="post" enctype="multipart/form-data">
            @csrf 
            <div>
                <label for="nameOfKind">
                    Name of Status
                </label>
                <input type="text" id="nameOfKind" name="status" required>
            </div>

            <button type="submit" class="px-[16px] py-[8px] bg-[#6d6e]">
                Add
            </button>
        </form>
    </div>
@endsection

@section('script')
    <script src="../../js/utility-for-url.js"></script>
@endsection

<style>
    #product_status {
        opacity: 1;
        color: white;
        padding-left: 10px;
        border-left: #fff solid 2px;
    }
</style>