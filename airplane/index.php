<!DOCTYPE html>
<html>
<head>
	<title>Login | Penumpang</title>
	<style type="text/css">
		.main{
			margin: 50px 0px 40px 0px;
		}
		body{
			background: white;
			color: rgb(40,40,40);
			font-family: sans-serif;
			padding: 0px;
			margin: 0px;
		}
		a{
			text-decoration: none;
			color: rgb(40,40,40);
			
		}
		a:hover{
			color: rgb(160,160,160);
		}
		header{
			background: rgb(100,100,100);
			color: white;
			padding: 10px;
			margin: 0px;
		}
		button {
		  background-color: rgb(100,100,100);
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		}
		button:hover{
			background-color: rgb(230,230,230);
			color: rgb(40,40,40);
		}
	</style>
</head>
<body>
	<header>
		<center><h1>AIRPLANS TICKET</h1><h4>BY GERY & RIFQI RPL 1</h4></center>
	</header>
	<div class="main">
		<center>
		<h2>SELAMAT DATANG, SILAHKAN LOGIN PENUMPANG</h2>
		<form action="" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="pass"></td>
			</tr>
		</table>
		<br><input type="submit" name="submit" value="Login"><br><br>
		</form>
		<?php
		error_reporting(0);
		if(isset($_POST["submit"])){

		if(!empty($_POST['user']) && !empty($_POST['pass'])) {
		  $user=$_POST['user'];
		  $pass=$_POST['pass'];

		  $con=mysqli_connect('localhost','root','','ticket') or die(mysqli_error());

		  $query=mysqli_query($con, "SELECT * FROM penumpang WHERE username='".$user."' AND password='".$pass."'");
		  
		  $numrows=mysqli_num_rows($query);
		    if($numrows!=0){
			    while($row=mysqli_fetch_assoc($query)){
				  $dbusername=$row['username'];
				  $dbpassword=$row['password'];
		  		}
		    }else {
			  echo "Password & Username tidak cocok !";
			}

		    if($user == $dbusername && $pass == $dbpassword){
			  session_start();
			  $_SESSION['sess_user']=$user;

			  /* Redirect browser */
			  header("Location: penumpang.php");
			}
		  } else {
		  echo "Jangan di kosongkan !";
		  }
		}

		?><br>
		<a href="penumpang/signup.php">Belum Punya Akun? Signup saja</a><br><br>
		<a href="indexa.php"><button>Login Admin</button></a>  <a href="indexp.php"><button>Login Petugas</button></a>
		</center>
	</div>
</body>
</html>