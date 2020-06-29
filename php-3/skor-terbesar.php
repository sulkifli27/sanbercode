<?php
function skor_terbesar($arr)
{
  //kode di sini
  echo '<pre>';
  $arr_result = [];
  foreach ($arr as $row) {
    # code...
    if (array_key_exists($row['kelas'], $arr_result)) {
      if ($row['nilai'] > $arr_result[$row['kelas']]['nilai']) {
        $arr_result[$row['kelas']] = $row;
      }
    } else {
      $arr_result[$row['kelas']] = $row;
    }
  }

  print_r($arr_result);
  echo '<pre>';
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
