<?php
$barang = [
    ["Pensil", 12],
    ["Pulpen", 3],
    ["Buku", 7],
    ["Penghapus", 2],
    ["Spidol", 0]
];

foreach ($barang as $item) {
    if ($item[1] < 5) {
        echo $item[0] . " hampir habis (stok: " . $item[1] . ")<br>";
    }
}
?>