<?php
include("koneksi.php");
	$nma = $_GET['nma'];

    $sql = "DELETE from table_user where nma = '$nma'";
    $query = mysqli_query($db, $sql);   
    
    
    $id = $_GET['id'];
    if($query){
        $update = "update form_pekerja set hasil='ready' where id=$id";
        $query1 = mysqli_query($db,$update);
        header('LOCATION: admin.php');    
    }else{
        die("Gagal hapus!");
    }

?>