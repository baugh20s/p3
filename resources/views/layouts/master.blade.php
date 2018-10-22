<!doctype html>
<html lang='en'>
<head>
    <title>Project 3</title>
    <meta charset='utf-8'>

    {{-- CSS global to every page can be loaded here --}}
    <link href='/css/college.css' rel='stylesheet'>
    <link href='/css/bootstrap.css' rel='sytlesheet'>

    {{-- CSS specific to a given page/child view can be included via a stack --}}
    @stack('head')
</head>
<body>

<section>
    @yield('form')
</section>

<section>
    @yield('collegeCost')
</section>

<footer>
    &copy; {{ date('Y') }}
</footer>

{{-- JS global to every page can be loaded here; jQuery included just as an example --}}
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'
        integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa'
        crossorigin='anonymous'></script>

{{-- JS specific to a given page/child view can be included via a stack --}}
@stack('body')

</body>
</html>