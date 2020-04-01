<?php
$target_dir = "3dbestanden/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "Er is al een bestand met deze naam.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    echo "Het bestand is te groot";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "stl" && $imageFileType != "gcode" ) {
    echo "Alleen stl en gcode bestanden zijn toegestaan";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo " Het bestand is niet opgelagen.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Het bestand ". basename( $_FILES["fileToUpload"]["name"]). " is opgeslagen.";
    } else {
        echo "Het bestand is niet opgelagen. Deze applicatie is waarschijnlijk niet de oorzaak.";
    }
}
?>