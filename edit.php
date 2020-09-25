<?php

    include("koneksi.php");

    if(!isset($_GET['id'])){
        header('Location: list-user.php');
    }

    $id = $_GET['id'];

    $sql = "SELECT * from form_pekerja where id = '$id'";
    $query = mysqli_query($db, $sql);
    $a = mysqli_fetch_array($query);

    if(mysqli_num_rows($query)<1){
        die("data tidak ditemukan");
    }

?>
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<!DOCTYPE html>
<html>

<head>
    <title>Update Data</title>
</head>

<body>
  <section class="about" id="frm">
  <div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center">Edit Data</h2>
      <hr>
  </div>
  </div>



<form action="prodit.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <table width="441" border="0" align="center">
    <tbody>
    <tr>
      <td width="168">Nama</td>
      <td width="5">:</td>
      <td width="254"><input name="nm" type="text" class="form-control"  required size="50"></td>
    </tr>
    <tr>
      <td>Usia</td>
      <td>:</td>
      <td><input name="usia" type="text" class="form-control" size="50" required></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><select name="jk">
        <option>Pria</option>
        <option>Wanita</option>
        </select></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><textarea name="alm" cols="30" rows="3"class="form-control" required ></textarea></td>
    </tr>
    <tr>
      <td>No. HP</td>
      <td>:</td>
      <td><input name="hp" type="text" class="form-control" size="50" required></td>
    </tr>
    <tr>
      <td>Gaji</td>
      <td>:</td>
      <td><input name="gaji" type="text" class="form-control" size="50" required></td>
    </tr>
    <tr>
      <td>Pendidikan Terakhir</td>
      <td>:</td>
      <td><select name="edukasi" required>
        <option>SD</option>
        <option>SMP</option>
        <option>SMA</option>
        <option>Tidak Sekolah</option>
      </select></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td>:</td>
      <td><select name="agama" required>
        <option>Kristen Protestan</option>
        <option>Katholik</option>
        <option>Islam</option>
        <option>Hindu</option>
        <option>Budha</option>
      </select></td>
    </tr>
    <tr>
      <td>Status</td>
      <td>:</td>
      <td><select name="status" required>
        <option>Menikah</option>
        <option>Belum Menikah</option>
      </select></td>
    </tr>
    <tr>
      <td>Pengalaman Bekerja</td>
      <td>:</td>
      <td><input name="pnglmn" type="text" class="form-control" size="50" required></td>
    </tr>
    <tr>
      <td>Kemampuan</td>
      <td>:</td>
      <td><input name="skill" type="text"  class="form-control" size="50" required></td>
    </tr>
    <tr>
      <td>Takut Anjing</td>
      <td>:</td>
      <td>
      <select name="takut">
          <option>Ya</option>
          <option>Tidak</option>
     </select></td>
    </tr>

    <tr>
    <td height="27"></td>
    <td></td>
    <td><input type="submit" name="submit" value="Edit" class="btn btn-success"/>
      <input type="reset" name="reset" class="btn btn-primary" value="Reset"/>
    </td>
    </tr>
     </tbody>
    </table>

</form>
</body>
</html>