<?php
class PersegiPanjang
{
    public $lebar;
    public $panjang;
    function __construct($p, $l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }
    function getLuas()
    {
        return $this->panjang * $this->lebar;
    }
    function getKeliling()
    {
        return ($this->panjang * $this->lebar) * 2;
    }
}
