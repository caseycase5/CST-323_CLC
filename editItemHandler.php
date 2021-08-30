<?php
    $mysql_host = "localhost";
    $mysql_database = "cst-323";
    $mysql_user = "root";
    $mysql_password = "root";
    $id = $_GET['id'];
    $itemName = $_POST['name'];
    $itemQuantity = $_POST['quantity'];
    
    // Page Header
    echo "<html>
	   <head>
	       <title>Edit Success</title>
	   </head>";
    
    // Create connection
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // SQL update statement
    $sql = "UPDATE `inventory` SET `ITEM_NAME` = '" . $itemName . "', `ITEM_QUANTITY` = '" . $itemQuantity . "' WHERE `ID` = " . $id . ";";
    
    if (mysqli_query($conn, $sql)) {
        echo "Item edited successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

    
    echo "<footer>
	<br><br><a href='index.html'>Home Page</a></footer>
    <br><br><a href='displayInventory.php'>Inventory Page</a></footer></html>";