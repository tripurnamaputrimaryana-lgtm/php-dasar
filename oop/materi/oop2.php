<?php
class kendaraan {
    public $warna = "hitam";
    public $merk = "suzuki";

    public function berjalan()
    {
        return "berjalan";
    }

    public function berhenti()
    {
        return "berhenti";
    }
}

$mobil = new kendaraan();
echo "warna mobilnya: " . $mobil->warna . "<br>";
echo "merk mobilnya: " . $mobil->merk . "<br>";
echo "mobil itu: " . $mobil->berjalan() . "<br>";
?>