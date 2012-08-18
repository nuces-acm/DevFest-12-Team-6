<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Hope - Home</title>
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
			else
			{
		?>
		<form method="post" action="login.php">
		<table>
		<tr><td>Name:</td><td>Password</td></tr>
		<tr>
		<td><input type="text" name="txtuser" height="20"/></td>
<td>		<input type="password" name="txtpassword" /></td>
<td>		<input  type="submit" name="btnLogin" value="Login"/><br /></td>
		</tr>
		</table>
		</form>
		<?php
		}
		?>
		</div> 
		
		
		<img src="images/photo.jpg" alt="" width="713" height="300" border="0" usemap="#Map" />

		
		<ul id="menu">
			<li><a href="index.php" class="but1_active">Home</a></li>
			<li><a href="Browse.php" class="but2">Browse Causes</a></li>
			<li><a href="topdonors.php" class="but3">Top Doners</a></li>
			<li><a href="index2.php" class="but4">Sucessful Stories</a></li>
			<li><a href="donorForm.php" class="but5">Register</a></li>
			<li><a href="AboutUs.php" class="but6">About Us</a></li>
			<li><a href="ContactUs.php" class="but7">Contact Us</a></li>
		</ul>
  	</div>
	<div id="wrapper" class="background">																																																																																																																																																					<div class="inner_copy"><a href="http://www.bestfreetemplates.info/flash.php">free flash templates</a><a href="http://www.beautifullife.info/web-design/15-best-free-website-builders/">best free website builders</a></div>
		<div class="about">
			<img src="images/title1.gif" alt="" width="408" height="26" /><br />
			<div class="block">
				<img src="images/pic1.jpg" alt="" width="136" height="136" />
				<p>Hope is aimed at providing a fully transparent donation scheme for prospective donors. This is achieved by providing detailed information about causes and letting the donors transfer their donations by getting assured of the fact that they are donating to right person. Then, after all funds for a particular cause have been raised, articles, photos and videos are collected and posted on the system to fully ensure donors and motivate other people to donate.</p>
			</div>
			<div class="block">
				<img src="images/pic2.jpg" alt="" width="136" height="136" />
				<p>Many people hesitate from making donations because of the concern about their funds not reaching their intended people. Even after all the funds are transferred there is no way for the donors to ensure that their money was spent on helping the needy. Online donation systems do exist, but they don’t ensure a donor by providing them some video content of the needy.
				</p>
			</div>
		</div>
		<div class="news">
			<img src="images/title2.gif" alt="" width="226" height="26" /><br />
			<div class="item" >
			<?php


//$donations = mysql_query("SELECT persons.FirstName, persons.LastName, paymentdetails.DonorID, SUM(donations.Amount) As Amount FROM persons, paymentdetails, donations WHERE paymentdetails.PaymentDetailID = donations.PaymentDetailID And paymentdetails.DonorID = persons.PersonID GROUP BY DonorID ORDER BY SUM(donations.Amount) DESC LIMIT 0, 10");

$topcauses = mysql_query("SELECT * FROM causes ORDER BY ExpireDate DESC LIMIT 0, 10");
$topdonations = mysql_query("SELECT persons.PersonID, persons.FirstName, persons.LastName, causes.CauseID, causes.Title, donations.Amount , donations.Date FROM donations, persons, causes, paymentdetails WHERE causes.CauseID = donations.CauseID And paymentdetails.PaymentDetailID = donations.PaymentDetailID And paymentdetails.DonorID=persons.PersonID ORDER BY donations.Date DESC LIMIT 0, 10");
?>

<table border="0" width="220px" cellspacing="10">
<?php
while($topcause = mysql_fetch_array($topcauses))
{
?>

<tr><td ><a href="cause.php?causeid=<?php echo $topcause['CauseID'] ?>"><?php echo $topcause['Title'] ?></a> <i> expires <?php echo $topcause['Date'] ?> </i></td></tr>


<?php
}
?>
</table>

			</div>
		</div>
		<div class="list" >
			<img src="images/title3.gif" alt="" width="202" height="26" /><br />																																																																																																																																					
		<div >
<table border="0" cellspacing="10">
<?php
while($topdonation = mysql_fetch_array($topdonations))
{
?>

<tr><td><a href="donor.php?donorid=<?php echo $topdonation['PersonID'] ?>"><?php echo $topdonation['FirstName'] ?> <?php echo $topdonation['LastName'] ?></a> donated Rs. <?php echo $topdonation['Amount'] ?> to <a href="cause.php?causeid=<?php echo $topdonation['CauseID'] ?>" ><?php echo $topdonation['Title'] ?></a> on <?php echo $topdonation['Date'] ?>
<p><?php echo $topcause['Description'] ?></p></td></tr>

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
			<li><a href="index2.php" >Sucessful Stories</a></li>
			<li><a href="donorForm.php" >Register</a></li>
			<li><a href="AboutUs.php" >About Us</a></li>
			<li><a href="ContactUs.php" >Contact Us</a></li>
			<li><a href="FAQs.php" >FAQs</a></li>
		</ul>
		<p>Copyright &copy;. All rights reserved. Design by Prototype</p>																																																																	<div class="inner_copy"><a href="http://www.greatdirectories.org/directories.html">directory of directories</a><a href="http://www.bestfreetemplates.org/">free templates directory</a></div>
	</div>
    <map name="Map">
      <area shape="rect" coords="26,26,270,83" href="index.php">
      <area shape="rect" coords="522,222,641,251" href="#">
  	</map>
</body>
</html>
