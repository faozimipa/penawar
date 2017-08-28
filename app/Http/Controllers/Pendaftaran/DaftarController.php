<?php

namespace App\Http\Controllers\Pendaftaran;

use App\Http\Requests\RegistterUserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class DaftarController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('pendaftaran.daftar');
    }
    protected function create(RegistterUserRequest $request)
    {
       //return $request->all();
       $input = $request->all();
       $input['is_subscribe'] = 0;
       $input['is_active'] = 0;
       $input['password'] = bcrypt($request->password);
       User::create($input);
        Flash::success('Register successfully ');
        redirect()->back();
    }

}
