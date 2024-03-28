<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comic</title>
</head>

<body>
    <strong>Titolo: </strong> {{ $comic['title'] }} <br />
    <strong>Descrizione: </strong> {{ $comic['description'] }} <br />
    <strong>Prezzo: </strong> {{ $comic['price'] }} <br />
    <strong>Serie: </strong> {{ $comic['series'] }} <br />
    <strong>Data di vendita: </strong> {{ $comic['sale_date'] }} <br />
    <strong>Tipo: </strong> {{ $comic['type'] }} <br />
</body>

</html>
