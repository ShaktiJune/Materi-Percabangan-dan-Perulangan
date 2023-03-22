<?php
// Input nilai Dani untuk setiap mata pelajaran
$matematika = 80;
$fisika = 75;
$biologi = 85;

// Hitung nilai rata-rata dan nilai akhir Dani
$rata_rata = ($matematika + $fisika + $biologi) / 3;
$nilai_akhir = round($rata_rata, 2);

// Cek apakah Dani lulus atau tidak
if ($nilai_akhir >= 60) {
  echo "Dani lulus dengan nilai akhir " . $nilai_akhir . ".";
} else {
  echo "Dani tidak lulus dengan nilai akhir " . $nilai_akhir . ".";
}
?>
