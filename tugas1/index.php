<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    * {
    	box-sizing: border-box;
    }

    a {
    	text-decoration: none;
    }
    .container {
		width: 100%;
		padding: 0 30px;
		margin: 0 auto;
	}

    body {
    	margin: 0;
    	font-family: "Arial";
    }

    /*header*/
    header {
      	height: 100px;
      	width: 100%;
      	background-color: #CD5C5C;
      	position :fixed;
      	top: 0;
      	z-index: 10;
    }
   	h1 {
	  	font-weight: bold;
	  	letter-spacing: 5px;
      	padding: 10px 10px;
      	color: black;
      	display: block;
      	text-align: center;
      	transition: all 0.5s;
    }
	.logo {
		display: block;
		height: 60px;
		width: 60px;
		float: left;
	}

	/*Main*/
	.main {
	  height: 1000px;
	  padding-top: 10px;
	  text-align: center;
	}
	.main-head {
	  padding-top: 150px;
	  padding-bottom: 30px;
	  font-size: 30px;
	  font-weight: bold;
	  color: #495057;
	  letter-spacing: 5px;
	}
	.table1, td {
	  margin: auto;
	  border-spacing: 100px 50px;
	  border-radius: 50px;
	  background-color: #CD5C5C;
	}
	.tombol {
	  background: #FFE4C4;
	  color:black;
	  padding:10px 30px;
	  text-decoration:none;
	  font-size:11pt;
	  border-radius: 10px;
	}
    </style>

</head>
<body>
	<header>
		<div class="container">
	        <h1>DATA MAHASISWA</h1>
		</div>
	</header>

	<div class="main">
      <div class="main-head">Menu</div>
	<nav>
		<?php if (isset($_GET['status'])) : ?>
			<p>
				<?php
				if ($_GET['status'] == 'sukses') {
					echo "Pendaftaran berhasil";
				} else {
					echo "Pendaftaran gagal!";
				}
				?>
			</p>
		<?php endif; ?>
		<table class="table1">
			<tr>
				<td>
					<a class="tombol" href="pendaftar.php">List Pendaftar</a>
				</td>
				<td>
					<a class="tombol" href="daftar.php">Daftar Baru</a>
				</td>
			</tr>
		</table>
	</nav>
	</div>
</body>
</html>
