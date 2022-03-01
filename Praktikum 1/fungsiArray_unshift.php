<!DOCTYPE html>
<html lang="en">
<body>
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_unshift($tims);
foreach($tims as $person){
    echo $person. '<br/>';
}
?>   
</body>
</html>
Fungsi array_unshift () berguna untuk menyisipkan elemen baru ke array. Nilai array baru akan disisipkan di awal array. 