<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
		<style>
			html {
				height: 100%;
			}
			body {
				min-height: 100%;
				display: grid;
				grid-template-rows: 1fr auto;
			}
			.footer {
				text-align: center;
				background: #efefef;
				grid-row-start: 2;
				grid-row-end: 3;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<h1>Any old Heading</h1>
			<h3>A sub heading</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui alias consequuntur illo libero, voluptate repellat? Unde corporis saepe molestiae atque? Ullam fugiat sed voluptatum est deserunt voluptatem, et exercitationem consectetur temporibus recusandae. Reiciendis, impedit odio sint quasi quibusdam tenetur culpa sit sapiente minus asperiores totam officiis et adipisci assumenda, soluta placeat blanditiis. Quod natus, reiciendis tempore vitae, amet aspernatur atque recusandae molestias sint tenetur sapiente suscipit quo totam enim veritatis! Quas optio vitae ad quaerat, unde numquam obcaecati id nostrum asperiores facilis est non, sunt maxime perspiciatis inventore reiciendis quibusdam autem! Eius ad iure ullam non soluta officiis laboriosam amet!</p>
			
		</div>
		<footer class="footer">Design by Ian Paterson &copy; <?php echo date('M Y'); ?></footer>
	</body>
</html>