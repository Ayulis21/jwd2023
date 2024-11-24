<?php
// Inisialisasi variabel dengan nilai kosong
$namaDepan = $namaBelakang = $alamat = $jenisKelamin = $usia = "";

// Cek apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    if(isset($_POST["namaDepan"])) {
        $namaDepan = test_input($_POST["namaDepan"]);
    }
    if(isset($_POST["namaBelakang"])) {
        $namaBelakang = test_input($_POST["namaBelakang"]);
    }
    if(isset($_POST["alamat"])) {
        $alamat = test_input($_POST["alamat"]);
    }
    if(isset($_POST["jenisKelamin"])) {
        $jenisKelamin = test_input($_POST["jenisKelamin"]);
    }
    if(isset($_POST["usia"])) {
        $usia = test_input($_POST["usia"]);
    }
}

// Fungsi untuk membersihkan dan memvalidasi data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Tampilan Daftar Akun</title>
    <link rel="stylesheet" type="text/css" href="Daftar.css" />
  </head>
  <body>
    <header>
      <!-- Navigasi start -->
      <nav class="navbar">
        <div class="logo">
          <a href="index.html">
            <img src="../images/Logo.png" alt="Logo" width="364" height="46" />
          </a>
        </div>
        <div class="menu-container">
          <div class="menu-utama">
            <ul>
              <li><a href="index.html">Beranda</a></li>
            </ul>
            <ul>
              <li>
                <a href="#">Profil</a>
                <ul class="drop">
                  <li><a href="Login.html">Login</a></li>
                  <li><a href="daftar.html">Daftar</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section class="daftar-akun">
        <div class="left-side">
          <h3>KosCashFlow</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
            eligendi aliquam, velit voluptatem earum placeat iste dolore quas
            expedita, enim eaque reprehenderit ipsa. Unde, mollitia?
          </p>
        </div>
        <div class="right-side">
          <h2>Daftar Akun</h2>
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="namaDepan" placeholder="Nama Depan" value="<?php echo isset($namaDepan) ? $namaDepan : ''; ?>" required />
            <input type="text" name="namaBelakang" placeholder="Nama Belakang" value="<?php echo isset($namaBelakang) ? $namaBelakang : ''; ?>" required />
            <input type="text" name="alamat" placeholder="Alamat" value="<?php echo isset($alamat) ? $alamat : ''; ?>" required />

            <div class="gender-select">
              <p>Pilih jenis kelamin :</p>
              <label>
                <input type="radio" name="jenisKelamin" value="Laki-laki" <?php if (isset($jenisKelamin) && $jenisKelamin === "Laki-laki") echo "checked"; ?> required /> Laki-laki
              </label>
              <label>
                <input type="radio" name="jenisKelamin" value="Perempuan" <?php if (isset($jenisKelamin) && $jenisKelamin === "Perempuan") echo "checked"; ?> required /> Perempuan
              </label>
            </div>
            <input type="number" name="usia" placeholder="Usia" value="<?php echo isset($usia) ? $usia : ''; ?>" required />
            <button type="submit">Daftar</button>
          </form>
          <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
          <h3>Data yang diinputkan:</h3>
          <p>Nama Depan: <?php echo isset($namaDepan) ? $namaDepan : ''; ?></p>
          <p>Nama Belakang: <?php echo isset($namaBelakang) ? $namaBelakang : ''; ?></p>
          <p>Alamat: <?php echo isset($alamat) ? $alamat : ''; ?></p>
          <p>Jenis Kelamin: <?php echo isset($jenisKelamin) ? $jenisKelamin : ''; ?></p>
          <p>Usia: <?php echo isset($usia) ? $usia : ''; ?></p>
        <?php endif; ?>
        </div>
      </section>
      <!-- Menampilkan data yang diinputkan -->

    </main>

    <div class="garisAtas"></div>
    <!-- Footer section start -->
    <footer class="main-footer">
      <div class="info-footer">
        <img
          src="../images/Logo.png"
          alt="Gambar logo"
          width="325"
          height="50"
        />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis rem
          laboriosam animi ab amet suscipit?
        </p>
      </div>
      <div class="footer-grup">
        <div class="footer-box">
          <h3>Perusahaan</h3>
          <ul>
            <li><a href="#Home">Beranda</a></li>
            <li><a href="#About">Tentang Kami</a></li>
            <li><a href="#Testimoni">Testimoni</a></li>
            <li><a href="#Keuangan">Keuangan</a></li>
            <li><a href="#Bantuan">Bantuan</a></li>
          </ul>
        </div>
        <div class="footer-box">
          <h3>Perusahaan</h3>
          <ul>
            <li><a href="#Home">Beranda</a></li>
            <li><a href="#About">Tentang Kami</a></li>
            <li><a href="#Testimoni">Testimoni</a></li>
            <li><a href="#Keuangan">Keuangan</a></li>
            <li><a href="#Bantuan">Bantuan</a></li>
          </ul>
        </div>
        <div class="footer-box">
          <h3>Perusahaan</h3>
          <ul>
            <li><a href="#Home">Beranda</a></li>
            <li><a href="#About">Tentang Kami</a></li>
            <li><a href="#Testimoni">Testimoni</a></li>
            <li><a href="#Keuangan">Keuangan</a></li>
            <li><a href="#Bantuan">Bantuan</a></li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- Footer section end -->
    <div class="garisAtas"></div>
    <div class="HakCipta">
      <p>Hak Cipta &copy; 2023. Hak Cipta Dilindungi</p>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>

  </body>
</html>
