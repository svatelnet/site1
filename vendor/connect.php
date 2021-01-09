<?php

    $connect = mysqli_connect('localhost', 'root', '12345', 'profilaga');

    if (!$connect) {
        die('Error connect to DataBase');
    }