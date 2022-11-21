<?php

namespace App\Http\Controllers;

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
}
