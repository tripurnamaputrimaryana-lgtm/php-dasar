<?php
class TagihanListrik {
    private $abonemen;
    private $biayaPerKwh;
    private $pemakaian;
    private $biayaTambahan;
    private $ppn;

    public function __construct($abonemen, $biayaPerKwh, $pemakaian) {
        $this->abonemen = $abonemen;
        $this->biayaPerKwh = $biayaPerKwh;
        $this->pemakaian = $pemakaian;
        $this->biayaTambahan = ($pemakaian > 500) ? 100000 : 0;
        $this->ppn = 0.10;
    }

    public function hitungTotal() {
        $biayaPemakaian = $this->biayaPerKwh * $this->pemakaian;
        $subtotal = $this->abonemen + $biayaPemakaian + $this->biayaTambahan;
        $total = $subtotal + ($subtotal * $this->ppn);
        return $total;
    }

    public function rincianTagihan() {
        $biayaPemakaian = $this->biayaPerKwh * $this->pemakaian;
        $subtotal = $this->abonemen + $biayaPemakaian + $this->biayaTambahan;
        $ppnAmount = $subtotal * $this->ppn;
        return [
            'Abonemen' => $this->abonemen,
            'Biaya Pemakaian' => $biayaPemakaian,
            'Biaya Tambahan' => $this->biayaTambahan,
            'PPN (10%)' => $ppnAmount,
            'Total Tagihan' => $subtotal + $ppnAmount
        ];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hitung Tagihan Listrik</title>
    <style>
        body { font-family: Arial; margin: 40px; background: #f4f4f4; }
        form { background: #fff; padding: 20px; border-radius: 8px; width: 300px; }
        input[type="number"] { width: 100%; padding: 8px; margin-bottom: 10px; }
        input[type="submit"] { padding: 10px 20px; background: #007BFF; color: white; border: none; border-radius: 4px; cursor: pointer; }
        ul { background: #fff; padding: 20px; border-radius: 8px; width: 320px; margin-top: 20px; }
        li { margin-bottom: 8px; }
    </style>
</head>
<body>
    <h2>Form Tagihan Listrik</h2>
    <form method="POST">
        <label>Biaya Abonemen (Rp):</label>
        <input type="number" name="abonemen" required>

        <label>Biaya per kWh (Rp):</label>
        <input type="number" name="biaya_kwh" required>

        <label>Pemakaian Listrik (kWh):</label>
        <input type="number" name="pemakaian" required>

        <input type="submit" name="submit" value="Hitung Tagihan">
    </form>

    <?php
    if (isset($_POST['submit'])) {

        $abonemen = $_POST['abonemen'];
        $biayaKwh = $_POST['biaya_kwh'];
        $pemakaian = $_POST['pemakaian'];

        $tagihan = new TagihanListrik($abonemen, $biayaKwh, $pemakaian);
        $rincian = $tagihan->rincianTagihan();

        echo "<h3>Rincian Tagihan:</h3><ul>";
        foreach ($rincian as $key => $value) {
            echo "<li><strong>$key:</strong> Rp " . number_format($value, 0, ',', '.') . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>