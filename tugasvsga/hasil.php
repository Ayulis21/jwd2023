<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <td>Nama Depan</td>
            <td><?php echo $_POST['namaDepan']; ?></td>
        </tr>
        <tr>
            <td>Nama Belakang</td>
            <td><?php echo $_POST['namaBelakang']; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $_POST['alamat']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $_POST['jenisKelamin']; ?></td>
        </tr>
        <tr>
            <td>Usia</td>
            <td><?php echo $_POST['usia']; ?></td>
        </tr>
    </table>
</body>

</html>