<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if (auth()->user()->role == 'admin') {
            return view('panel.admin.dashboard');
        }else{
            abort(403);
        }
    }
}
