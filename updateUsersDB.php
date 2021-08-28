<?php
include 'db.php';

$db = new Database();
$conn = $db->getConnection();

for($x = 1; $x < 1000; $x++){
	$qry = $conn->prepare("Update users SET Address_ID = ".$x.",  Credit_ID = ".$x." WHERE ID LIKE ".$x);
	if(!$qry){
		echo "Could not bind tables together." . mysqli_error($conn);
		exit;
	}
	$qry->execute();
			
	$result = $qry->get_result();
	echo $result;
}