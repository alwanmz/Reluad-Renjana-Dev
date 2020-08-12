<?php
	require_once 'conn.php';

	if(ISSET($_POST['save'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$number=$_POST['number'];
		$address=$_POST['address'];
		$nm_brg=$_POST['nm_brg'];
		$hrg_brg=$_POST['hrg_brg'];
		$stok_brg=$_POST['stok_brg'];
		$gbr_brg=$_POST['gbr_brg'];
			
		mysqli_query($conn, "INSERT INTO `member` VALUES('', '$name', '$email', '$number', '$address', '$nm_brg', '$hrg_brg', '$stok_brg', '$gbr_brg')") or die(mysqli_error());
		
		header('location: index.php');
	}
?>
