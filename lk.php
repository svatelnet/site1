<?php
/*session_start();*/
?>
<!--<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Пример веб-страницы</title>
 </head>
 <body>
  <h1>Заголовок</h1>-->
  <!-- Комментарий -->
  <?php
    /*session_start();
    $b = $_SESSION['user']['fio'];
    $c = $_SESSION['user']['phone'];
    echo "$b";
    echo "$c";
    /*include('vendor/signin.php');
    echo "$login";
    /*session_start();
    $b = $_SESSION['fi'];
    if (isset($_SESSION['fi'])) {
        echo "$b";
        //echo "kill";
    } else {
        echo "helli";
    }*/
?>
  <!--<p>Первый абзац.</p>
  <p>Второй абзац.</p>
 </body>
</html>-->

<?php
    session_start();
    require_once 'vendor/connect.php';
    $s = $_SESSION['user']['phone'];
    $n = mysqli_query($connect, "SELECT smen FROM registration WHERE phone = '$s'");
    $n1 = mysqli_fetch_row($n);
    $s1 = mysqli_query($connect, "SELECT kolvo FROM mesta WHERE smena = '$n1[0]'");
    $s2 = mysqli_fetch_row($s1);
    $_SESSION['sm'] = $s2[0];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/lk.css">
    <link rel="stylesheet" href="https://unpkg.com/flexboxgrid2@7.2.1/flexboxgrid2.min.css">
</head>
<body>
    <form>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>
    <div class="heart">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="header">
                        <div class="news">
                            <a href="news.php">Новости</a>
                        </div>
                        <div class="zayavka">
                            <a href="zayavka.php">Оставить заявку</a>
                        </div>
                        <div class="company">
                            <a href="company.php">О нас</a>
                        </div>
                        <div class="lk">
                            <a href="lk.php">Личный кабинет</a>
                        </div>
                        <div class="close">
                            <a href="index.php">Выход</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="info1">
                    <h1>Ваши данные:</h1>
                    <br>
                    <h2><?= $_SESSION['user']['fio'] ?></h2>
                    <h2><?= $_SESSION['user']['phone'] ?></h2>
                    <br>
                    <h2>Колличество свободных мест в смене, на которую Вы подавали заявку: <?= $_SESSION['sm'] ?></h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>