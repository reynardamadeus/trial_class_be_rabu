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
    <h1>Create Form</h1>
    <form action="{{route('post-book')}}" method='POST' enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1"  name="title">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Desc</label>
            <input type="text" class="form-control" id="exampleFormControlInput1"  name="desc">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Author</label>
            <input type="text" class="form-control" id="exampleFormControlInput1"  name="author">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pages</label>
            <input type="text" class="form-control" id="exampleFormControlInput1"  name="pages">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Images</label>
            <input type="file" class="form-control" id="exampleFormControlInput1"  name="cover">
          </div>

          <button type="submit">Submit</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
