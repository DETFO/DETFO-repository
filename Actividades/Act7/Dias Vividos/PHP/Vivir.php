<?php
    if (isset($_GET["edad"])) {
        $eda =$_GET["edad"];
        $ed=($eda*365);
        echo "<h3 style='text-aling:center;'> Los dias vividos son $ed </h3>";
        
    }
?>