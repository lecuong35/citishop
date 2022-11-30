<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CarController;

class UserController extends Controller
{
    public $data;
    public function __construct() {
        $this->data = $this->getData();
    }
    public function  info() {
        return view('users.user-info')->with('data', $this->data);
    }

    public function  about() {
        return view('users.user-about')->with('data', $this->data);
    }

    public function  review() {
        return view('users.user-review')->with('data', $this->data);
    }

    public function coin() {
        return view('users.user-coin')->with('data', $this->data);
    }

    public function balance() {
        return view('users.user-balance')->with('data', $this->data);
    }

    public function caroubiz() {
        return view('users.user-caroubiz')->with('data', $this->data);
    }

    public function settings() {
        return view('users.settings')->with('data', $this->data);
    }

    public function editProfile() {
        return view('users.edit-profile')->with('data', $this->data);
    }

    public function changePassword() {
        return view('users.change-password')->with('data', $this->data);
    }

    public function setNotification() {
        return view('users.setting-notification')->with('data', $this->data);
    }

    public function dataPrivacy() {
        return view('users.data-privacy')->with('data', $this->data);
    }

    public function purchaseProgress() {
        return view('users.purchase-inprogress')->with('data', $this->data);
    }

    public function purchaseCompleted() {
        return view('users.purchase-completed')->with('data', $this->data);
    }

    public function purchaseReturns() {
        return view('users.purchase-returns')->with('data', $this->data);
    }

    public function purchaseCancelled() {
        return view('users.purchase-cancelled')->with('data', $this->data);
    }

    public function salesStart() {
        return view('users.sales-start')->with('data', $this->data);
    }
    public function salesProgress() {
        return view('users.sales-progress')->with('data', $this->data);
    }
    public function salesCompleted() {
        return view('users.sales-completed')->with('data', $this->data);
    }
    public function salesReturns() {
        return view('users.sales-returns')->with('data', $this->data);
    }
    public function salesCancelled() {
        return view('users.sales-cancelled')->with('data', $this->data);
    }

    public function sell() {
        return view('users.sell')->with('data', $this->data);
    }
}
