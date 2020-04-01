<?php
// Deze code controleerd de data uit het formulier zodat er geen foute of onveilige data in de db kan komen.
 	$productnaam = $_POST['productnaam'];
 	$bestandtype = $_POST['bestandtype'];
 	$versie = $_POST['versie'];
 	$eigenaar = $_POST['eigenaar'];
 	$status = $_POST['status'];
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
			<td width="40%">De productnaam.</td>
			<td width="60%"><?php echo $productnaam ?></td>
		</tr>
		<tr>
			<td>Het bestandtype.</td>
			<td><?php echo $bestandtype ?></td>
		</tr>
		<tr>
			<td>De versie.</td>
			<td><?php echo $versie ?></td>
		</tr>
		<tr>
			<td>De eigenaar van het bestand.</td>
			<td><?php  echo $eigenaar ?></td>
		</tr>
		<tr>
			<td>De status van het bestand.</td>
			<td><?php echo $status ?> </td>
		</tr>
		<tr>
			<td>De informatie behorende bij het bestand.</td>
			<td><?php echo $informatie ?></td>
		</tr>
	</table>
</div>

<div class="w3-panel w3-light-grey">
	<?php include 'inc_selecteer_bestand.html';?>
</div>

<!-- <div class="w3-panel w3-light-grey">
	<table class="w3-table w3-bordered">
		<tr>
			<td width="40%">Maak een keuze.</td>
			<td width="60%">
					<button type="button" onclick="alert('Moet nog worden gerealiseerd')">Voer een nieuw bestand in.</button>
					<button type="button" onclick="alert('Moet nog worden geraliseerd')">Ga naar het begin.</button>		
			</td>
		</tr>
	</table>	
</div> -->

</body>
</html>