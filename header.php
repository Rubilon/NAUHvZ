	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<img style="height: 50px; width: 150px; margin-right: 10px; padding: 0; margin-top: 5px; margin-left: -10px;" class="navbar-brand" src="/images/hvzBanner.png">
			</div><!--/.navbar-header-->
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="/index.php">Home</a></li>
					<li><a href="/general/rules.php">Rules</a></li>
					<li><a href="/general/about.php">About Us</a></li>
					<li><a href="/general/blastStatus.php">Blaster Status</a></li>
					<li><a href="/general/indicators.php">Indicators</a></li>
					<li><a href="http://hvzsource.com/nauhvz/">Feed</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
			<div style="margin-top: -49px;">
			<?php include($ref . './GameStatus.php');?>
			<div>
		</div><!-- /.container-fluid -->
	</nav>