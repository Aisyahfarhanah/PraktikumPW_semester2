<?php
require_once "class_persegipanjang.php";
$ppanjang1 = new PersegiPanjang(10,5);
$ppanjang2 = new PersegiPanjang(5,3);
echo "<br>Luas Persegi Panjang I ".$ppanjang1->getLuas();
echo "<br>Luas Persegi Panjang II ".$ppanjang2->getLuas();
echo "<br>Keliling Persegi Panjang I ".$ppanjang1->getKeliling();
echo "<br>Keliling Persegi Panjang II ".$ppanjang2->getKeliling();
?>