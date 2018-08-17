<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<br>
<br>
<div class="ui text container">
	<h2 class="ui dividing header">Bookmarks</h2>
	<br>
	<div class="ui list">
		<?php
			include "include/connect.php";

			$sql = "SELECT * FROM `bookmarks` ORDER BY id DESC LIMIT 50";
			$query = mysqli_query($link,$sql);
			while ($row=mysqli_fetch_assoc($query)) {
				echo '<a class="item" href="'.$row['url'].'"><i class="right triangle icon"></i>';
				echo '<div class="content"><div class="description">"'.$row['title'].'"</div></div></a>'; }
			
			mysqli_close($link);
		?>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.js"></script>
</body>
</html>