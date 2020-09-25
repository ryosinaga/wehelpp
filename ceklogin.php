<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
if(isset($_POST["sbm"])){
	$uname = $_POST['uname'];
	$pass= $_POST['pass'];
	if($uname=="wehelp" AND $pass=="3ia18"){
?>
		<meta http-equiv="refresh" content="2; url=./admin.php" />
	<center>
    	<h2>Berhasil Login</h2>kamu akan dialihkan kembali ke halaman admin dalam 2 detik
	</center>
	<div class="d-flex justify-content-center">
  			<div class="spinner-border text-success" role="status" style="width: 10rem; height: 10rem;">
   				 <span class="sr-only"></span>
  			</div>
	</div>	
<?php
	}else{
?>
	<center>
    	<h2>Login Gagal</h2>Username/Password salah
	</center>
		<meta http-equiv="refresh" content="2; url=./login.php" />
<?php
	}
}elseif(isset($_POST['keluar'])){
?>
		<meta http-equiv="refresh" content="2; url=./index.php" />
		<center>
   		 <h2>Berhasil Logout</h2>kamu akan dialihkan kembali ke halaman beranda dalam 2 detik
		</center>
		<div class="d-flex justify-content-center">
  			<div class="spinner-border text-success" role="status" style="width: 10rem; height: 10rem;">
   				 <span class="sr-only"></span>
  			</div>
		</div>
<?php
}else{
	echo "Login Gagal";
}

?>
