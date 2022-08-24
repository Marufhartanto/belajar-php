<?php
echo "
     <marquee>
     <h1>Muhamad Ma'ruf Hartanto - Siswa SMKN 1 SUBANG<h1>
     </marquee>";

     //variable
     $nama = "Muhamad Ma'ruf Hartanto";
     $kelas = "XI RPL 2";
     $nilai = 99.98;

     echo "Nama : ".$nama;
     echo "<br>";
     echo "Kelas : ".$kelas;
     echo "<br>";
     echo "Nilai : $nilai";

     //Operator jumlah
     echo "<br><br>";
     $angka1 = 5;
     $angka2 = 10;

     $hasil = $angka1 + $angka2;
     echo "<br>";
     echo "hasil dari penjumlahan : $hasil";

     //Rumus Luas Segitiga
     echo "<br><br>";
     $alas = 8;
     $tinggi = 20;

     $rumus = 0.5 * $alas * $tinggi;
     echo "hasil rumus : $rumus";

     //Rumus Luas LIngkaran
     echo "<br><br>";
     $phi = 3.14;
     $r = 7;
    //Luas ling : phi x r x r
    $Rumus = $phi * $r * $r;

     echo "Hasil Luas Lingkaran : $Rumus";

     //Rumus Volume Balok
     // v = p x l x t;
     //p = 10, 1 = 5, t =10;
     $p = 10;
     $l = 5;
     $t = 10;
     //Volume Balok
     echo "<br><br>";
     $rumus = $p * $l * $t;

     echo "Hasil Volume Balok : $rumus";
?>