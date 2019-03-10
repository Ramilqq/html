<!DOCTYPE html>
<html lang="ru">
<head>
  <?php require_once __DIR__ . '/../Blocks/Head.php' ;   ?>
</head>
<body>

  <div class='myright'></div>

  <div class="container">
    <div class="row">
      <div class="col-sm" align="right">
        <?php require_once __DIR__ . '/../Blocks/Menu.php'   ; ?>
      </div>
    </div>

    <div class='myright'></div>

    <?php
    foreach ($this->news as $item ) {?>
      <form method="get">
        <div class="row">
          <div class="col-sm">
            <div class="list-group">
              <a href="/?cntr=Article&id=<?php echo $item -> id; ?>" 
                class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1"><?php echo $item -> tittle; ?></h5>
                  <small class="text-muted"> <?php  
                  $date = date_create_from_format("Y-m-d H:i:s", $item -> date);
                  //echo date_format($date, 'd-m-Y');
                  ?> </small>
                </div>
                <p class="mb-1"><?php echo  mb_strimwidth($item -> content, 0, 230, "...","utf-8"); ?></p>
                <small class="text-muted"><?php echo $item -> filter; ?></small>
              </a>
            </div>
            <br>
          </div>
        </div>
      </form>
      <?php 
    } 
    ?>
  </div>

  <?php require_once __DIR__ . '/../Blocks/Js.php' ;   ?>
</body>
</html>