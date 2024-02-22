<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    public function index(){
        $data = [
            'title' => 'SIBPP',
            'page' => 'SIBPP'
        ];

        return view('pages/index',$data);
    }
}
