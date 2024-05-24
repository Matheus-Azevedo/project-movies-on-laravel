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
<div class="border p-4 bg-light shadow rounded background-form">
        <h1 class="mb-4 text-center">BIBLIOTECA DE FILMES</h1>
        <a href="/movies/create" class="btn btn-primary w-100 mb-3">Create</a>
        <ul class="list-group mb-4">
            @foreach ($movies as $movie)
                <li class="list-group-item">
                    <h5>{{ $movie->title }}</h5>
                    <a href="/movies/show/{{ $movie->id }}" class="btn btn-primary w-100">Show</a>
                    <a href="/movies/edit/{{ $movie->id }}" class="btn btn-primary w-100">Edit</a>
                    <a href="/movies/delete/{{ $movie->id }}" class="btn btn-primary w-100">Delete</a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
