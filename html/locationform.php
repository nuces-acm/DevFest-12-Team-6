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

<form method="post" action="addlocation.php?causeid=<?php echo $causeid ?>">
<table>
    <tr>
        <td><b>Address:</b></td>
        <td><input type="text" name="txtAddress" /></td>
    </tr>
    <tr>
        <td><b>City:</b></td>
        <td><input type="text" name="txtCity" /></td>
    </tr>    
    <tr>
        <td><b>Province:</b></td>
        <td><input type="text" name="txtProvince" /></td>
    </tr>
    <tr>
        <td><b>Postal Code:</b></td>
        <td><input type="text" name="txtPostalCode" /></td>
    </tr>
    
    <tr>
        <td></td>
        <td><div align="right">
            <input type="submit" value="Add Location" />
        </div></td>
    </tr>        
</table>
 </form>
 
 <?php
mysql_close($con);
?>
