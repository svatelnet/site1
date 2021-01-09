<?php
session_start();
/*if (!$_SESSION['user']) {
    header('Location: /');
}*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/news.css">
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
    <div class="welc">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h1>Свежие новости</h1>
            </div>
        </div>
    </div>
    <div class="event">
        <div class="container">
            <div class="row">

                    <?php
                        require_once 'vendor/connect.php';
                        $check_user = mysqli_query($connect, "SELECT * FROM news");
                        if (mysqli_num_rows($check_user) > 0) {
                            $rows = mysqli_num_rows($check_user);
                            for ($i = 0 ; $i < $rows ; ++$i){
                                $row = mysqli_fetch_row($check_user);
                                echo "<div class=\"col-lg-12 col-md-12 col-xs-12\"><div class=\"n1\"><div class=\"n2\">$row[0]</div></div></div><br>";
                                //echo "$row[0]";
                            }
                        }       
                    ?>
            
            </div>
        </div>
    </div>
</body>
</html>