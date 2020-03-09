<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("db.php");
 
if(isset($_POST['Submit'])) {    
    $name = $_POST['productName'];
    $des = $_POST['description'];
    $quantity = $_POST['quantity'];
        
    // checking empty fields
    if(empty($name) || empty($des) || empty($quantity)) {                
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($des)) {
            echo "<font color='red'>description field is empty.</font><br/>";
        }
        
        if(empty($quantity)) {
            echo "<font color='red'>qauntity field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO products(name,des,quantity) VALUES('$name','$des','$quantity')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='home.php'>View Result</a>";
    }
}
?>
</body>
</html>