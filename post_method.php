<?php
    $arr = array(
        'name'     => $_POST['name'],
        'massage'    => $_POST['massage']); 
    $json_format = json_encode($arr);
    echo $json_format;

?>
