<?php

	include("koneksi.php");

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$nma = $_POST['nma'];
		$almt = $_POST['almt'];
		$email = $_POST['email'];
		$nohp = $_POST['nohp'];
		$tgl = $_POST['tgl'];
		$waktu = $_POST['waktu'];
		$nm_peg = $_POST['nm_peg'];


		$sql = "insert into table_user(`nma`, `almt`, `email`, `nohp`, `tgl`,`id`,`wktu`,`nm_peg`) values('$nma','$almt','$email','$nohp','$tgl','$id','$waktu.00','$nm_peg')";

		$query = mysqli_query($db, $sql);
		

		if($query){
			$update = "update form_pekerja set hasil='requested' where id=$id";
			$query1 = mysqli_query($db,$update);
			?>
			<meta http-equiv="refresh" content="2; url=./index.php"/>
    		<center><h2>Berhasil Request Interview</h2>Harap datang ditanggal yang sudah didaftarkan</center>
			<div class="d-flex justify-content-center">
  				<div class="spinner-border text-success" role="status" style="width: 10rem; height: 10rem;">
   				 <span class="sr-only"></span>
  				</div>
			</div>
		<?php
		}else{
			echo("gagal input");
		}
}else{
		die("Akses dilarang");
	}
?>