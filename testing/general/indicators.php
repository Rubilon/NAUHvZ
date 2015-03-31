<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ref = "../";
	
$content = "
<style>
		.Pic
		{
			float: right; 
			margin-right: 50px;
			width: 25%;
			height: 300px;
			display: block;
		}
		.Information
		{
			margin-bottom: 5px;
			overflow: hidden;
		}
	</style>
		<div>
			<h2>Indicators</h2>
			<div>
				<ul>
					<li style='padding-bottom:30px;'>
						<div class='Information'>
							<img class='Pic' onclick='' src='../../images/Brainless.jpg' width='20%' height='180px' 
								alt='OZIndicator' title='OZ Indicator'></img>
							<p><h3>OZ Indicator</h3></p>
							<p><h5>Information:</h5></p>
							<p>These indicators are used to show who has started on the side of the zombies.</p>
							<br/>
						</div>
					</li>
					<hr />
					<li style='padding-bottom:30px;'>
						<div class='Information'>
							<img class='Pic' onclick='' src='../../images/Moderator.jpg' width='20%' height='180px' 
								alt='Mod Indicator' title='Mod Indicator'></img>
							<p><h3>Moderator Indicator</h3></p>
							<p><h5>Information:</h5></p>
							<p>These indicators are worn by moderators who are in charge of keeping HvZ running smoothly.  If you have any questions about rules or disputes with other players, seek out this indicator for assistance.</p>
							<br/>
						</div>
					</li>
					<hr />
					<li style='padding-bottom:30px;'>
						<div class='Information'>
							<img class='Pic' onclick='' src='../../images/NPC.jpg' width='20%' height='180px' 
								alt='NPC Indicator' title='NPC Indicator'></img>
							<p><h3>NPC Indicator</h3></p>
							<p><h5>Information:</h5></p>
							<p>Individuals wearing these indicators are a character in the story.  They may have special abilities or powers that normal players do not.  While wearing this indicator the individuals normal status is suspended until the mission or event is complete.</p>
							<br/>
						</div>
					</li>
					<hr />
					<li style='padding-bottom:30px;'>
						<div class='Information'>
							<img class='Pic' onclick='' src='../../images/Human_Active.jpg' width='20%' height='180px' 
								alt='Human Active' title='Human Active'></img>
							<p><h3>Human Indicator - Active</h3></p>
							<p><h5>Information:</h5></p>
							<p>An orange armband worn above the elbow indicates that a player is human, alive, and actively playing.</p>
							<br/>
						</div>
					</li>
					<hr />
					<li style='padding-bottom:30px;'>
						<div class='Information'>
							<img class='Pic' onclick='' src='../../images/Human_Inactive.jpg' width='20%' height='180px' 
								alt='Human Inactive' title='Human Inactive'></img>
							<p><h3>Human Indicator - Inactive</h3></p>
							<p><h5>Information:</h5></p>
							<p>An orange armband worn below the elbow indicates that a player is human and alive, but is currently unable to play because they are carrying something heavy, smoking, or unable to play the game safely</p>
							<br/>
						</div>
					</li>
					<hr />
					<li style='padding-bottom:30px;'>
						<div class='Information'>
							<img class='Pic' onclick='' src='../../images/Zombie_Active.jpg' width='20%' height='180px' 
								alt='Zombie Active' title='Zombie Active'></img>
							<p><h3>Zombie Indicator - Active</h3></p>
							<p><h5>Information:</h5></p>
							<p>An orange armband worn on the forehead indicates that a player is zombie, alive, and actively playing.</p>
							<br/>
						</div>
					</li>
					<hr />
					<li style='padding-bottom:30px;'>
						<div class='Information'>
							<img class='Pic' onclick='' src='../../images/Zombie_Inactive.jpg' width='20%' height='180px' 
								alt='Zombie Inactive' title='Zombie Inactive'></img>
							<p><h3>Zombie Indicator - Inactive</h3></p>
							<p><h5>Information:</h5></p>
							<p>An orange armband worn below around the neck indicates that a player is zombie and alive, but is currently unable to play because they are carrying something heavy, smoking, or unable to play the game safely</p>
							<br/>
						</div>
					</li>
					<hr />
				</ul>
			</div>
		</div>
	";

include('../masterPage.php');