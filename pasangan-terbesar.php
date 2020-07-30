<?php
function pasangan_terbesar($angka){
// kode di sini
	$angka_besar = substr($angka, 0, 2);
	for($i=0; $i <= strlen($angka)-2; $i++){
		$pasangan_angka = substr($angka, $i, 2);
		if($pasangan_angka > $angka_besar){
			$angka_besar = $pasangan_angka;
		}
		}
		return $angka_besar;
	}
// TEST CASES
echo pasangan_terbesar(641573); // 73
echo "<br>". pasangan_terbesar(12783456); // 83
echo "<br>". pasangan_terbesar(910233); // 91
echo "<br>". pasangan_terbesar(71856421); // 85
echo "<br>". pasangan_terbesar(79918293); // 99

?>