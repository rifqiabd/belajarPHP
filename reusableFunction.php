<?php

$keluarga = array("Rifqi","Nabil","Zila","Mama","Bapak","Simbah","Om");

sort($keluarga);

// mengubah array menjadi nomor akses, sekaligus mengacak
// saya masih penasaran dengan array_rand kira2 bisa randomize string secara langsung nggak ya?
$pemenang = array_rand($keluarga,3);
// array_rand didapat dari w3schools

echo strtoupper($keluarga[$pemenang[0]])."\n";
echo strtoupper($keluarga[$pemenang[1]])."\n";
echo strtoupper($keluarga[$pemenang[2]]);

// mengapa skemanya $a[$b[n]] ?
// karena mengacu akses daripada array yaitu melalui nomor laci array tersebut
// nomor didapat dari array_rand yang membuat sebuah nomor acak berjumlah n
// dari hasil tersebut kita dapat mengakses array dari $a[n] yang mana 
// " [ n ] " ini berfungsi untuk mengakses array