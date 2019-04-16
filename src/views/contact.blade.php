<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>VContact Us page</h2>
  <form action="/post-contact" method="post">
      @csrf
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">email:</label>
      <input type="text" class="form-control"  placeholder="Enter email" name="email">
    </div>
      
    <div class="form-group">
      <label for="email">Message:</label>
      <textarea class="form-control" name="message" placeholder="Enter you message"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
