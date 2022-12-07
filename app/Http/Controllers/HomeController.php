<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // $usertype=Auth::user();
        // if ($usertype->usertype=='1') {
        //     return $usertype;
        // }else{
            return view('user.home');
        // }
    } 
    public function redirect()
    {
        // $usertype=Auth::user()->usertype;
        // if ($usertype=='1') {
            return view('admin.home');
        // }else{

            // return view('user.home');
        // }
    }
}
