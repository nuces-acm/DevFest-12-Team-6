<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("hope", $con);

$str1 = "INSERT INTO locations(Address, City, Province, PostalCode) Values ('" . $_POST['txtAddress'] . "', '" . $_POST['cmbCity'] . "', '" . $_POST['cmbProvince'] . "', '" . $_POST['txtPostalCode'] . "')";

$str2 = "INSERT INTO persons(LocationID, FirstName, LastName, ContactNo, Sex, DOB, NIC) Values (LAST_INSERT_ID(), '" . $_POST['txtFirstName'] . "', '" . $_POST['txtLastName'] . "', '" . $_POST['txtContactNo'] . "', '" . $_POST['cmbGender'] . "', '" . $_POST['cmbYear'] . "-" . $_POST['cmbMonth'] . "-" . $_POST['cmbDay'] . "', '" . $_POST['txtNIC'] . "')";

$str3 = "INSERT INTO users(PersonID, Username, Password, Email) Values (LAST_INSERT_ID(), '" . $_POST['txtUsername'] . "', '" . $_POST['txtPassword'] . "', '" . $_POST['txtEmail'] . "')";

$str4 = "INSERT INTO donors(DonorID, About) Values (LAST_INSERT_ID(), '" . $_POST['txtAbout'] . "')";

$str5 = "INSERT INTO paymentdetails(DonorID, CreditCardTypeID, SecurityCode, CreditCardNumber, ExpirationDate) Values (LAST_INSERT_ID(), '" . $_POST['cmbPaymentType'] . "', '" . $_POST['txtSecurityCode'] . "', '" . $_POST['txtCardNumber'] . "', '" . $_POST['cmbExpiryYear'] .
mysql_query($str1);
mysql_query($str2);
mysql_query($str3);
mysql_query($str4);
mysql_query($str5);

header("Location: index.php");

mysql_close($con);
?>