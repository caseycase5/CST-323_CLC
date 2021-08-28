<!--
Stephan Moncavage
CST-236
Milestone 2
06 March 2021
-->
<script 
	src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
	integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
	crossorigin="anonymous">
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<?php

function displayAllUsers($users){
    if(!$users){
        echo "No Results Found.";   
    }
    else{
        echo "<table>";
        echo "<tr>";
        echo "<th> ID </th>";
        echo "<th> First Name </th>";
        echo "<th> Last Name </th>";
        echo "</tr>";
        for($x=0; $x< count($users);$x++){
            echo "<tr>";
            echo "<td>" .$users[$x][0]. " </td>" . "<td>" . $users[$x][1] . " </td>" . "<td>" . $users[$x][2] . " </td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}

?>
<script>
$(document).ready)(function(){
	$('#products').DataTable();
});
</script>
