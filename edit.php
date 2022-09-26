<?php

$conn = mysqli_connect('localhost', 'root', '', 'crud');
$id = $_GET['id'];

$data = $conn->query("SELECT * FROM siswa WHERE id = '$id' ");

$datas = mysqli_fetch_assoc($data);


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD TEMPLATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <style>
        .container {
            top: 50px;
        }
    </style>
    <div class="container position-relative ">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="header mb-3">
                            <div class="h1">Form Input Data</div>
                        </div>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" autocomplete="off" placeholder="Masukan Nama Lengkap" name="nama" id="nama" class="form-control" value="<?= $datas['nama'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nis">NIS</label>
                                <input type="text" autocomplete="off" placeholder="Masukan NIS" name="nis" id="nis" class="form-control" value="<?= $datas['nis'] ?>">
                            </div>
                            <div class=" mb-3">
                                <label for="telepon">No Telp</label>
                                <input type="text" autocomplete="off" placeholder="Masukan No Telepon" name="telepon" id="telepon" class="form-control" value="<?= $datas['telepon'] ?>">
                            </div>
                            <div class=" mb-3">
                                <label for="sekolah">Asal Sekolah</label>
                                <input type="text" autocomplete="off" placeholder="Masukan Asal Sekolah" name="sekolah" id="sekolah" class="form-control" value="<?= $datas['asal_sekolah'] ?>">
                            </div>
                            <div class=" mb-5">
                                <label for="alamat">Alamat</label>
                                <input type="text" autocomplete="off" autocomplete="off" placeholder="Masukan Alamat" name="alamat" id="alamat" class="form-control" value="<?= $datas['alamat'] ?>">
                            </div>

                            <button class=" btn btn-primary" type="submit" name="submit">Submit</button>
                            <a href="index.php" class="btn btn-info">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>