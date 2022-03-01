<!DOCTYPE html>
<html lang="en">
<body>
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_push($tims);
foreach($tims as $person){
    echo $person. '<br/>';
}
?>   
</body>
</html>
Fungsi array_push() berfungsi untuk menyisipkan satu atau lebih elemen ke akhir array.

Tip: Kita bisa menambahkan satu nilai atau sebanyak yang disuka.

Catatan: Meskipun array kita memiliki kunci string, elemen yang ditambahkan akan selalu memiliki kunci numerik 