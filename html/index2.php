<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Succesful Stories</title>
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
		<ul id="menu">
					<li><a href="index.php" class="but1">Home</a></li>
			<li><a href="Browse.php" class="but2">Browse Causes</a></li>
			<li><a href="topdonors.php" class="but3">Top Doners</a></li>
			<li><a href="index2.php" class="but4_active">Sucessful Stories</a></li>
			<li><a href="donorForm.php" class="but5">Register</a></li>
			<li><a href="AboutUs.php" class="but6">About Us</a></li>
			<li><a href="ContactUs.php" class="but7">Contact Us</a></li>
		</ul>
  	</div>
	
	<div id="wrapper">																																																																																																																																																																																																																																<div class="inner_copy"><a href="http://www.bestfreetemplates.info/flash.php">free flash templates</a><a href="http://www.beautifullife.info/web-design/15-best-free-website-builders/">best free website builders</a></div>
		<div class="bigblock">
			
			<p style="size:20pt; text-align:center">Currently no story is available!</p>
			
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
		<p>Copyright &copy;. All rights reserved. Design by <a href="http://www.bestfreetemplates.info" target="_blank" title="Best Free Templates">BFT</a></p>																																																																	<div class="inner_copy"><a href="http://www.greatdirectories.org/directories.html">directory of directories</a><a href="http://www.bestfreetemplates.org/">free templates directory</a></div>
	</div>
    <map name="Map">
      <area shape="rect" coords="26,26,270,83" href="index.php">
      <area shape="rect" coords="522,222,641,251" href="#">
  	</map>
</body>
</html>
