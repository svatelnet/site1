<?php
    //session_start();
    //include 'signin.php';
    session_start();
    require_once 'connect.php';
    $nom = htmlentities($_POST['nom']);
    $_SESSION['user']['smena'] = $nom;
    //$pos = $_POST['pos'];
    $s = $_SESSION['user']['phone'];
    $n = mysqli_query($connect, "SELECT pos FROM registration WHERE phone = '$s'");
    $n1 = mysqli_fetch_row($n);

    if ($n1[0] >= 2 ) {
        $_SESSION['nomer'] = 'Вы можете жить в санатории только 2 раза в год';
        header('Location: ../zayavka.php');
    } else {
        $v = mysqli_query($connect, "SELECT kolvo FROM mesta WHERE smena = '$nom'");
        if ($v > 0) {
            mysqli_query($connect, "UPDATE mesta SET kolvo = kolvo-1 WHERE smena = '$nom'");
            mysqli_query($connect, "UPDATE registration SET pos = pos+1 WHERE phone = '$s'");
            mysqli_query($connect, "UPDATE registration SET smen = '$nom' WHERE phone = '$s'");
            $_SESSION['nomer'] = 'Ваша заявка успешно принята! В личном кабинете Вы сможете увидеть статус заявки';
            header('Location: ../zayavka.php');
        } else {
            $_SESSION['nomer'] = 'К сожалению, на эту смену уже нет мест';
        }
    }
?>