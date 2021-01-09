<?php
session_start();

/*if ($_SESSION['user']) {
    header('Location: profile.php');
}*/

?>
<!-- Форма авторизации -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main1.css">
</head>
<body>
    <div class="auth">
        <div class="hello"> 
            <div class="cont">
                    <h1 class="hh">Cанаторий-профилакторий ВлГУ</h2>
                    <p class="pp">Санаторий - профилакторий  ВлГУ — это здоровье, учеба, отдых, общение. Что может быть лучше? Мы ждем вас! У вас есть прекрасная возможность отдохнуть и поправить свое здоровье в санатории-профилактории ВлГУ, расположенном в Общежитие №3 (ул. Студенческая, д.14).</p>
                    <div class="logo">
                        <div class="i">
                            <img src="assets/img/img1.png">
                        </div>
                        <div class="i1">
                            <img src="assets/img/img2.png">
                        </div>
                    </div>
            </div>
        </div>
        <div class="reg1">
            <div class="reg">
                <form action="vendor/signin.php" method="post">
                    <label>Логин</label>
                    <input type="text" name="login" placeholder="Введите логин">
                    <label>Пароль</label>
                    <input type="password" name="password" placeholder="Введите пароль">
                    <button type="submit">Войти</button>
                    <p>
                        У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>!
                    </p>
                    <?php
                        if (isset($_SESSION['message'])) {
                            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                        }
                        unset($_SESSION['message']);
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>