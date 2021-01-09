<?php //регистрация

    session_start();
    require_once 'connect.php';

    $fio = htmlentities($_POST['fio']);
    $institut = htmlentities($_POST['institut']);
    $group1 = htmlentities($_POST['group1']);
    $phone = htmlentities($_POST['phone']);
    $login = htmlentities($_POST['login']);
    $password = htmlentities(md5($_POST['password']));
    $password_confirm = htmlentities(md5($_POST['password_confirm']));
    $test = htmlentities($_POST['test']);

    $_SESSION['fi'] = $_POST['fio'];
    //$_SESSION['pos'] = mysqli($connect, "SELECT pos FROM registration WHERE login = '$login' AND password = '$password'");

    if ($password === $password_confirm) {
        $test = mb_strtolower($test);
        if ($test === "да") {
            $password = $password;
            mysqli_query($connect, "INSERT INTO registration (fio, institut, group1, login, password, phone) VALUES ('$fio', '$institut', '$group1', '$login', '$password', '$phone')");
            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header('Location: ../index.php');
        } else {
            $_SESSION['message'] = 'Для регистрации необходимо быть членом профсоюза';
            header('Location: ../index.php');
        }
    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>
