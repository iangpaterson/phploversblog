<?php
	include('includes/header.php');

	// Create DB object
	$db = new Database();

	if (isset($_POST['submit']))
	{
		// Assign variables
		 // mysqli_real_escape_string() 'escapes' any harmful characters from being submitted
		$name = mysqli_real_escape_string($db->link, $_POST['name']);

		// Simple validation
		if ($name == '')
		{
			// Set error
			$error = 'Please fill out all required fields';
		}
		else {
			$query = "
				INSERT INTO categories
					(name)
					VALUES ('$name')
			;";

			$update_row = $db->update($query);
		}
	}

	// Create query
	$query = "SELECT * FROM categories;";

	// Run query
	$categories = $db->select($query);
?>

<form role="form" method="post" action="add_category.php">
	<div class="form-group">
		<label>Category Name</label>
		<input name="name" type="text" class="form-control" placeholder="Enter category">
	</div>
	<div>
		<input name="submit" type="submit" class="btn btn-default" value="Submit">
		<a class="btn btn-default" href="index.php">Cancel</a>
	</div>
	<br>
</form>
<?php include('includes/footer.php'); ?>