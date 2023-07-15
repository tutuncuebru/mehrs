
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mehrs</title>
</head>
<style>
    .ebu {  
  position: fixed;
  bottom: 20px;
  right: 20px;
  padding: 10px;
  background-color: #07c607;
  color: white;
  font-size: 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  animation: fade 2s;
  
}

@keyframes fade {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.5; }
}
    
    .adsoyad{
        position: relative;
        float:right;
    }



    /* */

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
*{
    margin: 0;
    padding: 0;
}

.container{
    background: url("ste.jpeg");
    height: 100vh;
    background-size: 100% 100%;

}

.container .navbar{
    width: 100%;
    height: 80px;
    background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c);
    
}

.navbar .Mig{
    display: inline-block;
    margin-left: 50px;
    margin-top: 20px;
}

.navbar .Mig a{
    text-decoration: none;
    font-size: 30px;
    font-family: sans-serif;
    color: #f3f3f3;
}

.navbar ul{
    float: right;
    margin-right: 20px;
}

.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 8px;
    line-height: 80px;
}

.navbar ul li a{
    color: white;
    text-decoration: none;
    font-size: 20px;
    padding: 6px 13px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    transition: .7s;
}

.navbar ul li a.active,
.navbar ul li a:hover{
    background: #3f87a6; /* hover arka plan rengi */
    border-radius: 2px;
}

.container .center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    font-family: sans-serif;
    user-select: none;
}

.fark {
    margin-top: 300px;
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
}

.fark label {
    display: block;
    font-size: 24px;
    margin-bottom: 10px;
    color: #333;
    
}

.fark input[type="text"],
.fark input[type="password"] {
    width: 20%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.fark input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

.fark input[type="submit"]:hover {
    background-color: #45a049;
}

.fark input[type="password"]::placeholder {
    color: #999;
}

.fark input[type="password"]:required:invalid {
    border: 1px solid #f44336;
}

.fark input[type="password"]:required:valid {
    border: 1px solid #4CAF50;
}





</style>

<body>

    <div class="container">
        <div class="navbar">
            <div class="Mig">
                <a href="mehrs.php">MEHRS</a>
            </div>
            <ul>
                <li><a href="mehrs.php" >Ana Sayfa</a></li>
                <li><a href="Randevularım.php">Randevularım</a></li>
                <li><a href="sifredegistir.php" class="active">Hesap</a></li>
                <li><a href="cikis.php">Çıkış Yap</a></li>
                
                
            </ul>
        </div>

</body>

<body>
    <div class="fark">
    <form action="" method="POST">
    <input type="text" name="tc" placeholder="tc">
    <input type="password" name="eski_sifre" placeholder="Eski Şifre">
    <input type="password" name="yeni_sifre" placeholder="Yeni Şifre">

        <input type="submit" value="Şifre Değiştir">
    </form>
    </div>
</body>

</html>

<?php
include 'connection.php';

$tc = isset($_POST['tc']) ? $_POST['tc'] : '';

$sql = "SELECT * FROM sign_up WHERE tc = :tc";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(':tc', $tc);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $eskiSifre = isset($_POST['eski_sifre']) ? $_POST['eski_sifre'] : '';

    if ($row['password'] == $eskiSifre) {
        $yeniSifre = isset($_POST['yeni_sifre']) ? $_POST['yeni_sifre'] : '';
        $sql = "UPDATE sign_up SET password = :yeni_sifre WHERE tc = :tc";
        $stmt = $dbconn->prepare($sql);
        $stmt->bindParam(':yeni_sifre', $yeniSifre);
        $stmt->bindParam(':tc', $tc);

        if ($stmt->execute()) {
            echo "Şifre başarıyla güncellendi.";
        } else {
            echo "Hata oluştu: " . $stmt->errorInfo()[2];
        }
    } else {
        echo "";
    }
} else {
    echo "";
}

?>











