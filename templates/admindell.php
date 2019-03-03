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

          <?php
          foreach ($qwe as $item) {
            echo $item -> id;
          }

          ?>

        </div>
      </div>
    </div>
  </div>




  <?php require_once __DIR__ . '/../Blocks/Js.php'    ?>

</body>
</html>