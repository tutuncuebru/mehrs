<!DOCTYPE html>
<html>
<head>
	<title>Admin Giriş</title>
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
	background: linear-gradient(purple, pink, brown); 
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}

label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 170px;
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
	margin: 80px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
    margin-top: -60px;
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
	margin-top: -40px;
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
	transform: translateY(-150px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}

.ste {
    background-image: url("arki.jpg");
    height: 100vh;
    background-size: 100% 100%;

}




</style>






<body class="ste">
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="login">
				<form method="POST" action="admin_islem.php">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="d_mail" placeholder="Email" required="">
					<input type="password" name="d_password" placeholder="Password" required="">
					<button  type="submit">Login</button>
				</form>
			</div>
	</div>
</body>
</html>