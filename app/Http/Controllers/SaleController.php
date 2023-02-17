<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Kind;
use App\Models\Post;
use App\Models\ProductStatus;
use App\Notifications\BillNotification;
use App\Notifications\PostNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class SaleController extends Controller
{
    public function __construct()
    {
        if(!$this->middleware('auth')->except(['getList'])) {
            return redirect()->route('user.login');
        }
    }

    public function index()
    {
        $posts = Post::where('seller_id', Auth::id())->where('post_status', 1)->get();
        $user = Auth::user();
        if(!$posts->isEmpty()) {
            $brand = array();
            $category = array();
            $post_status = array();
            $product_status = array();

            $editable = false;
            $post_author = $posts[0]->seller_id;
            if($post_author == Auth::user()->id) 
                $editable = true;

            foreach ($posts as $key => $post) {
                array_push($brand, $post->brand);
                array_push($category, $post->category);
                array_push($post_status, $post->postStatus);
                array_push($product_status, $post->productStatus);
            }

            return view('users.sales-start')->with([
                'posts'=>$posts,
                'brands' => $brand,
                'categories' => $category,
                'post_status' => $post_status,
                'product_status' => $product_status,
                'editable' => $editable,
                'user' => $user,
            ]);
        }
        else {
            return view('users.sales-start')->with([
                'error' => 'No product',
            ]);
        }
    }
    public function completed()
    {
        $posts = Post::where('seller_id', Auth::id())->where('post_status', 2)->get();
        $user = Auth::user();
        foreach($user->unreadNotifications as $notify) {
            if(isset($notify->data['post_title'])) {
                $notify->markAsRead();
            }
        }
        
        if(!$posts->isEmpty()) {
            $brand = array();
            $category = array();
            $post_status = array();
            $product_status = array();

            $editable = false;
            $post_author = $posts[0]->seller_id;
            if($post_author == Auth::user()->id) 
                $editable = true;

            foreach ($posts as $key => $post) {
                array_push($brand, $post->brand);
                array_push($category, $post->category);
                array_push($post_status, $post->postStatus);
                array_push($product_status, $post->productStatus);
            }
            return view('users.sales-progress')->with([
                'posts'=>$posts,
                'brands' => $brand,
                'categories' => $category,
                'post_status' => $post_status,
                'product_status' => $product_status,
                'editable' => $editable,
                'user' => $user,
            ]);
        }
        else {
            return view('users.sales-progress')->with([
                'error' => 'No product',
            ]);
        }
    }

    public function returned()
    {
        $posts = Post::where('seller_id', Auth::id())->where('post_status', 3)->get();
        $user = Auth::user();
        if(!$posts->isEmpty()) {
            $brand = array();
            $category = array();
            $post_status = array();
            $product_status = array();

            $editable = false;
            $post_author = $posts[0]->seller_id;
            if($post_author == Auth::user()->id) 
                $editable = true;

            foreach ($posts as $key => $post) {
                array_push($brand, $post->brand);
                array_push($category, $post->category);
                array_push($post_status, $post->postStatus);
                array_push($product_status, $post->productStatus);
            }
            return view('users.sales-returns')->with([
                'posts'=>$posts,
                'brands' => $brand,
                'categories' => $category,
                'post_status' => $post_status,
                'product_status' => $product_status,
                'editable' => $editable,
                'user' => $user,
            ]);
        }
        else {
            return view('users.sales-returns')->with([
                'error' => 'No product',
            ]);
        }
    }

    public function showOtherPosts($id) {
        $posts = Post::where('seller_id',$id)->get();
        $editable = false;
        $post_author = $posts[0]->seller_id;
        if($post_author == Auth::user()->id) 
            $editable = true;
        $brand = array();
        $category = array();
        $post_status = array();
        $product_status = array();

        foreach ($posts as $key => $post) {
            array_push($brand, $post->brand);
            array_push($category, $post->category);
            array_push($post_status, $post->postStatus);
            array_push($product_status, $post->productStatus);
        }
        return view('users.sales-start')->with([
            'posts'=>$posts,
            'editable' => $editable,
            'brands' => $brand,
            'categories' => $category,
            'post_status' => $post_status,
            'product_status' => $product_status,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageURL = array();
        if($request->hasFile('post_images')) {
            $files = [];
            $files = $request->file('post_images');
            foreach ($files as $image) {
                $fileName = $image->getClientOriginalName();
                $student   = app('firebase.firestore')->database()->collection('Images')->document('defT5uT7SDu9K5RFtIdl');
                $firebase_storage_path = 'Images/';
                $name     = $student->id();
                $localfolder = public_path('firebase-temp-uploads') .'/';
                
                $file      = $fileName;
                if ($image->move($localfolder, $file)) {
                    $uploadedfile = fopen($localfolder.$file, 'r');
                    $storageObject = app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
    
                    $expiresAt = Date::create(2023,9,1,0,0,0,7);
                    if ($storageObject->exists()) {
                        array_push($imageURL, $storageObject->signedUrl( $expiresAt));
                    } else {
                       return Redirect::back()->withErrors([
                            'image' => 'can not public photos',
                       ]);
                    }
                    
                    //will remove from local laravel folder
                    unlink($localfolder . $file);
                }
                else echo "not ok";
            }
            $post = Post::create([
                'product_name' => $request->product_name,
                'product_description' => $request->product_description,
                'product_price' => $request->product_price,
                'post_title' => $request->post_title,
                'post_images' => json_encode($imageURL),
                'order' => 0,
                'report' => json_encode([]),
                'seller_id' => Auth::user()->id,
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'product_status' => $request->product_status,
                'post_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            if($post) {
                return view('users.sale')->with([
                    'post' => $post
                ]);
            }
            else 
                return Redirect::back()->withErrors([
                    'create' => 'Can create this post!',
                ]);
        }
        else 
            return Redirect::back()->withErrors([
                'create' => 'Can create this post!',
            ]);
    }


    /**
     * Hien thi nhung post chua duoc duyet.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id',$id)->first();
        $brand = $post->brand;
        $kindOfPost = $brand->kind;
        $category = $post->category;
        $post_status = $post->postStatus;
        $product_status = $post->productStatus;

        $kinds = Kind::all();
        $categoriesLength = count(Category::all());
        $brandsLength = count(Brand::all());
        $kindLength = count($kinds);

        $categories = array();
        $i = $j = 0;
        foreach($kinds as $key => $kind) {
           $categories[$i] = $kind->category;
           $i = $i + 1;
        }

        $brands = array();
        foreach($kinds as $key => $kind) {
           $brands[$j] = $kind->brand;
           $j = $j + 1;
        }

        $product_status = ProductStatus::all();

        return view('users.sales-edit')->with([
            'kinds' => $kinds,
            'categories' => $categories,
            'brands' => $brands,
            'categoryLength' => $categoriesLength,
            'brandLength' => $brandsLength,
            'kindLength' => $kindLength,
            'productStatus' => $product_status,
            'data' => parent::getData(),


            'post'=>$post,
            'brand' => $brand,
            'kind' => $kindOfPost,
            'category' => $category,
            'post_status' => $post_status,
            'product_status' => $product_status,
        ]);

        // return response()->json(['kind' => $kindOfPost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Post::where('id', $id)
        ->update([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_price' => $request->product_price,
            'post_title' => $request->post_title,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'product_status' => $request->product_status,
            'post_status' => 1,
            'updated_at' => now(),
        ]);

        Session::flash('success', 'Cap nhat bai dang thanh cong');
        return redirect()->route('user.sale');
        
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        Post::where('id', $id)
        ->update([
            'post_status' => 3,
            'updated_at' => now(),
        ]);

        Session::flash('success', 'Cap nhat bai dang thanh cong');
        return redirect()->route('user.sale');
    }

    // hien thi cac bai post tren trang chu
    public function getList(Request $request) {
        $kind_id = $request->kind_id;
        if($kind_id == null) {
            $posts = Post::where('post_status', 2)->paginate(1);
        }
       else {
            $category_id = $request->category_id;
            if($category_id != null) {
                $posts = Post::where('category_id', $category_id)->where('post_status', 2)->paginate(1);
            }
            else {
                $categoryArray = array();
                $kindOfSearch = Kind::where('id', $kind_id)->first()->category;
                foreach($kindOfSearch as $ca) {
                    array_push($categoryArray, $ca->id);
                }
                $posts = Post::whereIn('category_id', $categoryArray)->where('post_status', 2)->paginate(1);
            }
        }
        

        $product_status =  array();
        $author =  array();
        foreach ($posts as  $post) {
            array_push($product_status, $post->productStatus->status);
            array_push($author, $post->author);
        }
        
        $data = parent::getData();
        if($this->middleware('auth')){
            $user = Auth::user();
            return view('home')->with([
                'posts' => $posts,
                'data' => $data,
                'product_status' => $product_status,
                'author' => $author,
                'user' => $user,
            ]);
        }
        else {
            return view('home')->with([
                'posts' => $posts,
                'data' => $data,
                'product_status' => $product_status,
                'author' => $author,
            ]);
        }
    }

    public function detail($id) {
        $post = Post::where('id', $id)->first();
        $end = $post->updated_at;
        $current = Carbon::now();
        $length = $end->diffInDays($current);
        $hour = 0;
        if($length  < 1) {
            $hour = $end->diffInHours($current);
        }
        $kindOfPost = $post->category->kind;
        $author = $post->author;
        $brand = $post->brand;
        $product_status = $post->productStatus->status;
        $data = parent::getData();

        $posts = Post::where('category_id', $post->category_id)->where('id', '!=', $id)->orderBy('order', 'desc')->get();
        $authors = array();
        foreach($posts as $sale) {
            array_push($authors, $sale->author);
        }
        return view('detail')->with([
            'data' =>  $data,
            'post' => $post,
            'author' => $author,
            'product_status' => $product_status,
            'posts' => $posts,
            'kind' => $kindOfPost,
            'category' => $post->category,
            'brand' => $brand,
            'day' => $length,
            'hour' => $hour,
            'authors' => $authors
        ]);
    }
}
