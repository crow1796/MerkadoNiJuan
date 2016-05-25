<?php

namespace LazyMarket\Http\Controllers\Admin;

use Illuminate\Http\Request;

use LazyMarket\Http\Requests;
use LazyMarket\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
    	return view('admin.dashboard.index', ['title' => 'Dashboard | Lazy Market']);
    }
}
