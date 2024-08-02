<?php
include 'koneksi.php';

$jurusan = $_POST['jurusan'];

$query = "SELECT * FROM tb_nilai WHERE jurusan = '$jurusan'";
$sql = mysqli_query($koneksi, $query);

if (mysqli_num_rows($sql) > 0) {
    $nomor = 1;
    while ($data = mysqli_fetch_array($sql)) {
        echo "<tr>
                <td>$nomor</td>
                <td>{$data['nisn']}</td>
                <td>{$data['nama']}</td>
                <td>{$data['kelas']}</td>
                <td>{$data['jurusan']}</td>
                <td>{$data['mata_pelajaran']}</td>
                <td>{$data['nilai']}</td>
                <td>$akreditasi</td>
              </tr>";
        $nomor++;
    }
} else {
    echo "<tr><td colspan='8'>Data tidak ditemukan.</td></tr>";
}
?>
