<?php
// tugas pertama
$hitung_kepala = 0;

while ($hitung_kepala < 3) {
	$putar  = rand(0,1);
	if ($putar){
		$hitung_kepala ++;
		echo "(kepala) ";
	}
	else {
		$hitung_kepala = 0;
		echo "(buntut) ";
	}
}
echo "/n";
echo "/n";


// kode saya pertama
// saya kira disuruh randomize bool, dan mau mengincrement si boolean ini
$kondisi = true;
while ($kondisi == true) {
    // saya nemu di stackoverflow,
    $putar = (bool) random_int(0, 1);
    if ($putar) {
        echo "Loop sedang Jalan!";
    } else {
        // untuk mencegah
        // loop tak terbatas
        $kondisi = 0;
        echo "\n";
    }
    echo "Dan loop pun berakhir";
}
// stuck disini gabisa jalan

// ternyata hanya disuruh menuliskan $kondisi == true
// dan menambahkan  echo "Loop sedang Jalan!";
// increment terhadap boolean tidak bisa dilakukan
// juga gimana ya masa boolean di increment

$kondisi = true;
while ($kondisi == true) {
    // tulis pesan di bawah
    echo "\n" . "Loop sedang Jalan!";
    // untuk mencegah
    // loop tak terbatas
    $kondisi = false;
    echo "\n";
}
echo "Dan loop pun berakhir";
echo "\n";

// ini saya mencoba code lagi
$wew = true;
while ($wew == true) {
    echo $wew . "\n" . $wew . "\n" . $wew . "\n";
    echo "\n" . "Lagi looping wew";
    $wew=false;
    echo $wew . "\n";
    echo "\n";
}
echo "end wew";

// kesimpulan saya bahwa looping ini bekerja di belakang layar
// saya tadi sempat men
?>


