<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegeCalcController extends Controller
{
    public function index () {
        return view('collegeCost.index');
    }

    public function calcCollegeCost () {
        return view('collegeCost.calcCollegeCost');
    }
}
