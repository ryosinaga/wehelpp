 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <?php include("koneksi.php"); ?>

 <!DOCTYPE html>
 <html>

 <head>
     <title>List - Pekerja</title>
 </head>

 <body>
     <header>
         <h3>List - Pekerja</h3>
     </header>

     <br>

     <table border="1" class="table">
         <thead>
             <tr>
                 <th>ID</th>
                 <th>Nama</th>
                 <th>Usia</th>
                 <th>Jenis Kelamin</th>
                 <th>Alamat</th>
                 <th>No HP</th>
                 <th>Gaji</th>
                 <th>Pendidikan Terakhir</th>
                 <th>Agama</th>
                 <th>Status</th>
                 <th>Pengalaman Bekerja</th>
                 <th>Kemampuan</th>
                 <th>Takut Anjing</th>
                 <th>Identitas</th>
                 <th>Action</th>

             </tr>
         </thead>
         <tbody>

             <?php
        $sql = "SELECT * FROM form_pekerja";
        $query = mysqli_query($db, $sql);

        while($user = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$user['id']."</td>";
            echo "<td>".$user['nm']."</td>";
            echo "<td>".$user['usia']."</td>";
            echo "<td>".$user['jk']."</td>";
            echo "<td>".$user['alm']."</td>";
            echo "<td>".$user['hp']."</td>";
            echo "<td>".$user['gaji']."</td>";
            echo "<td>".$user['edukasi']."</td>";
            echo "<td>".$user['agama']."</td>";
            echo "<td>".$user['status']."</td>";
            echo "<td>".$user['pnglmn']."</td>";
            echo "<td>".$user['skill']."</td>";
            echo "<td>".$user['takut']."</td>";
            echo "<td><img src='img/".$user['file']."' width='100px' height='100px'/></td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$user['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$user['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";

           
        }
        ?>

         </tbody>
     </table>

     <p>Total: <?php echo mysqli_num_rows($query) ?></p>

     <tr>
         <th colspan="2" align="center">
             <input type="button" onclick="window.location.href = 'admin.php'; " value="Back To Input Form" />
         </th>
     </tr>
 </body>

 </html>