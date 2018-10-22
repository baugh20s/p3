@extends('layouts.master')

@section('form')
    <div class='container'>
        {{--<form method='GET'>--}}

        <h1>College Cost Calculator</h1>

        <p>Enter the information below to see how much each year of college will cost by the time your child starts.</p>

        {{--input type 1--}}
        <div class='form-group'>
            <label for='childName'>Child Name
            </label><br>
            {{--<input type='text' name='childName' id='childName' class='form-control' value='<?php echo $childName ?>'>--}}
        </div>

        {{--input type 2--}}
        <div class='form-group'>
            <label for='collegeCostNow'>College Cost (in today's dollars)
            </label>
            <p>Enter the average current cost of college per year in today's dollars.</p>
            {{--<input type='number' name='collegeCostNow' id='collegeCostNow' class='form-control' value='<?php echo $collegeCostNow ?>'>--}}
        </div>

        <div class='form-group'>
            <label for='yrsUntilStart'>Years until starting college
            </label>
            <p>Enter the number of years until your child starts their first year of college.</p>
            {{--<input type='number' name='yrsUntilStart' id='yrsUntilStart' class='form-control' value='<?php echo $yrsUntilStart ?>'>--}}
        </div>

        {{--input type 3--}}
        <div class='form-group'>
            <label for='collegeInflation'>College Cost Inflation Rate
            </label>
            <p>Select the expected inflation rate. Keep in mind that the cost of college has been rising about 6% per year, though public college has been rising faster.</p>
            <br>
            <select name='collegeInflation' id='collegeInflation' class='form-control'>
                <option selected>Select an inflation rate:</option>
                {{--loop through options--}}
            </select>
        </div>

        <div>
            <input type='submit' value='Calculate' class='btn btn-primary'>
        </div>

        {{--</form>--}}
    </div>
@endsection




