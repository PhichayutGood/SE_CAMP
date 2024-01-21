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

    function index()
    {
        echo $this->myvar;
    }
}
