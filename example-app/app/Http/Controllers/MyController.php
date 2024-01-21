<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "Hello World!";

    function __construct()//MyController
    {
        
    }

    public function index()
    {
        $data = ['val_a' => 'Hello World'];
        $data['val_b'] = "Laravel";
        return view('myfolder.mypage',$data);
        //return view('welcome');
    }

    public function store(request $req)
    {
        $data['myinput'] = $req->input('myinput');
        return view('my-route',$data);
    }
}
