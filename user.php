
<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $n = $_POST['username'];
  $e = $_POST['email'];
  $m = $_POST['mobile'];
  $p = $_POST['password'];

$sql = "insert into `crudtable` (name,email,mobile,password) values ('$n','$e','$m','$p')";
$r = mysqli_query($conn,$sql);
if($r){
    //echo "Data inserted successfully";
    header('location: main.php'); 
}
else{
  die(mysqli_error($conn));
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">ADD USERS PAGE</h1>
    <div class="container" >
    <form class="mt-3" method="post" action="">
  <div class="form-group mt-3">
    <label for="" class="fw-bold">Name</label>
    <input type="text" class="form-control"  placeholder="Enter your name" name="username" autocomplete="off">
  </div>
  <div class="form-group mt-3">
    <label for="" class="fw-bold">Email</label>
    <input type="email" class="form-control"  placeholder="Enter your mail id" name="email" autocomplete="off">
  </div>
  <div class="form-group mt-3">
    <label for="" class="fw-bold">Mobile</label>
    <input type="text" class="form-control"  placeholder="Enter your mobile number" name="mobile" autocomplete="off">
  </div>
  <div class="form-group mt-3">
    <label for="" class="fw-bold">Password</label>
    <input type="password" class="form-control"  placeholder="Enter your password" name="password" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
</form>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>