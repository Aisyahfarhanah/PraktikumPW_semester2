<?php
require_once "class_Pasien.php";
class BMI extends Pasien
{
    public $berat, $tinggi;

    //constructor
    public function __construct($berat, $tinggi)
    {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    //nilai BMI
    public function nilaiBMI()
    {
        $nilaiiBMI = number_format(($this->berat / (($this->tinggi / 100) ** 2)), 1);
        return $nilaiiBMI;
    }

    //status BMI
    public function statusBMI()
    {
        if ($this->nilaiBMI() < 18.5) {
            return "Kekurangan berat badan ";
        } elseif ($this->nilaiBMI() >= 18.5 && $this->nilaiBMI() <= 24.9) {
            return "Normal (ideal) ";
        } elseif ($this->nilaiBMI() >= 25.0 && $this->nilaiBMI() <= 29.9) {
            return "Kelebihan berat badan ";
        } elseif ($this->nilaiBMI() >= 30.0) {
            return "Kegemukan ";
        }
    }
}