<!--
Stephan Moncavage
CST-236
eCommerce Site Milestone Project
Milestone 1
27 February 2021
-->
<?php 
error_reporting(E_ALL);
ini_set('display_errors',1);
include '../layout_head.php'; 
?>
<link rel = "stylesheet" href = "../../css/style.css" type="text/css"> 
<body class="form2"> 

<?php
    include_once('../../../autoloader.php');
	include '../../../utility/myfuncs.php';
	//session_start();
	//startSess();
	//$conn = dbConnect();
	
	date_default_timezone_set("America/New_York");
	
    // When form submitted, check and create user session.
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			$username = stripslashes($_REQUEST["username"]);
			$_SESSION['username'] = $username;
			$pass = stripslashes($_REQUEST["pass"]);
			$_SESSION['pass'] = $pass;
			$_SESSION['login_user'] = $username;
			$_SESSION['login_time'] = time();
			saveUserId($username);
			$valid = checkUser();
			
			echo $_SESSION["valid"];
			$_SESSION["valid"] = $valid;
			if(session_id() !== NULL){
				header("Location:../dashboard.php");
			}else{
				header("Location:./loginFailed.php");
			}
			//$row = $result-fetch_assoc();
		}	
?>
	<form class = "form" method = "post">
        <h1 class="login-title"><b>Login</b></h1>
        <input class = "login-input" type="text" class="login-input" name = "username" placeholder = "Username" />
        <input class = "login-input" type="password" class="login-input" name = "pass" placeholder ="Password"  />
        <a href = "../dashboard.php" ><input class = "login-button" type ="submit" value ="Login" name ="login"/></a>
		<br>
		<br>
		<a href = "../index.php">Cancel</a>
        <br>
		<br>
		<a href = "./register.html">New Registration</a>
	</form>
</body>
<?php include '../layout_foot.php'; ?>
</html>