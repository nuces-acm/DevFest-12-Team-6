<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Hope - Browse Causes</title>
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
	<!--	<div style="Border:solid 0px;height:100px;width:400px;margin-top:-102px;margin-left:500px;"> 
		<br />
		<br />
		
		
		<input type="text" name="txtuser" height="20"/>
		<input type="password" name="txtpassword" />
		<input  type="Button" name="btnLogin" value="Login"/><br />
		<input type="checkbox" name="KeepMeLogin"/>
		<label style="font-family:arial;font-size:9pt;"> Keep me logged in</label>
		<label style="margin-left:30px;font-family:arial;font-size:9pt;"> <a href="#"> Forgot Password</a> </label>
		
		</div> -->
		
		
		<img src="images/photo.jpg" alt="" width="713" height="300" border="0" usemap="#Map" />
		
		<map name="Map">
          <area shape="rect" coords="299,222,367,251" href="#">
          <area shape="rect" coords="14,26,154,83" href="index.html">
        </map>
		<ul id="menu">
			<li><a href="index.php" class="but1">Home</a></li>
			<li><a href="Browse.php" class="but2_active">Browse Causes</a></li>
			<li><a href="topdonors.php" class="but3">Top Doners</a></li>
			<li><a href="index2.html" class="but4">Sucessful Stories</a></li>
			<li><a href="donorForm.php" class="but5">Register</a></li>
			<li><a href="AboutUs.php" class="but6">About Us</a></li>
			<li><a href="ContactUs.php" class="but7">Contact Us</a></li>
		</ul>
  	</div>
	<div id="wrapper">																																																																																																																																																																																																																																<div class="inner_copy"><a href="http://www.bestfreetemplates.info/flash.php">free flash templates</a><a href="http://www.beautifullife.info/web-design/15-best-free-website-builders/">best free website builders</a></div>
		<div class="bigblock">
			<img src="images/causeSearch.jpg" alt="" width="696" height="26" /><br />
			<div>
 <?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("hope", $con);

if (isset($_GET["catagoryid"]))
    $catagoryid = $_GET["catagoryid"];
else
    $catagoryid = 1;

$causes = mysql_query("SELECT * FROM causes WHERE CatagoryID=" . $catagoryid);
$catagories = mysql_query("SELECT * FROM catagories");
?> 
<div style="Border-right:solid 1px;width:140px;float:left;">
<TABLE  width="130px;" style="margin-top:-25px;">
<TR> <TD STYLE="background-color:#00CCCC">CATEGORIES</TD></TR>
<?php
while($catagory = mysql_fetch_array($catagories))
{
?>
<tr><td><a href="browse.php?catagoryid=<?php echo $catagory['CatagoryID'] ?>"><?php echo $catagory['Name'] ?></a></tr></td>
<?php
}
?>
</table>

</div>
<table  style="margin-left:170px;" width="500";>
<tr>
    <td style="background-color:#00CCCC"><b>&nbsp;&nbsp;&nbsp;Causes</b></td></tr>

<?php
while($cause = mysql_fetch_array($causes))
{
?>
<tr>
    <td><a href="cause.php?causeid=<?php echo $cause['CauseID'] ?>"><?php echo $cause['Title'] ?></a></td></tr>
<tr>    <td><?php echo $cause['Description'] ?></td>
</tr>

<?php
}
?>
</table>


<?php
mysql_close($con);
?>

			</div>
 	  </div>
		<div class="list">
			<img src="images/title3.gif" alt="" width="203" height="26" /><br />																																																																																																																																																																																																																								
								<div >
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
			<li><a href="index.php" >Home</a></li>
			<li><a href="Browse.php" >Browse Causes</a></li>
			<li><a href="topdonors.php" >Top Doners</a></li>
			<li><a href="index2.html" >Sucessful Stories</a></li>
			<li><a href="donorForm.php" >Register</a></li>
			<li><a href="AboutUs.php" >About Us</a></li>
			<li><a href="ContactUs.php" >Contact Us</a></li>
			<li><a href="FAQs.php" >FAQs</a></li>
		</ul>
		<p>Copyright &copy;. All rights reserved. Design by Prototype</p>																																																																	<div class="inner_copy"><a href="http://www.greatdirectories.org/directories.html">directory of directories</a><a href="http://www.bestfreetemplates.org/">free templates directory</a></div>
	</div>
</body>
</html>