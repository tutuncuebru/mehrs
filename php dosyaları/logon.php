<!DOCTYPE html>
<html>
<head>
	<title>MEHRS</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<style>
	body{
		margin: 0;
		padding: 0;
		display: flex;
		justify-content: center;
		align-items: center;
		min-height: 100vh;
		font-family: 'Jost', sans-serif;
		
	}
	.main{
		width: 350px;
		height: 500px;
		background: red;
		overflow: hidden;
        background: linear-gradient(purple, pink, brown); 
		border-radius: 10px;
		box-shadow: 5px 20px 50px #000;
	
	}
	#chk{
		display: none;
	}
	.signup{        
		position: relative;
		width:100%;
		height: 108%;        
	}
	label{
		color: #fff;
		font-size: 2.3em;
		justify-content: center;
		display: flex;
		margin: 35px;  /* komple yukarı */
		font-weight: bold;
		cursor: pointer;
		transition: .5s ease-in-out;
	}
	input{
		width: 60%;
		height: 20px;
		background: #e0dede;
		justify-content: center;
		display: flex;
		margin: 20px auto;
		padding: 10px;
		border: none;
		outline: none;
		border-radius: 5px;        
	}
	button{
		width: 60%;
		height: 40px;
		margin: 10px auto;
		justify-content: center;
		display: block;
		color: #fff;
		background: #573b8a;
		font-size: 1em;
		font-weight: bold;
		margin-top: 15px; /* sing up button yukarı */
		outline: none;
		border: none;
		border-radius: 5px;
		transition: .2s ease-in;
		cursor: pointer;
	}
	button:hover{
		background: #6d44b8;
	}
	.login{
		height: 460px;
        background: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
        border-radius: 60% / 10%;
		transform: translateY(-180px);
		transition: .8s ease-in-out;        
	}
	.login label{
		color: #fff;
		transform: scale(.6);
	}
	
	#chk:checked ~ .login{
		transform: translateY(-500px);
	}
	#chk:checked ~ .login label{
		transform: scale(1);	
	}
	#chk:checked ~ .signup label{
		transform: scale(.6);
	}

	.arki{
	background-image: url("arki.jpg");
    height: 100vh;
    background-size: 100% 100%;
	}

	.admin {
  display: inline-block;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  font-size: 16px;
  border-radius: 4px;
  border: none;
  position: relative;
  right: 83px;
  bottom: 228px;
}

.admin:hover {
  background-color: #45a049;
}






</style>
<body class="arki">

	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="POST">                
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="tc" placeholder="TC" required="">                       
					<input type="text" name="username" placeholder="username" required="">
					<input type="text" name="surname" placeholder="surname" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" id="kayit" name="kayit"  >Sign up</button>
				</form>
			</div>

			<div class="login">
				<form method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="tc" placeholder="TC" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" id="giris" name="giris" >Login</button>
				</form>
			</div>
	</div>
	<a href="admin.php" class="admin">admin</a>
</body>
</html>

<?php
require_once("connection.php");
session_start();
if(isset($_POST['kayit'])){
if (isset($_POST['tc'], $_POST['username'], $_POST['surname'], $_POST['password'])) {
    $TC = $_POST['tc'];    
    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    
    try {
        $sql_check = "SELECT * FROM sign_up WHERE tc = :tc";
        $query_check = $dbconn->prepare($sql_check);
        $query_check->bindParam(':tc', $TC, PDO::PARAM_STR);
        $query_check->execute();
        
        
        if ($query_check->rowCount() > 0) {
            echo "Geçersiz kullanıcı: TC numarası zaten kayıtlı.";
        } else {
            $sql_insert = "INSERT INTO sign_up (tc, username, surname, password) VALUES (?,?,?,?)";
            $query_insert = $dbconn->prepare($sql_insert);
            $query_insert->bindParam(1, $TC, PDO::PARAM_STR);
            $query_insert->bindParam(2, $username, PDO::PARAM_STR);
            $query_insert->bindParam(3, $surname, PDO::PARAM_STR);
            $query_insert->bindParam(4, $password, PDO::PARAM_STR);
            $insert_result = $query_insert->execute();
            
            if ($insert_result) {
                $_SESSION['u_tc']=$tc;
                echo "Başarılı";               
                header("Location: mehrs.php");
                exit();
            } else {
                echo "Bir hata oluştu.";
                exit();
            }
        }
    } catch (PDOException $e) {
        echo "Hata: " . $e->getMessage();
    }
}
}
if (isset($_POST['giris'])) {
    if (isset($_POST['tc'], $_POST['password'])) {
        $TC = $_POST['tc'];
        $password = $_POST['password'];

        try {
            $sql_check = "SELECT * FROM sign_up WHERE tc = :tc AND password = :password";
            $query_check = $dbconn->prepare($sql_check);
            $query_check->bindParam(':tc', $TC, PDO::PARAM_STR);
            $query_check->bindParam(':password', $password, PDO::PARAM_STR);
            $query_check->execute();
            $result = $query_check->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $_SESSION['u_tc'] = $TC;
                header('location: mehrs.php?durum=girisbasarili');
                exit;
            } else {
                header('location: logon.php');
                exit;
            }
        } catch (PDOException $e) {
            echo "Hata: " . $e->getMessage();
        }
    }
}
?>
