<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS</title>
</head>
<body>
    <div style="display:block; text-align:center; background: #f1f1f1; width:45%; heigth: 150px;">
        <h1>DATOS</h1>
        
        @foreach($datos as $d)
        @if ($d['edad'] >= "18")
            <p><b>NOMBRE:</b>{{$d['nombre']}}</p>
            <p><b>EDAD:</b>{{$d['edad']}}</p>
            <p><b>DESCRIPCION:</b>{{$d['descripcion']}}</p>
            <p><b>-------------------------</b></p>
        @else
            <p>Es un puberto {{$d['nombre']}} y tiene {{$d['edad']}} años</p>
        @endif
        @endforeach
    </div>
</body>
</html>