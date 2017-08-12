<?php require "include/connect.php"; ?>

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
</br></br></br>
<div class="container">
	<div id="main">    
		<ul class="listBookmarks">
			<?php
			$sql = "SELECT * FROM bookmarks ORDER BY id DESC LIMIT 50";
			$query = mysqli_query($link,$sql);  
			while ($row=mysqli_fetch_assoc($query))
				{ echo '<li><div class="title"><a href="'.$row['url'].'" class="bookmrk">'.$row['title'].'</a></div></li>'; }
			
            mysqli_close($link);  // close database connection
            ?>
        </ul>
    </div>
</div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
