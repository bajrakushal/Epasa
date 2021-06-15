<?php
	Global $conn;
	$conn = mysqli_connect("localhost","root","") or die("Couldn't connet to SQL server");
	mysqli_select_db($conn, "epasadb") or die("Couldn'ttt select DB");
?>