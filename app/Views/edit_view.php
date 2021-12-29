<!DOCTYPE html>
<html>

<head>
  <title>Jendela 360 Praktek</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <form method="post" id="update_book" name="update_book" 
    action="<?= site_url('/update') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $book_obj['id']; ?>">

      <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $book_obj['title']; ?>">
      </div>

      <div class="form-group">
        <label>Author</label>
        <input type="author" name="author" class="form-control" value="<?php echo $book_obj['author']; ?>">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Save Data</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_book").length > 0) {
      $("#update_book").validate({
        rules: {
          title: {
            required: true,
          },
          author: {
            required: true,
          },
        },
        messages: {
          title: {
            required: "Title is required.",
          },
          author: {
            required: "Author is required.",
          },
        },
      })
    }
  </script>
</body>

</html>