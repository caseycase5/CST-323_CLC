<?php
    $mysql_host = "localhost";
    $mysql_database = "cst-323";
    $mysql_user = "root";
    $mysql_password = "root";
    
    // Page Header
    echo "<html>
	   <head>
	       <title>View Inventory</title>
	   </head>";
    
    // Create connection
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT `ID`, `ITEM_NAME`, `ITEM_QUANTITY` FROM `inventory`;";
    
    $result = $conn->query($sql);
    
    echo "<h1>Current Inventory</h1>";
    
    // Printing results to a table
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>Item ID</th><th>Item Name</th><th>Item Quantity</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["ID"]."</td><td>".$row["ITEM_NAME"]."</td><td>".$row["ITEM_QUANTITY"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);
    echo "<footer>
	<br><br><a href='index.html'>Home Page</a></footer></html>";
    
    