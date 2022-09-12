<?php
$nama = "Yoshi";
echo $nama . "<br>";

$nama_array = array("Dava", "Tegep", "Ferdinand", "satrio", "andi");
print_r ($nama_array); echo "<br>";

echo $nama_array[0] . "<br>";
echo $nama_array[1] . "<br>";
echo $nama_array[2] ;
echo "<hr>";
// Versi Foreach
foreach ($nama_array AS $namalengkap) {
    echo $namalengkap . "<br>";
}
echo "<hr>";

// Versi For
for ($i=0; $i < COUNT($nama_array); $i++) {
    echo $nama_array[$i] . "<br>";
}

// Multiple Array
$kelasrpl2 = array (
    array("satrio", "Subang", "Mancing"),
    array("Tegep", "Bandung", "Membaca Buku"),
    array("Dian", "Jakarta", "Maen Game", "Menari")
);

echo "<pre>";
print_r($kelasrpl2);
echo "</pre";

echo "<hr>";
echo $kelasrpl2[0][0] . "<br>";
echo $kelasrpl2[1][0] . "<br>";
echo $kelasrpl2[0][2] . "<br>";
echo $kelasrpl2[2][1] . "<br>";
echo $kelasrpl2[1][2] . "<br>";
echo $kelasrpl2[2][3] . "<br>";

?>