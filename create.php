<?php $db = mysqli_connect("localhost", "root", "", "contact_db"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<style type="text/css">
		body {
			white-space: pre;
		}
		input {
			padding: 12px 25px;
			font-size: 18px;
			font-family: "DejaVu Serif";
			margin: 3px 0;
			border: 1px solid #28282B;
			border-radius: 4px;
		}
	</style>
</head>
<body>
	<form method="post">
		<input type="text" name="name" placeholder="Name">
		<input type="text" name="email" placeholder="Email">
		<input type="text" name="phone" placeholder="Phone">
		<input type="submit" name="save" value="Save">
	</form>
	<a href="read.php" style="margin-left: 100px; font-size: 20px">Read Contacts</a>
</body>
</html>

<?php
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		
		$sql = "insert into contacts (name, email, phone) values('$name', '$email', '$phone')";
		if (mysqli_query($db, $sql))
			header("location: create.php");
		else echo '<script>alert("Contact could not be saved")</script>';
	}
?>