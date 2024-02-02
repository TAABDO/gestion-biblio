

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Book</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <h2>Update Book</h2>
    <form action="{{route('books.update', $book->id)}}" method="post">
        @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $book-> title}}" required>
      </div>
      <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control" id="author" name="author" value="{{ $book-> author}}" required>
      </div>
      <div class="mb-3">
        <label for="genre" class="form-label">Genre</label>
        <input type="text" class="form-control" id="genre" name="genre" value="{{ $book-> genre}}" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required> {{ $book-> description}}</textarea>
      </div>
      <div class="mb-3">
        <label for="publication_year" class="form-label">Publication Year</label>
        <input type="date" class="form-control" id="publication_year" name="publication_year" value="{{ $book->publication_year}}" required>
      </div>
      <div class="mb-3">
        <label for="total_copies" class="form-label">Total Copies</label>
        <input type="number" class="form-control" id="total_copies" name="total_copies" value="{{ $book->total_copies}}" required>
      </div>
      <div class="mb-3">
        <label for="availbale_copies" class="form-label">Available Copies</label>
        <input type="number" class="form-control" id="availbale_copies" name="availbale_copies" value="{{ $book->availbale_copies}}" required>
      </div>
      <button type="submit" name='submit' class="btn btn-primary">Update Book</button>
    </form>
  </div>

  <!-- Add your additional scripts or stylesheets here -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>
