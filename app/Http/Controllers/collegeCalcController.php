<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class collegeCalcController extends Controller
{

    /**
     * GET
     * /calcCollegeCost
     * Show the form to calculate college cost
     */
    public function index (Request $request)
    {
        return view('collegeCost.index')->with([
            'childName' => $request->input('childName',''),
            'collegeCostNow' => $request->input('collegeCostNow',''),
            'yrsUntilStart' => $request->session()->get('yrsUntilStart',''),
            'collegeInflation' => $request->session()->get('collegeInflation',''),
            'collegeCostFuture' => null,
        ]);
    }
    /**
     * GET
     * /calcCollegeCost/calcProcess
     * Process the form to calculate college cost
     */
    public function calcCost (Request $request) {

        $childName = $request->input('childName');
        $collegeCostNow = $request->input('collegeCostNow');
        $yrsUntilStart = $request->input ('yrsUntilStart');
        $collegeInflation = $request->input('collegeInflation');
        $errors = null;
        # validate the request data
        $request->validate([
            'childName' => 'required|alpha|between:2,50',
            'collegeCostNow' => 'required|digits_between:1,100000000',
            'yrsUntilStart' => 'required|digits_between:1,100',
            'collegeInflation' => 'required|min:0',
        ]);
        # code for calculator goes here
        # future value = (cash flow at period 0) * (1 + rate of return) raised to (number of periods)
        # future college cost = collegeCostNow * (1 + collegeInflation) raised to (yrsUntilStart)
        $collegeCostFuture = round($collegeCostNow * pow((1 + ($collegeInflation / 100)), $yrsUntilStart), 2);
        # Redirect back to the form page with the inputs and results
        return view('collegeCost.index')->with([
            'childName' => $childName,
            'collegeCostNow' => $collegeCostNow,
            'yrsUntilStart' => $yrsUntilStart,
            'collegeInflation' => $collegeInflation,
            'collegeCostFuture' => $collegeCostFuture,
        ]);
    }
}