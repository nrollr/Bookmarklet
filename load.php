<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
	<br>
	<br>
	<?php
  		// Fetch variables from url
		$url = $_GET['url'];
		$title = $_GET['title'];
	?>
	<div class="container">
		<form action="" method="post">
			<!--title field-->
			<div class="row">
				<div class="col-md-3 text-right">
					<label >Title</label>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control input-sm" name="title" value="<?= $title ?>">
					</div>
				</div>
			</div>
			<!--url field-->
			<div class="row">
				<div class="col-md-3 text-right">
					<label>Address</label>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control input-sm" name="url" value="<?= $url ?>" >
					</div>
				</div>
			</div>
			<!--submit button-->
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<button type="submit" class="btn btn-default btn-sm">Submit</button>
				</div>
			</div>
			<br>
			<br>
			<!--alert messages-->
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<?php
					if('POST' == $_SERVER['REQUEST_METHOD']) {
						require "include/connect.php";
						// Escape user input
						$_url = mysqli_real_escape_string($link, $_REQUEST['url']);
						$_title = mysqli_real_escape_string($link, $_REQUEST['title']);
						// Add new entry to database
						$query = "INSERT INTO bookmarks (hash, url,title) VALUES ('".md5($_url)."','".$_url."','".$_title."')";
						if(mysqli_query($link, $query)){
							echo '<script language="javascript">';
							echo 'window.location.href="bookmarks.php";';
							echo '</script>';
						} else{
							echo '<div class="alert alert-danger" role="alert">';
							echo "<strong>Error !</strong> ". mysqli_error($link) ."</div>";
						}
				 mysqli_close($link);  // Close database connection
				}
				?>
			</div>
		</div>
	</form>
</div>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>