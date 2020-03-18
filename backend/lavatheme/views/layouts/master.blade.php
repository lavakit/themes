<!doctype html>
<html lang="{{ locale() }}">
<head>
    <base src="{{ URL::asset('/') }}" />
    <meta charset="utf-8">
    <title>Title</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('css-stack')
</head>
<body>
<div>
    Administrator LavaTheme
    <div class="content">
        @yield('content')
    </div>
</div>
@stack('js-stack')
</body>
</html>
