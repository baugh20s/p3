<!doctype html>
<html lang='en'>
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset='utf-8'>

    {{-- CSS global to every page can be loaded here --}}
    <link href='../css/bootstrap.css' rel='stylesheet'>
    <link href='../css/college.css' rel='stylesheet'>

    {{-- CSS specific to a given page/child view can be included via a stack --}}
    @stack('head')
</head>
<body>

<header>
    @yield('modules.nav')
</header>

<section>
    @yield('form')
</section>

<footer>
    &copy; {{ date('Y') }}
</footer>

@stack('body')

</body>
</html>