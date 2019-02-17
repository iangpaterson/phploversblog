</div><!-- /.blog-main -->

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
	<div class="sidebar-module sidebar-module-inset">
		<h4>About</h4>
		<p><?php echo $site_description; ?></p>
	</div>
	<div class="sidebar-module">
		<h4>Categories</h4>
		<?php if ($categories): ?>
			<?php while ($row = $categories->fetch_assoc()) : ?>
				<ol class="list-unstyled">
					<li><a href="posts.php?category=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
				</ol>
			<?php endwhile; ?>
		<?php else: ?>
			<p>There are no categories yet</p>
		<?php endif; ?>
	</div>
</div><!-- /.blog-sidebar -->

</div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
<p>PHP Lovers Blog &copy; <?php echo date('Y');?></p>
<p>
<a href="#">Back to top</a>
</p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script>
window.jQuery || document.write('<script src="js/jquery.js"><\/script>')
</script>
<script src="js/bootstrap.js"></script>
</body>

</html>