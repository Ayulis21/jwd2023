<?php
$kereta1 = 'Sri Tanjung';
$kereta2 = 'Wijayakusuma';
$jarak = 200;

echo "<h3>Program Sederhana Tiket Kereta Api</h3>";

echo "<form method='POST' action=''>";
echo "<label for='kereta'>Pilih Kereta:</label>";
echo "<select name='kereta' id='kereta'>";
echo "<option value='$kereta1'>$kereta1</option>";
echo "<option value='$kereta2'>$kereta2</option>";
echo "</select><br><br>";

echo "<label for='kelas'>Pilih Kelas:</label>";
echo "<select name='kelas' id='kelas'>";
echo "<option value='Ekonomi'>Ekonomi</option>";
echo "<option value='Bisnis'>Bisnis</option>";
echo "<option value='Eksklusif'>Eksklusif</option>";
echo "</select><br><br>";

echo "<label for='jarak'>Jarak (dalam kilometer):</label>";
echo "<input type='number' name='jarak' id='jarak'><br><br>";

echo "<input type='submit' name='submit' value='Hitung'>";
echo "</form>";

if (isset($_POST['submit'])) {
    $keretaTerpilih = $_POST['kereta'];
    $kelasTerpilih = $_POST['kelas'];
    $jarakTerpilih = $_POST['jarak'];

    if ($keretaTerpilih == $kereta1) {
        if ($kelasTerpilih == 'Ekonomi') {
            $harga = 55000;
        } elseif ($kelasTerpilih == 'Bisnis') {
            $harga = 160000;
        } elseif ($kelasTerpilih == 'Eksklusif') {
            $harga = 280000;
        }
    } elseif ($keretaTerpilih == $kereta2) {
        if ($kelasTerpilih == 'Ekonomi') {
            $harga = 60000;
        } elseif ($kelasTerpilih == 'Bisnis') {
            $harga = 180000;
        } elseif ($kelasTerpilih == 'Eksklusif') {
            $harga = 300000;
        }
    }

    echo "<br>";
    echo "Kereta: $keretaTerpilih<br>";
    echo "Kelas: $kelasTerpilih<br>";
    echo "Jarak: $jarakTerpilih kilometer<br>";
    echo "Harga Tiket: Rp. $harga<br>";
}
?>
