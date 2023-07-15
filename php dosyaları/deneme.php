<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
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
		background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
	}
	.main{
		width: 350px;
		height: 500px;
		background: red;
		overflow: hidden;
		background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
		border-radius: 10px;
		box-shadow: 5px 20px 50px #000;
	}
	#chk{
		display: none;
	}
	.signup{
		position: relative;
		width:100%;
		height: 100%;
	}
	label{
		color: #fff;
		font-size: 2.3em;
		justify-content: center;
		display: flex;
		margin: 60px;
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
		margin-top: 20px;
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
		background: #eee;
		border-radius: 60% / 10%;
		transform: translateY(-180px);
		transition: .8s ease-in-out;
	}
	.login label{
		color: #573b8a;
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
	
</style>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="POST">                
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="tc" placeholder="TC" required="">                       
					<input type="text" name="username" placeholder="username" required="">
                    <input type="text" name="surname" placeholder="surname" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="tc" placeholder="TC" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html>


<?php
require_once("connection.php");

if (isset($_POST['tc'], $_POST['username'], $_POST['surname'], $_POST['password'])) {
    $TC = $_POST['tc'];    
    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $password = md5($_POST['password']);
    
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
                echo "Başarılı";
                
                // Yeni sayfaya yönlendirme
                header("Location: mehrs.php");
                exit();
            } else {
                echo "Bir hata oluştu.";
            }
        }
    } catch (PDOException $e) {
        echo "Hata: " . $e->getMessage();
    }
}

if (isset($_POST['tc'], $_POST['password'])) {
    $TC = $_POST['tc'];
    $password = md5($_POST['password']);

    try {
        $sql_check = "SELECT * FROM sign_up WHERE tc = :tc AND password = :password";
        $query_check = $dbconn->prepare($sql_check);
        $query_check->bindParam(':tc', $TC, PDO::PARAM_STR);
        $query_check->bindParam(':password', $password, PDO::PARAM_STR);
        $query_check->execute();

        if ($query_check->rowCount() > 0) {
            // Giriş başarılı
            header("Location: mehrs.php");
            exit();
        } else {
            // Giriş başarısız
            echo "Hatalı giriş bilgileri";
        }
    } catch (PDOException $e) {
        echo "Hata: " . $e->getMessage();
    }
}
?>










