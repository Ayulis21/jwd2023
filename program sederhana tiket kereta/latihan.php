<?php
$kereta1 = 'Sri Tanjung';
$kereta2 = 'Wijayakusuma';

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
echo "<input type='number' name='jarak' id='jarak' required><br><br>";

echo "<input type='submit' name='submit' value='Hitung'>";
echo "</form>";

if (isset($_POST['submit'])) {
    $keretaTerpilih = $_POST['kereta'];
    $kelasTerpilih = $_POST['kelas'];
    $jarakTerpilih = $_POST['jarak'];

    // Validasi input jarak
    if ($jarakTerpilih <= 0) {
        echo "<p style='color:red;'>Jarak harus lebih dari 0 kilometer!</p>";
        exit;
    }

    // Hitung harga tiket
    if ($keretaTerpilih == $kereta1) {
        if ($kelasTerpilih == 'Ekonomi') {
            $hargaPerKm = 275; // Harga per kilometer
        } elseif ($kelasTerpilih == 'Bisnis') {
            $hargaPerKm = 800;
        } elseif ($kelasTerpilih == 'Eksklusif') {
            $hargaPerKm = 1400;
        }
    } elseif ($keretaTerpilih == $kereta2) {
        if ($kelasTerpilih == 'Ekonomi') {
            $hargaPerKm = 300;
        } elseif ($kelasTerpilih == 'Bisnis') {
            $hargaPerKm = 900;
        } elseif ($kelasTerpilih == 'Eksklusif') {
            $hargaPerKm = 1500;
        }
    }

    $harga = $hargaPerKm * $jarakTerpilih;

    echo "<br>";
    echo "Kereta: $keretaTerpilih<br>";
    echo "Kelas: $kelasTerpilih<br>";
    echo "Jarak: $jarakTerpilih kilometer<br>";
    echo "Harga Tiket: Rp. " . number_format($harga, 0, ',', '.') . "<br>";
}
