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

<form method="post" action="addstage.php?causeid=<?php echo $causeid ?>">
<table>
    <tr>
        <td><b>Title:</b></td>
        <td><input type="text" name="txtTitle" /></td>
    </tr>
    <tr>
        <td><b>Description:</b></td>
        <td><input type="text" name="txtDescription" /></td>
    </tr>
    
    <tr>
        <td><b>Required Funds:</b></td>
        <td><input type="text" name="txtRequiredFunds" /></td>
    </tr>
    
    <tr>
        <td></td>
        <td><div align="right">
            <input type="submit" value="Add Stage" />
        </div></td>
    </tr>        
</table>
 </form>
 
 <?php
mysql_close($con);
?>