<!DOCTYPE html>
<html lang="ru">
<head>
  <?php require_once __DIR__ . '/../Blocks/Head.php';    ?>
</head>
<body>

  <div class='myright'></div>
  <div class="container h-100">
    <div class="row">
      <div class="col" align="right">
        <?php require_once __DIR__ . '/../Blocks/Menu.php';    ?>
      </div>
    </div>
    <div class='myright'></div>
    <div class='myright'></div>

    <div class="row h-100 justify-content-center align-items-center">
      <div class="col col-sm-8 col-md-5 col-sm-4 col-sm-4">
        <h2>Авторизация</h2>
        <form class="form-horizontal" method="post" id="myForm">
          <div class="form-group" >
            <label class="control-label col-xs-3" for="login">Логин:</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Введите логин">
          </div>

          <div class="form-group">
            <label class="control-label col-xs-3" for="passvordone">Пароль:</label>
            <input type="password" class="form-control" id="passvord" name="passvord" placeholder="Введите пароль">
          </div>


          <div class="form-group">
            <span id="msg"></span>
          </div>

          <div class="alert alert-danger" id="errorBlock"></div>

          <div class="form-group">
            <button  type="submit" class="btn btn-primary" id="butReg">Авторизцаия</button>
            <input type="reset" class="btn btn-default" value="Очистить форму">
          </div>
        </form>
      </div>
    </div>
    
    <div class="row">


















    </div>
  </div>
  <?php require_once __DIR__ . '/../Blocks/Js.php';?>
  <script>
    const myForm = document.getElementById('myForm');

    myForm.addEventListener('submit', function (e){
      e.preventDefault();

      const formData = new FormData(this);

      fetch ('/../Form/Authorization.php', {
        method : 'post',
        body : formData,
        headers: {},
        credentials: "same-origin"
      }).then (function (response){
        return response.text();
      }).then (function (text){
        console.log(text);

        var objectURL = document.getElementById('msg');
        objectURL.style.color =  'red';
        objectURL.innerHTML =  text;

      }).catch (function (error){
        console.error(error);
      })
    });
  </script>
</body>
</html>