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

<!-- Onderstaand script controleerd of de productnaam en informatie zijn ingevuld. Dit is een java script en wordt lokaal uitgevoerd. -->
<script>
function validateForm() {
  var x = document.forms["formulier"]["printer"].value;
  var y = document.forms["formulier"]["informatie"].value;
  
  if (x == "" || y == "") {
    alert("Formulier is niet geheel ingevuld.");
    return false;
  }
}
</script>

<?php
// Definieer variabelen en zet variabelen op 0.
$printer = $merk =$type = $firmware = $versie = $eigenaar = $informatie = "";

// Roep de functie test data aan en bewerk de data.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$printer = test_input($_POST["printer"]);
  	$merk = test_input($_POST["merk"]);
  	$type = test_input($_POST["type"]);
  	$firmware = test_input($_POST["firmware"]);
  	$versie = test_input($_POST["versie"]);
  	$eigenaar = test_input($_POST["eigenaar"]);
  	$informatie = test_input($_POST["informatie"]); 
}

// De functie die de data bewerkt tot schone data.
function test_input($data) {
  $data = trim($data); // Verwijder spaties
  $data = stripslashes($data); //Verwijdert slashes
  $data = htmlspecialchars($data); //  Conferteerd bepaalde some karakters naar HTML karakters.
  return $data;
}

?>
<body class="content">

<header class="w3-container w3-red" >
	<h1>3d-print-shop.nl printer invoerformulier</h1>
</header>

<div class="w3-panel w3-light-grey">
<!--Invoer formulier printer_invoerformulier.-->
<form name="formulier" action="printer_naar_db.php" onsubmit="return validateForm()" method="post">
	<!--Tabel om het formulier een duidelijke layout te geven.-->
	<table class="w3-table w3-bordered">
		<tr>
			<td>Printer:</td>
			<td><textarea name="printer" rows="1" cols="60"></textarea></td>
			<td>Geef de printer een vogel naam die nog niet gebruikt is.</td>
		</tr>
		<tr>
			<td>Eigenaar:</td>
			<td>
				<select name="eigenaar">
  					<option value="Roy Verbeek">Roy Verbeek</option>
  					<option value="Henk Schevers">Henk Schevers</option>
  					<option value="Mark Schevers">Mark Schevers</option>
				</select>
			</td>
			<td>Kiest de eigenaar van de printer uit het menu..</td>
		</tr>
		<tr>
			<td>Merk:</td>
			<td>
				<select name="merk">
  					<option value="creality">Creality</option>
				</select>
			</td>
			<td>Kies het merk van de printer uit het menu. Als deze nog niet bestaat vraag mij deze dan toe te voegen.</td>
		</tr>
		<tr>
			<td>Type:</td>
			<td>
				<select name="type">
  					<option value="ender 3">Ender 3</option>
  					<option value="ender 5">Ender 5</option>
  					<option value="crx">CRX</option>
				</select>
			</td>
			<td>Kies het type uit het menu. Als deze nog niet bestaat vraag mij deze dan toe te voegen.</td>
		</tr>
		<tr>
			<td>Informatie:</td>
				<td> <textarea name="informatie" rows="20" cols="60"></textarea></td>
				<td>Noteer hier informatie over de printer. bijvoorbeeld de firmware, de afmetingen die geprint kunnen worden of reparaties.</td>
		</tr>
		<tr>
			<td>Maak een keuze.</td>
			<td>
				<input type="submit" name="submit" value="Verstuur">
  				<input type="reset" value="Reset">
  				<input type="button" onclick="location.href='index.html'" value="Stop" />
  			</td>
			<td></td>
		</tr>
	</table>
</form>
</div>
</body>
</html>