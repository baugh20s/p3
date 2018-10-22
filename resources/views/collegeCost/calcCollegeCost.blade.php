@extends('layouts.master')

@section('collegeCost')
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