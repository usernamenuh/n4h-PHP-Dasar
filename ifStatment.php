<?php 

$nilai = 90;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
 echo "Selamat, Anda Lulus" .PHP_EOL;
} else {
 echo "Maaf, Anda Tidak Lulus" .PHP_EOL;
}

$uas = 100;
$uts = 75;

if ($uas >= 80 && $uts >= 80) {
 echo "Selamat, Nilai Anda A" . PHP_EOL;
} else if ($uas >= 75 && $uts >= 75) {
 echo "Selamat, Nilai Anda B" . PHP_EOL;
} else if ($uas >= 70 && $uts >= 70) {
 echo "Nilai Anda C, Anda Harus Mengulang" . PHP_EOL;
} else if ($uas >= 60 && $uts >= 60) {
 echo "Nilai Anda D, Anda Harus Mengulang" . PHP_EOL;
} else {
 echo "Nilai Anda E, Anda Harus Mengulang" . PHP_EOL;
}

if ($uas >= 80 && $uts >= 80) :
          echo "Selamat, Nilai Anda A" . PHP_EOL;
 elseif ($uas >= 75 && $uts >= 75):
         echo "Selamat, Nilai Anda B" . PHP_EOL;
 elseif ($uas >= 70 && $uts >= 70):
         echo "Nilai Anda C, Anda Harus Mengulang" . PHP_EOL;
 elseif ($uas >= 60 && $uts >= 60):
         echo "Nilai Anda D, Anda Harus Mengulang" . PHP_EOL;
 else:
         echo "Nilai Anda E, Anda Harus Mengulang" . PHP_EOL;
 endif;
?>