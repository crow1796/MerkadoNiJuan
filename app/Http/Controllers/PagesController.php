<?php

namespace LazyMarket\Http\Controllers;

use Illuminate\Http\Request;

use LazyMarket\Http\Requests;

class PagesController extends Controller
{
    public function index(){
    	return view('pages.index', ['title' => 'Lazy Market']);
    }
}
