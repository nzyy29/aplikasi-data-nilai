<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Aplikasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .modal-content {
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .modal-header {
            border-bottom: none;
            padding-bottom: 0;
            background-color: #dc3545;
            color: #ffffff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 15px;
        }
        .modal-title {
            font-size: 2rem;
            font-weight: bold;
            margin: 0;
        }
        .modal-body {
            padding: 20px;
            color: #666666;
            line-height: 1.6;
        }
        .modal-footer {
            border-top: none;
            padding-top: 15px;
            justify-content: center;
            background-color: #f7f7f7;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="pgr.webp" alt="Logo Aplikasi" style="max-width: 100px; max-height: 100px; margin-right: 10px;">
                        <h2 class="modal-title" id="infoModalLabel">Info Aplikasi</h2>
                    </div>
                    <div class="modal-body">
                        <p>Aplikasi data nilai siswa yang dibangun menggunakan Bootstrap dan di-host di localhost adalah solusi praktis untuk mengelola informasi nilai siswa secara efisien. Dengan menggunakan Bootstrap, aplikasi ini menawarkan antarmuka pengguna yang responsif dan estetis, memudahkan pengguna untuk menginput dan melihat data nilai dengan mudah. Pengguna dapat memasukkan informasi seperti nama siswa, mata pelajaran, dan nilai yang diperoleh ke dalam sistem melalui formulir yang disediakan. Setelah data dimasukkan, aplikasi memungkinkan pengguna untuk melihat data nilai siswa dalam format tabel atau daftar, memudahkan pemantauan dan manajemen nilai secara terorganisir. Dengan demikian, aplikasi ini memberikan solusi yang efisien dan modern untuk administrasi pendidikan dalam mengelola dan memantau progres akademis siswa.</p>
                    </div>
                    <div class="modal-footer">
                        <a href="login.php"><button type="button" class="btn btn-danger">Tutup</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>