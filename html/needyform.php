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

<form method="post" action="addneedy.php?causeid=<?php echo $causeid ?>">
<table>
    <tr>
        <td><b>Name:</b></td>
        <td><input type="text" name="txtName" /></td>
    </tr>
    <tr>
        <td><b>Contact No:</b></td>
        <td><input type="text" name="txtContactNo" /></td>
    </tr>
    <tr>
        <td></td>
        <td><div align="right">
            <input type="submit" value="Add Needy" />
        </div></td>
    </tr>        
</table>
 </form>
 
 <?php
mysql_close($con);
?>