<?php

$jabatan = readline("Apa jabatan orang itu ; Manager, Supervisor, atau Staff? = ");

if($jabatan == "manager"){
    $gaji = 7000000;
} elseif($jabatan == "supervisor"){
    $gaji = 5000000;
} elseif($jabatan == "staff"){
    $gaji = 3000000;
} elseif($jabatan == "Manager"){
    $gaji = 7000000;
} elseif($jabatan == "Supervisor"){
    $gaji = 5000000;
} elseif($jabatan == "Staff"){
    $gaji = 3000000;
}

if ($gaji <=3000000){
    $pajak = 5;
} elseif ($gaji >= 3000001 && $gaji <=5000000){
    $pajak = 10;
} elseif ($gaji >=5000001){
    $pajak = 15;
}

$lembur = readline("Berapa jam/bulan dia kerja/lembur (<300 jam/bulan tulis jam normal) = ");

if ($lembur >=300){
    $bonus = 75000;
} else{
    $bonus = 0;
}

$potongan = ($gaji * $pajak) / 100;
$hasil = $gaji - $potongan + $bonus;

echo "Gaji beliau adalah = " . $hasil;