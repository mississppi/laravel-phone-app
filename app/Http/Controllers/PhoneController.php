<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {
        //js側へ変数として渡す
        $instance_url = config('app.amazon_connect_instance_url');
        return view('phone.index', compact('instance_url'));
    }
}
