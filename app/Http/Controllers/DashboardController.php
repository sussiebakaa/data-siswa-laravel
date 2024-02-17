<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index6(){
        return view('dashboard.index', [
            "title"=>"Dashboard"
        ]);
    }
}
