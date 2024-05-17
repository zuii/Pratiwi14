<?php
require_once "KoneksiDB_dsn.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $nip=$_POST['nip'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    $matkul=$_POST['matkul'];

    $sqlupdate="UPDATE tbldsn SET nama='$nama', email='$email', 
    alamat='$alamat', nohp='$nohp', matkul='$matkul' WHERE nip='$nip'";
    if(mysqli_query($koneksi,$sqlupdate)){
        echo "<script> alert('Data sudah diupdate');
        window.location.assign('TampilData_dsn.php'); </script>";
    }
}