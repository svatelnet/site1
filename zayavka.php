<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Оставить заявку</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/zayavka.css">
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
    <div class="welc hell">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h1>Список смен:</h1>
                <div class="spisok">
                    <ol>
                        <li>1 февраля - 21 февраля</li>
                        <li>1 марта - 21 марта</li>
                        <li>1 апреля - 21 апреля</li>
                        <li>1 мая - 21 мая</li>
                        <li>1 июня - 21 июня</li>
                        <li>1 июля - 21 июля</li>
                        <li>1 августа - 21 августа</li>
                        <li>1 сентября - 21 сентября</li>
                        <li>1 октября - 21 октября</li>
                        <li>1 ноября - 21 ноября</li>
                        <li>1 декабря - 21 декабря</li>
                    </ol>
                </div>
                <!--<h1 class="m1">Заполните данные заявки:</h1>-->
                <form action="vendor/zayavka1.php" method="post">
                    <label class="m1">На какую смену хотите?</label>
                    <input class="m1" type="text" name="nom" placeholder="Введите номер смены">
                    <!--<label class="m1">Сколько раз за последний календарный год Вы жили в санатории-профилактории?</label>
                    <input class="m1" type="text" name="pos" placeholder="Введите число">-->
                    <button type="submit">Отправить заявку</button>
                    <?php
                       if (isset($_SESSION['nomer'])) {
                            echo '<p class="msg"> ' . $_SESSION['nomer'] . ' </p>';
                        }
                        unset($_SESSION['nomer']);
                    ?>
                </form>
            </div>
        </div>
    </div>
    <div class="tmp">
    </div>
    <!--<div class="welc">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h1>Сколько раз за последний календарный год Вы жили в санатории-профилактории?</h1>
                <form action="vendor/zayavka1.php" method="post">
                    <input type="text" name="posecheniye" placeholder="Введите число">
                    <button type="submit">Зарегистрироваться</button>
                    <?php
                        /*if (isset($_SESSION['posecheniye'])) {
                            echo '<p class="msg"> ' . $_SESSION['posecheniye'] . ' </p>';
                        }
                        unset($_SESSION['posecheniye']);
                        /*if (isset($_SESSION['nomer'])) {
                            echo '<p class="msg"> ' . $_SESSION['nomer'] . ' </p>';
                        }
                        unset($_SESSION['nomer']);*/
                    ?>
                </form>
            </div>
        </div>
    </div>
    <div class="tmp">
    </div>--->
</body>
</html>
