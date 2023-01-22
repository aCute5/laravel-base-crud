<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics Database</title>
</head>
<body>
    <h1>Lista dei fumetti</h1>
    <main>
             <ul>
                 @foreach ($comics as $comic)
                <li>{{ $comic->id }}</li>
                <li>{{ $comic->title}} </li>
                <li> {{ $comic ->price }}</li>
                 @endforeach
              </ul>
    </main>
</body>
</html>

