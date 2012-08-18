<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("hope", $con);

if (isset($_GET["causeid"]))
    $causeid = $_GET["causeid"];
else
    $causeid = 1;
    
$str1 = "INSERT INTO locations(Address, City, Province, PostalCode) Values ('". $_POST['txtAddress'] . "', '" . $_POST['txtCity'] . "', '" . $_POST['txtProvince'] . "', '" . $_POST['txtPostalCode'] . "')";
$str2 = "INSERT INTO causelocations(LocationID, CauseID) Values (LAST_INSERT_ID(), ".  $causeid . ')';
mysql_query($str1);
mysql_query($str2);
header("Location: editcause.php?causeid=" . $causeid);

mysql_close($con);
?>