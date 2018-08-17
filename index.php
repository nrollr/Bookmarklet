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
<div class="ui message">
	<i class="close icon"></i>
	<div class="ui breadcrumb">
		<!-- If not running on localhost, define the correct URL ! -->
		<a class="section" href="javascript:window.location=%22http://localhost/bookmarklet/load.php?url=%22+encodeURIComponent(document.location)+%22&title=%22+encodeURIComponent(document.title)">
		<i class="bookmark icon"></i>Bookmark!</a><i class="right angle icon divider"></i>
		<div class="section">Drag and drop the icon in your bookmarks bar + click the icon to bookmark a webpage in your local bookmark repository.</div>
	</div>
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