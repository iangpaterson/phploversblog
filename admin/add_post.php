<?php
	include('includes/header.php');

	// Create DB object
	$db = new Database();

	if (isset($_POST['submit']))
	{
		// Assign variables
		 // mysqli_real_escape_string() 'escapes' any harmful characters from being submitted
		$title = mysqli_real_escape_string($db->link, $_POST['title']);
		$body = mysqli_real_escape_string($db->link, $_POST['body']);
		$category = mysqli_real_escape_string($db->link, $_POST['category']);
		$author = mysqli_real_escape_string($db->link, $_POST['author']);
		$tags = mysqli_real_escape_string($db->link, $_POST['tags']);

		// Simple validation
		if ($title == '' || $body == '' || $category == '' || $author == '')
		{
			// Set error
			$error = 'Please fill out all required fields';
		}
		else {
			$query = "
				INSERT INTO posts
					(title, body, category, author, tags)
					VALUES ('$title', '$body', $category, '$author', '$tags')
			;";

			$insert_row = $db->insert($query);
		}
	}

	// Create query
	$query = "SELECT * FROM categories;";

	// Run query
	$categories = $db->select($query);
?>

<form method="post" action="add_post.php">
	<div class="form-group">
		<label>Post Title</label>
		<input name="title" type="text" class="form-control" placeholder="Enter title">
	</div>
	<div class="form-group" method="post" action="add_post.php">
		<label>Post Body</label>
		<textarea name="body" class="form-control" placeholder="Enter title"></textarea>
	</div>
	<div class="form-group" method="post" action="add_post.php">
		<label>Category</label>
		<select name="category" class="form-control">
			<?php while ($row = $categories->fetch_assoc()) : ?>
				<?php if ($row['id'] == $post['category'])
					{
						$selected = 'selected';
					}
					else
					{
						$selected = '';
					}
				?>
				<option <?php echo $selected; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
			<?php endwhile; ?>
		</select>
	</div>
	<div class="form-group" method="post" action="add_post.php">
		<label>Author</label>
		<input name="author" type="text" class="form-control" placeholder="Enter author name">
	</div>
	<div class="form-group" method="post" action="add_post.php">
		<label>Tags</label>
		<input name="tags" type="text" class="form-control" placeholder="Enter tags">
	</div>
	<div>
		<input name="submit" type="submit" class="btn btn-default" value="Submit">
		<a class="btn btn-danger" href="index.php">Cancel</a>
	</div>
	<br>
</form>

<?php include('includes/footer.php'); ?>