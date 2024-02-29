<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class LoginController extends BaseController
{

    protected $userModel;
    public function index()
    {
        $data = [
            'title' => 'Login | SIBPP',
            'page' => 'login'
        ];

        return view('pages.login', $data);
    }

    public function login(Request $request)
    {
        dd('Proses Login');
        $this->userModel = new User();
        

        dd('login gagal');
    }
}
