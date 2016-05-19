<?php

namespace LazyMarket\Http\Controllers;

use Illuminate\Http\Request;

use LazyMarket\Http\Requests;

class HomeController extends Controller
{
    public function index(){
    	return view('home.index', ['title' => 'Lazy Market']);
    }
}
