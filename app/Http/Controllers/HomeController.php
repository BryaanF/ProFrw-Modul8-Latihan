<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\anjay;

class HomeController extends Controller
{
    function index()
    {
    $pageTitle = 'Home';
    return view('home', ['pageTitle' => $pageTitle]);
    }

    function hello(String $value){
        $name = anjay::find($value);
        return "This is hello world from home, Hi ".$name->name." welcome!";
    }

}
