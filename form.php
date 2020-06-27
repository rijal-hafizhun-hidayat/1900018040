<!DOCTYPE html>
<html>
<head>
	<title>formulir</title>
</head>
<body>
	<h3>form pendaftaran</h3>
	<?php include 'index.php'; ?>
	<form method="post" action="<?php echo $_SERVER ['PHP_SELF'];?>">
		<table  border="1" cellspacing="0" cellpadding="4">
			<tr>
				<td>
					<label for="nama">nama: </label><input type="text" name="nama">
					<?php echo $nama_err; ?>
					 <br>
					<label for="alamat">alamat: </label><input type="text" name="alamat">
					<?php echo $alamat_err; ?>
					 <br>
					<label for="telp">telp: </label><input type="text" id="telp" name="telp">
					<?php echo $telp_err; ?>
					<br>
					<label for="jenis kelamin">jenis kelamin: </label><label for="laki">laki</label><input type="radio" name="jeniskelamin" id="laki">
					<label for="perempuan">perempuan</label><input type="radio" name="jeniskelamin" id="perempuan">
					<?php echo $jeniskelamin_err; ?>
					<br>
					<label for="agama">agama:</label>
					<select name="agama">
						<option>islam</option>
						<option>kristen</option>
					</select>
					<?php echo $agama_err; ?>
					<br>
					<label for="bahasa">jenis bahasa yg di pahami: </label>
						<label for="html">HTML</label><input type="checkbox" name="bahasa" value="HTML">
						<label for="css">CSS</label><input type="checkbox" name="bahasa" value="CSS">
						<label for="javascript">JAVASCRIPT</label><input type="checkbox" name="bahasa" value="JAVASCRIPT">
						<label for="php">PHP</label><input type="checkbox" name="bahasa" value="PHP">
						<?php echo $bahasa_err; ?>
						<br>
					<label for="prestasi yang pernah di raih">prestasi yang pernah di raih	:</label><textarea name="area"></textarea>
					<?php echo $area_err; ?>
					<br>
					<button type="submit" onclick="alert('data berhasil input, silahkan cek outputnya')" name="simpan">simpan</button> 
					<button type="submit" onclick="alert('batal mengisi form')" name="batal">batal</button>
				</td>
			</tr>
		</table>
	</form>
	<p>hasil input</p>
	<?php 
	echo "nama: ".$nama."<br>";
	echo "alamat: ".$alamat."<br>";
	echo "no telp: ".$telp."<br>";
	echo "jenis kelamin: ".$jeniskelamin."<br>";
	echo "agama: ".$agama."<br>";
	echo "bahasa: ".$bahasa."<br>";
	echo "area: ".$area;


	 ?>
</body>
</html>