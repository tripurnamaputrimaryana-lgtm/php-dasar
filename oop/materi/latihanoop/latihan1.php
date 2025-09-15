<?php
class kendaraan
{
    public $warna;
    public $merk;
    public $roda;

    public function __construct($warna,$merk,$roda)
    {
        $this->warna = $warna;
        $this->merk = $merk;
        $this->roda = $roda;

    }

    public function berjalan()
    {
        return "Motor itu berjalan";
    }
}

$motor = new kendaraan("Hitam","Honda","4");
echo "Warnanya:" . $motor->warna . "<br>";
echo "Merk nya:" . $motor->merk . "<br>";
echo "Rodanya ada:" . $motor->roda . "<br>";
?>