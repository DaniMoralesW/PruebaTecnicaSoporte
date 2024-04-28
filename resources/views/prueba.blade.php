<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prueba técnica</title> 
</head>

<body class="invisible">
    <h1>Nombre: {{ $aplicante['nombre'] }}</h1>
    @if ($aplicante['aprobado']) {{--Corregí para que leyera como array y no como objeto--}}
        <h2>APROBADO</h1>
        @else
            <h2>REPROBADO</h1>
    @endif
</body>

</html>
<style>
    .invisible {
        display: in-line; //Cambié para que sea visible
        font-family: Georgia; //Realicé unos cambios de estilo para darle un toque personal
        background-color: white;
        text-align: center;
    }
    h1{
        background-color: rgb(219, 112, 147);
        color:white;
    }

    h2{
        background-color: rgb(236, 204, 0);
        color:black;
    }
</style>
