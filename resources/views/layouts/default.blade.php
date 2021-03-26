<!DOCTYPE html>
<html lang="en">
<head>
	@include('include.head')
</head>
<body>
 @include('include.header')
    <div id="main">
            @yield('content')
    </div>

    <footer>
        @include('include.footer')
    </footer>