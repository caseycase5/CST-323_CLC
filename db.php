<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "ecommerce";
    private $username = "root";
    private $password = "root";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        //Create Connection

		//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$this->conn = new mysqli($this->host,$this->username,$this->password,$this->db_name);

		//Check Connection

		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		return $this->conn;
    }
}

function dbConnect(){
 
			//
		 // Enter your host name, database username, password, and database name.
		// If you have not set database password on localhost then set empty.
		$servername = "localhost";
		$user = "root";
		$password = "root";
		$datbas = "ecommerce";
		
		//Create Connection

		//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$conn = mysqli_connect($servername,$user,$password,$datbas);

		//Check Connection

		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		return $conn;
    }
?>