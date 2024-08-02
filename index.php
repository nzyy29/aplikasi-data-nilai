<!doctype html>
<?php
include 'koneksi.php';
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

  <style>
  .navbar-custom {
    background-image: url('xK.gif');
    background-size: cover;
  }
  body {
    background-image: url('darkpurple.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh
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
    max-height: calc(100vh - 180px);
    overflow-y: auto;
  }
  </style>

  <title>Data Nilai Siswa</title>
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
              <li><a class="dropdown-item" href="tabel.php">Lihat Tabel</a></li>
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
          <figure>
            <blockquote class="blockquote">
              <p>Silahkan Edit Data Nilai</p>
            </blockquote>
          </figure>
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
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $query = "SELECT * FROM tb_nilai";
                $sql = mysqli_query($koneksi, $query);
                $nomor = 1;

                while($data = mysqli_fetch_array($sql)) {
                  $nilai = $data['nilai'];
                  if ($nilai >= 90 && $nilai <= 100) {
                    $akreditasi = 'A';
                  } elseif ($nilai >= 70 && $nilai <= 89) {
                    $akreditasi = 'B';
                  } elseif ($nilai >= 50 && $nilai <= 69) {
                    $akreditasi = 'C';
                  } elseif ($nilai >= 0 && $nilai <= 49) {
                    $akreditasi = 'D';
                  } else {
                    $akreditasi = '';
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
                    <td><?php echo $akreditasi; ?></td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Aksi
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="edit.php?nisn=<?php echo $data['nisn']; ?>">Edit data</a></li>
                          <li><a class="dropdown-item" href="delete.php?nisn=<?php echo $data['nisn']; ?>">Hapus Data</a></li>
                        </ul>
                      </div>
                    </td>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
