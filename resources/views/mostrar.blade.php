<!DOCTYPE html>
<html>
<head>
    <title>Autores y Noticias</title>
</head>
<body>
    <h1>Autores y Noticias</h1>
    @foreach($autores as $autor)     
    <h2>{{ $autor->nombre }}</h2>
        <ul>
            @foreach($autor->noticias as $noticia)
                <li>
                    <strong>{{ $noticia->titulo }}</strong><br>
                    {{ $noticia->contenido }}
                </li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>