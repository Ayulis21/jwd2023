// Login
function saveData() {
  var tanggal = document.getElementById("tanggal").value;
  var nama = document.getElementById("nama").value;
  var jumlah = document.getElementById("jumlah").value;
  var keterangan = document.getElementById("keterangan").value;

  var data = {
    tanggal: tanggal,
    nama: nama,
    jumlah: jumlah,
    keterangan: keterangan,
  };

  // Simpan data ke file atau lakukan operasi penyimpanan yang sesuai
  // ...

  // Tampilkan pesan sukses
  document.getElementById("form").reset();
  document.getElementById("success-message").innerHTML =
    "Data berhasil disimpan.";

  return false;
}

function deleteData() {
  // Hapus data dari file atau lakukan operasi penghapusan yang sesuai
  // ...

  // Tampilkan pesan sukses
  document.getElementById("success-message").innerHTML =
    "Data berhasil dihapus.";

  return false;
}
