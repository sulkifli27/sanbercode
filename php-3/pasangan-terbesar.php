<?php
function pasangan_terbesar($angka)
{
    $data = str_split($angka);
    for ($i = 0; $i < count($data) - 1; $i++) {
        $pasangan[$i] = $data[$i] . $data[$i + 1];
    }

    return max($pasangan) . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99
