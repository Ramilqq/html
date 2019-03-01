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
          <a type="button" class="btn btn-secondary" href="/?cntr=AdminAdd">Add</a>
          <a type="button" class="btn btn-secondary" href="/?cntr=AdminDell">Dell</a>
          <a type="button" class="btn btn-secondary" href="/?cntr=Index">Home</a>
        </div>
      </div>
      <div class="col-10" align="left">
        <div class="btn-group-vertical btn-block" role="group" aria-label="Basic example">


          <form method="post" action="Form/Form001.php">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">filter</label>
              <textarea class="form-control" rows="1" name="filter"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">tittle</label>
              <textarea class="form-control" rows="1" name="tittle"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">content</label>
              <textarea class="form-control" rows="6" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Add</button>
          </form>


        </div>
      </div>
    </div>
  </div>




  <script src="App/View/Stile/js/jquery-slim.min.js"></script>
  <script src="App/View/Stile/js/bootstrap.js"></script>

</body>
</html>