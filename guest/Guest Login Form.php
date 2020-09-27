<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) 
  {
    $emailid=$_POST['emailid'];
    $password=md5($_POST['password']);
    $sql = "SELECT ID FROM tblguest WHERE EmailAddress=:emailid and Password=:password";
    $query=$dbh->prepare($sql);
    $query->bindParam(':emailid',$emailid,PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['rairecerti']=$result->ID;
}


$_SESSION['login']=$_POST['emailid'];
echo "<script>alert('You have sucessfully logged in!');</script>";
echo "<script type='text/javascript'> document.location ='Guest Login/dashboard.html'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Guest Login | RAIT E-Certificate System</title>
	  <link rel="stylesheet" type="text/css" href="css styles/guestlogin11.css">
	  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
  </head>

  <body>
    <section class="wave">
      <div class="logo">
        <img src="images/logo-1.png" href="index.php" alt="rait" style="margin-left: 5vh;margin-top: 2vh;">
      </div>

      <div class="logincontent">
        <form method="POST" name="login">
          <div class="loginheading">
            <h1>Guest Login</h1>
          </div>
          <input type="email" name="emailid" placeholder="Email Address" required="true" autocomplete="off" size="15" autocomplete="off">
          <input type="password" name="password" placeholder="Password">
          <button type="submit" class="loginbtn" name="login">Log In</button>
        </form>
      </div>
        
      <div class="pic-board">
      </div>
    </section>
  </body>
</html>
