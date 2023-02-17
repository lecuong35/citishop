<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Kind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
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
        // $category = Category::all();
        // if($category) {
        //     $brands = array();
        //     foreach ($category as $key => $cate) {
        //        array_push($brands, $cate->brand);
        //     };
        //     $kinds = array();
        //     foreach ($brands as $key => $brand) {
        //         array_push($kinds, $brand->kind);
        //     }
        //     return view('admin.categories.category')->with([
        //         'category' => $category, 
        //         'kind' => $kinds,
        //         'brand' => $brands,
        //     ]);
        // }
        // else {
        //     return Redirect::back()->withErrors([
        //         'error' => 'Không có loại sản phẩm nào !',
        //     ]);
        // }

        $categories = Category::all();
        if($categories) {
            $kinds = array();
            foreach ($categories as $key => $category) {
               array_push($kinds, $category->kind);
            };
            return view('admin.categories.category')->with(['categories' => $categories, 'kinds' => $kinds]);
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
        // $kinds = Kind::all();
        // $brands = array(array());
        // $i = 0;
        // foreach ($kinds as $key => $value) {
        //     $brands[$i] = $value->brand;
        //     $i = $i + 1;
        // }
        // return view('admin.categories.add')->with(['kinds' => $kinds, 'brands'=> $brands]);

        $kinds = Kind::all();
        return view('admin.categories.add')->with(['kinds' => $kinds]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // $category = Category::create([
        //     'name' => $request->name,
        //     'brand_id' => $request->brand_id,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // if($category) {
        //     Session::flash('success', 'Thêm thành công !');
        //     return redirect()->route('category.index');
        // }
        // else {
        //     Redirect::back()->withErrors([
        //         'error' => 'Không thể thêm, hãy thử lại',
        //     ]);
        // }

        
        $category = Category::create([
            'name' => $request->name,
            'kind_id' => $request->kind_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if($category) {
            Session::flash('success', 'Thêm thành công !');
            return redirect()->route('category.index');
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
     * @param  \App\Models\Kind  $kind
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kind  $kind
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $category = Category::where('id', $id)->first();
        // if($category) {
        //     $kinds = Kind::all();

        //     $brands = array(array());
        //     $i = 0;
        //     foreach ($kinds as $key => $kind) {
        //         $brands[$i] = $kind->brand;
        //         $i = $i + 1;
        //     }
        //     return view('admin.categories.edit')->with([
        //         'category' => $category,
        //         'kinds' => $kinds,
        //         'brands' => $brands,
        //     ]);
        //     // return response()->json([
        //     //     'kind' => $kinds,
        //     // ]);
        // }
        // else {
        //     return Redirect::back()->withErrors([
        //         'error' => 'Không tìm thấy thông tin trong cơ sở dữ liệu !',
        //     ]);
        // }

        $category = Category::where('id', $id)->first();
        if($category) {
            $kind = $category->kind;
            $kinds = Kind::all();
            return view('admin.categories.edit')->with([
                'category' => $category,
                'kind' => $kind,
                'kinds' => $kinds,
            ]);
        }
        else {
            return Redirect::back()->withErrors([
                'error' => 'Không tìm thấy thông tin trong cơ sở dữ liệu !',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kind  $kind
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // if($request->name != null) {
        //     if($request->brand_id != null) {
        //         Category::where('id', $id)->update([
        //             'name' => $request->name,
        //             'brand_id' => $request->brand_id,
        //         ]);
        //     }
        //     else {
        //         Category::where('id', $id)->update([
        //             'name' => $request->name,
        //         ]);
        //     }

        //     Session::flash('success', 'Cập nhật thành công !');
        //     return redirect()->route('category.index');
        // }
        // else {
        //     Redirect::back()->withErrors([
        //         'error' => 'Cập nhật không thành công',
        //     ]);
        // }


        if($request->name != null) {
            if($request->kind_id != null) {
                Category::where('id', $id)->update([
                    'name' => $request->name,
                    'kind_id' => $request->kind_id,
                ]);
            }
            else {
                Category::where('id', $id)->update([
                    'name' => $request->name,
                ]);
            }

            Session::flash('success', 'Cập nhật thành công !');
            return redirect()->route('category.index');
        }
        else {
            Redirect::back()->withErrors([
                'error' => 'Cập nhật không thành công',
            ]);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kind  $kind
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $kind)
    {
        //
    }
}
