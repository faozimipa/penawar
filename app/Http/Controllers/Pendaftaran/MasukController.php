<?php

namespace App\Http\Controllers\Pendaftaran;

use App\Http\Requests\LoginUserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MasukController extends Controller
{
    public function login(LoginUserRequest $request)
    {
        $ceck = User::where('email', $request->email)->where('is_active',1)->first();
        if($ceck){
            if(!Auth::attempt($request->only('email', 'password'))){
                return redirect('login'); // or return back();
            }
        }
        return redirect('home');
        
    }

    public function cek()
    {
        
    }
}
