<!DOCTYPE html>
<html lang="ru">
<head>
  <?php require_once __DIR__ . '/../Blocks/Head.php'    ?>

</head>
<body>

  <div class='myright'></div>

  <div class="container">
    <div class="row">
      <div class="col-2" align="left">
        <?php require_once __DIR__ . '/../Blocks/MenuAdmin.php'    ?>
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



  <?php require_once __DIR__ . '/../Blocks/Js.php'    ?>

</body>
</html>