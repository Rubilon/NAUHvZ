<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ref = "../";

$header = "		
	<style>
		.BlasterPic
		{
			margin-right: 10px;
			max-width: 700px;
			max-height: 300px;
			display: block;
		}
		.Information
		{
			margin-bottom: 5px;
			overflow: hidden;
		}
		DD
		{
			margin-left: 25px;
		}
		h1, h2
		{
			cursor: pointer;
		}
		h2:hover, h1: hover
		{
			color: red;
		}
		h1, h2, h3, h4, h5, h6, dd, dt 
		{
			color: white;
		}
	</style>
";
	
$content = "
	<div  class='accordion' id='accordion2'>
		<h1 class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseZero' >Click here for more information</h2>
		<div id='collapseZero' class='accordion-body collapse'>
			<h4>All weapons are now broken down into 4 categories as they are released</h4>
			<DL style='width:100%;'>
				<DT>On Hold</DT>
				<DD>Blasters that have been released that we have concerns about</DD>
				<DT>Approved</DT>
				<DD>Blasters that have been approved for game use</DD>
				<DT style='display: none;'>Mission Only</DT>
				<DD style='display: none;'>Blasters approved for use during evening missions only</DD>
				<DT>Banned</DT>
				<DD>Blasters that have been removed from game due to safety concerns</DD>
			</DL>
			<h6>*Click on a heading to view blasters of that category</h6>
		</div>
		<h2 class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseOne' >On Hold</h1>
		<div id='collapseOne' class='accordion-body collapse'>
			<DL style='width:100%;'>
				<DT><h4>Berzerker</h4></DT>
				<DT><img class='BlasterPic' onclick='' src='../../images/Berzerker.jpg' alt='Berzerker' title'Berzerker'></img></DT>
				
				<DT><h4>Crossbolt</h4></DT>
				<DT><img class='BlasterPic' onclick='' src='../../images/Crossbolt.jpg' alt='Crossbolt' title'Crossbolt'></img></DT>

				<DT><h4>Slingstrike</h4></DT>
				<DT><img class='BlasterPic' onclick='' src='../../images/Slingstrike.jpg' alt='Slingstrike' title'Slingstrike'></img></DT>
				
				<DD><h3>If you receive one of these blasters and would like to have it tested please contact us.</h3></DD>
				
			</DL>
		</div>
		<h2 class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseTwo'>Approved</h2>
		<div id='collapseTwo' class='accordion-body collapse'>
			<DL style='width:100%;'>
				<DT><h4>Cyclone Shock</h4></DT>
				<DT><img class='BlasterPic' onclick='' src='../../images/CycloneShock.jpg' alt='CycloneShock' title'CycloneShock'></img></DT>
				
				<DT><h4>Demolisher 2-in-1</h4></DT>
				<DT><img class='BlasterPic' onclick='' src='../../images/Demolisher.jpg' alt='Demolisher' title='Demolisher'></img></DT>			
								
				<DT><h4>Flipfury</h4></DT>
				<DT><img class='BlasterPic' onclick='' src='../../images/Flipfury.jpg' alt='Flipfury' title'Flipfury'></img></DT>
				
				<DT><h4>Mega Bigshock</h4></DT>
				<DT><img class='BlasterPic' onclick='' src='../../images/MegaBigShock.jpg' alt='Mega Bigshock' title'Mega Bigshock'></img></DT>
				
				<DT><h4>Rhino Fire</h4></DT>
				<DT><img class='BlasterPic' onclick='' src='../../images/Rhino.jpg' alt='Rhino' title='Rhino'></img></DT>				

				<DT><h4>Sharpfire</h4></DT>
				<DT><img class='BlasterPic' onclick='' src='../../images/Sharpfire.jpg' alt='Sharpfire' title'Sharpfire'></img></DT>
								
				<DT><h4>Sling Fire</h4></DT>
				<DT><img class='BlasterPic' onclick='' src='../../images/Sling_Fire.jpg' alt='Sling' title='Sling'></img></img></DT>
				
				<DT><h4>Z-Tek Bow</h4></DT>
				<DT><img class='BlasterPic' onclick='' src='../../images/Z-Tek.jpg' alt='Z-Tek' title='Z-Tek'></img></DT>
				<DD><h3>The whistling arrows are allowed, but the suction cup arrow is banned.</h3></DD>
				
			</DL>
		</div>
		<h2 class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseThree' style='display: none;' >Mission Only</h2>
		<div id='collapseThree' class='accordion-body collapse'>
			<DL>
			</DL>
		</div>
		<h2 class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseFour' >Banned</h2>
		<div id='collapseFour' class='accordion-body collapse'>
			<DL>
				<DT><h4>MegaThunderBow</h4></DT>
				<DT><img class='BlasterPic' onclick='' src='../../images/Mega_Thunder.jpg' alt='MegaThunder' title='MegaThunder'></img></DT>
				<DD><h3>The Mega Thunderbow has been banned because it leaves welts on individuals who have been shot with it.</h3></DD>
			</DL>
		</div>
	</div>
	";

	include('../masterPage.php');