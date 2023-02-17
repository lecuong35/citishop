<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Post;
use App\Models\User;
use App\Notifications\BillNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BillController extends Controller
{
    public function __construct()
    {
        if(!$this->middleware('auth')) 
            return route('user.login');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBillTemplate($role_id, $bill_status, $path_return) {
        $bills = Bill::where($role_id, Auth::id())->where('order_status', $bill_status)->get();
        $user = Auth::user();
        foreach($user->unreadNotifications as $notify) {
            if(isset($notify->data['user_name'])) {
                $notify->markAsRead();
            }
        }
        if(!$bills->isEmpty()) {
            $posts = array();
            $customers = array();
            $sellers = array();
            $order_status = array();
            $categories = array();
            $brands = array();
            $productStatus = array();
            $kinds = array();

            foreach($bills as $bill) {
                $post = $bill->post;
                $product_status = $post->productStatus;
                $cate = $post->category;
                $kindProduct = $cate->kind;
                $brandProduct = $post->brand;
                array_push($posts, $bill->post);
                array_push($kinds, $kindProduct);
                array_push($categories, $cate);
                array_push($brands, $brandProduct);
                array_push($productStatus, $product_status);
                array_push($customers, $bill->customer);
                array_push($sellers, $bill->seller);
                array_push($order_status, $bill->orderStatus);
            }

            return view($path_return)->with([
                'bills' => $bills,
                'posts' => $posts,
                'customers' => $customers,
                'order_status' => $order_status,
                'product_status' => $productStatus,
                'categories' => $categories,
                'brands' => $brands,
                'kinds' => $kinds,
                'sellers' => $sellers
            ]);
        }
        else {
            return view($path_return);
        }
    }

    public function index()
    {
       return $this->getBillTemplate('seller_id', 5, 'users.purchase-inprogress');
    }

    public function getCompleted()
    {
        return $this->getBillTemplate('seller_id', 1, 'users.purchase-completed');
    }

    public function getReturned()
    {
        return $this->getBillTemplate('seller_id', 3, 'users.purchase-returns');
    }

    public function getCancelled()
    {
        return $this->getBillTemplate('seller_id', 6, 'users.purchase-cancelled');
    }

    public function getCustomerBill() {
        return $this->getBillTemplate('customer_id', 5, 'users.customer-bill');
    }

    public function getCustomerBillCompleted() {
        return $this->getBillTemplate('customer_id', 1, 'users.customer-bill-completed');
    }

    public function getCustomerBillCancelled() {
        return $this->getBillTemplate('customer_id', 6, 'users.customer-bill-cancelled');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSales()
    {
        $sales = DB::table('bills')
            ->select(DB::raw('sum(posts.product_price) as sum'), DB::raw("(DATE_FORMAT(bills.created_at, '%m')) as month"))
            ->leftJoin('posts', 'bills.post_id', '=', 'posts.id')
            ->where('bills.seller_id', '=', Auth::id())
            ->where('bills.order_status', '=', 1)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $returned = DB::table('bills')
            ->select(DB::raw('sum(posts.product_price) as sum'), DB::raw("(DATE_FORMAT(bills.created_at, '%m')) as month"))
            ->leftJoin('posts', 'bills.post_id', '=', 'posts.id')
            ->where('bills.seller_id', '=', Auth::id())
            ->where('bills.order_status', '=', 6)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        return view('users.revenue-statistic')->with([
            'sales' => $sales,
            'returned' => $returned,
            'bills' => 'as'
        ]);

        // return response()->json(['ok' => $sales]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bill = Bill::create([
            'seller_id' => $request->seller_id,
            'customer_id' => Auth::user()->id,
            'post_id' => $request->post_id,
            'time_receive' => $request->time_receive,
            'order_status' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if($bill) {
            $post = Post::where('id', $request->post_id)->first();
            $seller = User::where('id', $request->seller_id)->first();
            $seller->notify(new BillNotification(Auth::user(), $post));
            return redirect()->route('user.bill');
        }
    }

    /**
     * Display the post which user buy
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getBill()
    {
        $bills = Bill::where('customer_id', Auth::id())->get();
        if($bills) {
            $posts = array();
            $customers = array();
            $order_status = array();
            $categories = array();
            $brands = array();
            $productStatus = array();
            $kinds = array();

            foreach($bills as $bill) {
                $post = $bill->post;
                $product_status = $post->productStatus;
                $cate = $post->category;
                $kindProduct = $cate->kind;
                $brandProduct = $post->brand;
                array_push($posts, $bill->post);
                array_push($kinds, $kindProduct);
                array_push($categories, $cate);
                array_push($brands, $brandProduct);
                array_push($productStatus, $product_status);
                array_push($customers, $bill->customer);
                array_push($order_status, $bill->orderStatus);
            }

            return view('users.purchase-inprogress')->with([
                'bills' => $bills,
                'posts' => $posts,
                'customers' => $customers,
                'order_status' => $order_status,
                'product_status' => $productStatus,
                'categories' => $categories,
                'brands' => $brands,
                'kinds' => $kinds
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm( $id)
    {
        $bill = Bill::where('id', $id)->where('order_status', 5)->first();
        if($bill) {
            $bill->update([
                'order_status' => 1,
            ]);
            $customer = $bill->customer;
            $customer->notify(new BillNotification($bill->seller, $bill->post));
    
            Session::flash('success', 'Xac nhan don thanh cong');
        }
        else {
            Session::flash('error', 'Xac nhan don khong thanh cong');
        }
        return redirect()->route('bill.index');
        
    }

    public function completed($id)
    {
        $bill = Bill::where('id', $id)->where('order_status', 5)->first();
        if($bill) {
            $bill->update([
                'order_status' => 3,
            ]);
            $customer = $bill->customer;
            $customer->notify(new BillNotification($bill->seller, $bill->post));
    
            Session::flash('success', 'Xac nhan don thanh cong');
        }
        else {
            Session::flash('error', 'Xac nhan don khong thanh cong');
        }
        return redirect()->route('bill.index');
        
    }

    public function returned( $id)
    {
        $bill = Bill::where('id', $id)->where('order_status', 5)->first();
        if($bill) {
            $bill->update([
                'order_status' => 4,
            ]);
            $customer = $bill->customer;
            $customer->notify(new BillNotification($bill->seller, $bill->post));
    
            Session::flash('success', 'Xac nhan don thanh cong');
        }
        else {
            Session::flash('error', 'Xac nhan don khong thanh cong');
        }
        return redirect()->route('bill.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bill = Bill::where('id', $id)->first();
        if($bill) {
            $bill->update([
                'order_status' => 6,
            ]);
            $customer = $bill->customer;
            $customer->notify(new BillNotification($bill->seller, $bill->post));
    
            Session::flash('success', 'Huy don thanh cong');
        }
        else {
            Session::flash('error', 'Huy don khong thanh cong');
        }
        return redirect()->route('bill.cancelled');
    }

    public function destroyMyBill($id)
    {
        $bill = Bill::where('id', $id)->first();
        if($bill) {
            $bill->update([
                'order_status' => 6,
            ]);
            $seller = $bill->seller;
            $seller->notify(new BillNotification($bill->seller, $bill->post));
    
            Session::flash('success', 'Huy don thanh cong');
        }
        else {
            Session::flash('error', 'Huy don khong thanh cong');
        }
        return redirect()->route('my-bill.cancelled');
    }
}
