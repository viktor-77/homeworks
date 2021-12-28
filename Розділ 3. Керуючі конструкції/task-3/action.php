<?php
if ( !empty($_POST['height']) && ($_POST['height']>0 && $_POST['height']<=15) ) {
    $height = $_POST['height'];

    for ($i=0; $i < $height; $i++) { 
        echo "<div style='text-align: right'>";
        for ($j=0; $j <= $i; $j++) { 
            echo "#";
        }
        echo "</div> <br>";
    }
} 
else {
    echo "Введено недопустиму висоту піраміди";
}

?>