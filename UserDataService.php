<!--
Stephan Moncavage
CST-236
Milestone 2
06 March 2021
-->
<?php
include('db.php');
class UserDataService{
    function findByFirstName($search){
        $db = new Database();
        $conn = $db->getConnection();
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $query = " SELECT * FROM ecommerce.users Where First_Name like '%$search%'";
        $result = mysqli_query($conn, $query);
        if(!$result){
				echo "Current query has an error of: " .mysqli_error($query);
				return null;
				exit;
		}
		if($result->num_rows ==0){
			return null;
        }
        else{
            $person_array = [];
            while($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            return $person_array;
        }      
    }
    
    function findByLastName($search){
        $db = new Database();
        $conn = $db->getConnection();
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $query = " SELECT * FROM ecommerce.users Where Last_Name like '%$search%'";
        $result = mysqli_query($conn, $query);
        if(!$result){
				echo "Current query has an error of: " .mysqli_error($query);
				return null;
				exit;
		}
		if($result->num_rows ==0){
			return null;
        }
        else{
            $person_array = [];
            while($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            return $person_array;
        }      
    }
    
    function findByID($search){
        $db = new Database();
        $conn = $db->getConnection();
        $serch=intval($search);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $query = " SELECT * FROM ecommerce.users Where ID like '%$serch%'";
        $result = mysqli_query($conn, $query);
        if(!$result){
				echo "Current query has an error of: " .mysqli_error($query);
				return null;
				exit;
		}
		if($result->num_rows ==0){
			return null;
        }
        else{
            $person_array = [];
            while($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            return $person_array;
        }      
    }
	
    function findByUsername($search){
        $db = new Database();
        $conn = $db->getConnection();
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $query = " SELECT * FROM ecommerce.users Where Username like '%$search%'";
        $result = mysqli_query($conn, $query);
        if(!$result){
				echo "Current query has an error of: " .mysqli_error($query);
				return null;
				exit;
		}
		if($result->num_rows ==0){
			return null;
        }
        else{
            $person_array = [];
            while($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            return $person_array;
        }      
    }
    
    function findByRole($search){
        $db = new Database();
        $conn = $db->getConnection();
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $query = " SELECT * FROM ecommerce.users Where Username like '%$search%'";
        $result = mysqli_query($conn, $query);
        if(!$result){
				echo "Current query has an error of: " .mysqli_error($query);
				return null;
				exit;
		}
		if($result->num_rows ==0){
			return null;
        }
        else{
            $person_array = [];
            while($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            return $person_array;
        }      
    }
    
    function findByAddressID($search){
        $db = new Database();
        $conn = $db->getConnection();;
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $query = " SELECT * FROM ecommerce.users Where Address_ID like '%$search%'";
        $result = mysqli_query($conn, $query);
        if(!$result){
				echo "Current query has an error of: " .mysqli_error($query);
				return null;
				exit;
		}
		if($result->num_rows ==0){
			return null;
        }
        else{
            $person_array = [];
            while($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            return $person_array;
        }      
    }
    function findByCreditID($search){
        $db = new Database();
        $conn = $db->getConnection();
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $query = " SELECT * FROM ecommerce.users Where Credit_ID like '%$search%'";
        $result = mysqli_query($conn, $query);
        if(!$result){
				echo "Current query has an error of: " .mysqli_error($query);
				return null;
				exit;
		}
		if($result->num_rows ==0){
			return null;
        }
        else{
            $person_array = [];
            while($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            return $person_array;
        }      
    }
    
	function deleteItem($id){
		$db = new Database();
        $conn = $db->getConnection();
        $serch=intval($id);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $query = " DELETE FROM ecommerce.users Where ID like '%$serch%'";
        $result = mysqli_query($conn, $query);
        if(!$result){
				echo "Current query has an error of: " .mysqli_error($query);
				return null;
				exit;
		}
		if($result->num_rows ==0){
			return null;
        }
        else{
            $person_array = [];
            while($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            return $person_array;
        }      
    }
	
	function updateOne($id, $person){
		$db = new Database();
        $conn = $db->getConnection();
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $query = " Update ecommerce.users SET First_Name = ".$person[0].", Last_Name = ".$person[1]." FROM ecommerce.users Where ID like '%$id%'";
        $result = mysqli_query($conn, $query);
        if(!$result){
				echo "Current query has an error of: " .mysqli_error($query);
				return null;
				exit;
		}
		if($result->num_rows ==0){
			return null;
        }
        else{
            $person_array = [];
            while($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            return $person_array;
        }      
    }
	
	function findByFirstNameWithAddress($n){
		//$n = search string
		$db = new Database();
        $conn = $db->getConnection();
		$qry = $conn->prepare("SELECT ID,  First_Name, Last_Name, Street, Street2, City, State, Postal_Code
				FROM users
				JOIN address
				ON users.Address_ID = address.Address_ID
				WHERE First_Name LIKE ?");
		if(!$qry){
			echo "Could not bind tables together." . mysqli_error($conn);
			exit;
		}
			
		$like_n = "%".$n."%";
		$qry->bind_param("s", $like_n);
			
		$qry->execute();
			
		$result = $qry->get_result();
			
		if(!$result){
			echo "Current query has an error of: " .mysqli_error($qry);
			return null;
			exit;
		}
		if($result->num_rows ==0){
			return null;
        }
        else{
            $person_array = [];
            while($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            return $person_array;
        }      
    }
    
    function findAllPersons(){
        $db = new Database();
        $conn = $db->getConnection();
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $query = "SELECT * FROM ecommerce.users";
        $result = mysqli_query($conn, $query);
        if(!$result){
				echo "Current query has an error of: " .mysqli_error($qry);
				return null;
				exit;
		}
		if($result->num_rows ==0){
			return null;
        }
        else{
            $person_array = [];
            while($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            return $person_array;
        }      
    }
}
?>
