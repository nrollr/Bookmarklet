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
<!--Fetch variables from url-->
<?php $url = $_GET['url']; $title = $_GET['title']; ?>
<div class="ui text container">
	<form action="" method="post" class="ui form">
		<h2 class="ui dividing header">Save bookmark</h2>
		<br>
		<div class="field">
			<label >Title</label>
			<input type="text" name="title" value="<?= $title ?>">
		</div>
		<div class="field">
			<label >Address</label>
			<input type="text" name="url" value="<?= $url ?>" >
		</div>
		<button class="ui button" type="submit">Submit URL</button>
			<br>
			<br>
			<!--Alert messages-->
			<?php
			if('POST' == $_SERVER['REQUEST_METHOD']) {
				include "include/connect.php";
				$_url = mysqli_real_escape_string($link, $_REQUEST['url']);
				$_title = mysqli_real_escape_string($link, $_REQUEST['title']);

				$query = "INSERT INTO `bookmarks` (hash, url,title) VALUES ('".md5($_url)."','".$_url."','".$_title."')";
				if(mysqli_query($link, $query)){
					echo '<script language="javascript">';
					echo 'window.location.href="bookmarks.php";';
					echo '</script>';
				} else{
					echo '<div class="ui negative message"><i class="close icon"></i>';
					echo "<div class='header'>Error !</div><p>". mysqli_error($link) ."</p></div>";
				}
		 	mysqli_close($link);
			} ?>
	</form>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.js"></script>
<script type="text/javascript">
$('.message .close')
	.on('click', function() {
		$(this).closest('.message').transition('fade');});
</script>
</body>
</html>