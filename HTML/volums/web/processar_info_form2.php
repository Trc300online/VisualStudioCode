<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    // Per llegir per exemple els valors d'una caixa de texte
    $nom1 = $_GET["nom1"];
    $llinatges1 = $_GET["llinatges1"];
    $correu1 = $_GET["correu1"];
    $telefon1 = $_GET["telefon1"];
    $data_neixament1 = $_GET["data_neixament1"];
    $pregunta1 = $_GET["pregunta1"];
    $pregunta2 = $_GET["pregunta2"];
    $pregunta3 = $_GET["pregunta3"];
    $color = $_GET["color"];
    $correu_electronic1 = $_GET["correu_electronic1"];
    $contrasenya1 = $_GET["contrasenya1"];

    echo "El nom introduït és: " . $nom1." ". $llinatges1;
    echo "<br>";
    echo "El correu introduït és: " . $correu1;
    echo "<br>";
    echo "El telèfon introduït és: " . $telefon1;
    echo "<br>";
    echo "La data de neixament és: " . $data_neixament1;
    echo "<br>";
    echo "La resposta introduïda és: " . $pregunta1;
    echo "<br>";
    echo "La resposta introduïda és: " . $pregunta2;
    echo "<br>";
    echo "La resposta introduïda és: " . $pregunta3;
    echo "<br>";
    //Per llegir els valors seleccionats a un checkbox
     for ($i=0;$i<count($color);$i++) {
       echo "El color preferit és: " . $color[$i];
     echo "<br>";
    }
    echo "<br>";
    echo "El e-mail introduït és: " . $correu_electronic1;
    echo "<br>";
    echo "La contrasenya introduïda és: " . $contrasenya1;
    echo "<br>";
    

}
?>