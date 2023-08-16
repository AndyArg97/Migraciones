<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
</head>
<body>
    <div style="background: #f1f1f1; width:45%; heigth: 150px;">
        <h1>Noticia</h1>
        @foreach($noticias as $n)
            <p><b>ID:</b>{{$n['id']}}</p>
            <p><b>TITULO:</b>{{$n['titulo']}}</p>
            <p><b>DESCRIPCION:</b>{{$n['descripcion']}}</p>
            <p><b>-------------------------</b></p>
        @endforeach
    </div>
</body>
</html>