<!DOCTYPE html>
<html>

<head>
  <title>Codeigniter 4 CRUD - Edit User Demo</title>
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
    <form method="post" id="update_user" name="update_user" >
      <input type="hidden" name="id" id="id" value="<?php echo $content->id; ?>">

      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $content->name; ?>">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $content->email; ?>">
      </div>

      <div class="form-group">
        <input type="submit" name="create" class="btn btn-danger btn-block" value="submit">
      </div>
    </form>
  </div>

  
</body>

</html>