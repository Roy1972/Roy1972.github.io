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
  var x = document.forms["formulier"]["productnaam"].value;
  var y = document.forms["formulier"]["informatie"].value;
  if (x == "" || y == "") {
    alert("Formulier is niet geheel ingevuld.");
    return false;
  }
}
</script>

<?php
// Definieer variabelen en zet variabelen op 0.
$productnaam = $bestandtype = $versie = $eigenaar = $status = $informatie = "";

// Roep de functie test data aan en bewerk de data.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$productnaam = test_input($_POST["productnaam"]);
  	$bestandtype = test_input($_POST["bestandtype"]);
  	$versie = test_input($_POST["versie"]);
  	$eigenaar = test_input($_POST["eigenaar"]);
  	$status = test_input($_POST["status"]);
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
	<h1>3d-print-shop.nl bestandbeheer</h1>
</header>

<div class="w3-panel w3-light-grey">
<!--Invoer formulier 3d_bestand_invoerformulier.-->
<form name="formulier" action="3d_bestand_naar_db.php" onsubmit="return validateForm()" method="post">
	<!--Tabel om het formulier een duidelijke layout te geven.-->
	<table class="w3-table w3-bordered">
		<tr>
			<td>Productnaam:</td>
			<td><textarea name="productnaam" rows="1" cols="60"></textarea></td>
			<td>Bedenk een product naam die nog niet eerder is gebruikt en het product beschrijft. Bijvoorbeeld "lamp type 4"</td>
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
			<td>Met eigenaar wordt bedoeld de persoon die het bestaand heeft aangemaak.</td>
		</tr>
		<tr>
			<td>klant:</td>
			<td>
			</td>
			<td>Moet nog gerealissserd worden.</td>
		</tr>
		<tr>
			<td>Bestandtype:</td>
			<td>
				<select name="bestandtype">
  					<option value="stl">STL</option>
  					<option value="gcode">GCODE</option>
				</select>
			</td>
			<td>In dit systeem worden twee soorten bestanden gebruikt. Te noemen STL en GCODE.</td>
		</tr>
		<tr>
			<td>Versie:</td>
			<td>
				<select name="versie">
  					<option value="1">1</option>
  					<option value="2">2</option>
  					<option value="3">3</option>
  					<option value="4">4</option>
  					<option value="5">5</option>
				</select>
			</td>
			<td>Op het moment dat een bestand verandert is, je hebt bijvoorbeeld een aanpassing gedaan in Simplify, kies dan een opvolgend versie nummer.</td>
		</tr>
		
		<tr>
			<td>Status:</td>
			<td>
				<select name="status">
  					<option value="Ontwikkeling">Ontwikkeling</option>
  					<option value="Productie">Productie</option>
				</select>
			</td>
			<td>De status geeft weer of een product nog in ontwikkeling is of dat het product goed is. In het eerste geval geef je het product de status "ontwikkeling" en in het laatste geval geef je het product de status "productie"</td>
		</tr>
		<tr>
			<td>Informatie:</td>
				<td> <textarea name="informatie" rows="20" cols="60"></textarea></td>
				<td>Noteer hier informatie over het product, de gemaakte ontwikkelingen, de opgetreden productie fouten, verbeter punten, enz.</td>
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