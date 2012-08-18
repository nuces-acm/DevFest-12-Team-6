<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("hope", $con);

if (isset($_GET["causeid"]))
    $causeid = $_GET["causeid"];
else
    $causeid = 1;
    
$str1 = "INSERT INTO stages(CauseID, Title, Description, RequiredFunds) Values (" . $_GET['causeid'] .", '". $_POST['txtTitle'] . "', '" . $_POST['txtDescription'] . "', " . $_POST['txtRequiredFunds'] . ")";
mysql_query($str1);
header("Location: editcause.php?causeid=" . $causeid);

mysql_close($con);
?>