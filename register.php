<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Registrasi</h1>
                                    </div>
                                    <form class="user" method="post" action="proses_registrasi.php">
                                        <div class="form-group">
                                            <input type="text" name="nisn" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan NISN">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="nama" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Nama">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="kelas" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukan Kelas">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="jurusan" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukan Jurusan">
                                        </div>
                                        <button type="submit" class="btn btn-success btn-user btn-block">
                                            Registrasi
                                        </button>
                                        <a href=login.php class="btn btn-facebook btn-user btn-block">
                                            <i></i>Login</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>