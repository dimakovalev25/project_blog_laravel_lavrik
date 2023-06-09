<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class Persons extends Controller
{
    public function index(){
        return view('persons.index', ['persons' => Person::all()]);

    }

}
