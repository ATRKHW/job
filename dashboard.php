<?php
    include 'connection.php';
    $sql = "SELECT * FROM posts";
    $query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>AdminLTE 3 | Starter</title>

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Sarabun', sans-serif;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Navbar</a>
	</nav>
	<div class="container">
		<div class="row row-cols-1 row-cols-md-3 my-3">
			<?php
				while ($result = mysqli_fetch_array($query)) {
			?>
			<div class="col mb-4">
				<div class="card h-100">
					<img src="<?= 'administrator/post/' . $result['post_image'] ?>" class="card-img-top img-fluid" alt="...">
					<div class="card-body">
						<h5 class="card-title"><b><?= $result['post_topic'] ?></b></h5>
						<p class="card-text"><?= $result['post_description'] ?></p>
					</div>
				</div>
			</div>
			<?php
				}
			?>
		</div>
	</div>
</body>

</html>