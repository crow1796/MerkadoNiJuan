<?php

namespace LazyMarket\Http\Controllers;

use Illuminate\Http\Request;

use LazyMarket\Http\Requests;

class ShopController extends Controller
{
    public function index(){
    	return view('shop.index', ['title' => 'Shops | Lazy Market']);
    }

    public function show($shop){
    	return view('shop.show', ['title' => 'Shop 1 | Lazy Market']);
    }

    public function about($shop){
    	return view('shop.about', ['title' => 'Shop 1 - About Us | Lazy Market']);
    }

    public function reviews($shop){
        return view('shop.reviews', ['title' => 'Shop 1 - Reviews | Lazy Market']);
    }

    public function settings($shop){
    	return view('shop.settings', ['title' => 'Shop 1 - Settings | Lazy Market']);
    }
}
