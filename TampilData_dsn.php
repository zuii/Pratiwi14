<?php
include "KoneksiDB_dsn.php";
$sqltampil = "SELECT * FROM tbldsn";
$query = mysqli_query($koneksi, $sqltampil) or die("SQL Error");
$nomor = 1;
?>

<h2>Data Dosen STMIK Royal</h2>
<a href="FormTambah_dsn.php">Tambah Data</a>

<table width="100%" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nip</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Nomor Hp</th>
            <th>Mata Kuliah</th>
        </tr>
    </thead>

<tbody>
<?php
while ($data = mysqli_fetch_assoc($query)) {
?>
<tr>
    <td><?= $nomor ?></td>
    <td><?= $data['nip'] ?></td>
    <td><?= $data['nama'] ?></td>
    <td><?= $data['email'] ?></td>
    <td><?= $data['alamat'] ?></td>
    <td><?= $data['nohp'] ?></td>
    <td><?= $data['matkul'] ?></td>
    <td>
        <a href="FormEdit_dsn.php?nip=<?=$data['nip']?>"> Edit</a> | <a href="Delete_dsn.php?nip=<?=$data['nip']?>">Delete</a>
    </td>
</tr>
<?php $nomor++;
}?>
</tbody>
</table>