<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/movieForm.css') }}">
    <title>Formulário</title>
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100 background-body">
    <form action="{{ route('movies.store')}}" method='POST' class="border p-4 bg-light shadow rounded background-form">
        @csrf
        <h1 class="mb-4 text-center">CADASTRO DE FILMES</h1>

        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name='title' id='title' class="form-control">
        </div>

        <div class="mb-3">
            <label for="genre">Genre</label>
            <input type="text" name='genre' id='genre' class="form-control">
        </div>

        <div class="mb-3">
            <label for="release-year">Release Year</label>
            <input type="number" name='release_year' id='release-year' class="form-control">
        </div>

        <div class="mb-3">
            <label for="director">Director</label>
            <input type="text" name='director' id='director' class="form-control">
        </div>

        <button type='submit' class="btn btn-primary w-100">Enviar</button>
    </form>
</body>
</html>
