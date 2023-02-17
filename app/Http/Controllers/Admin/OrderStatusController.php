<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class OrderStatusController extends Controller
{

    public function __construct()
    {
        if(!$this->middleware('admin.auth')) {
            return route('admin.login');
        }
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_status = OrderStatus::all();
        if($order_status) {
            return view('admin.order_status.order_status')->with([
                'orderStatus' => $order_status,
            ]);
        }
        else {
            return Redirect::back()->withErrors([
                'error' => 'Không có loại sản phẩm nào !',
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order_status.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order_status = OrderStatus::create([
            'status' => $request->status,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if($order_status) {
            Session::flash('success', 'Thêm thành công !');
            return redirect()->route('order-status.index');
        }
        else {
            Redirect::back()->withErrors([
                'error' => 'Không thể thêm, hãy thử lại',
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $order_status = OrderStatus::where('id', $id)->first();
        if($order_status) {
            return view('admin.order_status.edit')->with([
                'orderStatus' => $order_status,
            ]);
        }
        else {
            return Redirect::back()->withErrors([
                'error' => 'Không tìm thấy dữ liệu trong cơ sở dữ liệu !',
            ]);
        }
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
        OrderStatus::where('id', $id)
        ->update([
            'status' => $request->status,
        ]);

        Session::flash('success', 'Cập nhật thành công !');
        return redirect()->route('order-status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
