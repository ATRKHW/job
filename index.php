<?php
	// session_start();
    include 'connection.php';
    $sql = "SELECT * FROM posts";
    $query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Sarabun', sans-serif;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="?p=home">Article</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<!-- <a class="nav-link" href="index.php">หน้าแรก<span
							class="sr-only">(current)</span></a> -->
				</li>
			</ul>
			<form action="auth.php" method="post" class="form-inline my-2 my-lg-0">
				<?php
					session_start();
					if (isset($_SESSION['user_full_name'])) {
						echo '<div class="mr-2 text-white">' . $_SESSION['user_full_name'] . '</div>';
						echo '<a href="signout.php" class="btn btn-danger my-2 my-sm-0">ออกจากระบบ</a>';
					} else {
						echo '<input class="form-control mr-sm-2" type="text" placeholder="ชื่อผู้ใช้" name="username">';
						echo '<input class="form-control mr-sm-2" type="password" placeholder="รหัสผ่าน" name="password">';
						echo '<button class="btn btn-success my-2 my-sm-0" type="submit" id="submit">เข้าสู่ระบบ</button>';
					}
				?>
			</form>
		</div>
	</nav>
	<div class="container">
		<div class="row row-cols-1 row-cols-md-3 my-3">
			<?php
				while ($result = mysqli_fetch_array($query)) {
			?>
			<div class="col mb-4">
				<div class="card h-100">
					<img src="<?= 'administrator/post/' . $result['post_image'] ?>" class="card-img-top img-fluid"
						alt="...">
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

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>
</body>

</html>