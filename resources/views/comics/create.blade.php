<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" />

        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="4"></textarea>

        <label for="thumb" class="form-label">Thumbnail</label>
        <input type="text" class="form-control" id="thumb" name="thumb" />

        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price" />

        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series" />

        <label for="sale_date" class="form-label">Data di vendita</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" />

        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="type" name="type" />

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>

</body>

</html>
