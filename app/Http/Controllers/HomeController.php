<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home'); //return đây là trả về file giao diện của mình
    }

    public function getIndex()
    {
        return view('clothshop.index'); //return đây là trả về file giao diện của mình
    }
}
//dang o home
//đúng rồi,nhưng tạo 1 funtion mới nhá, đừng đổi mấy cái có sẵn