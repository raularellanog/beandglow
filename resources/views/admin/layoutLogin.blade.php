<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Be & glow</title>
    @include('sections.script')
    @yield('css')
</head>

<body>

    <div>
        @yield('content')
    </div>

    @include('sections.script')
    @yield('js')
</body>

</html>
