<?php

	include("koneksi.php");	

if(isset($_POST['submit'])){

	$nm = $_POST['nm'];
	$usia = $_POST['usia'];
	$jk = $_POST['jk'];
	$alm = $_POST['alm'];
	$hp = $_POST['hp'];
	$gaji = $_POST['gaji'];
	$edukasi = $_POST['edukasi'];
	$agama = $_POST['agama'];
	$status = $_POST['status'];
	$pnglmn = $_POST['pnglmn'];
	$skill = $_POST['skill'];
	$takut = $_POST['takut'];
	$file = $_FILES['file']['name'];
	
	 move_uploaded_file($_FILES['file']['tmp_name'], "img/".$_FILES['file']['name']);
	 


	$sql = "insert into form_pekerja(`nm`, `usia`, `jk`, `alm`, `hp`, `gaji`, `edukasi`, `agama`, `status`, `pnglmn`, `skill`, `takut`,`file`) values('$nm','$usia','$jk','$alm','$hp','$gaji','$edukasi','$agama','$status','$pnglmn','$skill','$takut','$file')";

		$query = mysqli_query($db, $sql);

		if($query){
			?>
		<center>
    		<h2>Berhasil dimasukkan</h2>Cek List-Pegawai untuk detailnya
		</center>
			<meta http-equiv="refresh" content="2; url=./list-peg.php" />
<?php
		}else{
			echo("gagal input");
		}
}else{
		die("Akses dilarang");
	}
?>