<?php
include "db.php";

function showAllUserId(){
	global $koneksi;
	$query = "SELECT * FROM user";
	$result = mysqli_query($koneksi, $query);

	if(!$result){
		die('Query Failed' . mysqli_error($koneksi));
	}

	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		echo "<option value='$id'>$id</option>";
	}
}

$query = "SELECT * FROM user";
$result = mysqli_query($koneksi, $query);

if(!$result){
	die('Query Failed' . mysqli_error($koneksi));
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="col-md-6">
		<form action="login_create.php" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" /
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" />
			</div>
			<div class="form-group">
				<select name="id" class="form-control">
				<?php
				while($row = mysqli_fetch_assoc($result)){
					
					$id = $row['id'];
					echo "<option value='$id'>$id</option>";
					}
					?>
					
					<option value="1">1</option>
				</select>
			</div>
			<input type="submit" name="submit" value="submit" class="btn btn=primary" />
		</form>
	</div>
</div>

</body>
</html>