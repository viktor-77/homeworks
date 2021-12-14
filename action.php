<?php
if (!empty($_POST['name'])) {
    $name = $_POST['name'];
    for($i=0; $i<strlen($name); $i++ )
    {
        if ($name[$i] == ",") $name[$i] = ";";
    }
    echo $name;
}?>