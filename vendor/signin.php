<?php

    session_start();
    require_once 'connect.php';

    $login = htmlentities($_POST['login']);
    $password = htmlentities(md5($_POST['password']));

    $check_user = mysqli_query($connect, "SELECT * FROM registration WHERE login = '$login' AND password = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "fio" => $user['fio'],
            "institut" => $user['institut'],
            "group1" => $user['group1'],
            "phone" => $user['phone'],
            "smena" => $user['smen']
        ];

        header('Location: ../news.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../index.php');
    }
    ?>

<pre>
    <?php
    /*print_r($check_user);
    print_r($user);*/
    ?>
</pre>
