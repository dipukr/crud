<?php
	$db = mysqli_connect("localhost", "root", "", "contact_db");
	$id = $_GET['id'];
	$sql = "select * from contacts where id = $id";
	$run = $db -> query($sql);
	if ($run -> num_rows > 0) {
		while ($row = $run -> fetch_assoc()) {
			$cname = $row['name'];
			$cemail = $row['email'];
			$cphone = $row['phone'];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<form method="post">
		<input type="text" name="name" value="<?php echo $cname;?>">
		<input type="text" name="email" value="<?php echo $cemail;?>">
		<input type="text" name="phone" value="<?php echo $cphone;?>">
		<input type="submit" name="update" value="Update">
	</form>
</body>
</html>

<?php
	if (isset($_POST['update'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		
		$sql = "update contacts set name = '$name', email = '$email', phone = '$phone' where id = $id";
		if (mysqli_query($db, $sql))
			header("location: read.php");
	}
?>