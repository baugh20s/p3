<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegeCalcController extends Controller
{
    public function index () {
        return 'Show the form';
    }

    public function calcCollegeCost () {
        return 'calculate the cost and redirect the user back to the index';
    }
}
