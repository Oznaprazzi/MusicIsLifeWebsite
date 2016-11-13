<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title>Music Gallery</title>
	<meta name="keywords" content="Music Gallery">
	<meta name="description" content="A gallery of photos related to music.">
	<meta name="author" content="Casey Huang">
	<meta name="copyright" content="Copyright 2014 Casey Huang">
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" type="text/css" href="css/default.css" media="all" >
	<link rel="stylesheet" type="text/css" href="css/print.css" media="all" >
	<script src="js/modernizr.custom.js"></script>
<!-- the following script operates for older browsers -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5-els.js"></script>
<![endif]-->
</head>

<body>

	<div id="maincontainer">
	
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<header>
			<hgroup>
				<h1>Music is Life</h1>
			</hgroup>
		</header>
		
		<nav>
			<ul>
				<li><a href="index.php" class="a"><span>Home</span></a></li>
				<li id="current"><a href="gallery.php"><span class="span-current">Gallery</span></a></li>
				<li><a href="contact.php" class="a"><span>Contact</span></a></li>
			</ul>
		</nav>

		<div id="container" class="container">
			<?php
			/* simple read a directory and display each file as an image */
			
			/*assign the variable $dir_name to the folder name you have your images in */
			$dir_gallery = "images-gallery";
			$dir_thumbs = "images-thumbs";

			/*open up the directories*/
			$directory = @opendir($dir_gallery);
			if (!$directory) {
			//There was no result
				echo "There is a problem with the website. ";
				die ("I suggest you try later.");
				}
			
			echo '<ul id="og-grid" class="og-grid">';
			
			while ($file=@readdir($directory)){
				
				$name = substr($file, 0, (strlen ($file)) - (strlen (strrchr($file,'.')))); //file name without extension

				//only shows images with ".jpg" file extensions
				if ($file !== $name.".jpg"){
				continue;
				}
				//skip current iteration of loop from here	
				
				echo'
					<li>
						<a data-largesrc="'. $dir_gallery. '/' . $file.'" data-title="'. $name.'" data-description="By Casey Huang">
							<img class="img" src="'. $dir_thumbs. '/' . $file.'" alt="'. $name.'"/><figcaption class="printonly">'. $name.'</figcaption>
						</a>
					</li>';
				}
				
			echo'</ul>';
			?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>

			<div id="backtotop">

				<a href="#top">
					<span></span>
					<p>Back To Top<p>
				</a>
				
			</div>
			
			<footer class="footer2">

				<p>&copy Casey Huang 2014</p>

				<div class="fb-like" id="fb-like2" data-href="https://www.facebook.com/weloveshineekey1314" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>

			</footer>
			
			<iframe src="http://free.timeanddate.com/clock/i4393ajk/n264/tlnz/fn10/fs16/fc900/tct/pct/ahr/tt0/ta1" frameborder="0" width="960px" height="20" allowTransparency="true"></iframe>
			
		</div>
		
	</div>
		
</body>

</html>