<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("hope", $con);

if (isset($_GET["causeid"]))
    $causeid = $_GET["causeid"];
else
    $causeid = 1;
    
$str1 = "INSERT INTO photos(CauseID, Title, Date) Values (". $causeid . ", '" . $_POST['txtTitle'] . "', Now())";
mysql_query($str1);

header("Location: editcause.php?causeid=" . $causeid);

mysql_close($con);
?>