<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into curd (name, email, mobile, password) values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted good";
        header ('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <title>Crud operation</title>
  </head>
  <body>
    <div class = "container my-5">
    <form method = "post">

  <div class="form-group col-8">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name = "name" autocomplete = "off" >
</div>

<div class="form-group col-8">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Enter your email" name = "email" autocomplete = "off">
</div>

<div class="form-group col-8">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name = "mobile" autocomplete = "off">
</div>

<div class="form-group col-8">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name = "password" autocomplete = "off">
</div>


  <button type="submit" class="btn btn-primary" name ="submit" >Submit</button>
</form>
</div>
  </body>
</html>

