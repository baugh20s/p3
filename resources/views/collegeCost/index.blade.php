@extends('layouts.master')

@section('form')
    <div class='container'>
        {{--<form method='GET'>--}}

        <h1>{{ config('app.name') }}</h1>

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

    <div class='form-group'>
        {{--if there are errors--}}
        <div class='alert alert-danger'>
            <ul>
                {{--display errors--}}
            </ul>
        </div>
        {{--otherwise, display the cost--}}
        <div>
            <p>The estimated cost of college each year when your child starts is:</p>
        </div>
    </div>
@endsection




