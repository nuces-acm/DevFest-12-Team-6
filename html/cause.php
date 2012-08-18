<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Hope - Cause</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />

<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("hope", $con);

if (isset($_GET["causeid"]))
    $causeid = $_GET["causeid"];
else
    $causeid = 1;
    
$cause = mysql_fetch_array(mysql_query("SELECT * FROM causes WHERE CauseID=" . $causeid));
$stages = mysql_query("SELECT * FROM stages");
$comments = mysql_query("SELECT comments.Comment, comments.Date, persons.FirstName, persons.LastName, persons.PersonID FROM persons, comments WHERE comments.DonorID = persons.PersonID And CauseID=" . $causeid);
$collectedfunds = mysql_fetch_array(mysql_query("SELECT SUM(Amount) FROM donations WHERE CauseID=" . $causeid)); 
$requiredfunds = mysql_fetch_array(mysql_query("SELECT SUM(RequiredFunds) FROM stages WHERE CauseID=" . $causeid));
$photos = mysql_query("SELECT * FROM photos WHERE CauseID=" . $causeid);
$videos = mysql_query("SELECT * FROM videos WHERE CauseID=" . $causeid);
?>
<style type="text/css">

#imagegallery{ 
position: relative;
visibility: hidden;
border: 5px solid black;
}

#imagegallery .gallerydesctext{
text-align: left;
padding: 2px 5px;
}

#videogallery{
position: relative;
visibility: hidden;
border: 5px solid black;
}

#videogallery .gallerydesctext{
text-align: left;
padding: 2px 5px;
}

</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>

<script type="text/javascript" src="simplegallery.js" />

/***********************************************
* Simple Controls Gallery- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>

<script type="text/javascript">

var mygallery1=new simpleGallery({
	wrapperid: "imagegallery", //ID of main gallery container,
	dimensions: [400, 265], //width/height of gallery in pixels. Should reflect dimensions of the images exactly
	imagearray:
    [
         <?php
        while($photo = mysql_fetch_array($photos))
        {
        ?>
        ["media/photos/<?php echo $photo['PhotoID']?>.jpg", "media/photos/<?php echo $photo['PhotoID']?>.jpg", "_new", "<?php echo $photo['Title']?> - <?php echo $photo['Date']?>"],
        
        <?php
        }
        ?>
	],
	autoplay: [false, 2500, 2], //[auto_play_boolean, delay_btw_slide_millisec, cycles_before_stopping_int]
	persist: true,
	fadeduration: 1000, //transition duration (milliseconds)
	oninit:function(){ //event that fires when gallery has initialized/ ready to run
	},
	onslide:function(curslide, i){ //event that fires after each slide is shown
		//curslide: returns DOM reference to current slide's DIV (ie: try alert(curslide.innerHTML)
		//i: integer reflecting current image within collection being shown (0=1st image, 1=2nd etc)
	}
})

var mygallery2=new simpleGallery({
	wrapperid: "videogallery", //ID of main gallery container,
	dimensions: [400, 265], //width/height of gallery in pixels. Should reflect dimensions of the images exactly
	imagearray:
    [
         <?php
        while($video = mysql_fetch_array($videos))
        {
        ?>
        ["media/videos/<?php echo $video['VideoID']?>.jpg", "<?php echo $video['Link']?>", "_new", "<?php echo $video['Title']?> - <?php echo $video['Date']?>"],
        
        <?php
        }
        ?>
	],
	autoplay: [false, 2500, 2], //[auto_play_boolean, delay_btw_slide_millisec, cycles_before_stopping_int]
	persist: true,
	fadeduration: 1000, //transition duration (milliseconds)
	oninit:function(){ //event that fires when gallery has initialized/ ready to run
	},
	onslide:function(curslide, i){ //event that fires after each slide is shown
		//curslide: returns DOM reference to current slide's DIV (ie: try alert(curslide.innerHTML)
		//i: integer reflecting current image within collection being shown (0=1st image, 1=2nd etc)
	}
})

</script>

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
	<div id="wrapper">

<table>
    <tr>
        <td><div id="imagegallery"></div></td>
        <td><div id="videogallery"></div></td>
    </tr>
</table>
    																																																																																																																																																																																																																														<div class="inner_copy"><a href="http://www.bestfreetemplates.info/flash.php">free flash templates</a><a href="http://www.beautifullife.info/web-design/15-best-free-website-builders/">best free website builders</a></div>
		<div class="bigblock">
			<img src="images/donations.jpg" alt="" width="696" height="26" /><br />
			<div>

<form method="post" action="donate.php?causeid=<?php echo $cause['CauseID'] ?>">
<a href="donations.php?causeid=<?php echo $cause['CauseID'] ?>">View Donations</a>
<div align="right">
<?php
	if(isset($_COOKIE['DonarID']))
	{
?>
<input type="submit" value="      Donate      " />
<?php
	}
	?>
</div>
</form>
<p><b><?php echo $cause['Title'] ?></b>
<br />
Progress: Rs. <?php echo $collectedfunds[0] ?>  / Rs. <?php echo $requiredfunds[0] ?> </p>
<p><?php echo $cause['Description'] ?></p>




<?php
$i=1;
while($stage = mysql_fetch_array($stages))
{
?>
<p>
<b>Stage <?php echo $i++ ?>: <?php echo $stage['Title'] ?></b>
<br />Required Funds: Rs. <?php echo $stage['RequiredFunds'] ?>
</p>  
<p><?php echo $stage['Description'] ?></p>
<?php
}
?>





<p><b>Comments:</b></p>
<?php
while($comment = mysql_fetch_array($comments))
{
?>
<p>
<a href="donor.php?donorid=<?php echo $comment['DonorID'] ?>"><?php echo $comment['FirstName'] ?> <?php echo $comment['LastName'] ?></a> - 
<i><?php echo $comment['Date'] ?></i></p>
<p><?php echo $comment['Comment'] ?></p>
<?php
}
?>

<?php
if (isset($_COOKIE['DonarID']))
{
?>
<form method="post" action="addcomment.php?causeid=<?php echo $causeid ?>">
    <textarea rows="2" cols="50" name="txtComment"></textarea>
    <br />
    <input type="submit" value="Comment" />
</form>
<?php
}
?>




<?php
mysql_close($con);
?>

		<!--	<div style="border:solid 1px;vertical-align:middle;height:10px;"><label style="margin-top:-20px;">Your personal details</label></div>
			<div style="border:solid 1px;height:100px"></div>
			<div style="border:solid 1px;"></div> -->
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
			<li><a href="index2.php" >Sucessful Stories</a></li>
			<li><a href="DdonorForm.php" >Register</a></li>
			<li><a href="AboutUs.html" >About Us</a></li>
			<li><a href="ContactUs.php" >Contact Us</a></li>
			<li><a href="FAQs.php" >FAQs</a></li>
		</ul>
		<p>Copyright &copy;. All rights reserved. Design by Prototype</p>																																																																	<div class="inner_copy"><a href="http://www.greatdirectories.org/directories.html">directory of directories</a><a href="http://www.bestfreetemplates.org/">free templates directory</a></div>
	</div>
</body>
</html>