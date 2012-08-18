<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("hope", $con);

if (isset($_GET["causeid"]))
    $causeid = $_GET["causeid"];
else
    $causeid = 1;
    
?>

<ul>
<li><a href="stageform.php?causeid=<?php echo $causeid ?>">Add Stage</a></li>
<li><a href="locationform.php?causeid=<?php echo $causeid ?>">Add Location</a></li>
<li><a href="needyform.php?causeid=<?php echo $causeid ?>">Add Needy</a></li>
<li><a href="photoform.php?causeid=<?php echo $causeid ?>">Add Photo</a></li>
<li><a href="videoform.php?causeid=<?php echo $causeid ?>">Add Video</a></li>
</ul>

<?php
mysql_close($con);
?>
