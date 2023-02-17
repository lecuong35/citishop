<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Notifications\PostNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function __construct()
    {
        if(!$this->middleware('admin.auth')) {
            return route('admin.login');
        }
    }

    public function show()
    {
        $posts = Post::where('post_status', 1)->get();
        if($posts) {
            $authors = array();
            $product_status = array();
            $categories = array();
            $brands = array();
            foreach($posts as $post) {
                array_push($authors, $post->author);
                array_push($product_status, $post->productStatus);
                array_push($categories, $post->category);
                array_push($brands, $post->brand);
            }

            return view('admin.post.post')->with([
                'posts' => $posts,
                'authors' => $authors,
                'product_status' => $product_status,
                'categories' => $categories,
                'brands' => $brands
            ]); 
        }
        else {
            return view('admin.post.post')->with([
                'error' => "Khong co bai post nao moi",
            ]);
        }
    }

    // admin xac nhan bai post duoc dang
    public function confirm($id) {
        Post::where('id', $id)
        ->update([
            'post_status' => 2,
            'updated_at' => now(),
        ]);
        $post = Post::where('id', $id)->first();
        $seller = $post->author;
        $seller->notify(new PostNotification($post, "http://localhost:8000/user/sale/completed"));
        Session::flash('success', 'Cap nhat bai dang thanh cong');
        return redirect()->route('admin.post');
    }

    public function delete($id) {
        Post::where('id', $id)
        ->update([
            'post_status' => 3,
            'updated_at' => now(),
        ]);
        $post = Post::where('id', $id)->first();
        $seller = $post->author;
        $seller->notify(new PostNotification($post, "http://localhost:8000/user/sale"));
        Session::flash('success', 'Cap nhat bai dang thanh cong');
        return redirect()->route('admin.post');
    }
}
