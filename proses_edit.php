<?php
include ('koneksi.php');

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$mata_pelajaran = $_POST['mata_pelajaran'];
$nilai = $_POST['nilai'];

// Validasi nilai agar tidak melebihi 100
if ($nilai > 100) {
    ?>
    <script>
        alert("Nilai tidak boleh lebih dari 100 !!");
        window.location.assign('index.php'); // Redirect kembali ke halaman index.php atau halaman lainnya
    </script>
    <?php
    exit; // Hentikan eksekusi script jika nilai melebihi 100
}

// Lakukan query UPDATE dengan nilai yang sudah divalidasi
$query = "UPDATE tb_nilai SET nama = '$nama', kelas = '$kelas', jurusan = '$jurusan', mata_pelajaran = '$mata_pelajaran', nilai = '$nilai' WHERE nisn = '$nisn'";

if ($koneksi->query($query) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
