<!doctype html>

<html lang ="en">
    <head>
        <title>Music wbsit - @yield('title')</title>
</head>

<body>
    <h1><font color = "green">Music wbsit</font> - @yield('title')</h1>
   
 
@if ($errors->any())
    <div>
        Errors: 
        <ul> 
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
        @yield('content')
    </div>


</body>

</html>