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

<form method="post" action="addvideo.php?causeid=<?php echo $causeid ?>">
<table>
    <tr>
        <td><b>File:</b></td>
        <td><input type="file" name="filVideo" /></td>
    </tr>
    <tr>
        <td><b>Title:</b></td>
        <td><input type="text" name="txtTitle" /></td>
    </tr>
    <tr>
        <td><b>Link:</b></td>
        <td><input type="text" name="txtLink" /></td>
    </tr>    
    <tr>
        <td></td>
        <td><div align="right">
            <input type="submit" value="Add Video" />
        </div></td>
    </tr>        
</table>
 </form>
 
 <?php
mysql_close($con);
?>