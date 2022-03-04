<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($data as $movie)
            <li>
                <p>Titolo: {{$movie['title']}}</p>
                <p>Titolo originale: {{$movie['original_title']}}</p>
                <p>Anno: {{$movie['date']}}</p>
                <p>Paese: {{$movie['nationality']}}</p>
            </li>
        @endforeach
    </ul>



</body>
</html>