<?php
include "db.php";

function showAllUserId(){
	global $koneksi;
	$query = "SELECT * FROM user";
	$result = mysqli_query($koneksi, $query);

	if(!$result){
		die('Query Failed' . mysqli_error($koneksi));
	}

	while ($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		echo "<option value='id'>$id</option>";
	}
}

function updateUserTable(){
	global $koneksi;
	$id			  = $_POST['id'];
	$username	  = $_POST['username'];
	$password	  = $_POST['password'];

	$query = "UPDATE user
			  SET username = '$username',
			  	  password = '$password'
			  WHERE id = $id";
	$result = mysqli_query($koneksi, $query);

	if(!$result){
		die("Query Failed.");
	}
}

function deleteUser(){
	global $koneksi;
	$id			  = $_POST['id'];
	$username	  = $_POST['username'];
	$password	  = $_POST['password'];

	$query = "DELETE FROM user WHERE id = $id";
	$result = mysqli_query($koneksi, $query);

	if(!$result){
		die("Query Failed.");
	}
}
?>