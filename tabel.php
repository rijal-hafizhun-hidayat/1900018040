<!DOCTYPE html>
<html>
<head>
	<title>terima kasih</title>
	<style type="text/css">
		body{
			background-image: url(herringbone.png); 
			font-family: sans-serif;
		}
		img{
			width: 200px;
			height: 200px;
		}
		.container{
			margin: 70px auto;
			background-color: #ffffff;
			width: 30%;
			height: 30%;
			padding: 5px;
			border-radius: 5px;  
		}
		a{
			text-decoration: none;
			color: #ffffff;
			font-weight: bold;
		}
		button{
			background: #38B7EE;
			width: 120px;
			height: 40px;
			border: none;
			border-radius: 10px;

		}

	</style>
</head>
<body>
	<center>
		<div class="container">
			<h2>data pendaftar UT TRAKTOR</h2>
			<table border="0">
				<tr>
					<center><td colspan="3"><img src="<?php echo $upload ?>"></td></center>
				</tr>
			<?php 

				$file="karyawan.txt";
				$fp=fopen($file, "r");
				$data=fgets($fp);
					$pisah=explode("|", $data);
						
						echo "<tr><td>nama</td><td>:</td><td>$pisah[0]</td></tr>";
						echo "<tr><td>umur</td><td>:</td><td>$pisah[1]</td></tr>";
						echo "<tr><td>alamat</td><td>:</td><td>$pisah[2]</td></tr>";
						echo "<tr><td>no.telp</td><td>:</td><td>$pisah[3]</td></tr>";
						echo "<tr><td>agama</td><td>:</td><td>$pisah[4]</td></tr>";
						echo "<tr><td>jenis kelamin</td><td>:</td><td>$pisah[5]</td></tr>";
						echo "<tr><td>status maritas</td><td>:</td><td>$pisah[6]</td></tr>";
						echo "<tr><td>nomor ktp</td><td>:</td><td>$pisah[7]</td></tr>";
						echo "<tr><td>nama file foto</td><td>:</td><td>$pisah[8]</td></tr>";
						echo "<tr><td>&nbsp;</td></tr>";
					echo "</table>";
				echo "</div>";
				echo "<div class='tambah'><button><a href='index.html'>overwrite data</a></button></div>";
			echo "</center>";
		fclose($fp);


	 ?>

</body>
</html>
