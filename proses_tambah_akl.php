<?php
include 'koneksi.php';

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$mata_pelajaran = $_POST['mata_pelajaran'];
$nilai = $_POST['nilai'];

$query = "INSERT INTO tb_nilai (nisn, nama, kelas, jurusan, mata_pelajaran, nilai) 
          VALUES ('$nisn', '$nama', '$kelas', '$jurusan', '$mata_pelajaran', '$nilai')
          ON DUPLICATE KEY UPDATE nisn=nisn"; 

$result = mysqli_query($koneksi, $query);

if ($result) {
  if (mysqli_affected_rows($koneksi) > 0) {
    session_start();
    $_SESSION['alert'] = "Data berhasil ditambahkan.";
    header('Location: akl.php');
    exit;
  } else {
    session_start();
    $_SESSION['alert'] = "Gagal menambahkan data: NISN sudah ada.";
    header('Location: olah_akl.php');
    exit;
  }
} else {
  session_start();
  $_SESSION['alert'] = "Gagal menambahkan data: " . mysqli_error($koneksi);
  header('Location: tabel.php');
  exit;
}

mysqli_close($koneksi);
?>
