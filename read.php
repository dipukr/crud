<!DOCTYPE html>
<html>
<head>
	<title>Read</title>
</head>
<body>
	<table style="width: 60%; margin: 50px 20%; text-align: center; font-size: larger;" border="1">
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		<?php
			$db = mysqli_connect("localhost", "root", "", "contact_db");
			$i = 1;
			$sql = "select * from contacts";
			$run = $db -> query($sql);
			if ($run -> num_rows > 0) {
				while ($row = $run -> fetch_assoc()) {
					$id = $row['id'];
		?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><a href="update.php?id=<?php echo $id; ?>">Update</a></td>
				<td><a href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
			</tr>
			<?php
				}
			}	
			?>
	</table>
	<a href="create.php" style="margin-left: 20%; font-size: 20px">Create New Contact</a>
</body>
</html>