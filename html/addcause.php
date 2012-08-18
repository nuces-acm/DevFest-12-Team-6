<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("hope", $con);

$str1 = "INSERT INTO causes(CatagoryID, Title, Description, Date, ExpireDate) Values (" . $_POST['cmbCatagory'] . ", '" . $_POST['txtTitle'] . "', '" . $_POST['txtDescription'] . "', Now(), '" . $_POST['cmbYear'] . "-" . $_POST['cmbMonth'] . "-" . $_POST['cmbDay'] . "')";
mysql_query($str1);
$causeid = mysql_fetch_array(mysql_query("SELECT LAST_INSERT_ID()"));
$causeid = $causeid[0];
header("Location: editcause.php?causeid=" . $causeid);

mysql_close($con);
?>