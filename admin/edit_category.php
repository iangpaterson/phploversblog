<?php
	include('includes/header.php');

	$id = $_GET['id'];

	// Create DB object
	$db = new Database();

	// Create query
	$query = "
		SELECT * FROM categories
			WHERE id =" . $id;

	// Run query
	$category = $db->select($query)->fetch_assoc();

	// Create query
	$query = "SELECT * FROM `categories`;";

	// Run query
	$categories = $db->select($query);

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
				UPDATE categories
					SET
						name = '$name'
						WHERE id =" . $id;

			$update_row = $db->update($query);
		}
	}

	if (isset($_POST['delete']))
	{
		$query = "
			DELETE FROM categories
				WHERE id = ".$id;
		$delete_row = $db->delete($query);
	}
?>
<form role="form" method="post" action="edit_category.php?id=<?php echo $id; ?>">
	<div class="form-group">
		<label>Category Name</label>
		<input name="name" type="text" class="form-control" placeholder="Enter category" value="<?php echo $category['name']; ?>">
	</div>
	<div>
		<input name="submit" type="submit" class="btn btn-default" value="Submit">
		<a class="btn btn-default" href="index.php">Cancel</a>
		<input name="delete" type="submit" class="btn btn-danger" value="Delete">
	</div>
	<br>
</form>
<?php include('includes/footer.php'); ?>