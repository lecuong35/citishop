<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data;

    public function __construct() {
        $this->data = $this->getData();
    }

    public  function index() {
        return view('home')->with('data', $this->data);
    }

    public function searchByCategory($category_id) {
        $posts = Post::where('category_id', $category_id)->get();
        if($posts) {
            
        }
    }
}
