<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ref = "../";
	
$content = "
		<style>
		.ProfilePic
		{
			float: right; 
			margin-right: 50px;
			width: 282px;
			height: 300px;
			display: block;
		}
		.Information
		{
			margin-bottom: 5px;
			overflow: hidden;
			background-color: #300F11;
			color: white;
			padding-left: 20px;
		}
		
		h2, h3{
			color: white;
		}
	</style>
		<div>
			<h2>About Us</h2>
			<h3>Admin Information</h3>

			<div>
				<ul>
					<li>
						<div class='Information'>
							<img class='ProfilePic' onclick='' src='../../images/raymond.jpg' width='20%' height='180px' 
								alt='Raymond' title='Raymond'></img>
							<p><h3>Raymond DeLaRosa</h3></p>
							<p><h4>President / Webmaster</h4></p>
							<br/>
							<p><h5>Contact Information:</h5></p>
							<p>Email: rpd43@nau.edu </p>
							<br/>
						</div>
					</li>
					<li>
						<div class='Information'>
							<img class='ProfilePic' onclick='' src='../../images/Brandon_Shipman.jpg' width='20%' height='180px' 
								alt='Brandon' title='Brandon'></img>
							<h3>Brandon Shipman</h3>
							<p><h4>Vice President / Head Human</h4></p>
							<br/>
							<p><h5>Contact Information:</h5></p>
							<br/>
							<br/>
						</div>
					</li>
					<li>
						<div class='Information'>
							<img class='ProfilePic' onclick='' src='../../images/Brayden_Worrell.jpg' width='20%' height='180px' 
								alt='Brayden' title='Brayden'></img>
							<h3>Brayden Worrell</h3>
							<p><h4>Secretary</h4></p>
							<br/>
							<p><h5>Contact Information:</h5></p>
							<br/>
							<br/>
						</div>
					</li>
					<li>
						<div class='Information'>
							<img class='ProfilePic' onclick='' src='../../images/Stephen_Pagni.jpg' width='20%' height='180px' 
								alt='Stephen' title='Stephen'></img>
							<h3>Stephen Pagni</h3>
							<p><h4>Treasurer</h4></p>
							<br/>
							<p><h5>Contact Information:</h5></p>
							<br/>
							<br/>
						</div>
					</li>
					<li>
						<div class='Information'>
							<img class='ProfilePic' onclick='' src='../../images/Taylor_Brown.jpg' width='20%' height='180px' 
								alt='Taylor' title='Taylor'></img>
							<h3>Taylor Brown</h3>
							<p><h4>Admin</h4></p>
							<br/>
							<p><h5>Contact Information:</h5></p>
							<br/>
							<br/>
						</div>
					</li>
					<li>
						<div class='Information'>
							<img class='ProfilePic' onclick='' src='../../images/Irene_Noth.jpg' width='20%' height='180px' 
								alt='Irene' title='Irene'></img>
							<h3>Irene Noth</h3>
							<p><h4>Admin</h4></p>
							<br/>
							<p><h5>Contact Information:</h5></p>
							<br/>
							<br/>
						</div>
					</li>
					<li>
						<div class='Information'>
							<img class='ProfilePic' onclick='' src='../../images/Shannon_Murphy.jpg' width='20%' height='180px' 
								alt='Shannon' title='Shannon'></img>
							<h3>Shannon Murphy</h3>
							<p><h4>Admin/Box Ghost</h4></p>
							<br/>
							<p><h5>Contact Information:</h5></p>
							<p>Phone: (602)301-4967
							<br/>
							<br/>
						</div>
					</li>
					<li>
						<div class='Information'>
							<img class='ProfilePic' onclick='' src='../../images/Kat_Meza.jpg' width='20%' height='180px' 
								alt='Kat' title='Kat'></img>
							<h3>Kat Meza</h3>
							<p><h4>Admin</h4></p>
							<br/>
							<p><h5>Contact Information:</h5></p>
							<br/>
							<br/>
						</div>
					</li>
					<li>
						<div class='Information'>
							<img class='ProfilePic' onclick='' src='../../images/Breanna_Goldsworthy.jpg' width='20%' height='180px' 
								alt='Bree' title='Bree'></img>
							<h3>Breanna Goldsworthy</h3>
							<p><h4>Safety</h4></p>
							<br/>
							<p><h5>Contact Information:</h5></p>
							<br/>
							<br/>
						</div>
					</li>
					<li>
						<div class='Information'>
							<img class='ProfilePic' onclick='' src='../../images/Cambrea_Braudaway.jpg' width='20%' height='180px' 
								alt='Cambrea' title='Cambrea'></img>
							<h3>Cambrea Braudaway</h3>
							<p><h4>Head Costumer/Head Zombie</h4></p>
							<br/>
							<p><h5>Contact Information:</h5></p>
							<br/>
							<br/>
						</div>
					</li>	
					<li>
						<div class='Information'>
							<img class='ProfilePic' onclick='' src='../../images/Billy_Brouws.jpg' width='20%' height='180px' 
								alt='Billy' title='Billy'></img>
							<h3>Billy Brouws</h3>
							<p><h4>Graphic Design/Advertising/Lore Master</h4></p>
							<br/>
							<p><h5>Contact Information:</h5></p>
							<br/>
							<br/>
						</div>
					</li>
				</ul>
			</div>
		</div>";

include('../masterPage.php');