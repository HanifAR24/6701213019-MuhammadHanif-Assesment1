<?php
	$angka1 = $_POST['angka1'];
	$angka2 = $_POST['angka2'];
	$operator = $_POST['operator'];

	if ($operator == '+') {
		$hasil = $angka1 + $angka2;
		echo "Hasil Penambahan: " . $hasil;
	} elseif ($operator == '-') {
		$hasil = $angka1 - $angka2;
		echo "Hasil Pengurangan: " . $hasil;
	} elseif ($operator == '*') {
		$hasil = $angka1 * $angka2;
		echo "Hasil Perkalian: " . $hasil;
	} elseif ($operator == '/') {
		if ($angka2 == 0) {
			echo "Tidak bisa melakukan pembagian dengan nol.";
		} else {
			$hasil = $angka1 / $angka2;
			echo "Hasil Pembagian: " . $hasil;
		}
	}
?>



