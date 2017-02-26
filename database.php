<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=ds742';
    $username = 'ds742';
    $password = 'gx75Jt4SZ';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>