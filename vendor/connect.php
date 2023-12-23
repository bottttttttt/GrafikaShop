<?php

    $connect = mysqli_connect('localhost', 'root', '', 'shopee');

    if (!$connect) {
        die('Error connect to DataBase');
    }