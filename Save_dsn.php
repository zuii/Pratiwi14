<?php
require_once "KoneksiDB_dsn.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $nip=$_POST['nip'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    $matkul=$_POST['matkul'];
    $sqlsave="INSERT INTO tbldsn VALUES
    ('$nip','$nama','$email','$alamat','$nohp','$matkul')";
    if(mysqli_query($koneksi,$sqlsave)){
        echo "<script> alert('Data sudah disimpan');
        window.location.assign('TampilData_dsn.php'); </script>";
    }
}