@extends('layouts.master')

@section('nav')
<nav>
    <ul>
        @foreach(config('app.nav') as $link => $label)
            <li>
                @if(Request::is(substr($link, 1)))
                    {{ $label }}
                @else
                    <a href='{{ $label }}'>{{ $label }}</a>
                @endif

        @endforeach
    </ul>
</nav>
@endsection