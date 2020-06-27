<?php 

	$nama=$alamat=$telp=$jeniskelamin=$agama=$bahasa=$area=$nama_err=$alamat_err=$telp_err=$jeniskelamin_err=$agama_err=$bahasa_err=$area_err="";

	echo "output<br>";

	if ($_SERVER['REQUEST_METHOD']=='POST') {
		if (empty(trim($_POST['nama']))) {
			echo $nama_err="*maaf nama harus di input<br>";
		}
		else{
			echo "nama: ".$nama=$_POST['nama']."<br>";
		}
		if (empty(trim($_POST['alamat']))) {
			echo $alamat_err="*maaf alamat harus di input <br>";
		}
		else{
			echo "alamat: ".$alamat=$_POST['alamat']."<br>";
		}
		if (empty(trim($_POST['telp']))) {
			 echo $telp_err="*maaf no telpon harus di input <br>";
		}
		else{
			echo "no telp".$telp=$_POST['telp']."<br>";
		}
		if (empty(trim($_POST['jeniskelamin']))) {
			echo $jeniskelamin_err="*maaf jenis kelamin harus di input <br>";
		}
		else{
			echo "jenis kelamin: ".$jeniskelamin=$_POST['jeniskelamin']."<br>";
		}
		if (empty(trim($_POST['agama']))) {
			echo $agama_err="*maaf agama harus di input <br>";
		}
		else{
			echo "agama: ".$agama=$_POST['agama']."<br>";
		}
		if (empty(trim($_POST['area']))) {
			echo $area_err="*maaf prestasi harus di input <br>";
		}
		else{
			echo "prestasi: ".$area=$_POST['area']."<br>";
		}
	}

?>