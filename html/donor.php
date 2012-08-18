<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Hope - Donor Profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>	
	<div id="header">																																																																																																																																																									<div class="inner_copy"><a href="http://www.greatdirectories.org/categories/legal-directories/">legal directories</a><a href="http://www.bestfreetemplates.org/categories/charity/">free charity templates</a></div>
		<div style="border:solid 0px;height:100px;width:500px;">
		<img src="images/top.gif" alt="setalpm" border="0" usemap="#Map" /> 
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

		<img src="images/photo.jpg" alt="" width="713" height="300" border="0" usemap="#Map" />
		
		<map name="Map">
          <area shape="rect" coords="299,222,367,251" href="#">
          <area shape="rect" coords="14,26,154,83" href="index.html">
        </map>
		<ul id="menu">
			<li><a href="index.php" class="but1">Home</a></li>
			<li><a href="Browse.php" class="but2_active">Browse Causes</a></li>
			<li><a href="topdonors.php" class="but3">Top Doners</a></li>
			<li><a href="index2.php" class="but4">Sucessful Stories</a></li>
			<li><a href="donorForm.php" class="but5">Register</a></li>
			<li><a href="AboutUs.php" class="but6">About Us</a></li>
			<li><a href="ContactUs.php" class="but7">Contact Us</a></li>
		</ul>
  	</div>
	<div id="wrapper">																																																																																																																																																																																																																																<div class="inner_copy"><a href="http://www.bestfreetemplates.info/flash.php">free flash templates</a><a href="http://www.beautifullife.info/web-design/15-best-free-website-builders/">best free website builders</a></div>
		<div class="bigblock">
			<img src="images/donor.jpg" alt="" width="696" height="26" /><br />
			</div>
		<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("hope", $con);

if (isset($_GET["donorid"]))
    $donorid = $_GET["donorid"];
else
    $donorid = 1;
    
$donor = mysql_fetch_array(mysql_query("SELECT * FROM donors, persons, users WHERE persons.PersonID = donors.DonorID And users.PersonID = persons.PersonID And donors.DonorID=" . $donorid));
$donations = mysql_query("SELECT donations.Date, causes.Title, causes.CauseID, donations.Amount FROM donations, causes, paymentdetails WHERE donations.CauseID = causes.CauseID And paymentdetails.PaymentDetailID = donations.PaymentDetailID And paymentdetails.DonorID=" . $donorid);

?>

<table border=1>
<tr>
<td>
    <img src="profiles/<?php echo $donorid ?>.jpg" width="150px" height="200px"/>
</td>
<td>
    <b>Name:</b> &nbsp;&nbsp;<?php echo $donor['FirstName'] ?> <?php echo $donor['LastName'] ?><br /> 
    <b>Gender:</b>&nbsp;&nbsp; <?php echo $donor['Sex'] ?><br />
    <b>Email:</b> &nbsp;&nbsp;<?php echo $donor['Email'] ?><br /> 
    <p><b>About Donor:</b> &nbsp;&nbsp;<?php echo $donor['About'] ?></p>
</td>




<table width="100%">
<tr>
    <td style="background-color:#00CCCC"><b>Title</b></td>
    <td style="background-color:#00CCCC"><b>Amount</b></td>
    <td style="background-color:#00CCCC"><b>Date</b></td>
</tr>
<?php
while($donation = mysql_fetch_array($donations))
{
?>
<tr>
    <td style="background-color:#C1C7F7"><a href="cause.php?causeid=<?php echo $donation['CauseID'] ?>"><?php echo $donation['Title'] ?></a></td>
    <td style="background-color:#C1C7F7">Rs. <?php echo $donation['Amount'] ?></td>
    <td style="background-color:#C1C7F7"><?php echo $donation['Date'] ?></td>
</tr>
<?php
}
?>
</table>




<?php
mysql_close($con);
?>
		<!--	<div style="border:solid 1px;vertical-align:middle;height:10px;"><label style="margin-top:-20px;">Your personal details</label></div>
			<div style="border:solid 1px;height:100px"></div>
			<div style="border:solid 1px;"></div> -->
			</div>
 	  </div>
		
	</div>
	<div id="footer">
		<ul class="navigation">
		<li><a href="index.php" >Home</a></li>
			<li><a href="Browse.php" >Browse Causes</a></li>
			<li><a href="topdonors.php" >Top Doners</a></li>
			<li><a href="index2.php" >Sucessful Stories</a></li>
			<li><a href="DdonorForm.php" >Register</a></li>
			<li><a href="AboutUs.html" >About Us</a></li>
			<li><a href="ContactUs.php" >Contact Us</a></li>
			<li><a href="FAQs.php" >FAQs</a></li>
		</ul>
		p>Copyright &copy;. All rights reserved. Design by Prototype</p>																																																																	<div class="inner_copy"><a href="http://www.greatdirectories.org/directories.html">directory of directories</a><a href="http://www.bestfreetemplates.org/">free templates directory</a></div>
	</div>
</body>
</html>
