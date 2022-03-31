<?php
class NilaiMahasiswa
{
    var $matakuliah;
    var $nilai;
    var $nim;

    function __construct($matakuliah, $nilai, $nim)
    {
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }
    function grade()
    {
        if ($this->nilai < 35) return "E";
        else if ($this->nilai >= 36 && $this->nilai <= 55)
            return "D";
        else if ($this->nilai >= 56 && $this->nilai <= 69)
            return "C";
        else if ($this->nilai >= 70 && $this->nilai <= 84)
            return "B";
        else return "A";
    }
    function hasil()
    {
        if ($this->nilai < 56) return "TIDAK LULUS";
        else return "LULUS";
    }
}
