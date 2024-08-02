<?php
include 'koneksi.php';

// Ambil keyword pencarian
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$query = "SELECT * FROM tb_nilai";

if (!empty($keyword)) {
  $query .= " WHERE nisn LIKE '%$keyword%' OR nama LIKE '%$keyword%'";
}

$sql = mysqli_query($koneksi, $query);
$nomor = 1;
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Nilai Siswa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
  <style>
    .navbar-custom {
      background-color: #000000;
      background-size: cover;
    }
    body {
      background-image: url('blu.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #f8f9fa;
      text-align: center;
      padding: 10px 0;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand">Aplikasi Data Nilai Siswa SMK PGRI 1 Cimahi</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Opsi
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="tabel.php">Kembali</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
      <div class="position-absolute top-50 start-50 translate-middle">
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
      <div class="position-relative">
      <figure>
        <blockquote class="blockquote">
          <p>Daftar Nilai Siswa - PPLG</p>
        </blockquote>
      </figure>

    <!-- Form Pencarian -->
    <form method="get" action="index.php" class="mb-3">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari berdasarkan NISN atau Nama" name="keyword">
        <button class="btn btn-primary" type="submit">Cari</button>
      </div>
    </form>

    <!-- Tabel Daftar Nilai -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NISN</th>
          <th scope="col">Nama</th>
          <th scope="col">Kelas</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">Nilai</th>
          <th scope="col">Akreditasi</th>
        </tr>
      </thead>
      <tbody>
        <?<?php
                    while ($data = mysqli_fetch_array($sql)) {
                        $nilai = $data['nilai'];
                        
                        // Tentukan akreditasi berdasarkan nilai
                        if ($nilai >= 90 && $nilai <= 100) {
                            $akreditasi = 'A';
                            $akreditasi_class = 'text-primary'; // Green color for 'A'
                        } elseif ($nilai >= 70 && $nilai <= 89) {
                            $akreditasi = 'B';
                            $akreditasi_class = 'text-primary'; // Blue color for 'B'
                        } elseif ($nilai >= 50 && $nilai <= 69) {
                            $akreditasi = 'C';
                            $akreditasi_class = 'text-danger'; //  color for 'C'
                        } elseif ($nilai >= 0 && $nilai <= 49) {
                            $akreditasi = 'D';
                            $akreditasi_class = 'text-danger'; // Red color for 'D'
                        } else {
                            $akreditasi = '';
                            $akreditasi_class = ''; // No specific color if no grade matches
                        }
                    ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $data['nisn']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['kelas']; ?></td>
                        <td><?php echo $data['jurusan']; ?></td>
                        <td><?php echo $data['mata_pelajaran']; ?></td>
                        <td><?php echo $nilai; ?></td>
                        <td class="<?php echo $akreditasi_class; ?>"><strong><?php echo $akreditasi; ?></strong></td>

                    </tr>
                    <?php } 
                    ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
