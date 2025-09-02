<?php
$film = [
    ["Jumbo", 8.9],
    ["Transformers", 9.5],
    ["When Marnie Whas There ", 8.6],
    ["Rumah Untuk Alie", 7.2],
    ["The Conjuring", 8.6],
    ["Tarot", 6.0]
];

foreach ($film as $item) {
    if ($item[1] >= 8) {
        echo $item[0] . " memiliki rating tinggi (" . $item[1] . ")<br>";
    }
}
?>