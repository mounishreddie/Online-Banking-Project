<?php
    session_start();
    include 'connect.php';
    if(isset($_POST['submit'])){
       $name=$_POST['name'];
       $pass1=$_POST['pass1'];
       $pass2=$_POST['pass2'];
       $phno=$_POST['phno'];
       $type=$_POST['acctype'];
       $amt=$_POST['amt'];
       
       if($pass1==$pass2){
       $sql="insert into `account` (name,password,phone,type,amt) values('$name','$pass1','$phno','$type','$amt')";
       $result=mysqli_query($con,$sql);
       if(!$result){
            die(mysqli_error($con));
       }
       else{
            $accno=$con->insert_id + 27834;
            $_SESSION["accno"]=$accno;
            header("Location:accnumber.php");
       }
       }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" href="styles.css">
    <title>Signup</title>
  </head>
<body>
<div >
<form method="post" class="mx-auto">
    <h4>Create account</h4><hr>
    <div class="accnumber"></div>
    <div class="form-group">
        <label for="exampleInputEmail1">Full name</label>
        <input type="text" class="form-control" name="name"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Create MPIN(password)</label>
        <input type="password" class="form-control" name="pass1"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">confirm MPIN(password)</label>
        <input type="password" class="form-control" name="pass2"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="confirm password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Phone number</label>
        <input type="text" class="form-control" name="phno" id="exampleInputPassword1" placeholder="Phone number">
    </div>
    <div>Enter the type of account:</div>
    <div class="row">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="acctype" id="exampleRadios1" value="Savings" checked>
            <label class="form-check-label" for="exampleRadios1">Savings account</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="acctype" id="exampleRadios1" value="Recurring deposit" >
            <label class="form-check-label" for="exampleRadios1">Recurring deposit</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="acctype" id="exampleRadios2" value="Current">
            <label class="form-check-label" for="exampleRadios2">Current account</label>
        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="exampleInputPassword1">amount to deposit</label>
        <input type="number" class="form-control" name="amt" id="exampleInputPassword1" placeholder="enter amount">
    </div>
    <div class="row">
        <button type="submit" name="submit" class="btn btn-primary" id="submit">create account</button>
        <a href="index.php" class="btn btn-primary">menu</a>
    </div>
</form>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </body>
</html>