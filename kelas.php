<?php
include 'koneksi.php';

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$kelas = isset($_GET['kelas']) ? $_GET['kelas'] : '';
$mata_pelajaran = isset($_GET['mata_pelajaran']) ? $_GET['mata_pelajaran'] : '';

$query = "SELECT * FROM tb_nilai";

if (!empty($keyword)) {
  $query .= " WHERE nisn LIKE '%$keyword%' OR nama LIKE '%$keyword%'";
}

if (!empty($kelas)) {
  if (strpos($query, 'WHERE') !== false) {
    $query .= " AND kelas = '$kelas'";
  } else {
    $query .= " WHERE kelas = '$kelas'";
  }
}

if (!empty($mata_pelajaran)) {
  if (strpos($query, 'WHERE') !== false) {
    $query .= " AND mata_pelajaran = '$mata_pelajaran'";
  } else {
    $query .= " WHERE mata_pelajaran = '$mata_pelajaran'";
  }
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
  body {
    background-image: url('darkpurple.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
  .navbar-custom {
    background-image: url('xK.gif');
    background-size: cover;
  }
  .footer{
    text-align: center;
    width: 100%;
    position:absolute;
    bottom:0;
  }

  .container {
    padding-top: 150px;
  }

  .card {
    margin-bottom: 150px;
  }

  .card-body {
    padding: 20px;
  }

  .table-responsive {
    max-height: calc(100vh - 280px);
    overflow-y: auto;
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
      <div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card mb-4">
        <div class="card-header">
            <!-- Konten tabel di sini -->
          </table>
      <figure>
        <blockquote class="blockquote">
          <p>Daftar Nilai Siswa</p>
        </blockquote>
      </figure>
        <form method="get" action="kelas.php" class="mb-3">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari berdasarkan NISN atau Nama" name="keyword">
        <button class="btn btn-primary" type="submit">Cari</button>
      </div>
    </form>

    <form method="get" action="kelas.php" class="mb-3">
      <div class="input-group">
        <label for="kelas" class="input-group-text">Filter:</label>
        <select class="form-select" id="kelas" name="kelas">
          <option value="">Semua Kelas</option>
          <option value="X" <?php if ($kelas == 'X') echo 'selected'; ?>>X</option>
          <option value="XI" <?php if ($kelas == 'XI') echo 'selected'; ?>>XI</option>
          <option value="XII" <?php if ($kelas == 'XII') echo 'selected'; ?>>XII</option>
        </select>
        <select class="form-select" id="mata_pelajaran" name="mata_pelajaran">
              <option value="Matematika" <?php if ($mata_pelajaran == 'Matematika') echo 'selected'; ?>>Matematika</option>
              <option value="Sejarah" <?php if ($mata_pelajaran == 'Sejarah') echo 'selected'; ?>>Sejarah</option>
              <option value="Bhs Jepang" <?php if ($mata_pelajaran == 'Bhs Jepang') echo 'selected'; ?>>Bhs Jepang</option>
              <option value="Bhs Inggris" <?php if ($mata_pelajaran == 'Bhs Inggris') echo 'selected'; ?>>Bhs Inggris</option>
              <option value="IPAS" <?php if ($mata_pelajaran == 'IPAS') echo 'selected'; ?>>IPAS</option>
              <option value="PJOK" <?php if ($mata_pelajaran == 'PJOK') echo 'selected'; ?>>PJOK</option>
              <option value="PAI" <?php if ($mata_pelajaran == 'PAI') echo 'selected'; ?>>PAI</option>
              <option value="Bhs Indonesia" <?php if ($mata_pelajaran == 'Bhs Indonesia') echo 'selected'; ?>>Bhs Indonesia</option>
              <option value="PPKN" <?php if ($mata_pelajaran == 'PPKN') echo 'selected'; ?>>PPKN</option>
            </select>
        <button class="btn btn-success" type="submit">Filter</button>
      </div>
    </form>
    <div class="table-responsive">
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
        <?php
          while($data = mysqli_fetch_array($sql)) {
            $nilai = $data['nilai'];
            if ($nilai >= 90 && $nilai <= 100) {
              $akreditasi = 'A';
              $akreditasi_class = 'text-primary'; 
            } elseif ($nilai >= 70 && $nilai <= 89) {
              $akreditasi = 'B';
               $akreditasi_class = 'text-primary'; 
            } elseif ($nilai >= 50 && $nilai <= 69) {
              $akreditasi = 'C';
               $akreditasi_class = 'text-danger'; 
            } elseif ($nilai >= 0 && $nilai <= 49) {
              $akreditasi = 'D';
               $akreditasi_class = 'text-danger'; 
            } else {
              $akreditasi = '';
               $akreditasi_class = '';
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
              <td class="<?php echo $akreditasi_class; ?>"><strong>
                <?php echo $akreditasi; ?></strong></td>
            </tr>
        <?php
          } 
        ?>
      </tbody>
    </table>
  </div>
 </div>
</div>
</div>
</div>
</div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>