<?php
$nyawa = 3;

while ($nyawa > 0) {
    echo "Game masih berjalan. Nyawa: $nyawa<br>";
    $nyawa--; 
}

echo "Game over";
echo "<br>";
echo "<br>";

$nyawa = 3;

do {
    echo "Game masih berjalan. Nyawa: $nyawa<br>";
    $nyawa--; 
} while ($nyawa > 0);

echo "Game over";
?>
