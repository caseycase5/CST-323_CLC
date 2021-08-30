<?php
// Getting variable and assigning
$id = $_GET['id'];
$mysql_host = "localhost";
$mysql_database = "cst-323";
$mysql_user = "root";
$mysql_password = "root";

// Create connection
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT `ID`, `ITEM_NAME`, `ITEM_QUANTITY` FROM `inventory` WHERE `ID` = " . $id . ";";

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
}

echo "<h1>Delete Item</h1>";

echo '<form action="deleteItemHandler.php?id=' .$id . '" method="POST">
		<label for="fname">Item name:</label><br>
		<input type="text" id="name" name="name" value="' . $name .'" required><br><br>
		<label for="lname">Item Quantity:</label><br>
		<input type="text" id="quantity" name="quantity" value="' . $quantity . '" required><br><br>
        <h1>ARE YOU SURE YOU WANT TO DELETE THIS ITEM?</h1><br><br>
		<input type="submit" value="Yes">
	  </form>
      <form action="displayInventory.php" method="post">
        <input type="submit" value="No">   
      </form>';
        

mysqli_close($conn);
echo "<footer>
	<br><br><a href='index.html'>Home Page</a></footer></html>";


