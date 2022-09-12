<form action="post.php" method="post"> 
    <input type="text" name="namalengkap" placeholder="Ex. Satrio" />
    <input type="text" name="kelas" placeholder="Ex. 11 RPL 2" /><br>
    <input type="text" name="nis" placeholder=" 12100461" /><br>

    <input type="submit" nama="simpan" value="simpan data" />
</form>

<?php
if( isset($_POST["simpan"]) ) {
    echo "<hr>";

    $nama = $_POST["namalengkap"];
    $kelas = $_POST["kelas"];
    $nis = $_POST["nis"];

    echo "nama lengkap : $nama <br>";
    echo "kelasnya : $kelas <br>";
    echo "nis : $nis <br>";
}
?>