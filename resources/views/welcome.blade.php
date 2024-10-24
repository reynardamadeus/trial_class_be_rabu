<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <p>Data buku</p>
    @foreach ($books as $b)
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/covers/' . $b->cover) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$b->title}}</h5>
          <p class="card-text">{{$b->desc}}</p>
          <p class="card-text">{{$b->author}}</p>
          <p class="card-text">{{$b->pages}}</p>
        </div>
      </div>
    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

