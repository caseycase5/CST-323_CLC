<?php
    $mysql_host = "localhost";
    $mysql_database = "cst-323";
    $mysql_user = "root";
    $mysql_password = "root";
    $id = $_GET['id'];

    // Page Header
    echo '<html>
	   <head>
	       <title>Delete Success</title>
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
		// SQL delete statement
		$sql = "DELETE FROM `inventory` WHERE `ID` = " . $id . ";";

		if (mysqli_query($conn, $sql)) {
			echo "Item deleted successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			throw new Exception("SQL Query Failed: " . mysqli_error($conn), 250);
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
    <br><br><a href='displayInventory.php'>Inventory Page</a></footer></html>
	   <br><a href='index.html'>Home Page</a></footer>";