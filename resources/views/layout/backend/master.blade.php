<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.backend.head')

@yield('css')

</head>
<body>
    <div id="main-wrapper">
@include('layout.backend.header')
@include('layout.backend.sidebar')

@yield('content')



@yield('js')




</body>
</html>
