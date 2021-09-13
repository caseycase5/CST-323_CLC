<?php
    $mysql_host = "localhost";
    $mysql_database = "cst-323";
    $mysql_user = "root";
    $mysql_password = "root";
    $id = $_GET['id'];
    $itemName = $_POST['name'];
    $itemQuantity = $_POST['quantity'];
    
    // Page Header
    echo '<html>
	   <head>
	       <title>Edit Success</title>
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
	try{
		// SQL update statement
		$sql = "UPDATE `inventory` SET `ITEM_NAME` = '" . $itemName . "', `ITEM_QUANTITY` = '" . $itemQuantity . "' WHERE `ID` = " . $id . ";";
		
		if (mysqli_query($conn, $sql)) {
			echo "Item edited successfully";
			throw new Exception("SQL Table Item Updated Successfully: " . mysqli_error($conn), 200);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			throw new Exception("SQL Edit Item Failed: " . mysqli_error($conn), 250);
		}
    }catch (Exception $e){
		$datetime = new DateTime();
		$datetime->setTimezone(new DateTimeZone('UTC'));
		$logentry = $datetime->format('Y/m/d H:i:s') . ' ' . $e;
		
		//log to default error_log destination
		error_log($logentry);
	}
    mysqli_close($conn);

    
    echo "<footer>
	<br><br><a href='index.html'>Home Page</a></footer>
    <br><br><a href='displayInventory.php'>Inventory Page</a></footer></html>";