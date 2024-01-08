<?php

// "i come, i code, i win" -Julius Coder
// Switch digunakan untuk merubah nilai berdasarkan case (kasus)
// disini

// ini kode tambahan dari saya karena penasaran dengan fungsi alert di js apakah ada di php
// dan ternyata ada
echo "Semester berapa nih? (tulis angka): ";

// Membaca jawaban dari pengguna
$semester = intval(trim(fgets(STDIN)));

// Menampilkan nilai yang dimasukkan oleh pengguna
echo "Nilai yang dimasukkan: " . $semester . "\n";

// Memproses nilai yang dimasukkan
switch ($semester):
    case 1;
        echo "Wah Baru semester $semester ya?" . "\n";
        break;
    case 2;
        echo "Wah mantap semester $semester, pasti pusing ya?" . "\n";
        break;
    case 3;
        echo "Wah sekarang semester $semester aja. Gmn kabar project?" . "\n";
        break;
    case ($semester > 3);
        echo "Dah selesain kuliahnya bre, jangan main terus" . "\n";
        break;
    default:
        echo "Wah ayo Daftar dong!" . "\n";
endswitch;
