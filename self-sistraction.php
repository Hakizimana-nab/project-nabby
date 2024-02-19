<?php
    $file = fopen("po1.php", "r");
    if($file){
        echo "file opened";
        unlink('po1.php');
        
    }
?>