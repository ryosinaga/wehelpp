<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Detail</title>
</head>
<body>

    <?php
    $id = $_GET['id'];
    $nama = $_GET['nama'];
    echo $id
    ?>
    <div class="col-sm-3">
      <div class="card" style="width: 10rem;">
      <img src="img/man-3.png" class="card-img-top" >
      <div class="card-body">
        <h5 class="card-title"><?php echo $id ?></h5>
        <h5 class="card-title"><?php echo $nama ?></h5>
        <a href="indexDetail.html?id=2" class="btn btn-primary">More Info</a>
      </div>
    </div>
    </div>
  
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>