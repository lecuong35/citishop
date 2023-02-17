<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login( LoginRequest $request) {
        $credentials = request(['email', 'password']);

        if (!auth()->guard('admin')->attempt($credentials)) {
            return response()->json(['unauthorizations' => 'Email hoặc mật khẩu không đúng !'], 401);
        }

        $user = auth()->guard('admin')->user();

        return redirect()->route('kind.index')->with(['user'=>$user]); 

        // Admin::create([
        //     'email' => 'cuonglemanh352001@gmail.com',
        //     'password' => bcrypt('abc123'),
        //     'name' => 'Le Cuong',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
