<?php

try {
    $bd = new mysqli('localhost', 'root', '', 'carolina_spa');

} catch(Excepcion $e){
    echo $e->getMessage();
    exit;
}

/*
if($bd->ping()) {
    echo 'Everything is fine';
} else {
    echo $bd->connect_error;
}
*/