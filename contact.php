<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title>Contact Me</title>
	<meta name="keywords" content="Contact Form">
	<meta name="description" content="Contact Form">
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
		
		<header>
			<hgroup>
				<h1>Music is Life</h1>
			</hgroup>
		</header>
		
		<nav>
			<ul>
				<li><a href="index.php" class="a"><span>Home</span></a></li>
				<li><a href="gallery.php" class="a"><span>Gallery</span></a></li>
				<li id="current"><a href="contact.php"><span>Contact</span></a></li>
			</ul>
		</nav>
		
		<div id="container">
		
		<h2>Feel free to contact us if you have any questions about music!</h2>
		
			<form method="post" action="contact.php">
				<div>
					<input type="text" id="name" name="name" placeholder="First Name" required/>
				</div>
				
				<div>
					<input type="text" id="name" name="name" placeholder="Last Name" required/>
				</div>
				
				<div>
					<input type="text" id="email" name="email" placeholder="Email Address" required />
				</div>
				
				<div>
					<textarea id="message" name="message" rows="6" cols="30" placeholder="Type Message here" required></textarea>
				</div>
				
				<div class="button">
					<input class="input" type="submit" name="send" value="Send message" />
				</div>
			</form>
			
			<?php

				if(isset($_POST['send'])) {
				   // Prepare the email
				$to = 'casey.huang1496@gmail.com';

				$name = $_POST['name'];
				$mail_from = $_POST['email'];
				   $subject = 'Message sent from website';
				   $message = $_POST['message'];

				$header = "From: $name <$mail_from>";

				   // Send it
				   $sent = mail($to, $subject, $message, $header);
				   if($sent) {
				   echo 'Your message has been sent successfully!';
				   } else {
				   echo 'Sorry, your message could not send. Please try again later.';
				   }
				}
			?>
			
			<footer class="footer">

				<p>&copy Casey Huang 2014</p>

				<div class="fb-like" id="fb-like" data-href="https://www.facebook.com/weloveshineekey1314" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>

			</footer>
			
			<iframe src="http://free.timeanddate.com/clock/i4393ajk/n264/tlnz/fn10/fs16/fc900/tct/pct/ahr/tt0/ta1" frameborder="0" width="960px" height="20" allowTransparency="true"></iframe>
			
		</div>
		
	</div>
	
</body>

</html>
