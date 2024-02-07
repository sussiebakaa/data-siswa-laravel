<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index1()
    {
        return view('extracurricular', [
            "title" => "ekstrakulikuler",
            "eskul" => Extracurricular::allextra()
        ]);
        
    }
}
