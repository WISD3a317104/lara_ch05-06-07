<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
    @section('head')
        @include('partials.head')
    @show
</head>
<body>
    @include('partials.nav')
    <div class='container'>
        @yield('container')
    </div>
</body>
</html>
