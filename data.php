<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		$nama=$alamat=$umur=$telp=$agama=$jeniskelamin=$status=$nomorktp=$upload="";

		$fp=fopen("karyawan.txt", "w");

		if ($_SERVER['REQUEST_METHOD']=='POST') {
			if (empty(trim($_POST['nama']))) {
				$nama="*maaf nama harus di input";
			}
			else{
				$nama=$_POST['nama'];
			}
			if (empty(trim($_POST['alamat']))) {
				$alamat="*maaf alamat harus di input";
			}
			else{
				$alamat=$_POST['alamat'];
			}
			if (empty(trim($_POST['umur']))) {
				$umur="*maaf umur harus di input ";
			}
			else{
				$umur=$_POST['umur'];
			}
			if (empty(trim($_POST['telp']))) {
				 $telp="*maaf no telpon harus di input";
			}
			else{
				$telp=$_POST['telp'];
			}
			if (empty(trim($_POST['agama']))) {
				$agama="*maaf agama harus di input";
			}
			else{
				$agama=$_POST['agama'];
			}
			if (empty(trim($_POST['jeniskelamin']))) {
				$jeniskelamin="*maaf jenis kelamin harus di input";
			}
			else{
				$jeniskelamin=$_POST['jeniskelamin'];
			}
			if (empty(trim($_POST['status']))) {
				$status="*maaf status marital harus di input";
			}
			else{
				$status=$_POST['status'];
			}
			if (empty(trim($_POST['nomorktp']))) {
				$nomorktp="*maaf nomor ktp harus di input";
			}
			else{
				$nomorktp=$_POST['nomorktp'];
			}
			if (empty(trim($_FILES['upload']['name']))) {
				$upload="*maaf foto harus di input";
			}
			else{
				$upload=$_FILES['upload']['name'];
				$tmp_file=$_FILES['upload']['tmp_name'];
				move_uploaded_file($tmp_file, $upload);
			}
		}
		fputs($fp,$nama." | ".$alamat." | ".$umur." | ".$telp." | ".$agama." | ".$jeniskelamin." | ".$status." | ".$nomorktp." | ".$upload." |");
		fclose($fp);
		include 'tabel.php';
	?>

</body>
</html>
