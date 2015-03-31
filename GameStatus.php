<div>
	<div style="width: 250px; float: right;">
		<div class="meter">
			<span class="bar" id="bar" style="width: 0%"><div style="color: white; margin-top: 5px; margin-left: 25px;" id="daysComplete"></div></span>
		</div>
	</div>
</div>

<script>
	// set the date we're counting down to

	
	// variables for time units
	var days, hours, minutes, seconds;
	 
	// get tag element
	var countdown = document.getElementById('countdown');
	 
	// update the tag with id 'countdown' every 1 second
	setInterval(function () {
		var current_date = new Date().getTime();
		var target_date = new Date('Mar, 7, 2015').getTime();
		var arbDate = new Date('Feb, 23, 2015').getTime();
		
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
		
		var myElement = document.querySelector('#bar');
		var currenttime = document.getElementById('daysComplete');
		var TimeRemaining = (1 - ((current_date - target_date) / (arbDate - target_date))) * 100;

		// format countdown string + set tag value
		if(current_date <= arbDate)
		{
			myElement.style.width = '100%';
			currenttime.innerHTML = 'Game Starts February 23rd';
		}
		else if (current_date > target_date)
		{
			myElement.style.width = '100%';
			currenttime.innerHTML = 'See you next semester';
		}
		else
		{
			currenttime.innerHTML = '<span class=\"days\">' + days +  ' <b>Days Remaining!</b></span>';  
			myElement.style.width = TimeRemaining + '%';
		}	 
	}, 1000);
</script>

<style>
.meter { 
	height: 50px;  /* Can be anything */
	position: relative;
	background: #555;
	-moz-border-radius: 25px;
	-webkit-border-radius: 25px;
	border-radius: 25px;
	padding: 10px;
	-webkit-box-shadow: inset 0 -1px 1px rgba(255,255,255,0.3);
	-moz-box-shadow   : inset 0 -1px 1px rgba(255,255,255,0.3);
	box-shadow        : inset 0 -1px 1px rgba(255,255,255,0.3);
	margin-bottom: 5px;
}

.meter > span.bar {
	display: block;
	height: 100%;
	   -webkit-border-top-right-radius: 8px;
	-webkit-border-bottom-right-radius: 8px;
	       -moz-border-radius-topright: 8px;
	    -moz-border-radius-bottomright: 8px;
	           border-top-right-radius: 8px;
	        border-bottom-right-radius: 8px;
	    -webkit-border-top-left-radius: 20px;
	 -webkit-border-bottom-left-radius: 20px;
	        -moz-border-radius-topleft: 20px;
	     -moz-border-radius-bottomleft: 20px;
	            border-top-left-radius: 20px;
	         border-bottom-left-radius: 20px;
	background-color: rgb(43,194,83);
	background-image: -webkit-gradient(
	  linear,
	  left bottom,
	  left top,
	  color-stop(0, rgb(43,194,83)),
	  color-stop(1, rgb(84,240,84))
	 );
	background-image: -webkit-linear-gradient(
	  center bottom,
	  rgb(43,194,83) 37%,
	  rgb(84,240,84) 69%
	 );
	background-image: -moz-linear-gradient(
	  center bottom,
	  rgb(43,194,83) 37%,
	  rgb(84,240,84) 69%
	 );
	background-image: -ms-linear-gradient(
	  center bottom,
	  rgb(43,194,83) 37%,
	  rgb(84,240,84) 69%
	 );
	background-image: -o-linear-gradient(
	  center bottom,
	  rgb(43,194,83) 37%,
	  rgb(84,240,84) 69%
	 );
	-webkit-box-shadow: 
	  inset 0 2px 9px  rgba(255,255,255,0.3),
	  inset 0 -2px 6px rgba(0,0,0,0.4);
	-moz-box-shadow: 
	  inset 0 2px 9px  rgba(255,255,255,0.3),
	  inset 0 -2px 6px rgba(0,0,0,0.4);
	position: relative;
	overflow: hidden;
}
</style>
