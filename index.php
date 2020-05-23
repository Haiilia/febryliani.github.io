<?php

// SCRIPT PENGUNGKAP ISI HATI
// BY PALGUNO WICAKSONO
// DIBUAT UNTUK SESEORANG, NAMUN DIGUNAKAN
// UNTUK SESEORANG YANG LAIN :'v
//
// HTTPS://ICAKSH.ID

include ('identitas.php');
include ('permission.php');

if($permission == 1){
    include ('web/1.php');
    die();
}elseif($permission == 0){
    include ('web/2.php');
    die();
}else{
    echo "Terjadi Kesalahan Konfigurasi";
    die();
}
?>
