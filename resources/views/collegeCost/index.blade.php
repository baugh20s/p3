{{-- /resources/views/index.blade.php --}}
@extends('layouts.master')

@section('form')
    <div class='container'>
        <form method='GET' action='/calcCost'>

            <h1>{{ config('app.name') }}</h1>

            <p>Enter the information below to see how much each year of college will cost by the time your child starts.</p>

            {{--input type 1: child name--}}
            <div class='form-group'>
                <label for='childName'>Child Name
                </label><br>
                <input type='text' name='childName' id='childName' class='form-control' value='{{old('childName')}}'>
            </div>

            {{--input type 2: college cost now--}}
            <div class='form-group'>
                <label for='collegeCostNow'>College Cost
                </label>
                <p>Enter the average current cost of college per year in today's dollars.</p>
                <input type='number'
                       name='collegeCostNow'
                       id='collegeCostNow'
                       class='form-control'
                       value='{{old('collegeCostNow')}}'>
            </div>

            {{--years until starting college--}}
            <div class='form-group'>
                <label for='yrsUntilStart'>Years until starting college
                </label>
                <p>Enter the number of years until your child starts their first year of college.</p>
                <input type='number'
                       name='yrsUntilStart'
                       id='yrsUntilStart'
                       class='form-control'
                       value='{{old('yrsUntilStart')}}'>
            </div>

            {{--input type 3: inflation rate--}}
            <div class='form-group'>
                <label for='collegeInflation'>College Cost Inflation Rate
                </label>
                <p>Select the expected inflation rate. Keep in mind that the cost of college has been rising about 6% per year, though public college has been rising faster.</p>
                <br>
                <select name='collegeInflation' id='collegeInflation' class='form-control'>
                    <option selected>Select an inflation rate:</option>
                    @for ($x = 1; $x < 11; $x++) {
                        @if (old('collegeInflation')) == $x) {
                            <option value='{{$x}}' selected>{{$x}}</option>\n;
                        } @else {
                            <option value='{{$x}}'>{{$x}}</option>\n;
                        }
                        @endif
                    }
                    @endfor
                </select>
            </div>

            {{--submit button--}}
            <div>
                <input type='submit' value='Calculate' class='btn btn-primary'>
            </div>

        </form>

        <div class='form-group calcForm'>
            @if(count($errors) > 0)
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if($collegeCostFuture)
            <div>
                <p>The estimated cost of college each year when your child starts is:</p>
                {{'$' . number_format($collegeCostFuture)}}
            </div>
            @endif
        </div>
    </div>
@endsection




