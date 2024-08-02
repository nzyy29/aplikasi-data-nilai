<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Profil</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
        background-image: url('mvl.gif');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    }
    .card-deck {
      margin: 0 auto;
      margin-top: 250px;
    }
    .btn-back {
      position: absolute;
      top: 10px;
      left: 10px;
      z-index: 1000;
    }
    .card-body {
      color: white;
    }
  </style>
</head>
<body>

    <a href="javascript:history.back()" class="btn btn-light btn-back">Kembali</a>

<div class="container">
  <div class="card-deck">
    <!-- Kartu Pertama -->
    <div class="card" style="width: 18rem; background-image: url('abs.jpg');">
      <img src="nzy.jpg" class="card-img-top" alt="Foto Profil">
      <div class="card-body">
        <h5 class="card-title">Profil</h5>
        <p class="card-text"><b>Nama :</b> Naufal Adli Saputra</p>
        <p class="card-text"><b>Kelas :</b> XII PPLG 1</p>
        <p class="card-text"><b>NISN :</b> 0075939049</p>
      </div>
    </div>

    <!-- Kartu Kedua -->
    <div class="card" style="width: 18rem; background-image: url('abs.jpg');">
      <img src="ipan.jpg" class="card-img-top" alt="Foto Profil">
      <div class="card-body">
        <h5 class="card-title">Profil</h5>
        <p class="card-text"><b>Nama :</b> Muhamad Irfan Hilmi</p>
        <p class="card-text"><b>Kelas :</b> XII PPLG 1</p>
        <p class="card-text"><b>NISN :</b> 0067871071</p>
      </div>
    </div>

    <!-- Kartu Ketiga -->
    <div class="card" style="width: 18rem; background-image: url('abs.jpg');">
      <img src="andi.jpg" class="card-img-top" alt="Foto Profil">
      <div class="card-body">
        <h5 class="card-title">Profil</h5>
        <p class="card-text"><b>Nama :</b> Andi Maulana</p>
        <p class="card-text"><b>Kelas :</b> XII PPLG 1</p>
        <p class="card-text"><b>NISN :</b> 0066597769</p>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
