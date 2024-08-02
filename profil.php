<?php
session_start();

$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : 'Nama Pengguna';
$nisn = isset($_SESSION['nisn']) ? $_SESSION['nisn'] : 'NISN Pengguna';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <style>
        body {
    background-color:#00BFFF;
    font-family: Arial black, sans-serif;
    font-size: 25px;
    margin: 0; 
    padding: 0; 
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.container {
    width: 100%;
    max-width: 600px;
    text-align: top-left; 
    padding: 40px; 
}
.card {
    border: 1px solid #ccc;
    border-radius: 12px;
    background-color: #fff;
    box-shadow:  8px 16px rgba(0, 0, 0, 0.1);
    padding: 30px; 
}
.card-body {
    padding: 20px; 
}
.btn-logout {
    background-color: #007bff;
    color: #fff;
    text-decoration: none; 
    padding: 12px 24px; 
    border-radius: 6px;
    display: inline-block;
    font-size: 20px; 
}
.btn-logout:hover {
    background-color: #00BFFF; 
}
    </style>
</head>
<body>

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <img src="profile.png" alt="Logo" class="logo">
            <h5 class="card-title">Profil Saya</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Nama:</strong> <?php echo htmlspecialchars($nama); ?></li>
                <li class="list-group-item"><strong>NISN:</strong> <?php echo htmlspecialchars($nisn); ?></li>
            </ul>
            <a href="tabel.php" class="btn btn-logout mt-3">Kembali</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
