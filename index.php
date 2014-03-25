<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/live_search.css">
	<script type="text/javascript" src="./js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="./js/live_search.js"></script>
</head>
<body>
	<h1>PHP Live Search</h1>
	<form name='form1' method='post' action='' enctype='multipart/form-data'>
		<input type="text" class="search" id="searchid" placeholder="Search" />
		<br>
		<div id="result"></div>
		<div id='tag'></div>
		<br>
		<br>
		<input type='submit' value='submit'>
	</form>

	<?php
		if($_POST["tag"]){
			echo "<h4>POST Value:</h4>";
			$tag_array = $_POST["tag"];
			for($tag_array_num = 0; $tag_array_num < count($tag_array); $tag_array_num++){
				echo ($tag_array_num + 1).". ".$tag_array[$tag_array_num]."<br>";
			}
		}
	?>
</body>
</html>