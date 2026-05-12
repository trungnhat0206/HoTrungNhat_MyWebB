<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DemoController extends Controller
{
    public function index()
    {
        return view('demoindex');
    }
}
class Demo2Controller extends Controller
{
    public function index()
    {
        $data = 'ABC';
        return view('demoindex2', compact('data'));
    }
}
