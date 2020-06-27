<?php 

	$nama=$alamat=$telp=$jeniskelamin=$agama=$bahasa=$area=$nama_err=$alamat_err=$telp_err=$jeniskelamin_err=$agama_err=$bahasa_err=$area_err="";

	if ($_SERVER['REQUEST_METHOD']=='POST') {
		if (empty(trim($_POST['nama']))) {
			$nama_err="*maaf nama harus di input";
		}
		else{
			$nama=$_POST['nama'];
		}
		if (empty(trim($_POST['alamat']))) {
			$alamat_err="*maaf alamat harus di input";
		}
		else{
			$alamat=$_POST['alamat'];
		}
		if (empty(trim($_POST['telp']))) {
			$telp_err="*maaf no telpon harus di input";
		}
		else{
			$telp=$_POST['telp'];
		}
		if (empty(trim($_POST['jeniskelamin']))) {
			$jeniskelamin_err="*maaf jenis kelamin harus di input";
		}
		else{
			$jeniskelamin=$_POST['jeniskelamin'];
		}
		if (empty(trim($_POST['agama']))) {
			$agama_err="*maaf agama harus di input";
		}
		else{
			$agama=$_POST['agama'];
		}
		if (empty(trim($_POST['bahasa']))) {
			$bahasa_err="*maaf bahasa harus di input";
		}
		else{
			$bahasa=$_POST['bahasa'];
		}
		if (empty(trim($_POST['area']))) {
			$area_err="*maaf area harus di input";
		}
		else{
			$area=$_POST['area'];
		}
	}
?>