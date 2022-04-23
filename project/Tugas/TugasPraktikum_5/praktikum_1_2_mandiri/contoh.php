<?php
class Dispenser
{
    protected $volume, $hargaSegelas;
    private $volumeGelas, $jumlah_uang, $jumlah_gelas;
    public $namaMinuman;

    public function __construct($volume = 0, $volumeGelas = 250, $jumlah_uang = 5000, $jumlah_gelas = 5)
    {
        $this->volume = $volume;
        $this->volumeGelas = $volumeGelas;
        $this->jumlah_gelas = $jumlah_gelas;
        $this->jumlah_uang = $jumlah_uang;
    }
    public function setjumlahuang($jumlah_uang)
    {
        $this->jumlah_uang = $jumlah_uang;
    }
    public function getjumlahuang()
    {
        echo $this->jumlah_uang;
    }
    public function setvolumegelas($volumeGelas)
    {
        $this->volumeGelas = $$volumeGelas;
    }
    public function getvolumegelas()
    {
        echo $this->volumeGelas;
    }
    public function setjumlahgelas($jumlah_gelas)
    {
        $this->jumlah_gelas = $jumlah_gelas;
    }
    public function jumlahgelas()
    {
        echo $this->jumlah_gelas;
    }

    public function hasilDispenser()
    {
        echo "Volume air galon yang dimiliki {$this->volume} ml <br> Saldo yang dimiliki {$this->getjumlahuang()}<br> Jumlah gelas yang dimiliki {$this->getvolumegelas()} <br> volume gelas yang dimiliki {$this->jumlahgelas()}";
    }

    public function isiUlangGalon(int $volume)
    {
        if ($volume > 0) {
            $this->volume = $volume;
            echo "Anda telah mengisi volume air galon sebesar {$this->volume} ml";
        } else {
            echo "Volume air tidak bisa kurang dari 0";
        }
    }
    public function isiGelas()
    {
        if ($this->volume >= $this->volumeGelas && $this->jumlah_gelas > 0) {
            $this->jumlah_gelas--;
            $this->volume = $this->volume - $this->volumeGelas;
            $this->jumlah_uang = $this->jumlah_uang + $this->hargaSegelas;
            echo "Anda telah menuangkan air kedalam gelas berukuran {$this->volumeGelas} ml dengan harga {$this->hargaSegelas}";
        } elseif ($this->jumlah_gelas <= 0) {
            echo "Tidak ada gelas tersedia, silahkan isi ulang gelas";
        } elseif ($this->volume < $this->volumeGelas) {
            echo "Volume air galon tidak mencukupi";
        }
    }

    public function isiUlangGelas(int $gelas)
    {
        $harga_gelas = 500;
        $total_harga = $harga_gelas * $gelas;
        if (
            $this->jumlah_uang >= $total_harga
            && $total_harga >= $harga_gelas
        ) {
            $this->jumlah_uang = $this->jumlah_uang - $total_harga;
            $this->jumlah_gelas = $this->jumlah_gelas + $gelas;
            echo "Anda telah melakukan isi ulang gelas sebanyak {$gelas} gelas dengan total harga {$total_harga} atau {$harga_gelas}/pcs";
        } elseif ($this->jumlah_uang < $harga_gelas) {
            echo "Uang anda tidak mencukupi";
        } elseif ($total_harga < $harga_gelas) {
            echo "Masukkan angka gelas dengan benar";
        }
    }
}

class Minuman extends Dispenser
{
    public function __construct($namaMinuman, $hargaSegelas)
    {
        $this->namaMinuman = $namaMinuman;
        $this->hargaSegelas = $hargaSegelas;
    }

    public function cetak()
    {
        echo "Ini adalah {$this->namaMinuman} seharga {$this->hargaSegelas} per gelasnya";
    }
}
$minuman1 = new Minuman("Teh", 2000);
$minuman1->isiUlangGalon(2500);
echo "<br>";
$minuman1->hasilDispenser();
echo "<br>";
$minuman1->cetak();
echo "<br>";
$minuman1->isiGelas();
echo "<br>";
$minuman1->isiUlangGelas(5);
echo "<br>";
$minuman1->hasilDispenser();