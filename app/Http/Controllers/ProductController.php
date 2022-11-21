<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $data;
    public function __construct() {
        $this->data = $this->getData();
    }

    public function index() {
        return view('searchPage')->with('data', $this->data);
    }
}
