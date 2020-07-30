<?php
function skor_terbesar($arr){
$output=[];
$n=0;
$n2=0;
$n3=0;
foreach ($arr as $key => $value) {
  # code...
  if($value['nilai']>$n and $value['kelas'] == 'Laravel'){
    $n=$value['nilai'];
  }elseif($value['nilai']>$n2 and $value['kelas'] == 'React Native'){
    $n2=$value['nilai'];
  }elseif($value['nilai']>$n3 and $value['kelas'] == 'React JS'){
    $n3=$value['nilai'];
  }else{
    continue;
  }
  $output[$value['kelas']] =
  [
      'nama' => $value['nama'],
      'kelas' => $value['kelas'],
      'nilai' => $value['nilai'],
    ];
}
return $output;
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
echo'<pre>';
print_r(skor_terbesar($skor));
echo'<pre>';
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
?>