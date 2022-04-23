<?php
    $tims = ["erwin", "heru", "ali", "zaki"];
    array_shift($tims); //menghapus dari depan
    foreach($tims as $person){
        echo $person . '<br/>';
    }
?>