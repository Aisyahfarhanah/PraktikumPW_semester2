<?php
    $tims = ["erwin", "heru", "ali", "zaki"];
    array_unshift($tims, "joko", "wati"); //menambahkan array dengan banyak dari depan
    foreach($tims as $person){
        echo $person . '<br/>';
    }
?>