<?php
include_once "header.php";
include_once "sidebar.php";
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project 1</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Aisyah Farhanah</a></li>
                        <li class="breadcrumb-item"><a href="#">SI15</a></li>
                        <li class="breadcrumb-item active">0110121308</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card-body">
                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                            <title>Data Pasien</title>
                        </head>

                        <body>
                            <div class="container card">
                                <div class="row pb-3 pt-2">
                                    <div class="col-12 text-center">
                                        <h3>Form BMI</h3>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <form method="POST" action="data_BMIPasien.php">
                                        <div class="form-group row mb-3">
                                            <label for="tanggal" class="col-2 col-form-label">Tanggal : </label>
                                            <div class="col-2">
                                                <input id="tanggal" name="tanggal" type="date" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <!-- kode -->
                                            <label for="kode" class="col-2 col-form-label">Kode :</label>
                                            <div class="col-2">
                                                <input id="kode" name="kode" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="nama" class="col-2 col-form-label ">Nama :</label>
                                            <div class="col-4">
                                                <input id="nama" name="nama" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="tmp_lahir" class="col-2 col-form-label">TTL :</label>
                                            <div class="col-2">
                                                <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required>
                                            </div>

                                            <!-- <label for="tgl_lahir" class="offset-3 col-2 col-form-label">Tanggal Lahir :</label> -->
                                            <div class="col-2">
                                                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="email" class="col-2 col-form-label">Email</label>
                                            <div class="col-4">
                                                <input id="email" name="email" type="text" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <label class="col-2">Gender :</label>
                                            <div class="col-8 d-flex">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="P">
                                                    <label for="gender_0" class="custom-control-label">Perempuan</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline ms-4">
                                                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="L">
                                                    <label for="gender_1" class="custom-control-label">Laki-Laki</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <label for="berat_badan" class="col-2 col-form-label">Berat Badan :</label>
                                            <div class="col-2">
                                                <input id="berat_badan" name="berat_badan" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="tinggi_badan" class="col-2 col-form-label">Tinggi Badan :</label>
                                            <div class="col-2">
                                                <input id="tinggi_badan" name="tinggi_badan" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="offset-2 col-8">
                                                <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </body>

                        </html>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

</div>
<?php
include_once "footer.php";
?>