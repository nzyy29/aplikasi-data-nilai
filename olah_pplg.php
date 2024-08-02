<?php
session_start();
$alert = isset($_SESSION['alert']) ? $_SESSION['alert'] : '';
unset($_SESSION['alert']);
?>
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
    body {
      background-image: url('hitam.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      font-family: Arial, sans-serif;
      text-align: center;
      padding-top: 50px;
    }

    .container {
      background-color: rgba(255 , 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: 0 auto;
      margin-top: 20px;
    }

    h2 {
      margin-bottom: 20px;
    }
  </style>

</head>
<body>

  <?php if (!empty($alert)) : ?>
  <script>
    alert("<?php echo $alert; ?>");
  </script>
  <?php endif; ?>
  <div class="container">
    <h2>Tambah Data Nilai</h2>
    <form method="POST" action="proses_tambah_pplg.php">
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
        <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan" required>
          <option selected>Jurusan</option>
          <option value="PPLG">PPLG</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
        <select class="form-select" aria-label="Default select example" id="mata_pelajaran" name="mata_pelajaran" required>
          <option selected>Mata Pelajaran</option>
          <option value="Matematika">Matematika</option>
          <option value="Sejarah">Sejarah</option>
          <option value="Bahasa Jepang">Bahasa Jepang</option>
          <option value="Bahasa Inggris">Bahasa Inggris</option>
          <option value="IPAS">IPAS</option>
          <option value="PJOK">PJOK</option>
          <option value="PAI">PAI</option>
          <option value="Bahasa Indonesia">Bahasa Indonesia</option>
          <option value="PPKN">PPKN</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="nilai" class="form-label">Nilai</label>
        <input type="number" class="form-control" id="nilai" name="nilai" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="pplg.php" class="btn btn-danger ms-2">Kembali</a>
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