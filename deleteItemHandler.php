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
	       <title>Delete Success</title>
	   </head>";

    // Create connection
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL delete statement
    $sql = "DELETE FROM `inventory` WHERE `ID` = " . $id . ";";

    if (mysqli_query($conn, $sql)) {
        echo "Item deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);


    echo "<footer>
    <br><br><a href='displayInventory.php'>Inventory Page</a></footer></html>
	   <br><a href='index.html'>Home Page</a></footer>";