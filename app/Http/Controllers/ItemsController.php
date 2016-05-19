<?php

namespace LazyMarket\Http\Controllers;

use Illuminate\Http\Request;

use LazyMarket\Http\Requests;

class ItemsController extends Controller
{
    public function show($item){
    	return view('item.show', ['title' => 'Item 1 - Shop 1 | Lazy Market']);
    }
}
