<?php
session_start();
include 'connect.php';
if(isset($_POST['submit'])){
    $mpin=$_POST['mpin'];
    $an=$_POST['accno'] - 27834;
    $sql="select * from `account` where accno = '$an'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($mpin == $row['password']){
            $_SESSION["login"]= true;
            $_SESSION["accno"]=$_POST["accno"];
            header("Location:userpage.php");
        }
        else{
            echo "<script>alert('wrong password');</script>";
        }
    }
    else{
        echo "<script>alert('user account not present');</script>";
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" href="styles2.css">
    <title>Login</title>
  </head>
<body>

<body class="text-center">
    <form class="form-signin" action="" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
      <label for="inputEmail" class="sr-only">Account number</label>
      <input type="text" id="inputEmail" name="accno" class="form-control" placeholder="Account number" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="mpin" class="form-control" placeholder="MPIN(Password)" required>
      <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; PeopleBank</p>
    </form>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </body>
</html>