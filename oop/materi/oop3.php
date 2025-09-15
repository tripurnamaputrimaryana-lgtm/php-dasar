<?php
class Kucing 
{
    public $nama;
    public $warna;
    public $jenis;
    // method khusus yang akan di panggil pertama kali / di awal
    public function __construct($nama,$warna,$jenis)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->jenis = $jenis;

    }

    public function makan()
    {
        return "Kucing sedang makan";
    }
}

$kucing1 = new Kucing("Luna", "Hitam","Persia");
echo "Nama Kucing 1:" . $kucing1->nama . "<br>";
echo "Warna Kucing 1:" . $kucing1->warna . "<br>";
echo "jenis Kucing 1:" . $kucing1->jenis . "<br>";
?>