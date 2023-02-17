<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Kind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
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
        // $brands = Brand::all();
        // if($brands) {
        //     $kinds = array();
        //     foreach ($brands as $key => $brand) {
        //        array_push($kinds, $brand->kind);
        //     };
        //     return view('admin.brands.brand')->with(['brand' => $brands, 'kind' => $kinds]);
        // }
        // else {
        //     return Redirect::back()->withErrors([
        //         'error' => 'Không có loại sản phẩm nào !',
        //     ]);
        // }

        $brands = Brand::all();
        if($brands) {
            $kinds = array();
            foreach ($brands as $key => $brand) {
               array_push($kinds, $brand->kind);
            };
            // $kinds = array();
            // foreach ($categories as $key => $category) {
            //     array_push($kinds, $category->kind);
            // }
            return view('admin.brands.brand')->with([
                // 'categories' => $categories, 
                'kinds' => $kinds,
                'brands' => $brands,
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
        // $kinds = Kind::all();
        // return view('admin.brands.add')->with(['kinds' => $kinds]);

        $kinds = Kind::all();
        // $categories = array(array());
        // $i = 0;
        // foreach ($kinds as $key => $value) {
        //     $categories[$i] = $value->category;
        //     $i = $i + 1;
        // }
        return view('admin.brands.add')->with(['kinds' => $kinds]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $brand = Brand::create([
        //     'name' => $request->name,
        //     'kind_id' => $request->kind_id,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // if($brand) {
        //     Session::flash('success', 'Thêm thành công !');
        //     return redirect()->route('brand.index');
        // }
        // else {
        //     Redirect::back()->withErrors([
        //         'error' => 'Không thể thêm, hãy thử lại',
        //     ]);
        // }

        


        $brand = Brand::create([
            'name' => $request->name,
            'kind_id' => $request->kind_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if($brand) {
            Session::flash('success', 'Thêm thành công !');
            return redirect()->route('brand.index');
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
        $brand = Brand::where('id', $id)->first();
        if($brand) {
            $kind = $brand->kind;
            $kinds = Kind::all();
            return view('admin.brands.edit')->with([
                'brand' => $brand,
                'kind' => $kind,
                'kinds' => $kinds,
            ]);
        }
        else {
            return Redirect::back()->withErrors([
                'error' => 'Không tìm thấy thông tin trong cơ sở dữ liệu !',
            ]);
        }




        // $brand = Brand::where('id', $id)->first();
        // if($brand) {
        //     $kinds = Kind::all();

        //     $categories = array(array());
        //     $i = 0;
        //     foreach ($kinds as $key => $kind) {
        //         $categories[$i] = $kind->category;
        //         $i = $i + 1;
        //     }
        //     return view('admin.brands.edit')->with([
        //         'categories' => $categories,
        //         'kinds' => $kinds,
        //         'brand' => $brand,
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
        if($request->name != null) {
            if($request->kind_id != null) {
                Brand::where('id', $id)->update([ 
                    'name' => $request->name,
                    'kind_id' => $request->kind_id,
                ]);
            }
            else {
                Brand::where('id', $id)->update([
                    'name' => $request->name,
                ]);
            }

            Session::flash('success', 'Cập nhật thành công !');
            return redirect()->route('brand.index');
        }
        else {
            Redirect::back()->withErrors([
                'error' => 'Cập nhật không thành công',
            ]);
        }


        // if($request->name != null) {
        //     if($request->category_id != null) {
        //         Brand::where('id', $id)->update([
        //             'name' => $request->name,
        //             'category_id' => $request->category_id,
        //         ]);
        //     }
        //     else {
        //         Brand::where('id', $id)->update([
        //             'name' => $request->name,
        //         ]);
        //     }

        //     Session::flash('success', 'Cập nhật thành công !');
        //     return redirect()->route('brand.index');
        // }
        // else {
        //     Redirect::back()->withErrors([
        //         'error' => 'Cập nhật không thành công',
        //     ]);
        // }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kind  $kind
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $kind)
    {
        //
    }
}
