<?php
    $mysql_host = "localhost";
    $mysql_database = "cst-323";
    $mysql_user = "root";
    $mysql_password = "root";
    $username = $_POST['name'];

    echo "<html>
	   <head>
	       <title>Result Page</title>
	   </head>
	   <body>
        <h1> This is the result page.</h1><br>";
    
    echo "Hello " . $username . ".<br><br>";        
    echo "Displaying names from database:<br>";
    
    $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    
    if(! $conn ) {
        die('Could not connect: ' . mysql_error());
    }

    $sql = "SELECT * FROM `users`";
    $result = mysql_query($sql, $conn);
    
    while($row = $result->fetch_assoc()){
        echo $row['ID'];
        //echo $row['database_columnname'];
    }
    
    mysql_close($conn);
    
    echo "</body></html>";

?>