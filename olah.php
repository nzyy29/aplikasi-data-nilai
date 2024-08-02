<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

  <style>
    #loading {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 2px;
      background-color: #007bff;
      z-index: 9999;
    }
  </style>

</head>
<body>
  <div class="container">
    <h2>Tambah Data Nilai</h2>
    <form method="POST" action="proses_tambah.php">
      <div class="mb-3">
        <label for="nisn" class="form-label">NISN</label>
        <input type="text" class="form-control" id="nisn" name="nisn" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>
      <div class="mb-3">
        <label for="kelas" class="form-label">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas" required>
      </div>
      <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan" required>
      </div>
      <div class="mb-3">
        <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
        <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" required>
      </div>
      <div class="mb-3">
        <label for="nilai" class="form-label">Nilai</label>
        <input type="number" class="form-control" id="nilai" name="nilai" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>

    <div id="loading"></div>
  </div>
  <script>
    document.getElementById('dataForm').addEventListener('submit', function() {
      // Tampilkan loading bar
      document.getElementById('loading').style.display = 'block';
    });
  </script>

  
</body>
</html>