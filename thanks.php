<?php

include ('identitas.php');
include ('permission.php');

if($thanks == 1){
    include ('web/thanks/1.php');
    die();
}elseif($thanks == 2){
    include ('web/thanks/2.php');
    die();
}else{
    echo "Terjadi Kesalahan Konfigurasi";
    die();
}
?>
