<!DOCTYPE html>
<html>
<title>3D informatiesysteem</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
	.content {
  		max-width: 1200px;
  		margin: auto;
  		background: white;
  		padding: 30px;
		}
</style>

<body class="content">
	<header class="w3-container w3-red" >
		<h1>3d-print-shop.nl informatiesysteem</h1>
	</header>	
	<div class="w3-panel w3-light-grey">
		<table class="w3-table w3-bordered">
			<tr>
				<td>	
					<?php include 'inc_opslaan_bestand.php';?>
				</td>
				<td></td>
			</tr>
		</table>
	</div>
	<div class="w3-panel w3-light-grey">
		<table class="w3-table w3-bordered">
			<tr>
				<td>Maak een keuze.</td>
				<td>
  					<input type="button" onclick="location.href='index.html'" value="Stop" />
  				</td>
				<td></td>
			</tr>	
		</table>	
			
	</div>
	
</body>
</html>