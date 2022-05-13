<?php

//buat Class
class Mahasiswa_model extends CI_Model {
    //buat struktur data property/variabel
    public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;
    //buat method
    public function predikat(){
        $predikat = ($this->ipk >= 3.75)? "Cumlaude" : "Baik";
       return $predikat;
    }
}
?>