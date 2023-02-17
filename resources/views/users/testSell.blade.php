@foreach(json_decode($post['post_images']) as $uri)
    <img src="{{$uri}}" alt="" style="width: 100px; height: 100px;">
@endforeach