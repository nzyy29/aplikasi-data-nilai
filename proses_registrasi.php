<?php
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

if (empty($nisn) || empty($nama) || empty($kelas) || empty($jurusan)) {
    ?>
    <script>
        alert("Harap lengkapi semua data!");
        window.location.assign('register.php');
    </script>
    <?php
    exit;
}

include 'koneksi.php';

$query_validasi = mysqli_query($koneksi, "SELECT * FROM register WHERE nisn = '$nisn'");

if (mysqli_num_rows($query_validasi) == 0) {
    $query = mysqli_query($koneksi, "INSERT INTO register(nisn,nama,kelas,jurusan) VALUES('$nisn','$nama', '$kelas', '$jurusan')");
    ?> {
    <script>
        alert("Data sudah ditambahkan, Silahkan login");
        window.location.assign('login.php');
    </script>
    <?php
    } else {
        ?>
    <script>
        alert("Data sudah ada !");
        window.location.assign('register.php');
    </script>
    <?php
}