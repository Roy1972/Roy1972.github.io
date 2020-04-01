<?php
// Deze code controleerd de data uit het formulier zodat er geen foute of onveilige data in de db kan komen.
 	$printer = $_POST['printer'];
 	$eigenaar = $_POST['eigenaar'];
 	$merk = $_POST['merk'];
 	$eigenaar = $_POST['eigenaar'];
 	$type = $_POST['type'];
 	$informatie = $_POST['informatie'];  	 
?>

<!DOCTYPE html>
<html>
<title>3d-print-shop.nl interne informatie</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<h1>3d-print-shop.nl bestandbeheer</h1>
</header>

<br>

<div class="w3-panel w3-light-grey">
	<p>De onderstaande informatie is opgeslagen in de database.</p>
	<table class="w3-table w3-bordered">
		<tr>
			<td width="40%">De printer.</td>
			<td width="60%"><?php echo $printer ?></td>
		</tr>
		<tr>
			<td>De eigenaar.</td>
			<td><?php echo $eigenaar ?></td>
		</tr>
		<tr>
			<td>Het merk.</td>
			<td><?php echo $merk ?></td>
		</tr>
		<tr>
			<td>Het type.</td>
			<td><?php  echo $type ?></td>
		</tr>
		<tr>
			<td>De informatie behorende bij de printer.</td>
			<td><?php echo $informatie ?></td>
		</tr>
	</table>
</div>	

<div class="w3-panel w3-light-grey">
	<table class="w3-table w3-bordered">
		<tr>
			<td width="40%">Maak een keuze.</td>
			<td width="60%">
					<input type="button" onclick="location.href='printer_invoerformulier.php'" value="Voer een nieuwe printer in." />	
					<input type="button" onclick="location.href='index.html'" value="Ga naar het begin." />	
			</td>
		</tr>
		
		

</div>

</body>
</html>