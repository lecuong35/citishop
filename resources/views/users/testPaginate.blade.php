@if(!empty($posts))
    <div>
        @foreach($posts as $post)
            <div>
                {{$post['post_title']}}
            </div>
        @endforeach
        <div>
            {{ $posts->links() }}
        </div>
    </div>
    @else
        <div>
            <p>
                No record
            </p>
        </div>
@endif
<style>
    .pagination {
        list-style: none;
        display: flex;
    }

    .page-item {
        margin: 0px 5px 0px 5px;
        list-style: none;
        text-decoration: none;
    }

    .page-link {
        text-decoration: none;
    }

    .active {
        background-color: #008f79;
    }
</style>