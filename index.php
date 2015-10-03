<?php
	require_once("json-reader.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>My awesome webpage</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
	<div id="main">
		<div id="header">
			<div id="logo">
				<p>My awesome website</p>
			</div>
			<div id="menu">
				<a class="selected" href="">Home</a>  <a class="item" href="">Members</a>  
				<a class="item" href="">Photos</a>  <a class="item" href="">Pages</a> 
				<a class="item" href="">Discussions</a>  <a class="item" href="">More</a>
			</div>
		</div>
		<div id="left-panel">
			<div id="left-body">
				<h4>Top five posts</h4>
				<?php
					print_entries();
				?>
			</div>
		</div>
		<div id="right-panel">
			<div id="right-body">
				<h4>Image of the week</h4>
				<img src="images/image.gif" alt="image of the week">
				<a href="">See more</a>
				<hr />
				<h4>Quote of the week</h4>
				<div id="quote">
					<p>Lorem ipsum dolor sit amet,
					consectetur adipiscing elit.
					Quisque ligula orci, rutrum eget
					ex ac, condimentum ultrices.</p> 
					<span id="name">- Johnny Five</span>
				</div>
				<a href="">More quotes</a>
				</div>
		</div>
	</div>
</body>
</html>