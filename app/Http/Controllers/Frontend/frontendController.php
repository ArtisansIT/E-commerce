<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index(){
        return view('frontend.pages.home');
    }
    public function login(){
        return view('frontend.pages.login');
    }
}
