@extends('layouts.master')

@section('form')
    <div class='container'>
        {{--<form method='GET'>--}}

        <h1>College Cost Calculator</h1>

        <p>Enter the information below to see how much each year of college will cost by the time your child starts.</p>

        {{--input type 1: child name--}}
        <div class='form-group'>
        </div>

        {{--input type 2: college cost now--}}
        <div class='form-group'>
        </div>

        {{--years until starting college--}}
        <div class='form-group'>
        </div>

        {{--input type 3: inflation rate--}}
        <div class='form-group'>
        </div>

        {{--submit button--}}
        <div>
            <input type='submit' value='Calculate' class='btn btn-primary'>
        </div>

        {{--</form>--}}
    </div>
@endsection




