<?php
	$db = mysqli_connect("localhost", "root", "", "contact_db");
	$id = $_GET['id'];
	$sql = "delete from contacts where id = $id";
	if (mysqli_query($db, $sql))
		header("location: read.php");
?>