<?php
session_start();
//including the database connection file
include_once("db.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY id DESC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <a href="add.html">Add New Data</a><br/><br/>
 
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>id</td>
            <td>name</td>
            <td>description</td>
            <td>quantity</td>
            <td>Update</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['des']."</td>";
            echo "<td>".$res['quantity']."</td>";   

            
            
        }
        ?>
    </table>
    <a href="login.php"> login</a>
</body>
</html>