<?php

	include("koneksi.php");	

	$id = $_POST['id'];

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
	


	$sql = "UPDATE form_pekerja SET nm='$nm',usia='$usia',jk='$jk',alm='$alm',hp='$hp',gaji='$gaji',edukasi='$edukasi',agama='$agama',status='$status',pnglmn='$pnglmn',skill='$skill',takut='$takut' WHERE id='$id'" ;

		$query = mysqli_query($db, $sql);

		if($query){
			header('Location: list-user.php');
		}else{
			echo("gagal input");
		}
}else{
		die("Akses dilarang");
	}
?>

<input type="button" onclick="window.location.href = 'admin.php'; " value="Back"/>