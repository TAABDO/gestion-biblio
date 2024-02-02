

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Book</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Add your additional stylesheets or scripts here -->
</head>

<body>
  <div class="container mt-5">
    <h2>Add Book</h2>
    <form action="{{route('books.store')}}" method="POST">
        @csrf

      <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="date" class="form-control" id="name" name="name" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="number" class="form-control" id="email" name="email" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">password</label>
        <input type="number" class="form-control" id="password" name="password" required>
      </div>

      <button type="submit" name='submit' class="btn btn-primary">Add User</button>
    </form>
  </div>

  <!-- Add your additional scripts or stylesheets here -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>
