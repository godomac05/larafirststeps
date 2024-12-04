<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello World CONTACT 1</h1>

    <a href="/">INICIO</a>

    <br>
    <br>

    <a href="{{ route("inicio") }}">Inicio</a>

    <br>
    <br>

    @if($name != "Godo")
        Tu nombre no es Andres
    @else
        <h2>Tu nombre es Godo</h2>
    @endif

    <br>
    <br>

    @foreach ([1,2,3,4,5] as $item)
        <li>{{ $item }}</li>
    @endforeach


</body>
</html>