<?php
	$server="localhost";
	$user="root";
	$password="";
	$connection=mysqli_connect($server,$user,$password);
	$db="project";
	$sql=mysqli_select_db($connection,$db);
	$itemsss=$_POST['sendfield'];
	$inss="INSERT INTO kitchen(items) VALUES('$itemsss')";
	mysqli_query($connection,$inss);
	header("Location: index.html"); 
?>