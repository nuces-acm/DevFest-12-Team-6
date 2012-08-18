<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("hope", $con);

$user = $_POST['txtuser'];
$password = $_POST['txtpassword'];
$q="select Donors.DonorID  from users inner join Persons ON users.PersonID=Persons.personID inner join Donors on Donors.DonorID=Persons.personID where users.username='".$user."'and users.password='".$password."';";
$DonorID = mysql_query($q);

$did = mysql_fetch_array($DonorID);

setcookie('DonarID', $did[0], time()+3600); 


header("Location: index.php");
?>