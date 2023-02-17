@extends('Layouts.admin.dashboard')

@section('content')
    <div>
        <p>
            This is a create-kind page
        </p>

        <form action="/admin/kind" method="post" enctype="multipart/form-data">
            @csrf 
            <div>
                <label for="nameOfKind">
                    Name of Kind
                </label>
                <input type="text" id="nameOfKind" name="name" required>
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
    #kind {
        opacity: 1;
        color: white;
        padding-left: 10px;
        border-left: #fff solid 2px;
    }
</style>