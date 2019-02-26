<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <link rel="stylesheet" href="App/View/Stile/css/bootstrap.css">
  <link rel="stylesheet" href="App/View/Stile/css/bootstrap-reboot.css">
  <link rel="stylesheet" href="App/View/Stile/mystile.css">
  <title>myserver.website</title>
</head>
<body>

  <div class='myright'></div>

  <div class="container">
    <div class="row">
      <div class="col-2" align="left">
        <div class="btn-group-vertical btn-block" role="group" aria-label="Basic example">
          <a type="button" class="btn btn-secondary" href="admin-add.php">Add</a>
          <a type="button" class="btn btn-secondary" href="admin-dell.php">Dell</a>
          <a type="button" class="btn btn-secondary" href="index.php">Home</a>
        </div>
      </div>
      <div class="col-10" align="left">
        <div class="btn-group-vertical btn-block" role="group" aria-label="Basic example">

<?php
foreach ($qwe as $item) {
  echo $item -> id;
}

?>

        </div>
      </div>
    </div>
  </div>




  <script src="App/View/Stile/js/jquery-slim.min.js"></script>
  <script src="App/View/Stile/js/bootstrap.js"></script>

</body>
</html>