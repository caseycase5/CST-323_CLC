<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

require_once '../../autoloader.php';
include '../../businessService/UserBusinessService.php';
include '../views/layout_head.php';

$busserv = new UserBusinessService();

//if($_REQUEST["searchPerson"]){
	$searchPhrase = $_REQUEST["searchPerson"];
	$persons = $busserv->findByFirstNameWithAddress($searchPhrase);
//}
//else{
//	$persons = $busserv->returnAllPersons();
//}
?>

<h2>Search Results</h2>
<p>Results are as follows: <p>

<?php

if($persons){
	include('_displayPeopleSearchResults.php');
}
else{
	echo "No Users found with current search. Please try a different phrase. </br>";
}
include '../views/layout_foot.php';
?>