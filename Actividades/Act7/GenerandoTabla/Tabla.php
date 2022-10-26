<?php
$renglon = $_GET['renglon'];
    if (isset($_GET["renglon"]) && isset($_GET["columna"]))
    echo "<table border='1'>";
    for($ren=1; $ren <=$_GET['renglon']; $ren++){
        echo "<tr>";
        for($col=1; $col <= $_GET['columna']; $col++){
            echo "<td>";
            echo "$ren$col";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>