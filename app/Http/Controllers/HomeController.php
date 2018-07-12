<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile_user;
use App\Product;

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
        return view('home',['data'=>$this->getUserProfile()[0]]);
    }

    public function getUserProfile(){
        $id = Auth::User()->id;
        return Profile_user::where('user_id',$id)->get()->toArray();
    }

}
