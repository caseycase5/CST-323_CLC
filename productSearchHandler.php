<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

require_once '../../autoloader.php';
include '../../businessService/ProductBusinessService.php';
include '../views/layout_head.php';
$busserv = new ProductBusinessService();

if(!$_REQUEST["searchProduct"]){
	$prod = $busserv->returnAllProd();	
}
else{
	$searchPhrase = $_REQUEST["searchProduct"];
	$prod = $busserv->searchByName($searchPhrase);
}
?>
<h2>Search Results</h2>
<p>Results are as follows: <p>

<?php

if($prod){
	include('_displayProductSearchResults.php');
}
else{
	echo "No Products found with current search. Please try a different phrase. </br>";
}
include '../views/layout_foot.php';
?>
