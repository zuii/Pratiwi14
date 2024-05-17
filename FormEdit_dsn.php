<?php
$nip=$_GET['nip'];
$sqldata="SELECT * FROM tbldsn WHERE nip='$nip'";
require_once "KoneksiDB_dsn.php";
$query=mysqli_query($koneksi,$sqldata);
$data=mysqli_fetch_assoc($query);
?>
<h2>Update Data Dosen</h2>
<form action="Update_dsn.php" method="POST">
    <label>Nomor Induk Pegawai :</label>
    <input type="text" name="nip" value="<?=$data['nip']?>"
    placeholder="Nomor Induk Pegawai" required>
    <br>
    <label>Nama Dosen :</label>
    <input type="text" name="nama" id="nama" value="<?=$data['nama']?>"
    placeholder="Nama Lengkap" required>
    <br>
    <label>Email :</label>
    <input type="text" name="email" id="email" value="<?=$data['email']?>" placeholder="Email Lengkap" required>
    <br>
    <label for="">Alamat :</label>
    <input type="text" name="alamat" id="alamat" value="<?=$data['alamat']?>" placeholder="Alamat Lengkap" required>
    <br>
    <label>Nomor Hp :</label>
    <input type="number" name="nohp" id="nohp" value="<?=$data['nohp']?>" placeholder="Nomor Hp Lengkap" required>
    <br>
    <label for="">Mata Kuliah :</label>
    <input type="text" name="matkul" id="matkul" value="<?=$data['matkul']?>" placeholder="Mata Kuliah" required>
    <br>
    <button type="submit" name="kirim" value="Kirim">Update Data</button>
</form>