<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Per llegir per exemple els valors d'una caixa de texte
    $Browser = $_POST["Browser"];
    $color = $_POST["color"];
    $file = $_POST["file"];
    $week = $_POST["week"];
    $url = $_POST["url"];
    $hidden = $_POST["hidden"];
    $datetime = $_POST["datetime"];
    $number = $_POST["number"];
    $month = $_POST["month"];
    $range = $_POST["range"];
    $textarea = $_POST["tu_historia"];
    
    echo "El cercador sel·leccionat és: ". $Browser;
    echo "<br>";
    echo "el color triat és: ". $color;
    echo "<br>";
    echo "La setmana triada és: ". $week;
    echo "<br>";
    echo "El url publicat és: ". $url;
    echo "<br>";
    echo "la data i hora son: ". $datetime;
    echo "<br>";
    echo "el numero és: ". $number;
    echo "<br>";
    echo "el mes triat és: ". $month;
    echo "<br>";
    echo "el rang triat és: ". $range;
    echo "<br>";
    echo "el text escrit és: ". $textarea;

    

}
?>