<?php
// Membuat class manusia 
class Manusia{
    // Buat Properti 
    var $nama;
    var $warna;

    // buatlah method atau function
    function tampilkan_nama(){
        return 'Nama saya adalah Aisyah Farhanah';
    }

    function warna_kulit(){
        return '<br/>Kulit saya berwarna coklat';
    }
}
// buat object
$manusia = new Manusia();

echo $manusia -> tampilkan_nama();
echo $manusia -> warna_kulit();
?>