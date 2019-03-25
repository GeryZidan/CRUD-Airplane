<!DOCTYPE html>
<html>
<head>
	<title>Menu | Admin</title>
	<style type="text/css">
		.main{
			margin: 50px 0px 40px 0px;
		}
		body{
			background: rgb(40,40,40);
			color: white;
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
		<center><h1>ADMIN MENU</h1></center>
		<center><h3>Hai, Admin</h3></center>
	</header>
	<div class="main">
		<center>
			<table style="text-align: center">
				<tr>
					<td><a href="penumpang\penumpang.php"><button>PENUMPANG</button></a></td>
					<td><a href="petugas\petugas.php"><button>PETUGAS</button></a></td>
				</tr>
				<tr>
					<td><a href="rute\rute.php"><button>RUTE</button></a></td>
					<td><a href="level\level.php"><button>LEVEL</button></a></td>
				</tr>
				<tr>
					<td><a href="transportasi\transportasi.php"><button>TRANSPORTASI</button></a></td>
					<td><a href="tipe\tipe.php"><button>TIPE TRANSPORTASI</button></a></td>
				</tr>
				<tr>
					<td><a href="pemesanan\pemesanan.php"><button>PEMESANAN</button></a></td>
					<td><a href="indexa.php"><button>LOGOUT</button></a></td>
				</tr>
			</table>
		</center>
	</div>
</body>
</html>