<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Film selezionati</h1>
    </header>
    <main>
        <div class="container">
            <ul>
                @foreach ($data as $movie)
                    <li>
                        <div class="movie-info">
                            <p><span class="bold-text">Titolo:</span> {{$movie['title']}}</p>
                            <p><span class="bold-text">Titolo originale:</span> {{$movie['original_title']}}</p>
                            <p><span class="bold-text">Anno:</span> {{$movie['date']}}</p>
                            <p><span class="bold-text">Paese:</span> {{$movie['nationality']}}</p>
                            <p><span class="bold-text">Voto:</span> {{$movie['vote']}}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
</body>
</html>