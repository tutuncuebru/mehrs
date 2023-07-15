<?php 
ob_start();
include 'randevu_kayıt.php'?>

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
    background: url(mig8.jpg);
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

.center h1{
    color: #fff;
    font-size: 70px;
    width: 1000px;
    text-align: center;
    text-shadow: 2px 5px 5px black;
    
    
}

.center h2{
    color: #fff;
    font-size: 50px;
    font-weight: bold;
    width: 1000px;
    height: 60px;
    text-align: center;
    text-shadow: 4px 5px 5px black;
    padding: 5px;
    
}

.center .buttons{
    margin: 20px 500px;
}

.buttons button{
    height: 50px;
    width: 150px;
    font-size: 18px;
    font-weight: bold;
    color: black;
    background-color: #cccccc;
    border: solid 3px black;
    cursor: pointer;
    outline: none;
    border-radius: 25px;
    transition: .5s;
    margin-top: 5px;
    margin-left: -10px;
    margin-right: -300px;
    text-shadow: 1px 1px 3px #fff;
    
}

.buttons button:hover{
    background: #2c2c2c;
    transition: .7s;
}

.hastane {
    background-color: #f2f2f2;
    border-radius: 5px;
    border: 1px solid #ccc;
    color: #555;
    padding: 8px 12px;
    font-size: 14px;
    width: 200px;
        }

        .hastane:hover {
    background-color: #eaeaea;
  }

  .hastane option {
    background-color: #fff;
  }

.il {
    background-color: #f2f2f2;
    border-radius: 5px;
    border: 1px solid #ccc;
    color: #555;
    padding: 8px 12px;
    font-size: 14px;
    width: 200px;
}

.il:hover {
    background-color: #eaeaea;
  }

  .il option {
    background-color: #fff;
  }

.poliklinik {
    background-color: #f2f2f2;
    border-radius: 5px;
    border: 1px solid #ccc;
    color: #555;
    padding: 8px 12px;
    font-size: 14px;
    width: 200px;
}

.poliklinik:hover {
    background-color: #eaeaea;
  }

  .poliklinik option {
    background-color: #fff;
  }


.doktor {
    background-color: #f2f2f2;
    border-radius: 5px;
    border: 1px solid #ccc;
    color: #555;
    padding: 8px 12px;
    font-size: 14px;
    width: 200px;
}

.doktor:hover {
    background-color: #eaeaea;
  }

  .doktor option {
    background-color: #fff;
  }

.tarih {

    background-color: #f2f2f2;
    border-radius: 5px;
    border: 1px solid #ccc;
    color: #555;
    padding: 8px 12px;
    font-size: 14px;
    width: 173px;
}

.tarih:hover {
    background-color: #eaeaea;
  }

  .tarih option {
    background-color: #fff;
  }

.rendevu {
    text-align: center;
    margin: auto;
    padding: 80px;
    background: linear-gradient(#e66465, #9198e5);   /* orta kutu rengi */
    height: 500px;
    width: 275px;
    border-radius: 30px;
    
    
}

.kaydet {
  display: inline-block;
  border: none;
  padding: 12px 24px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  background-color: #4CAF50;
  color: #ffffff;
  cursor: pointer;
  border-radius: 8px;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
  transition: background-color 0.3s ease;
}

.kaydet:hover {
  background-color: #45a049;
}

.kaydet:active {
  background-color: #3e8e41;
  box-shadow: none;
}


.ste {
    background-image: url("ste.jpeg");
    height: 100vh;
    background-size: 100% 100%;
    
}

.font {
    font-family: sans-serif;
}

.time {

background-color: #f2f2f2;
border-radius: 5px;
border: 1px solid #ccc;
color: #555;
padding: 8px 12px;
font-size: 14px;
width: 200px;
}

.time:hover {
background-color: #eaeaea;
}

.time option {
background-color: #fff;
}





</style>

<body>

    <div class="container">
        <div class="navbar">
            <div class="Mig">
                <a href="mehrs.php">MEHRS</a>
            </div>
            <ul>
                <li><a href="mehrs.php" class="active">Ana Sayfa</a></li>
                <li><a href="Randevularım.php">Randevularım</a></li>
                <li><a href="sifredegistir.php">Hesap</a></li>
                <li><a href="cikis.php">Çıkış Yap</a></li>
                
                
            </ul>
        </div>

<body>

<br>  <br>  <br>

<body class="ste">
    



    <div class="rendevu">
        
    <p style="font-family: 'Arial', sans-serif; font-size: 24px; text-shadow: 1px 1px 2px #000000;">Lütfen Bilgileri Giriniz</p>
<br> <br> <br>  

    <form action="" method="POST">

        <input type="date" name="tarih" class="tarih">

        <br> <br>

        <select name="saat" class="time">
            <option value="saat seçiniz">saat seçiniz</option>
            <option value="10.30">10.30</option>
            <option value="13.00">13.00</option>
            <option value="15.45">15.45</option>
        </select>

        <br> <br>

        <select name="il" class="il">
        <option value="İl Seçin">İl Seçin</option>
        <option value="Adana">Adana</option>
        <option value="Adıyaman">Adıyaman</option>
        <option value="Afyonkarahisar">Afyonkarahisar</option>
        <option value="Ağrı">Ağrı</option>
        <option value="Amasya">Amasya</option>
        <option value="Ankara">Ankara</option>
        <option value="Antalya">Antalya</option>
        <option value="Artvin">Artvin</option>
        <option value="Aydın">Aydın</option>
        <option value="Balıkesir">Balıkesir</option>
        <option value="Bilecik">Bilecik</option>
        <option value="Bingöl">Bingöl</option>
        <option value="Bitlis">Bitlis</option>
        <option value="Bolu">Bolu</option>
        <option value="Burdur">Burdur</option>
        <option value="Bursa">Bursa</option>
        <option value="Çanakkale">Çanakkale</option>
        <option value="Çankırı">Çankırı</option>
        <option value="Çorum">Çorum</option>
        <option value="Denizli">Denizli</option>
        <option value="Diyarbakır">Diyarbakır</option>
        <option value="Edirne">Edirne</option>
        <option value="Elazığ">Elazığ</option>
        <option value="Erzincan">Erzincan</option>
        <option value="Erzurum">Erzurum</option>
        <option value="Eskişehir">Eskişehir</option>
        <option value="Gaziantep">Gaziantep</option>
        <option value="Giresun">Giresun</option>
        <option value="Gümüşhane">Gümüşhane</option>
        <option value="Hakkâri">Hakkâri</option>
        <option value="Hatay">Hatay</option>
        <option value="Isparta">Isparta</option>
        <option value="Mersin">Mersin</option>
        <option value="İstanbul">İstanbul</option>
        <option value="İzmir">İzmir</option>
        <option value="Kars">Kars</option>
        <option value="Kastamonu">Kastamonu</option>
        <option value="Kayseri">Kayseri</option>
        <option value="Kırklareli">Kırklareli</option>
        <option value="Kırşehir">Kırşehir</option>
        <option value="Kocaeli">Kocaeli</option>
        <option value="Konya">Konya</option>
        <option value="Kütahya">Kütahya</option>
        <option value="Malatya">Malatya</option>
        <option value="Manisa">Manisa</option>
        <option value="Kahramanmaraş">Kahramanmaraş</option>
        <option value="Mardin">Mardin</option>
        <option value="Muğla">Muğla</option>
        <option value="Muş">Muş</option>
        <option value="Nevşehir">Nevşehir</option>
        <option value="Niğde">Niğde</option>
        <option value="Ordu">Ordu</option>
        <option value="Rize">Rize</option>
        <option value="Sakarya">Sakarya</option>
        <option value="Samsun">Samsun</option>
        <option value="Siirt">Siirt</option>
        <option value="Sinop">Sinop</option>
        <option value="Sivas">Sivas</option>
        <option value="Tekirdağ">Tekirdağ</option>
        <option value="Tokat">Tokat</option>
        <option value="Trabzon">Trabzon</option>
        <option value="Tunceli">Tunceli</option>
        <option value="Şanlıurfa">Şanlıurfa</option>
        <option value="Uşak">Uşak</option>
        <option value="Van">Van</option>
        <option value="Yozgat">Yozgat</option>
        <option value="Zonguldak">Zonguldak</option>
        <option value="Aksaray">Aksaray</option>
        <option value="Bayburt">Bayburt</option>
        <option value="Karaman">Karaman</option>
        <option value="Kırıkkale">Kırıkkale</option>
        <option value="Batman">Batman</option>
        <option value="Şırnak">Şırnak</option>
        <option value="Bartın">Bartın</option>
        <option value="Ardahan">Ardahan</option>
        <option value="Iğdır">Iğdır</option>
        <option value="Yalova">Yalova</option>
        <option value="Karabük">Karabük</option>
        <option value="Kilis">Kilis</option>
        <option value="Osmaniye">Osmaniye</option>
        <option value="Düzce">Düzce</option>
        </select>

        <br> <br>

        <select name="hastane" class="hastane">
            <option value="0">Hastane Seçin</option>
            <option value="Memorial">Memorial</option>
            <option value="Acıbadem">Acıbadem</option>
            <option value="Avicenna">Avicenna</option>
            <option value="Eren">Eren</option>
            <option value="FSM">FSM</option>
            <option value="Süreyya">Süreyya </option>
            <option value="Maltepe">Maltepe</option>
        </select>
        
        <br> <br>

        <select name="poliklinik" class="poliklinik">
            <option value="0">Poliklinik Seçin</option>
            <option value="Dahiliye">Dahiliye</option>
            <option value="Kardiyoloji">Kardiyoloji</option>
            <option value="Kulak Burun Boğaz">Kulak Burun Boğaz</option>
            <option value="Nöroloji">Nöroloji</option>
            <option value="Ortopedi ve Travmatoloji">Ortopedi ve Travmatoloji</option>
            <option value="Üroloji">Üroloji</option>
            <option value="Göğüs Hastalıkları">Göğüs Hastalıkları</option>
            <option value="Çocuk Sağlığı ve Hastalıkları">Çocuk Sağlığı ve Hastalıkları</option>
            <option value="Genel Cerrahi">Genel Cerrahi</option>
        </select>

        <br> <br>


        <select name="doktor" class="doktor">
            <option value="0">Doktor Seçin</option>
            <option value="NURDAN ŞATANA">NURDAN ŞATANA</option>
            <option value="BERFİN YAKICI">BERFİN YAKICI</option>
            <option value="YASER HASIRCI">YASER HASIRCI</option>
        </select>

        <br> <br>

        <input type="hidden" name="k_id">
        <button name="kaydet" class="kaydet">Randevuyu Oluştur</button>

<br> <br> <br>
<div class="font">
<input type="checkbox"> Randevuma gideceğme dair söz veriyorum.
</div>         
       

        </form>
    </div>
</body> 
</body>
</head>

<?php
ob_start();
include 'connection.php';

if (isset($_POST['kaydet'])) {
    $tarih = isset($_POST['tarih']) ? $_POST['tarih'] : null;
    $saat = isset($_POST['saat']) ? $_POST['saat'] : null;
    $il = isset($_POST['il']) ? $_POST['il'] : null;
    $hastane = isset($_POST['hastane']) ? $_POST['hastane'] : null;
    $poliklinik = isset($_POST['poliklinik']) ? $_POST['poliklinik'] : null;
    $doktor = isset($_POST['doktor']) ? $_POST['doktor'] : null;
    $h_id = isset($_POST['k_id']) ? $_POST['k_id'] : null;

  
    $kontrol = $dbconn->prepare("SELECT * FROM randevu WHERE tarih = ? AND saat = ? AND il = ? AND hastane = ? AND poliklinik = ? AND doktor = ?");
    $kontrol->execute([$tarih, $saat, $il, $hastane, $poliklinik, $doktor]);

    if ($kontrol->rowCount() > 0) {
        echo "Bu saatte randevu bulunmamakta"; 
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
<section>  <!-- hoşgel -->
    <?php
    if (isset($take['username']) && !empty($take['username'])) {?>
      <div class="ebu"> <h1>Hoş geldiniz  <?php echo  $take['username'] ; ?> </h1></div>
    <?php } else {
        echo "<h4>Hoşgeldin Misafir</h4>";
    }
    ?>
</section>


</html>

