 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <!-- Custom fonts for this theme -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link href="theme/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

 <!-- Theme CSS -->
 <link href="css/freelancer.min.css" rel="stylesheet">

 <!-- JS -->
 <link rel="stylesheet" href="js/jquery.datetimepicker.css" />
 <script src="js/jquery.js"></script>
 <script src="js/jquery.datetimepicker.full.min.js"></script>


 <?php include("koneksi.php");?>
 <!doctype html>
 <html>

 <head>

     <meta charset="utf-8">
     <title>Data Pegawai</title>
 </head>

 <body>
     <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
         <div class="container">
             <a class="navbar-brand js-scroll-trigger" href="index.php">We Help</a>
             <button
                 class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                 type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                 aria-expanded="false" aria-label="Toggle navigation">
                 Menu
                 <i class="fas fa-bars"></i>
             </button>
             <div class="collapse navbar-collapse" id="navbarResponsive">
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item mx-0 mx-lg-1">
                         <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.php">Admin</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>

     <section class="page-section">
         <div class="container">


             <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM form_pekerja where id=$id";
        $query = mysqli_query($db, $sql);

        while($user = mysqli_fetch_array($query)){
        ?>
             <section>
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-12">
                             <div class="row">
                                 <div class="col-md-6">
                                     <div>
                                         <br><br><br><br>
                                         <img src="img/<?=$user['file'] ?>" alt="" class="img-fluid">
                                     </div>
                                 </div>
                                 <div class="col-md-6 section-md-t3">
                                     <div>
                                         <div>
                                             <div>
                                                 <br><br> <br><br>
                                                 <h2> <?= $user['nm']?></h2>
                                             </div>
                                         </div>
                                         <div>
                                             <div>
                                                 <p>
                                                     <strong>Usia: </strong>
                                                     <span><?= $user['usia']?></span>
                                                 </p>
                                                 <p>
                                                     <strong>Jenis Kelamin: </strong>
                                                     <span><?= $user['jk']?></span>
                                                 </p>
                                                 <p>
                                                     <strong>Gaji: </strong>
                                                     <span><?= $user['gaji']?></span>
                                                 </p>
                                                 <p>
                                                     <strong>Pendidikan Terakhir: </strong>
                                                     <span><?= $user['edukasi']?></span>
                                                 </p>
                                                 <p>
                                                     <strong>Agama: </strong>
                                                     <span><?= $user['agama']?></span>
                                                 </p>
                                                 <p>
                                                     <strong>Status: </strong>
                                                     <span><?= $user['status']?></span>
                                                 </p>
                                                 <p>
                                                     <strong>Pengalaman Bekerja: </strong>
                                                     <span><?= $user['pnglmn']?></span>
                                                 </p>
                                                 <p>
                                                     <strong>Kemampuan: </strong>
                                                     <span><?= $user['skill']?></span>
                                                 </p>
                                                 <p>
                                                     <strong>Takut Anjing: </strong>
                                                     <span><?= $user['takut']?></span>
                                                 </p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
         </div>
     </section>

     <?php 
        }
        ?>


     <section class="page-section">
         <div class="container" align="center">
             <div class="row">
                 <div class="col-sm-12">
                     <h2 class="text-center">Form Request</h2>
                     <hr>
                 </div>
             </div>


             <?php 
                        $id = $_GET['id'];
                        $nm = $_GET['nm'];?>

             <form method="POST" action="prous.php">
                 <table width="377" border="0" align="center">
                     <tbody>
                         <tr>
                             <td width="127">ID</td>
                             <td width="222"><input type="text" value="<?= $id?>" name="id" readonly
                                     class="form-control">
                             </td>
                         </tr>
                         <tr>
                             <td>Nama Perawat</td>
                             <td width="222"><input type="text" value="<?= $nm?>" name="nm_peg" readonly
                                     class="form-control">
                             </td>
                         </tr>
                         <tr>
                             <td>Nama Anda</td>
                             <td><input type="text" name="nma" required class="form-control"> </td>
                         </tr>
                         <tr>
                             <td>Alamat</td>
                             <td><textarea name="almt" required class="form-control"></textarea></td>
                         </tr>
                         <tr>
                             <td>Email</td>
                             <td><input type="email" name="email" required class="form-control"></td>
                         </tr>
                         <tr>
                             <td>No. HP</td>
                             <td><input type="text" name="nohp" required class="form-control"></td>
                         </tr>
                         <tr>
                             <td>Tanggal Interview</td>
                             <td><input type="date" name="tgl" required class="form-control"></td>
                         </tr>
                         <tr>
                             <td>Waktu</td>
                             <td><select name="waktu" class="form-control" required>
                                     <option>09</option>
                                     <option>10</option>
                                     <option>11</option>
                                     <option>12</option>
                                     <option>13</option>
                                     <option>14</option>
                                     <option>15</option>
                                     <option>16</option>
                                     <option>17</option>
                                     <option>18</option>
                                     <option>19</option>
                                     <option>20</option>
                                 </select></td>
                         </tr>
                         <tr>
                             <td></td>
                             <td><small style="color:red;">Jam kerja mulai pukul 09.00-20.00</small></td>
                         </tr>
                     </tbody>
                 </table>


                 <input type="submit" name="submit" value="Request Interview" class="btn btn-success" />
                 <br>
                 <h6 style="color:red;">Mohon baca persyaratan terlebih dahulu sebelum melakukan request!</h6>
             </form>

             <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#terms"
                 aria-expanded="false" aria-controls="terms">
                 Persyaratan Suster & Interview
             </button>
             <div class="collapse" id="terms">
                 <div class="card card-body">
                     <ul type="disc">
                         <h3>Persyaratan Yang Harus Diketahui Sebelum Melakukan Interview:</h3>
                         <li>Makan dan keperluan suster ditanggung majikan</li>
                         <li>Selama 1 bulan mendapatkan hak cuti sebanyak 2 hari, apabila tidak diambil maka dapat
                             membayar 200rb ke gaji suster</li>
                         <li>Apabila suster sakit, maka ketentuan akan dibuat bersama oleh suster dan majikan</li>
                         <li>Dalam perihal request interview, harap melihat daftar yang sudah melakukan request
                             interview</li>
                         <li>Dalam perihal request interview, mohon hadir pada tanggal dan waktu yang telah dipilih
                             .Jika tidak dapat hadir, mohon informasikan kepada kami di nomor yang tersedia.</li>
                         <li style="color:red;"><strong>Dalam perihal request interview, mohon pilih tanggal dan waktu
                                 yang
                                 berbeda dari tanggal dan waktu yang sudah direquest</strong></li>
                         <li style="color:red;"><strong>Jika anda memilih jam yang sama, maka kami berhak memilih data
                                 yang pertama kali masuk </strong></li>

                 </div>
             </div>

         </div>
     </section>
     <section class="about" id="tbl">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12">
                     <h2 class="text-center">Daftar Request Interview</h2>
                     <hr>
                 </div>
             </div>
         </div>
         <table border="1" align="center" class="table">
             <thead>
                 <tr>
                     <th>Nama Pe-Request</th>
                     <th>Tanggal</th>
                     <th>Waktu</th>
                 </tr>
             </thead>
             <tbody>

                 <?php
                        
            $sql = "SELECT * FROM table_user where id=$id";
            $query = mysqli_query($db, $sql);
        /*$sql1 = "SELECT id FROM form_pekerja";
        $query1 = mysqli_query($db, $sql1);*/
             while($user = mysqli_fetch_array($query)){
             ?>
                 <tr>
                     <td><?php echo $user['nma'];?></td>
                     <td><?php echo $user['tgl'];?></td>
                     <td><?php echo $user['wktu'];?></td>
                 </tr>
                 <?php } ?>
             </tbody>
         </table>
     </section>

     <footer class="footer text-center">
         <div class="container">
             <div class="row">
                 <!-- Footer Social Icons -->
                 <div class="col-lg-12 mb-5 mb-lg-0">
                     <h4 class="text-uppercase mb-4">Our Social Media</h4>
                     <a class="btn btn-outline-light btn-social mx-1" href="http://facebook.com/ryo.v.sinaga">
                         <i class="fab fa-fw fa-facebook-f"></i>
                     </a>
                     <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/ryosinagasinaga">
                         <i class="fab fa-fw fa-twitter"></i>
                     </a>
                 </div>
             </div>
         </div>
     </footer>

     <!-- Bootstrap core JavaScript -->
     <script src="theme/jquery/jquery.min.js"></script>
     <script src="theme/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!-- Plugin JavaScript -->
     <script src="theme/jquery-easing/jquery.easing.min.js"></script>

     <!-- Custom scripts for this template -->
     <script src="js/freelancer.min.js"></script>


 </body>

 </html>