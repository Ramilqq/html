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






        <h2>Регистрация</h2>
        <form class="form-horizontal" method="post">
          <div class="form-group">
            <label class="control-label col-xs-3" for="login">Логин:</label>
            <div class="col-xs-9">
              <input type="text" class="form-control" id="login" name="login" placeholder="Введите логин">
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-xs-3" for="email">Email:</label>
            <div class="col-xs-9">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-xs-3" for="passvordone">Пароль:</label>
            <div class="col-xs-9">
              <input type="password" class="form-control" id="passvordone" name="passvordone" placeholder="Введите пароль">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-xs-3" for="passvordtwo">Подтвердите пароль:</label>
            <div class="col-xs-9">
              <input type="password" class="form-control" id="passvordtwo" name="passvordtwo" placeholder="Введите пароль ещё раз">
            </div>
          </div>

          <div class="alert alert-danger" id="errorBlock"></div>

          <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
              <button  type="button" class="btn btn-primary" id="butReg">Регистрация</button>
              <input type="reset" class="btn btn-default" value="Очистить форму">
            </div>
          </div>


        </form>






      </div>
    </div>
  </div>



  <?php require_once __DIR__ . '/../Blocks/Js.php';    ?>
  <script>
    $('#butReg').click (function(){
      var login = $('#login').val(); 
      var email = $('#email').val(); 
      var passvordone = $('#passvordone').val(); 
      var passvordtwo = $('#passvordtwo').val();
      $.ajax({
        url: '/../Form/Registration.php',
        type: 'POST',
        cache: false,
        data: {'login' : login, 'email' : email, 'passvordone' : passvordone, 'passvordtwo' : passvordtwo},
        dataType: 'html',
        success: function(data){
          if (data == 'Все готово') {
            $('#butReg').text(data);
            $('#errorBlock').hide();
          }else{
            $('#errorBlock').show();
            $('#errorBlock').text(data);
          }
        }
      });
    });

  </script>
</body>
</html>