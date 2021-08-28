<!--
Stephan Moncavage
CST-236
Milestone 2
06 March 2021
-->
<?php
include('db.php');
//include '../views/_displayAllProducts.php';
class ProductDataService{
    function findByProductName($search){
        $db = new Database();
        $conn = $db->getConnection();
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $query = $conn->prepare(" SELECT * FROM ecommerce.products Where Product_Name like '%$search%'");
        if(!$query){
            echo "Could not prepare SQL statement.".mysqli_error($conn);
            exit;
        }
        $query->execute();
        $result = $query->get_result();
        if(!$result){
				echo "Current query has an error of: " .mysqli_error($query);
				return null;
				exit;
		}
		if($result->num_rows ==0){
			return null;
        }
        else{
            $product_array = [];
            while($product = $result->fetch_assoc()){
                array_push($product_array, $product);
            }
            return $product_array;
        }      
    }
    
    function findByProductPrice($search){
        $db = new Database();
        $conn = $db->getConnection();
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $query = " SELECT * FROM ecommerce.products Where Product_Price like '%$search%'";
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
            $product_array = [];
            while($product = $result->fetch_assoc()){
                array_push($product_array, $product);
            }
            return $product_array;
        }      
    }
    
    function findByProductID($search){
        $db = new Database();
        $conn = $db->getConnection();
        $serch=intval($search);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $query = " SELECT * FROM ecommerce.products Where Product_ID like '%$serch%'";
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
            $product_array = [];
            while($product = $result->fetch_assoc()){
                array_push($product_array, $product);
            }
            return $product_array;
        }      
    }

    function returnAllProducts(){
        $db = new Database();
        $conn = $db->getConnection();
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $query = " SELECT * FROM ecommerce.products";
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
            $product_array = [];
            while($product = $result->fetch_assoc()){
                array_push($product_array, $product);
            }
            return $product_array;
        }      
    }
}
?>

