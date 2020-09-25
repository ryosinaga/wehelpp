<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Admin Mode</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--Judul form-->
    <section class="about" id="frm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Form Input Pekerja</h2>
                    <hr>
                </div>
            </div>
      </section>
            <form method="POST" action="proses.php" enctype="multipart/form-data">
                <table width="441" border="0" align="center">
                    <tbody>
                        <tr>
                            <td width="168">Nama</td>
                            <td width="5">:</td>
                            <td width="254"><input name="nm" type="text" class="form-control" required size="50"></td>
                        </tr>
                        <tr>
                            <td>Usia</td>
                            <td>:</td>
                            <td><input name="usia" type="text" class="form-control" size="50" required></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><select name="jk" class="form-control" required>
                                    <option>Pria</option>
                                    <option>Wanita</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><textarea name="alm" cols="30" rows="3" class="form-control" required></textarea></td>
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
                            <td><select name="edukasi" class="form-control" required>
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA</option>
                                    <option>Tidak Sekolah</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td><select name="agama" class="form-control" required>
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
                            <td><select name="status" class="form-control" required>
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
                            <td><input name="skill" type="text" class="form-control" size="50" required></td>
                        </tr>
                        <tr>
                            <td>Takut Anjing</td>
                            <td>:</td>
                            <td>
                                <select name="takut" class="form-control" required>
                                    <option>Ya</option>
                                    <option>Tidak</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Upload Foto</td>
                            <td>:</td>
                            <td><input name="file" type="file" size="50" required></td>
                        </tr>
                        <tr>
                            <td height="27"></td>
                            <td></td>
                            <td><input type="submit" name="submit" value="submit" class="btn btn-primary" />
                                <input type="reset" name="reset" class="btn btn-primary" value="Reset" />
                                <input type="button" onclick="window.location.href = 'list-peg.php'; "
                                    value="List Pegawai" class="btn btn-primary" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <br>
            <br>
            <br>

            <!--Judul form-->
            <section class="about" id="tbl">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="text-center">Table Request</h2>
                            <hr>
                        </div>
                    </div>
                </div>


                <?php include("koneksi.php");?>
                <table border="1" align="center" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Perawat</th>
                            <th>Nama Pe-Request</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No.Hp</th>
                            <th>Tanggal Req</th>
                            <th>Waktu Req</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

             <?php
                        
            $sql = "SELECT * FROM table_user";
            $query = mysqli_query($db, $sql);
        /*$sql1 = "SELECT id FROM form_pekerja";
        $query1 = mysqli_query($db, $sql1);*/
             while($user = mysqli_fetch_array($query)){
             ?>
            <tr>
            <td><?php echo $user['id'];?></td>
            <td><?php echo $user['nm_peg'];?></td>
            <td><?php echo $user['nma'];?></td>
            <td><?php echo $user['almt'];?></td>
            <td><?php echo $user['email'];?></td>
            <td><?php echo $user['nohp'];?></td>
            <td><?php echo $user['tgl'];?></td>
            <td><?php echo $user['wktu'];?></td>
            <td>
                <a href='hapususer.php?nma=<?php echo $user['nma']?>&id=<?php echo $user['id']?>'>Hapus</a>
            </td>
                </tr>
                <?php
                }
                ?>

                    </tbody>
                </table>

                <br>
                <br>
                <form method="POST" action="ceklogin.php">
                    <input type="submit" name="keluar" value="Logout" align="center" class="btn btn-danger">
                </form>
      </body>