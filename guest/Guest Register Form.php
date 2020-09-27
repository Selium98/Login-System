<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $emailid=$_POST['emailid'];
    $comname=$_POST['comname'];
    $password=md5($_POST['password']);
    $ret="select EmailAddress from tblguest where EmailAddress=:emailid";
    $query= $dbh -> prepare($ret);
    $query-> bindParam(':emailid', $emailid, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() == 0)
{
$sql="Insert Into tblguest(FirstName,LastName,EmailAddress,CompanyName,Password)Values(:fname,:lname,:emailid,:comname,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':emailid',$emailid,PDO::PARAM_STR);
$query->bindParam(':comname',$comname,PDO::PARAM_STR);

$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{

echo "<script>alert('You have signup  Succesfully');</script>";
echo '<script>window.location="Guest Login Form.php"</script>';
}
else
{
echo 'Please try again';


}
}
 else
{

echo "<script>alert('This entry already exist. Please try again');</script>";
}
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Register | RAIT E-Certificate System</title>
	  <link rel="stylesheet" type="text/css" href="css styles/guestregister11.css">
	  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
  </head>

  <body>
    <section class="wave">
      <div class="logo">
        <img src="images/logo-1.png" alt="rait" style="margin-left: 40px; margin-top: 10px;">
      </div>
    
      <div class="logincontent">
        <form method="POST" name="submit">
          <div class="loginheading">
            <h1>guest registration</h1>
          </div>
          <input type="text" name="fname" placeholder="First Name " size="15" autocomplete="off" required="true">
          <input type="text" name="lname" placeholder="Last Name "  size="15"  autocomplete="off" required="true">
          <input type="email" name="emailid" placeholder="Email ID" size="15"  autocomplete="off" required="true">
          <input type="text" name="comname" placeholder="Organization Name "  size="15"  autocomplete="off" required="true">
          <input type="password" name="password" placeholder="Password"  size="15"  autocomplete="off" required="true">
          <p><a class="register-link" href="Guest Login Form.php">Already Registered? Click Here to Login.</a></p>
          <button type="submit" class="loginbtn" name="submit">Register</button>
        </form>
      </div>

      <div class="pic-board">
      </div>
    </section>
  </body>
</html>
