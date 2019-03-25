<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
  header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu | Penumpang</title>
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
		header{
			background: rgb(100,100,100);
			color: white;
			padding: 10px;
			margin: 0px;
		}
		td{
			width: 120px;
			height: 30px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<header>
		<center><h1>PENUMPANG MENU</h1></center>
		<center><h3>Hai, <?=$_SESSION['sess_user'];?> !</h3></center>
	</header>
	<div class="main">
		<center>
			<table style="text-align: center">
				<tr>
					<td><a href="pemesanan\input.php"><button>PEMESANAN</button></a></td>
					<td><a href="rute\rute2.php"><button>RUTE</button></a></td>
				</tr>
				<tr>
					<td><a href="transportasi\transportasi2.php"><button>TRANSPORTASI</button></a></td>
					<td><a href="index.php"><button>LOGOUT</button></a></td>
				</tr>
			</table>
		</center>
	</div>
</body>
</html>