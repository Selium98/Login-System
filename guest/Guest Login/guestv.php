<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


<?php

include('includes/dashboard.html');

?>
<center>
  <div class="space" style="margin-left: 20%; margin-top: 15vh;">
    <form method="POST">
      <br><br><br>
      <input class="show1" name="txt1"  type="text">
      <select class=custom-select name="cars">
  <option value="roll">Rollno / SDRN No.</option>
  <option value="uniid" selected>Unique Id</option>
</select>
      <Button class="buttn" name="searchb">Search</Button>
      
      <br><br><br>
      	</form>	
      	<?php
      	if(isset($_POST['searchb']))
      	{
                  $roll=$_POST['txt1'];
                  $pdo=new PDO('mysql:host=localhost;dbname=testrun','root','');
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $stmt = $pdo->prepare('select * from certi JOIN student JOIN templateinfo ON certi.id=templateinfo.id AND certi.rollno=student.rollno where certi.rollno=:if' );
                  $stmt->execute(array(':if'=>$roll));
                 
      		if(isset($_POST['cars']) && $_POST['cars']=='roll' )
      		{
      		 if($stmt->rowCount() > 0){
                  echo "<table border='1'>";
		     echo "<th>Issued Date Time</th>";
      		echo " <th>Student Name</th>";
      		echo " <th>Roll No</th>";
      		echo " <th>Topic</th>";
     		      echo " <th>Action</th>";
                  while($res = $stmt->fetch(PDO::FETCH_ASSOC))
                  { 
                   echo "<tr><td>";
                   echo(htmlentities($res['dattime']));
                   echo"</td><td>";
                   echo(htmlentities($res['name']));
                   echo"</td><td>";
                   echo(htmlentities($res['rollno']));
                   echo"</td><td>";
                   echo(htmlentities($res['title']));
                   echo"</td><td>";
                  $iddd=$res['uniqueid'];
                   echo"<a href='model.php?id=$iddd'>View</a>/<a href='Accessing files/dwnldcerti.php?id=$iddd'>Download</a>";
                   echo("</td></tr>");
                  }
 			echo "</table>";
                  }
                  else
                  {
                        echo "NO CERTI FOUND";
                  }
            }

      		elseif(isset($_POST['cars']) && $_POST['cars']=='uniid' )
      		{
      			
      		$uniid=$_POST['txt1'];
			$pdo=new PDO('mysql:host=localhost;dbname=testrun','root','');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $pdo->prepare('select * from certi JOIN student JOIN templateinfo ON certi.id=templateinfo.id AND certi.rollno=student.rollno where certi.uniqueid=:if' );
			$stmt->execute(array(':if'=>$uniid));
                   if($stmt->rowCount() > 0){
 			echo "<table border='1'>";
		   echo "<th>Issued Date Time</th>";
      		echo " <th>Student Name</th>";
      		echo " <th>Roll No</th>";
      		echo " <th>Topic</th>";
     		 echo " <th>Action</th>";
			while($res = $stmt->fetch(PDO::FETCH_ASSOC))
			{ 
      		 echo "<tr><td>";
      		 echo(htmlentities($res['dattime']));
      		 echo"</td><td>";
      		 echo(htmlentities($res['name']));
      		 echo"</td><td>";
      		 echo(htmlentities($res['rollno']));
      		 echo"</td><td>";
      		 echo(htmlentities($res['title']));
      		 echo"</td><td>";
      	 	$iddd=$res['uniqueid'];
      		 echo"<a href='model.php?id=$iddd'>View</a>/<a href='dwnldcerti.php?id=$iddd'>Download</a>";
      		 echo("</td></tr>");
			}
 			echo "</table>";
      		}
            else
            {echo "NO CERTI FOUND";}
            }
      		
      	}
      	?>

        </body>
</html>