<?php
    $tims = ["erwin", "heru", "ali", "zaki"];
    array_pop($tims); //menghapus dari belakang
    foreach($tims as $person){
        echo $person . '<br/>';
    }
    
?>