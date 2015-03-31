<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NAU HvZ</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/sticky-footer.css" rel="stylesheet">
	<?php echo $header; ?>
</head>
<body>
		<div class="container">
			<?php include($ref . './header2.php');?>
		</div>
		<div class="container" style="margin-top: 75px; margin-bottom: 100px; max-width: 1200px;">
			<?php echo $content; ?>
		</div>
	</div>
	<footer class="footer" style="height: 95px;">
	<div id="fb-root" style="float: right;"></div>
	<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
      <div class="container">
		<center>
        <p>The HvZ website is for use of NAU HvZ club</p>
		<p>Copyright &copy;<?php echo date("Y")?> NAU Humans vs. Zombies</p>
			<a href="http://nauhvz.tumblr.com/" target="_blank"><img src="/images/tumblr.png" height="30px" width="30px" ></img></a>
			<div class="fb-follow" data-href="https://www.facebook.com/nauhvz" data-colorscheme="dark" data-layout="standard" data-show-faces="true" style="width: 0;"></div>
		</center>
	  </div>
    </footer>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
</body>
</html>