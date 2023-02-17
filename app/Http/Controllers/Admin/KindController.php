<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\isEmpty;
 
class KindController extends Controller
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
        $kinds = Kind::all();
        if($kinds) {
            return view('admin.kinds.kind')->with(['kind' => $kinds, 'test' => 1]);
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
        return view('admin.kinds.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kind = Kind::create([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if($kind) {
            Session::flash('success', 'Thêm thành công !');
            return redirect()->route('kind.index');
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
        $kind = Kind::where('id', $id)->first();
        if($kind) {
            return view('admin.kinds.edit')->with([
                'kind' => $kind
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
     * @param  \App\Models\Kind  $kind
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Kind::where('id', $id)
            ->update([
                'name' => $request->name,
            ]);

        Session::flash('success', 'Cập nhật thành công !');
        return redirect()->route('kind.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kind  $kind
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kind $kind)
    {
        //
    }
}
