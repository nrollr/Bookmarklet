<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/css/font-awesome.css" />    
	<link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
	<div class="alert alert-info" role="alert">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<!-- If not running on localhost, define the correct URL ! --> 
		<a href="javascript:window.location=%22http://localhost/bookmarklet/load.php?url=%22+encodeURIComponent(document.location)+%22&title=%22+encodeURIComponent(document.title)">
			<i class="fa fa-bookmark"></i><span>Bookmark!</span></a>&nbsp;
			Drag and drop the icon in your bookmarks bar + click the icon to bookmark a webpage in your local bookmark repository.
		</div>
		<div class="container">
		</br>
	</div>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>

</body>
</html>
