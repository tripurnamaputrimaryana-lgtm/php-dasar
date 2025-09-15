<?php
class Siswa
{
    public $nama;
    public $jenis_kelamin;
    public $kelas;
    public $agama;
    public $jurusan;

    public function __construct($nama,$jenis_kelamin,$kelas,$agama,$jurusan)
    {
        $this->nama = $nama;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->kelas = $kelas;
        $this->agama = $agama;
        $this->jurusan = $jurusan;
    }

    public function belajar()
    {
        return "Mereka sedang belajar";
    }
}

$siswa = new Siswa("Budi", "Laki-Laki","XI","Islam","RPL");
echo "Nama Siswa:" . $siswa->nama . "<br>";
echo "Jenis Kelamin:" . $siswa->jenis_kelamin . "<br>";
echo "Kelas:" . $siswa->kelas . "<br>";
echo "Agama:" . $siswa->agama . "<br>";
echo "Jurusan:" . $siswa->jurusan . "<br>";
echo "<hr>";

$siswa = new Siswa("Rehan", "Laki-Laki","XI","Islam","RPL");
echo "Nama Siswa:" . $siswa->nama . "<br>";
echo "Jenis Kelamin:" . $siswa->jenis_kelamin . "<br>";
echo "Kelas:" . $siswa->kelas . "<br>";
echo "Agamanya:" . $siswa->agama . "<br>";
echo "Jurusan:" . $siswa->jurusan . "<br>";
echo "<hr>";

$siswa = new Siswa("Dadan", "Laki-Laki","XI","Islam","RPL");
echo "Nama Siswa:" . $siswa->nama . "<br>";
echo "Jenis Kelamin:" . $siswa->jenis_kelamin . "<br>";
echo "Kelas:" . $siswa->kelas . "<br>";
echo "Agamanya:" . $siswa->agama . "<br>";
echo "Jurusan:" . $siswa->jurusan . "<br>";
echo "<hr>";

$siswa = new Siswa("Maryana", "Perempuan","XI","Islam","RPL");
echo "Nama Siswa:" . $siswa->nama . "<br>";
echo "Jenis Kelamin:" . $siswa->jenis_kelamin . "<br>";
echo "Kelas:" . $siswa->kelas . "<br>";
echo "Agamanya:" . $siswa->agama . "<br>";
echo "Jurusan:" . $siswa->jurusan . "<br>";
echo "<hr>";

?>