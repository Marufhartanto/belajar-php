<?php

//Percabangan (IF ELSE)
$nilai = 75;
echo "nilai kamu = $nillai <br>";
echo "maka  status kamu = ";

if ($nilai > 75) {
    echo "Lulus beneran";
} else if ($nilai == 75) {
    echo "Lulus KKM";
} else {
    echo "Tidak lulus";
}

echo "<hr>";

$nilai_web = 80;
$nilai_pbo = 82;
echo "Nilai Web Kamu = $nilai_web <br>";
echo "NIlai PBO Kamu = $nilai_pbo <br>";
echo "Hasil Kelulusan Kamu =";
if ($nilai_web >= 80 AND $nilai_pbo >= 80 ) {
    echo "Lulus Nilai Produktif 2 Mapel";
}else if ($nilai_web >= 80 OR $nilai_pbo >= 80) {
    echo "lulus Nilai Produktif Salah Satu Mapel";
}else {
    echo "Tidak Lulus Nilai Produktif";
}

echo "<<hr>";
// Perulangan (While, Do While, For)
$i = 0;
while ($i < 5) {
    echo "Hello word ! ke - $i <br>";
    $i++; //Assigment +1
}

echo "<hr>";

$no = 1;
do {
    echo "Halo Dunia ! ";
    $no++;
} while ($no < 5);

echo "<hr>";

$nomor = 1;
for ($nomor; $nomor < 5; $nomor++) {
    echo "Kamsahida ! <br>";
}

echo "<hr>";
// Pratikum IF Didalam FOR
echo "Case 1 = Menentukan Angka Ganjil & Genap <br>";
$angka = 1;
for ($angka; $angka <= 10; $angka++){
    if ($angka % 2 == 0) {
        echo "$angka = Bilangan Genap <br>";
    } else {
        echo "$angka = Bilangan Ganjil <br>";
    }
}
echo "<hr>";

// Pratikum FOR Didalam FOR 
echo "Case 2 = Angka Berulangan <br>";
$x = 1;
$y = 1;
for ($x; $x <= 9; $x++){
    for ($y; $y <= 9; $y++){
        echo $x;
    }
    echo "<br>";
}
?>