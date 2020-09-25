 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
</head>
<body background="img/adminn.jpg">
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center">Login Admin</h2>
      <hr>
  </div>
  </div> 
  
<form action="ceklogin.php" method="post">
  <div class="form-group" align="center">
    <div class="col-sm-5">
      <input type="text" class="form-control" name="uname" placeholder="Username">
    </div>
  </div>
  <div class="form-group" align="center">
    <div class="col-sm-5">
      <input type="password" class="form-control" name="pass" placeholder="Password">
    </div>
  </div>
  <div class="form-group" align="center">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-success" name="sbm" value="Login">
    </div>
  </div>
</form>
</body>
</html>
