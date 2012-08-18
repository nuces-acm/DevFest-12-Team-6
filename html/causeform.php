<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
    die('Could not connect: ' . mysql_error());
    
mysql_select_db("hope", $con);
$catagories = mysql_query("SELECT * FROM catagories");
?>

<form method="post" action="addcause.php">
<table>
    <tr>
        <td><b>Catagory:</b></td>
        <td>
            <select name="cmbCatagory">
            <?php
                while ($catagory = mysql_fetch_array($catagories))
                {
            ?>
            <option value="<?php echo $catagory['CatagoryID'] ?>"><?php echo $catagory['Name'] ?></option>
            <?php
            }
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <td><b>Title:</b></td>
        <td><input type="text" name="txtTitle" /></td>
    </tr>
    <tr>
        <td><b>Description:</b></td>
        <td><input type="text" name="txtDescription" /></td>
    </tr>
    
    <tr>
        <td><b>Expire Date:</b></td>
    
        <td><select name="cmbDay" class="c3">
            <?php
                        for ($i=1; $i<=31; $i++)
                            echo "<option>" . $i . "</option>";
                        ?>
        </select> <select name="cmbMonth" class="c3">
            <?php
                        for ($i=1; $i<=12; $i++)
                            echo "<option>" . $i . "</option>";
                        ?>
        </select> <select name="cmbYear" class="c4">
            <?php
                        for ($i=2012; $i<=2014; $i++)
                            echo "<option>" . $i . "</option>";
                        ?>
        </select></td>
    </tr>
    
    <tr>
        <td></td>
        <td><div align="right">
            
            <input type="submit" value="Add Cause" />
        </div></td>
    </tr>        
</table>
 </form>
 
 <?php
mysql_close($con);
?>