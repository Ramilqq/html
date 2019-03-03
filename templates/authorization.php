<!DOCTYPE html>
<html lang="ru">
<head>
  <?php require_once __DIR__ . '/../Blocks/Head.php'    ?>
</head>
<body>

  <div class='myright'></div>
  <div class="container">
    <div class="row">
      <div class="col-sm" align="right">
        <?php require_once __DIR__ . '/../Blocks/Menu.php'    ?>
      </div>
    </div>
    <div class='myright'></div>

    <div class='myright'></div>

    <div class="row">
      <div class="col-sm">





        <h2>Авторизация</h2>
        <form class="form-horizontal">
          <fieldset disabled="disabled">
            <div class="form-group">
              <label for="inputEmail" class="control-label col-xs-2">Email</label>
              <div class="col-xs-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label col-xs-2">Пароль</label>
              <div class="col-xs-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Пароль">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-offset-2 col-xs-10">
                <div class="checkbox">
                  <label><input type="checkbox"> Запомнить</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" class="btn btn-primary">Войти</button>
              </div>
            </div>
          </fieldset>
        </form>






      </div>
    </div>
  </div>



  <?php require_once __DIR__ . '/../Blocks/Js.php'    ?>
</body>
</html>