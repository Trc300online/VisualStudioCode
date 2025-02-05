<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    // Per llegir per exemple els valors d'una caixa de texte
    $nom1 = $_GET["Nom"];
    $llinatges1 = $_GET["Llinatges"];
    $Codi_Postal = $_GET["Codi_Postal"];
    $Illa = $_GET["Illa"];
    $Genere = $_GET["Genere"];
    $Preferencies = $_GET["Preferencies"];
    $Telefon = $_GET["Telefon"];
    $Correu = $_GET["Correu"];
    $Contrasenya = $_GET["Contrasenya"];
    $Repeteix_Contrasenya = $_GET["Repeteix_Contrasenya"];

    echo "El nom introduït és: " . $nom1 . " " . $llinatges1;
    echo "<br>";
    
    echo "El codi postal introduït és: " . $Codi_Postal;
    echo "<br>";

    echo "La illa és: " . $Illa;
    echo "<br>";

    echo "El gènere introduït és: " . $Genere;
    echo "<br>";
    
    //Per llegir els valors seleccionats a un checkbox
     for ($i=0;$i<count($Preferencies);$i++) {
       echo "El color preferit és: " . $Preferencies[$i];
     echo "<br>";
    }

    echo "El telèfon introduït és: " . $Telefon;
    echo "<br>";

    echo "El correu introduït és: " . $Correu;
    echo "<br>";

    echo "La contrasenya introduïda és: " . $Contrasenya;
    echo "<br>";

    echo "La contrasenya confirmada és: " . $Repeteix_Contrasenya;
    echo "<br>";

}
?>