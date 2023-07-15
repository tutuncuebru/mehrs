<?php
include 'connection.php';
session_start();

if(isset($_SESSION['tc'])){
    $eski_sifre = $_POST['eski_sifre'];
    $yeni_sifre = $_POST['yeni_sifre'];
    try {
        $sql = "SELECT * FROM sign_up WHERE tc=:tc AND password=:eski_sifre";
        $stmt = $dbconn->prepare($sql);
        $stmt->bindParam(':tc', $tc);
        $stmt->bindParam(':eski_sifre', $eski_sifre);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $updateSql = "UPDATE sign_up SET password=:yeni_sifre WHERE tc=:tc";
            $stmt = $dbconn->prepare($updateSql);
            $stmt->bindParam(':yeni_sifre', $yeni_sifre);
            $stmt->bindParam(':tc', $tc);
            $stmt->execute();

            echo "Şifre başarıyla güncellendi.";
        } else {
            echo "Hatalı eski şifre.";
        }

        $dbconn = null;
    } catch (PDOException $e) {
        echo "Veritabanı hatası: " . $e->getMessage();
        die();
    }
}
?>
