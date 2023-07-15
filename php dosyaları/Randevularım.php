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

.h2_1 {
    font-family: sans-serif;
    color: white;
    margin-right: 400px;
    background-color:rgba(22, 112, 214, 0.4) ;
    padding: 20px;
    
}

.linkler {
    margin:200px auto auto;
    text-align:center;
    background-color: #cccc;
    width: 722px;
    height: 600px;
}

.button_link{
    height: 40px;
    width: 500px;
    font-size: 18px;
    font-weight: bold;
    color: #f3f3f3;
    text-shadow: 2px 2px 2px black;
    background-color: grey;
    cursor: pointer;
    outline: none;
    text-align: center;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    
}

.button_link:hover{
    background: #2c2c2c;
    transition: .7s;
    
}

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
.delete{
    background: url("delete.jpg");
    background-size: 100% 100%;
    width: 25px;
    height: 25px;
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
                <li><a href="Randevularım.php" class="active">Randevularım</a></li>
                <li><a href="sifredegistir.php">Hesap</a></li>
                <li><a href="cikis.php">Çıkış Yap</a></li>
                
                
            </ul>
        </div>

</body>

<div class="linkler">
            <h2 class="h2_1">Randevularım</h2> <br> <br>
        

            <?php
session_start();
include 'connection.php';

if (isset($_POST['delete'])) {
    $r_id = $_POST['delete'];
    try {
        $sil = "DELETE FROM randevu WHERE r_id = '$r_id' AND h_id = '{$_SESSION['tc']}'";
        $silmek = $dbconn->query($sil);
        if ($silmek) {
            echo "";
        } else {
            echo "Randevu silinirken bir hata oluştu.";
        }
    } catch (PDOException $e) {
        echo "Hata: " . $e->getMessage();
    }
}

$tc = $_SESSION['tc'];

$query = "SELECT * FROM randevu WHERE h_id = '$tc'";

$result = $dbconn->query($query);

if ($result->rowCount() > 0) {
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
?>
    <table>
        <tr>
            <th>Randevu Tarihi</th>
            <th>Saat</th>
            <th>İl</th>
            <th>Hastane</th>
            <th>Poliklinik</th>
            <th>Doktor</th>
            <th>sil</th>
        </tr>
        <?php foreach ($rows as $row) { ?>
            <tr class="button_link">
                <td><?php echo $row['tarih']; ?></td>
                <td><?php echo $row['saat']; ?></td>
                <td><?php echo $row['il']; ?></td>
                <td><?php echo $row['hastane']; ?></td>
                <td><?php echo $row['poliklinik']; ?></td>
                <td><?php echo $row['doktor']; ?></td>
                <td>
                    <form method="POST">
                        
                        <button class="delete" type="submit" name="delete" value="<?php echo $row['r_id']; ?>"></button>
                        
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } else {
    echo 'Randevu bulunamadı.';
}
?>






</div>
<div class="ebu">
    <h1>Randevunuz Başarıyla Oluştu</h1>
</div>



</html>
