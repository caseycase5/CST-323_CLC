<?php
    $mysql_host = "localhost";
    $mysql_database = "cst-323";
    $mysql_user = "root";
    $mysql_password = "root";
    
    // Page Header
    echo '<html>
	   <head>
	       <title>View Inventory</title>
           <link rel="stylesheet" type="text/css" href="styles.css">
	   </head>';
    
    // Create connection
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT `ID`, `ITEM_NAME`, `ITEM_QUANTITY` FROM `inventory`;";
    
    $result = $conn->query($sql);
    
    // Page title
    echo "<h1>Current Inventory</h1>";
    
    // Add new item
    echo "<h3><a href='newItem.html'>Add New Item</a></h3>";
    
    // Printing results to a table
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>Item ID</th><th>Item Name</th><th>Item Quantity</th><th>Edit Item</th><th>Delete</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id = $row["ID"];
            echo "<tr><td>".$row["ID"]."</td><td>".$row["ITEM_NAME"]."</td><td>".$row["ITEM_QUANTITY"]."</td>
                  <td><a href='editItem.php?id=" .$id . "'>Edit Item</a></td><td><a href='deleteItem.php?id=" .$id . "'>Delete Item</a></td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);
    echo "<footer>
	<br><br><a href='index.html'>Home Page</a></footer></html>";
    
    