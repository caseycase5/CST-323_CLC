<?php
    // Getting variable and assigning
    $id = $_GET['id'];
    $mysql_host = "localhost";
    $mysql_database = "cst-323";
    $mysql_user = "root";
    $mysql_password = "root";
    
    echo '<head>
            <title>Edit Item</title>
            <link rel="stylesheet" type="text/css" href="styles.css">
          </head>';
    try{
		// Create connection
		$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
		
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			throw new Exception("SQL Connection Failed: " . mysqli_error($conn), 300);
		}
    }catch (Exception $e){
		$datetime = new DateTime();
		$datetime->setTimezone(new DateTimeZone('UTC'));
		$logentry = $datetime->format('Y/m/d H:i:s') . ' ' . $e;
		
		//log to default error_log destination
		error_log($logentry);
	}
    $sql = "SELECT `ID`, `ITEM_NAME`, `ITEM_QUANTITY` FROM `inventory` WHERE `ID` = " . $id . ";";
    
	try{
		$result = $conn->query($sql);
		
		// Printing results to a table
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$name = $row["ITEM_NAME"];
				$quantity = $row["ITEM_QUANTITY"];
			}
		} else {
			echo "Error finding item.";
			throw new Exception("SQL Return No Items from Table: " . mysqli_error($conn), 200);
		}
    }catch (Exception $e){
		$datetime = new DateTime();
		$datetime->setTimezone(new DateTimeZone('UTC'));
		$logentry = $datetime->format('Y/m/d H:i:s') . ' ' . $e;
		
		//log to default error_log destination
		error_log($logentry);
	}
    echo "<h1>Edit Item</h1>";
    
    echo '<form action="editItemHandler.php?id=' .$id . '" method="post">
		<label for="fname">Item name:</label><br>
		<input type="text" id="name" name="name" value="' . $name .'" required><br><br>
		<label for="lname">Item Quantity:</label><br>
		<input type="text" id="quantity" name="quantity" value="' . $quantity . '" required><br><br>
		<input type="submit" value="Save">
	   </form>';
    
    mysqli_close($conn);
    echo "<footer>
	<br><br><a href='index.html'>Home Page</a></footer></html>";