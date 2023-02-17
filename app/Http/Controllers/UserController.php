<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CarController;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\Contact;
use App\Mail\MailNotify;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Kind;
use App\Models\ProductStatus;
use App\Models\User;
use Google\Cloud\Storage\Connection\Rest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $data;
    public function __construct() {
        if(!$this->middleware('auth', ['except' => ['login', 'register', 'forget', 'getPassword']])) {
            return route('user.login');
        }
    }

    public function register(RegisterRequest $request) {
        $validated = $request->validated();
        if($request->password !== $request->confirmPassword) {
            return Redirect::back()->withErrors([
                'confirmPassword' => 'Mật khẩu nhập lại không khớp !',
            ]);
        }
        $user =  User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' =>bcrypt( $request->password),
            'created_at' => now(),
            'updated_at' => now(),
            'avatar' => 'https://img.freepik.com/premium-vector/brunette-man-avatar-portrait-young-guy-vector-illustration-face_217290-1035.jpg',
            'facebook' => '',
            'zalo' => '',
        ]);

        $email = $request->email;
        Mail::to($email)->send(new MailNotify(['user'=>$user, 'password'=>$request->password]));

        return redirect('/user/login')->with(compact('user'));
       
    }

    public function login(LoginRequest $request) {
        $validated = $request->validated();
        $credentials = request(['email', 'password']);

        if (!auth()->attempt($credentials)) {
            return Redirect::back()->withErrors([
                'unauthorization' => 'Tài khoản hoặc mật khẩu không đúng !',
            ]) ;
        }

        $user = auth()->user();

        return redirect()->route('user.sale');
    }

    public function forget() {
        return view('auth.forget-password');
    }
    public function getPassword(Request $request) {
        $email = $request->email;
        $user = User::where('email', $email)->get(); // return collection as array

        $uniqid = uniqid();

        $rand_start = rand(1,9);
        
        $rand_8_char = substr($uniqid,$rand_start,8);

        if($user[0]) {
            User::where('email', $email)->update([
                'password' => bcrypt($rand_8_char),
            ]);
            Mail::to($email)->send(new MailNotify(['user'=>$user[0], 'password' => $rand_8_char]));
            Session::flash('password', 'CiTi Shop đã gửi mật khẩu mới tới email của bạn!');
            return redirect('/user/login');
        }
        else {
            return Redirect::back()->withErrors([
                'email' => 'Email chưa được đăng ký',
            ]);
        }
    }

    public function editPassword() {
        return view('users.change-password');
    }

    public function changePassword(Request $request) {
        $user = auth()->user();
        $email = $user->email;
        $password = $user->getAuthPassword();

        $currentPassword = $request->currentPassword;
        $newPassword = $request->newPassword;
        $confirmPassword = $request->confirmPassword;

        $credentials = request('password');

        if(strlen($newPassword) < 6) {
            return Redirect::back()->withErrors([
                'newPassword' => 'Mật khẩu chứa ít nhất 6 kí tự!'
            ]);
        }
        if($confirmPassword != $newPassword) {
            return Redirect::back()->withErrors([
                'confirmPassword' => 'Mật khẩu không khớp!'
            ]);
        }

        if(auth()->attempt(['email'=>$email, 'password'=> $currentPassword])) {
           
            User::where('email', $email)->update([
                'password' => bcrypt($newPassword),
            ]);
            Mail::to($email)->send(new MailNotify(['user'=>$user, 'password' => $newPassword]));
            return redirect()->route('user.login');
            
        }
        else {
            return Redirect::back()->withErrors([
                'password' => 'Mật khẩu chưa đúng !'
            ]);
        }

    }

    public function editInfo(Request $request) {
        $user = auth()->user();
        return view('users.edit-profile')->with(['user' => $user]);
    }

    public function updateInfo(Request $request) {
        if($request->hasFile('avatar')) {
            $image = $request->avatar;
            $fileName = $image->getClientOriginalName();
            $student   = app('firebase.firestore')->database()->collection('Images')->document('defT5uT7SDu9K5RFtIdl');
            $firebase_storage_path = 'Images/';
            $name     = $student->id();
            $localfolder = public_path('firebase-temp-uploads') .'/';
            
            $file      = $fileName;
            if ($image->move($localfolder, $file)) {
                $uploadedfile = fopen($localfolder.$file, 'r');
                $storageObject = app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);

                $expiresAt = new \DateTime('tomorrow');
                $time = Date::create(2023,9,1,0,0,0,7);
                if ($storageObject->exists()) {
                    $newAvatar =  $storageObject->signedUrl( $time);
                    User::where('id', auth()->user()->id)->update([
                        'avatar' => $newAvatar,
                        'zalo' => $request->zalo,
                        'facebook' => $request->facebook,
                        'phone' => $request->phone,
                    ]);
                     //will remove from local laravel folder
                    unlink($localfolder . $file);
                    Session::flash('success', 'Cap nhat thong tin ca nhan thanh cong');
                    return Redirect::back();
                } else {
                     //will remove from local laravel folder
                    unlink($localfolder . $file);
                    return Redirect::back()->withErrors([
                        'avatar' => 'Khong the tai anh len !',
                    ]);
                }
            }
            
        }else {
            User::where('id', auth()->user()->id)->update([
                'zalo' => $request->zalo,
                'facebook' => $request->facebook,
                'phone' => $request->phone,
            ]);
            Session::flash('success', 'Cap nhat thong tin ca nhan thanh cong');
            return Redirect::back();
        }
        
    }

    // public function uploadFile() {
    //     return view('users.uploadImg');
    // }

    // public function test(Request $request) {
    //     $imageURL = [];
    //     if($request->hasFile('images')) {
    //         $files = [];
    //         $files = $request->images;
    //         foreach ($files as $image) {
    //             $fileName = $image->getClientOriginalName();
    //             $student   = app('firebase.firestore')->database()->collection('Images')->document('defT5uT7SDu9K5RFtIdl');
    //             $firebase_storage_path = 'Images/';
    //             $name     = $student->id();
    //             $localfolder = public_path('firebase-temp-uploads') .'/';
                
    //             $file      = $fileName;
    //             if ($image->move($localfolder, $file)) {
    //                 $uploadedfile = fopen($localfolder.$file, 'r');
    //                 $storageObject = app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
    
    //                 $expiresAt = new \DateTime('tomorrow');
    //                 if ($storageObject->exists()) {
    //                    return ($storageObject->signedUrl( $expiresAt));
    //                 } else {
    //                    return response()->json(['error' => 'error']);
    //                 }
                    
    //                 //will remove from local laravel folder
    //                 unlink($localfolder . $file);
    //             }
    //             else echo "not ok";
    //         }
    //         // dd($imageURL);
    //         // $image = $request->file('images'); //image file from frontend
    //     }
    //     else echo "not get";
    // }

    public function sell() {
        // return view('users.sell')->with(['data' => $this->data]);
        $kinds = Kind::all();
        $categoriesLength = count(Category::all());
        $brandsLength = count(Brand::all());
        $kindLength = count($kinds);

        $categories = array();
        $i = $j = 0;
        foreach($kinds as $key => $kind) {
           $categories[$i] = $kind->category;
           $i = $i + 1;
        }

        $brands = array();
        foreach($kinds as $key => $kind) {
           $brands[$j] = $kind->brand;
           $j = $j + 1;
        }

        $product_status = ProductStatus::all();

        return view('users.sell')->with([
            'kinds' => $kinds,
            'categories' => $categories,
            'brands' => $brands,
            'categoryLength' => $categoriesLength,
            'brandLength' => $brandsLength,
            'kindLength' => $kindLength,
            'productStatus' => $product_status,
            'data' => parent::getData(),
        ]);

    }
}
