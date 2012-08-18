<?php
$con = mysql_connect("localhost:3306","root","janeausten");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("hope", $con);
mysql_query("INSERT INTO Comments(DonorID, CauseID, Comment, Date) Values (1, " . $_GET['causeid'] . ", '" . $_POST['txtComment'] . "', Now())");
header("Location: cause.php?causeid=" . $_GET['causeid']);
mysql_close($con);
?>