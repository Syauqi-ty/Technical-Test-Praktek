<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Jendela 360 Praktek</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/book-form') ?>" class="btn btn-success mb-2">Add Book</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="books-list">
       <thead>
          <tr>
             <th>Book Id</th>
             <th>Title</th>
             <th>Author</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($books): ?>
          <?php foreach($books as $book): ?>
          <tr>
             <td><?php echo $book['id']; ?></td>
             <td><?php echo $book['title']; ?></td>
             <td><?php echo $book['author']; ?></td>
             <td>
              <a href="<?php echo base_url('edit-view/'.$book['id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('delete/'.$book['id']);?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#books-list').DataTable();
  } );
</script>
</body>
</html>