<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Войти в систему</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../css/bootcomplete.css">
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap-typeahead.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.js"></script>
    <link href="../css/style.css" media="all" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <form class="form-horizontal" method="post" action="../control/checkAuth.php" name="login">
                <div class="form-group" id="form-login" name="form-login">
                    <input type="text" class="form-control" name="login" id="login" autocomplete="off"
                           placeholder="Имя пользователя"
                           value="<?php echo (isset($_POST["login"])) ? $_POST["login"] : null; // Заполняем поле по умолчанию ?>">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group" id="form-password" name="form-password">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Пароль"
                           value="">
                    <i class="fa fa-lock"></i>
                </div>
                <div class="form-group" id="form-enter" name="form-enter">
                    <button type="submit" class="btn btn-default top-name">ВХОД</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<script>
    $(function () {
        $("#login").typeahead({ //на какой input:text назначить результаты списка
            ajax: '/control/getDataWithComp.php?mode=user'
        });
    })
</script>
