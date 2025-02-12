<?php

$kehidupan = readline(prompt:"Msukkan Usia Kamu🫵 : ");

if ($kehidupan == 0){
    echo "Baru login";
} elseif ($kehidupan >= 1 && $kehidupan <= 12) {
    echo "Bocil";
} elseif ($kehidupan >= 13 && $kehidupan <= 17) {
    echo "Cowo sadboy/cewe sadboy";
} elseif ($kehidupan >= 18 && $kehidupan <= 50) {
    echo "Tulang Punggung";
}elseif ($kehidupan >= 51) {
    echo "Sepuh";
}else {
    echo "Alomani njir";
}