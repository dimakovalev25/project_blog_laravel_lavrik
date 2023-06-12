<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(){
        return view('welcom');

    }

}
