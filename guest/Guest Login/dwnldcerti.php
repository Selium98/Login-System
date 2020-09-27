<?php
if(!(isset($_GET['id'])))
{
    die("ACEES DENIED");
} 
$pdo=new PDO('mysql:host=localhost;dbname=testrun','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare('select * from templateinfo JOIN student JOIN certi ON certi.id=templateinfo.id AND certi.rollno=student.rollno where uniqueid=:nid' );
$gr=$_GET['id'];
$stmt->execute(array(':nid'=>$gr));     
while($res = $stmt->fetch(PDO::FETCH_ASSOC))
{
ob_start();
$std_name=$res['name'];
$unique=$res['uniqueid'];
$dates=$res['dattime'];
$title=$res['title'];
$subtitle=$res['subtitle'];
$EventDetails1=$res['content'];
$TicordX=$res['titleX'];
$TcordY=$res['titley'];
$imgX=$res['imageX'];
$imgY=$res['imageY'];
$STcordX=$res['subtitleX'];
$STcordY=$res['subtitleY'];
$CcordY=$res['contentY'];
$CcordX=$res['contentX'];
$bgimg=$res['backimage'];
$img=$res['photo'];
$titcol=$res['titleColor'];
$subticol=$res['subColor'];
$concol=$res['cColor'];
$imagePosition=$res['floatv'];
$basic = 'This is to certify that Mr./Ms.';
$temp=$res['tempname'];
$hod=$res['hodname'];
$princi=$res['princiname'];
$pres=$res['presname'];
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

body{
    background-image: url("background images/<?php echo(htmlentities($bgimg));?>");
    background-size: cover;
    background-image-resize:6;
    background-repeat: no-repeat;
}
div#title {
   
    position: absolute;
    width:80%;
    height:100%;
    font-size:1.9em;
    left:<?php if($TicordX != 0)
    { echo htmlentities( $TicordX);
    }
    ?>;
    top:<?php if($TcordY != 0)
    { echo htmlentities( $TcordY);
    }
    ?>;

    color:<?php echo htmlentities($titcol); ?>;
    
}
div#subtitle {
    text-align: center;
    width:50%;
    height:100%;
    font-size:1.8em;
    position: absolute;
    left:<?php if($STcordX != 0)
    { echo htmlentities( $STcordX);
    }
    ?>;
    top:<?php
    if($STcordY != 0)
    { echo htmlentities( $STcordY);
    }
    ?>;
    color:<?php echo htmlentities($subticol);?>;
    font-family:cursive;
}
div#event1 {
    text-align: justify;
    width:85%;
    height:100%;
    font-size:1.2em;
    position: absolute;
    left:<?php
    if($CcordX != 0)
    { echo htmlentities( $CcordX);
    }
    ?>;
    top:<?php
    if($CcordY != 0)
    { echo htmlentities( $CcordY);
    }
    ?>;
   color:<?php echo htmlentities($concol);?>;
    
}
div#boh{
    width:24%;
    position:absolute;
    left:<?php if(strlen($imgX)>0)
    { echo htmlentities($imgX);
    }
    ?>;
    top:<?php
    if($imgY!=0)
    { echo htmlentities($imgY);
    }
    ?>;
} 



div#hodname
{
position: absolute;
top:77%;
font-size:1.7em;
}

div#prinname
{
position: absolute;
left:30%;
top:77%;
font-size:1.7em;
}

div#presname
{
position: absolute;
top:77%;
left:60%;
font-size:1.7em;
}
div#unique
{
    position: absolute;
    top:92%;
    font-size:1.3em;
}
div#date
{
    position: absolute;
    top:92%;
    font-size:1.3em;
    left:80%;
}
</style>
</head>
<body>

   <div id = "title">
        <p><?php
        echo $title ?>
         </p>
    </div>
      <div id = "subtitle">
        <p> <?php echo $subtitle ?> </p>
    </div>
    
    <div id = "event1">
        <pre> <?php echo $basic." "."<b>".$std_name."</b>"." ".$EventDetails1 ?>  </pre>
        
    </div>
    <div id="boh">
<img src="images/<?php echo(htmlentities($img));?>">
</div>
<div id=hodname> <p><?php  echo htmlentities($hod) ?></p>
    </div>

<div id=prinname> <p><?php  echo htmlentities($princi) ?></p>
    </div>

<div id=presname> <p><?php  echo htmlentities($pres) ?></p>
    </div>
    <div id=unique> <p><?php  echo htmlentities($unique) ?></p>
    </div>
    <div id=date> <p><?php  echo htmlentities($dates) ?></p>
    </div>
</body>
</html>
<?php
include('mpdf/vendor/autoload.php');
$mpdf=new \Mpdf\mPDF();
$b=ob_get_contents();
$mpdf->writeHTML($b);
ob_clean();
$mpdf->output("$temp.pdf","D");

?>