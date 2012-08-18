<?php
$con = mysql_connect("localhost:3306","root","janeausten");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("hope", $con);
mysql_query("INSERT INTO Donations(CauseID, PaymentDetailID, Amount, Date) Values (" . $_GET['causeid'] . ", (SELECT PaymentDetailID FROM paymentdetails WHERE DonorID =".$_COOKIE['DonarID']."), " . $_POST['txtAmount'] . ", Now())");
header("Location: cause.php?causeid=" . $_GET['causeid']);
mysql_close($con);
?>