<?php
include("koneksi.php");
    $id = $_GET['id'];

    $sql = "DELETE from form_pekerja where id = '$id'";

    $query = mysqli_query($db, $sql);
    if($query){
        header('LOCATION: list-peg.php');
    }else{
        die("Gagal hapus!");
    }
?>