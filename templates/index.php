<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <link rel="stylesheet" href="App/View/Stile/css/bootstrap.css">
  <link rel="stylesheet" href="App/View/Stile/mystile.css">
  <script src="App/View/Stile/js/bootstrap.js"></script>

  <title>myserver.website</title>
</head>
<body>

  <div class='myright'></div>
  <div class="container">
    <div class="row">
      <div class="col-sm" align="right">
        <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-primary">Главная</button>
          <button type="button" class="btn btn-outline-primary">Войти</button>
          <button type="button" class="btn btn-outline-primary">Регистрация</button> 
          <a type="button" class="btn btn-outline-primary" href="/?cntr=AdminAdd">Admin</a> 
        </div>
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
                  echo date_format($date, 'd-m-Y');
                  ?> </small>
                </div>
                <p class="mb-1"><?php echo  mb_strimwidth($item -> content, 0, 230, "...","utf-8"); ?></p>
                <small class="text-muted"><?php echo $item -> filter; ?></small>
              </a>
            </div>
            <br>
          </div>
        </div>
        <?php 
      } 
      ?>
    </form>


  </body>
  </html>