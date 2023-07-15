<?php
ob_start();
session_start();
require_once("connection.php");


    $query_check = $dbconn->prepare("select * from sign_up where tc=:tc");
    $query_check->execute(['tc' => $_SESSION["u_tc"]]);
    $don = $query_check->rowCount();

    $take = $query_check->fetch(PDO::FETCH_ASSOC);

    if ($don == 0) {
        header("location: logon.php");
    exit;
    }

?>