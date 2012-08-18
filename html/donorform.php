<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("hope", $con);

$creditcardtypes = mysql_query("SELECT * FROM creditcardtype");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
    <title>Hope - Donor Registration Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
select.c6 {width:45pt;}
    select.c5 {width:80pt;}
    select.c4 {width:60pt;}
    select.c3 {width:40pt;}
    td.c2 {background-color:#33CCCC}
    div.c1 {border:solid 0px;height:100px;width:500px;}
    </style>
</head>

<body>
    <div id="header">
        <div class="inner_copy">
            <a href="http://www.greatdirectories.org/categories/legal-directories/">legal directories</a><a href="http://www.bestfreetemplates.org/categories/charity/">free charity templates</a>
        </div>

        <div class="c1">
            <img src="images/top.gif" alt="setalpm" border="0" usemap="#Map">
        </div>
		
				<div style="Border:solid 0px;float:right;height:100px;width:370px;margin-top:-102px;margin-left:500px;"> 
		<br />
		<br />
		<?php 
		$con = mysql_connect("localhost:3306","root","root");
		if (!$con)
   		 die('Could not connect: ' . mysql_error());
		mysql_select_db("hope", $con);
		
		if (isset($_COOKIE['DonarID']))
			{
			$q = "select FirstName from persons where PersonID = ".$_COOKIE['DonarID'];
			$name = mysql_fetch_array(mysql_query($q));
			echo 'Welcome: '.$name[0] ;
			echo "<br />";
			echo "<a href='signout.php'>Sign Out!</a>";
			}
		
		?>
		</div>
		       <img src="images/photo.jpg" alt="" width="713" height="300" border="0" usemap="#Map"> <map name="Map" id="Map">
            <area shape="rect" coords="299,222,367,251" href="#">
            <area shape="rect" coords="14,26,154,83" href="index.php">
        </map>

        <ul id="menu">
            <li><a href="index.php" class="but1">Home</a></li>

            <li><a href="Browse.php" class="but2">Browse Causes</a></li>

            <li><a href="topdonors.php" class="but3">Top Doners</a></li>

            <li><a href="index2.php" class="but4">Sucessful Stories</a></li>

            <li><a href="donorForm.php" class="but5_active">Register</a></li>

            <li><a href="AboutUs.php" class="but6">About Us</a></li>

            <li><a href="ContactUs.php" class="but7">Contact Us</a></li>
        </ul>
    </div>

    <div id="wrapper">
        <div class="inner_copy">
            <a href="http://www.bestfreetemplates.info/flash.php">free flash templates</a><a href="http://www.beautifullife.info/web-design/15-best-free-website-builders/">best free website builders</a>
        </div>

        <div class="bigblock">
            <img src="images/title4.gif" alt="" width="696" height="26">
            <br />

            <div>
            <form method="post" action="adddonor.php">
                <table border="0" width="500" cellspacing="5" cellpadding="10">
                    <tr>
                        <td colspan="5" class="c2">Personal details</td>
                    </tr>

                    <tr>
                        <td>First Name:</td>

                        <td colspan="3"><input type="text" name="txtFirstName" size="30"></td>
                    </tr>

                    <tr>
                        <td>Last Name:</td>

                        <td colspan="3"><input type="text" name="txtLastName" size="30"></td>
                    </tr>

                    <tr>
                        <td>NIC:</td>

                        <td colspan="3"><input type="text" name="txtNIC" size="30"></td>
                    </tr>

                    <tr>
                        <td>Date of Birth:</td>

                        <td><select name="cmbDay" class="c3">
                            <?php
                                        for ($i=1; $i<=31; $i++)
                                            echo "<option>" . $i . "</option>";
                                        ?>
                        </select> <select name="cmbMonth" class="c3">
                            <?php
                                        for ($i=1; $i<=12; $i++)
                                            echo "<option>" . $i . "</option>";
                                        ?>
                        </select> <select name="cmbYear" class="c4">
                            <?php
                                        for ($i=1960; $i<=2012; $i++)
                                            echo "<option>" . $i . "</option>";
                                        ?>
                        </select></td>
                    </tr>

                    <tr>
                        <td>Gender:</td>

                        <td><select name="cmbGender" class="c4">
                            <option>
                                Male
                            </option>

                            <option>
                                Female
                            </option>
                        </select></td>
                    </tr>
                    
                    <tr>
                        <td>About</td>
                        <td><textarea rows="4" cols="20" name="txtAbout"></textarea></td>
                    </tr>
                    <tr>
                        <td>Donor Image:</td>

                        <td><input type="file" name="filPhoto"/></td>
                    </tr>

                    <tr>
                        <td colspan="5" class="c2">Contact details</td>
                    </tr>

                    <tr>
                        <td>Address:</td>

                        <td colspan="3"><input type="text" name="txtAddress" size="30" /></td>
                    </tr>

                    <tr>
                        <td>City:</td>

                        <td><select name="cmbCity">
                            <option>
                                Lahore
                            </option>

                            <option>
                                Karachi
                            </option>

                            <option>
                                Islamabad
                            </option>

                            <option>
                                Kohat
                            </option>
                        </select>
                        Province:
                        <select name="cmbProvince" class="c4">      
                            <option>
                                Punjab
                            </option>

                            <option>
                                N.W.F.P
                            </option>

                            <option>
                                Balochistan
                            </option>

                            <option>
                                Sindh
                            </option>
                        </select>                        
                        </td>

                        <td></td>

                        <td></td>
                    </tr>

                    <tr>
                        <td>Postal Code:</td>

                        <td colspan="3"><input type="text" name="txtPostalCode" size="30" /></td>
                    </tr>



                    <tr>
                        <td>Contact No:</td>

                        <td colspan="3"><input type="text" name="txtContactNo" size="30" /></td>
                    </tr>

                    <tr>
                        <td colspan="5" class="c2">Payment Detail:</td>
                    </tr>

                    <tr>
                        <td>Card Number:</td>

                        <td><input type="text" name="txtCardNumber" size="30" /></td>
                    </tr>

                    <tr>
                        <td>Payment Type:</td>

                        <td><select name="cmbPaymentType" class="c5">
                        <?php
                        while($creditcardtype = mysql_fetch_array($creditcardtypes))
                            echo "<option>" . $creditcardtype['CreditCardTypeID'] . "</options>";
                        ?>
                        </select></td>
                    </tr>

                    <tr>
                        <td>Expiration Date</td>

                        <td><select name="cmbExpiryMonth" class="c6">
                      <?php
                                        for ($i=1; $i<=12; $i++)
                                            echo "<option>" . $i . "</option>";
                                        ?>
                        </select> / <select name="cmbExpiryYear" class="c6">
                      <?php
                                        for ($i=1960; $i<=2014; $i++)
                                            echo "<option>" . $i . "</option>";
                                        ?>                        
                            </select></td>

                        <td></td>
                    </tr>

                    <tr>
                        <td>Card Security Code:</td>

                        <td><input type="text" name="txtSecurityCode"></td>
                    </tr>

                    <tr>
                        <td align="right"><input type="checkbox" value="0" name="chkIsAnonyms"></td>

                        <td><label>Is Anonymous</label></td>
                    </tr>

                    <tr>
                        <td colspan="5" class="c2">Account Details:</td>
                    </tr>

                    <tr>
                        <td>Username:</td>

                        <td><input type="text" name="txtUsername" size="30"></td>
                    </tr>

                    <tr>
                        <td>Password:</td>

                        <td><input type="password" name="txtPassword" size="30"></td>
                    </tr>

                    <tr>
                        <td>Confirm Password:</td>

                        <td><input type="password" name="txtConfirmPassword" size="30"></td>
                    </tr>
                    
                    <tr>
                        <td>Email Address:</td>

                        <td colspan="3"><input type="text" name="txtEmail" size="30" /></td>
                    </tr>
                    
                    <tr>
                        <td colspan="5" class="c2">Further information:</td>
                    </tr>

                    <tr>
                        <td align="left" colspan="2"><input type="checkbox"><label>&nbsp;Tick for future information</label></td>
                    </tr>

                    <tr>
                        <td></td>

                        <td></td>

                        <td><input type="submit" name="btnRegistration" value="Complete Registration"></td>
                    </tr>
                </table>
                </form>
            </div>
        </div>

        <div class="list">
            <img src="images/title3.gif" alt="" width="203" height="26">
            <br>
<div">
<table border="0" cellspacing="10">
<?php

$con = mysql_connect("localhost:3306","root","root");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("hope", $con);
$topdonations = mysql_query("SELECT persons.PersonID, persons.FirstName, persons.LastName, causes.CauseID, causes.Title, donations.Amount , donations.Date FROM donations, persons, causes, paymentdetails WHERE causes.CauseID = donations.CauseID And paymentdetails.PaymentDetailID = donations.PaymentDetailID And paymentdetails.DonorID=persons.PersonID ORDER BY donations.Date DESC LIMIT 0, 10");
while($topdonation = mysql_fetch_array($topdonations))	
{
?>

<tr><td><a href="donor.php?donorid=<?php echo $topdonation['PersonID'] ?>"><?php echo $topdonation['FirstName'] ?> <?php echo $topdonation['LastName'] ?></a> donated Rs. <?php echo $topdonation['Amount'] ?> to <a href="cause.php?causeid=<?php echo $topdonation['CauseID'] ?>" ><?php echo $topdonation['Title'] ?></a> on <?php echo $topdonation['Date'] ?>
</td></tr>

<?php
}
?>
</table>


<?php
mysql_close($con);
?>

		</div>
            	
        </div>
    </div>

    <div id="footer">
        <ul class="navigation">
            <li><a href="index.php">Home</a></li>

            <li><a href="Browse.php">Browse Causes</a></li>

            <li><a href="topdonors.php">Top Doners</a></li>

            <li><a href="index2.php">Sucessful Stories</a></li>

            <li><a href="donorForm.php">Register</a></li>

            <li><a href="AboutUs.php">About Us</a></li>

            <li><a href="ContactUs.php">Contact Us</a></li>
			<li><a href="FAQs.php" >FAQs</a></li>
        </ul>

      <p>Copyright &copy;. All rights reserved. Design by Prototype</p>

        <div class="inner_copy">
            <a href="http://www.greatdirectories.org/directories.html">directory of directories</a><a href="http://www.bestfreetemplates.org/">free templates directory</a>
        </div>
    </div>
</body>
</html>