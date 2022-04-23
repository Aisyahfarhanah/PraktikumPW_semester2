<?php
class Pasien
{
    public  $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender;

    //tempat lahir
    function set_tmpLahir($tmp_lahir){
        return $this->tmp_lahir = $tmp_lahir;
    }
    function get_tmpLahir(){
        return $this->tmp_lahir;
    }
    //tgl lahir
    function set_tglLahir($tgl_lahir){
        return $this->tgl_lahir = $tgl_lahir;
    }
    function get_tglLahir(){
        return $this->tgl_lahir;
    }

    //email
    function set_Email($email){
        return $this->email = $email;
    }
    function get_Email(){
        return $this->email;
    }


}