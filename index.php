<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title>Music is Life</title>
	<meta name="keywords" content="Music">
	<meta name="description" content="The importance of music in life.">
	<meta name="author" content="Casey Huang">
	<meta name="copyright" content="Copyright 2014 Casey Huang">
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" type="text/css" href="css/default.css" media="all" >
	<link rel="stylesheet" type="text/css" href="css/print.css" media="all" >
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
		
		<SCRIPT language="JavaScript">

			var usernamecheck="music";
			var passcheck="4ever"; 
			var username=prompt ('Enter Username','');
			var password=prompt ('Enter Password','');

			//create a counter var
			var counter = 2;

			//Next create a for loop to loop 3 times then if still the credidentials
			//are incorrect then send user to google.com
			for (var i = 0; i < counter; i++){
				if 
					(username+password==usernamecheck+passcheck);
				
				else {
					alert("The username or password you have entered is incorrect. Please try again.");
					var username=prompt ('Enter Username',' ');
					var password=prompt ('Enter Password',' ');
				}	
			}
			
			if
				(username+password==usernamecheck+passcheck);
					
			else //tells user that the username or password they have entered is wrong and will be sent to google.co.nz
				{alert("The username or password you have entered is incorrect. You will now be directed to another webpage.");
				{window.location="http://www.google.co.nz"};};
		
		</SCRIPT>

		<header>
			<hgroup>
				<h1>Music is Life</h1>
			</hgroup>
		</header>
		
		<nav>
			<ul>
				<li id="current"><a href="index.php"><span>Home</span></a></li>
				<li><a href="gallery.php" class="a"><span>Gallery</span></a></li>
				<li><a href="contact.php" class="a"><span>Contact</span></a></li>
			</ul>
		</nav>
		
		<div id="container">
			
			<p class="p">Music is an important part of life. I cannot imagine how life would be without music, which shows how important music is to me and many other people. The reason why music is created is so that people are able to express their feelings and emotions and share it with people around the world who feel the same way as they do. Music makes you feel better as you would always feel that you are not alone, because music is the only thing that stays with you forever. Friends come and go (the "end" in friends shows that friends having an ending), whereas music is always there for you. Music will always remain by your side whenever you feel lonely or sad. It is something that makes you feel you always have something that you can rely on to be there for you, and to help you make sense of the world. I believe that most people have felt music's warm embrace as they would have discovered a song that truly defines who they really are as an individual. I believe that everyone has the right to express their inner self to the world with music.</p>
			
			<h2>Here Are Some Music Quotes:</h2>
			<p class="p"> Retrieved from <a href="http://www.brainyquote.com/quotes/topics/topic_music.html">http://www.brainyquote.com/quotes/topics/topic_music.html</a> on 5 April 2014</p>

			<div id="quotes">
				<?php
					$dir_quotes = "images-quotes";

					/*open up the directories*/
					$directory = @opendir($dir_quotes);
					if (!$directory) {
					//There was no result
						echo "There is a problem with the website. ";
						die ("I suggest you try later.");
						}
					
					while ($file=@readdir($directory)){
						$name = substr($file, 0, (strlen ($file)) - (strlen (strrchr($file,'.')))); //file name without extension

						//only shows images with ".jpg" file extensions
						if ($file !== $name.".jpg"){
						continue;
						}
						//skip current iteration of loop from here	
						
						echo'
							<img class="grow" src="'.$dir_quotes . '/' . $file. '" alt="'.$name.'">';
						}

					echo' ';
				?>
			</div>
			
			<div id="backtotop">

				<a href="#top">
					<span></span>
					<p>Back To Top</p>
					
				</a>
				
			</div>

			<footer>

				<p>&copy Casey Huang 2014</p>
				
				<div class="fb-like" id="fb-like" data-href="https://www.facebook.com/weloveshineekey1314" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>

			</footer>
			
			<iframe src="http://free.timeanddate.com/clock/i4393ajk/n264/tlnz/fn10/fs16/fc900/tct/pct/ahr/tt0/ta1" frameborder="0" width="960px" height="20" allowTransparency="true"></iframe>
			
		</div>
					
	</div>
		
</body>

</html>