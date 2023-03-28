<?php
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];
    
    switch ($operator) {
        case '+':
            $hasil = $angka1 + $angka2;
            echo "Hasil Penambahan: " . $hasil;
            break;
        case '-':
            $hasil = $angka1 - $angka2;
            echo "Hasil Pengurangan: " . $hasil;
            break;
        case '*':
            $hasil = $angka1 * $angka2;
            echo "Hasil Perkalian: " . $hasil;
            break;
        case '/':
            if ($angka2 == 0) {
                echo "Tidak bisa melakukan pembagian dengan nol.";
            } else {
                $hasil = $angka1 / $angka2;
                echo "Hasil Pembagian: " . $hasil;
            }
            break;
        default:
            echo "Operator aritmatika tidak valid.";
            break;
    }
?>




