<?php
include 'connection.php';
session_start();

if (isset($_POST['d_mail'], $_POST['d_password'])) {
    $d_mail = $_POST['d_mail'];
    $d_password = $_POST['d_password'];

    try {
        $sql = "SELECT * FROM doktor WHERE d_mail = :d_mail AND d_password = :d_password";
        $stmt = $dbconn->prepare($sql);
        $stmt->bindParam(':d_mail', $d_mail);
        $stmt->bindParam(':d_password', $d_password);
        $stmt->execute();

        $result = $stmt->fetch();

        if ($result) {
            $_SESSION['d_mail'] = $d_mail; 
            header("Location: adminsayfa.php");
            exit();
        } else {
            echo "Bir hata oluştu.";
            exit();
        }
    } catch (PDOException $e) {
        echo "Hata: " . $e->getMessage();
    }
} else {
    echo "Lütfen tüm alanları doldurun.";
    exit();
}
?>
