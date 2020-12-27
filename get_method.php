<?php
    $arr = array(
        'name'     => $_GET['name'],
        'massage'    => $_GET['massage']); 
    $json_format = json_encode($arr);
    echo $json_format;

?>
