<?php
 
 if (isset($_GET["participant_id"])) {
 	$participant_id = $_GET["participant_id"];

 	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "form";

	//create connection
	$connection = new mysqli($servername, $username, $password, $database);

	$sql = "DELETE FROM clients WHERE participant_id = $participant_id";
	$connection->query($sql);

	header("location: /seotech-html/participants.php");
      exit;

 }
?>