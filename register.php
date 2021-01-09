<?php
    session_start();
    /*if ($_SESSION['user']) {
        header('Location: profile.php');
    }*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main1.css">
</head>
<!-- Форма регистрации -->
<body>
    <!-- Форма регистрации -->
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
            <div class="reg2">
                <form action="vendor/signup.php" method="post">
                    <label>ФИО</label>
                    <input id="t" type="text" name="fio" placeholder="Введите свое ФИО">
                    <label>Институт</label>
                    <input id="t" type="text" name="institut" placeholder="Введите свой институт">
                    <label>Группа</label>
                    <input id="t" type="text" name="group1" placeholder="Введите свою группу">
                    <label>Номер</label>
                    <input id="t" type="text" name="phone" placeholder="Введите номер телефона">
                    <label>Логин</label>
                    <input id="t" type="text" name="login" placeholder="Введите логин">
                    <label>Пароль</label>
                    <input id="t" type="password" name="password" placeholder="Введите пароль">
                    <label>Подтверждение пароля</label>
                    <input id="t" type="password" name="password_confirm" placeholder="Подтвердите пароль">
                    <label>Являетесь членом профсоюза?</label>
                    <input id="t" type="text" name="test" placeholder="Да/нет">
                    <button type="submit">Зарегистрироваться</button>
                    <p>
                        У вас уже есть аккаунт? - <a href="index.php">авторизируйтесь</a>!
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
</body>
</html>