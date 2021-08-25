<?php
    $mysql_host = "localhost";
    $mysql_database = "cst-323";
    $mysql_user = "root";
    $mysql_password = "root";
    $itemName = $_POST['name'];
    $itemQuantity = $_POST['quantity'];
    
    // Page Header
    echo "<html>
	   <head>
	       <title>New Item Success</title>
	   </head>";
    
    // Create connection
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO `inventory` (ITEM_NAME, ITEM_QUANTITY) VALUES ('$itemName', '$itemQuantity');";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
    echo "<footer>
	<br><br><a href='index.html'>Home Page</a></footer></html>";
    
?>