<?php
$ref = "";
$header = "
<style>
	.carousel-inner > .item > img {
		margin: 0 auto;
		margin-top: auto;
	}
	.size {
		height :300px !important;
	}
</style>
";
$content = "
<div class='jumbotron'>
<div id='carousel-example-generic' style='height: 300px' class='carousel slide' data-ride='carousel'>
  <!-- Indicators -->
  <ol class='carousel-indicators'>
    <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
    <li data-target='#carousel-example-generic' data-slide-to='1'></li>
    <li data-target='#carousel-example-generic' data-slide-to='2'></li>
	<li data-target='#carousel-example-generic' data-slide-to='3'></li>
	<li data-target='#carousel-example-generic' data-slide-to='4'></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class='carousel-inner' role='listbox'>
    <div class='item active'>
      <img class='img-responsive img-rounded size' src='images/humanspause.jpg' alt='...'>
      <div class='carousel-caption'>
      </div>
    </div>
    <div class='item'>
      <img class='img-responsive img-rounded size' src='images/hvzsignup.jpg' alt='...'>
      <div class='carousel-caption'>
      </div>
    </div>
	<div class='item'>
      <img class='img-responsive img-rounded size' src='images/quiet.jpg' alt='...'>
      <div class='carousel-caption'>
      </div>
    </div>
	<div class='item'>
      <img class='img-responsive img-rounded size' src='images/signuphumans.jpg' alt='...'>
      <div class='carousel-caption'>
      </div>
    </div>
	<div class='item'>
      <img class='img-responsive img-rounded size' src='images/afterfinalmission.jpg' alt='...'>
      <div class='carousel-caption'>
      </div>
    </div>
  </div>
 </div>
<center><div style='margin-top: 10px;' id='daystill'></div></center>



<script>
	// set the date we're counting down to

	
	// variables for time units
	var days, hours, minutes, seconds;
	 
	// get tag element
	var countdown = document.getElementById('countdown');
	 
	// update the tag with id 'countdown' every 1 second
	setInterval(function () {
		var current_date = new Date().getTime();
		var target_date = new Date('Feb, 23, 2015').getTime();
		
		// find the amount of 'seconds' between now and target
		var seconds_left = (target_date - current_date) / 1000;
	 
		// do some time calculations
		days = parseInt(seconds_left / 86400);
		seconds_left = seconds_left % 86400;
		 
		hours = parseInt(seconds_left / 3600);
		seconds_left = seconds_left % 3600;
		 
		minutes = parseInt(seconds_left / 60);
		seconds = parseInt(seconds_left % 60);
		 
		 //Div width
		
		var currenttime = document.getElementById('daystill');

		// format countdown string + set tag value
		if(current_date <= target_date)
		{
			currenttime.innerHTML = '<span><h3>Days remaining till game:</h3></span></br><span><h2>' + days +  ' Days ' + hours + ' Hours ' + minutes + ' Minutes ' + seconds + ' Seconds' + '</h2></span>';
		}
		else
		{
			currenttime.innerHTML = 'Happy Hunting!';  
		}	 
	}, 1000);
</script>";
include('masterPage.php');
