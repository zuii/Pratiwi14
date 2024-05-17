<h2>Tambah Data Dosen</h2>
<form action="Save_dsn.php" method="POST">
    <label>Nomor Induk Pegawai :</label>
    <input type="text" name="nip" placeholder="Nomor Induk Pegawai" required>
    <br>
    <label>Nama Dosen :</label>
    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required>
    <br>
    <label>Email :</label>
    <input type="text" name="email" id="email" placeholder="Email Lengkap" required>
    <br>
    <label for="">Alamat :</label>
    <input type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap" required>
    <br>
    <label>Nomor Hp :</label>
    <input type="number" name="nohp" id="nohp" placeholder="Nomor Hp Lengkap" required>
    <br>
    <label for="">Mata Kuliah :</label>
    <input type="text" name="matkul" id="matkul" placeholder="Mata Kuliah" required>
    <br>
    <button type="submit" name="kirim" value="kirim">Kirim Data</button>
</form>