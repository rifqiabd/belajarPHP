<?php 

// untuk tadi while tidak akan menampilkan semua kode
// akan tetapi di do-while akan membaca semua kode setidaknya satu kali

echo "Kita akan melempar koin selama koin sisi buntut belum muncul...\n";

do {
  $lempar = rand(0,1);
  if ( $lempar ) {
     echo '(kepala) ';
  } else {
     echo '(buntut) ';
  }
} while ($lempar);

echo "\nDan buntut pun muncul!";