<?php
include ('koneksi.php');
$nisn = isset($_GET['nisn']) ? $_GET['nisn'] : null;
$query = "SELECT * FROM tb_nilai WHERE nisn = '$nisn'";
$result = $koneksi->query($query);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Data Nilai</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
 body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-image: url('darkpurple.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      color: #fff;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h2 {
      color: #fff;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    table, th, td {
      border: 1px solid #fff;
    }

    th, td {
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    a {
      text-decoration: none;
      padding: 5px 10px;
      background-color: #007bff;
      color: #fff;
      border-radius: 4px;
    }

    a:hover {
      background-color: #0056b3;
    }

    form {
      width: 50%;
      margin: auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    textarea {
      width: calc(100% - 12px);
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"],hover {
      padding: 8px 15px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"], {
      background-color: #0056b3;
    }
  .button-back {
   padding: 8px 15px;
   background-color: #dc3545;
   color: #fff;
   border: none;
   border-radius: 4px;
   text-decoration: none;
  }

  .button-back:hover {
   background-color: #c82333;
  }
     .container {
      width: 70%;
      margin: auto;
      background-image: url(bercorak.jpg); 
      padding : 20px;
      border-radius: 10px;
      box-shadow: 20px 20px rgba(0, 0, 0, 0.1);
      margin-top: 200px;
    }

  </style>
</head>
<body>
  <div class ="container">
  <h2>Edit Data Nilai</h2>
  <form method="post" action="proses_edit.php">
    <input type="hidden" name="nisn" value="<?php echo $row['nisn']; ?>">
    Nama Siswa: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br><br>
    Kelas: <input type="text" name="kelas" value="<?php echo $row['kelas']; ?>"><br><br>
    Jurusan: <select name="jurusan" button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <option value="PPLG" <?php if ($row['jurusan'] == 'PPLG') echo 'selected'; ?>>PPLG</option>
        <option value="AKL" <?php if ($row['jurusan'] == 'AKL') echo 'selected'; ?>>AKL</option>
        <option value="MPLB" <?php if ($row['jurusan'] == 'MPLB') echo 'selected'; ?>>MPLB</option>
        <option value="PM" <?php if ($row['jurusan'] == 'PM') echo 'selected'; ?>>PM</option>
      </button>
      </select><br><br>
    Mata Pelajaran:
    <select name="mata_pelajaran" button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <option value="Matematika" <?php if ($row['mata_pelajaran'] == 'Matematika') echo 'selected'; ?>>Matematika</option>
        <option value="Sejarah" <?php if ($row['mata_pelajaran'] == 'Sejarah') echo 'selected'; ?>>Sejarah</option>
        <option value="Bhs Jepang" <?php if ($row['mata_pelajaran'] == 'Bhs Jepang') echo 'selected'; ?>>Bhs Jepang</option>
        <option value="Bhs Inggris" <?php if ($row['mata_pelajaran'] == 'Bhs Inggris') echo 'selected'; ?>>Bhs Inggris</option>
        <option value="IPAS" <?php if ($row['mata_pelajaran'] == 'IPAS') echo 'selected'; ?>>IPAS</option>
        <option value="PJOK" <?php if ($row['mata_pelajaran'] == 'PJOK') echo 'selected'; ?>>PJOK</option>
        <option value="PAI" <?php if ($row['mata_pelajaran'] == 'PAI') echo 'selected'; ?>>PAI</option>
        <option value="Bhs Indonesia" <?php if ($row['mata_pelajaran'] == 'Bhs Indonesia') echo 'selected'; ?>>Bhs Indonesia</option>
        <option value="PPKN" <?php if ($row['mata_pelajaran'] == 'PPKN') echo 'selected'; ?>>PPKN</option>
      </button>
      </select><br><br>
    Nilai: <input type="text" name="nilai" value="<?php $row['nilai']; ?>"><br><br>
    <input type="submit" value="Simpan">
    <a href="proses_edit.php" class="button-back">Kembali</a>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>