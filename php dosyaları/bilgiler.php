<?php
ob_start();
session_start();
include 'connection.php';

if (isset($_POST['kaydet'])) {
    $tarih = isset($_POST['tarih']) ? $_POST['tarih'] : null;
    $saat = isset($_POST['saat']) ? $_POST['saat'] : null;
    $il = isset($_POST['il']) ? $_POST['il'] : null;
    $hastane = isset($_POST['hastane']) ? $_POST['hastane'] : null;
    $poliklinik = isset($_POST['poliklinik']) ? $_POST['poliklinik'] : null;
    $doktor = isset($_POST['doktor']) ? $_POST['doktor'] : null;
    $h_id = isset($_POST['k_id']) ? $_POST['k_id'] : null;

    // Kontrol için veritabanında aynı randevu bilgilerini arayalım
    $randevu_kontrol = $dbconn->prepare("SELECT * FROM randevu WHERE tarih = ? AND saat = ? AND il = ? AND hastane = ? AND poliklinik = ? AND doktor = ?");
    $randevu_kontrol->execute([$tarih, $saat, $il, $hastane, $poliklinik, $doktor]);

    if ($randevu_kontrol->rowCount() > 0) {
        echo "Randevu dolu!"; // Sayfada hata mesajı gösteriliyor
    } else {
        $sql_sorgu = $dbconn->prepare("INSERT INTO randevu (tarih, saat, il, hastane, poliklinik, doktor, h_id)
        VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sql_sorgu->execute([$tarih, $saat, $il, $hastane, $poliklinik, $doktor, $h_id]);

        if ($sql_sorgu->rowCount() > 0) {
            header("Location: Randevularım.php");
            exit();
        } else {
            echo "Hatalı giriş bilgileri";
        }
    }
}
?>