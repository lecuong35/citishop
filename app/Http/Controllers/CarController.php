<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CarController extends Controller
{
    public $dataUsedCar;
    public function __construct() {
        $this->dataUsedCar = $this->getData();
    }

    public function usedCar()
    {
        return view('used-car')->with(['data'=> $this->dataUsedCar]);
    }

    public function rentalCar() {
        return view('rental-car')->with('data', $this->dataUsedCar);
    }

    public function accessories() {
        return view('accessories-car')->with('data', $this->dataUsedCar);
    }

    public function commercial() {
        return view('commercial-vehicle')->with('data', $this->dataUsedCar);
    }

    public function motorCycles() {
        return view('motorcycles')->with('data', $this->dataUsedCar);
    }

    public function parallel() {
        return view('parallel')->with('data', $this->dataUsedCar);
    }


}
