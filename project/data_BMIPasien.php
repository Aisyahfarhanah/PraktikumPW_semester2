<?php
include_once "header.php";
include_once "sidebar.php";
?>

<?php
require_once "class/class_BMI.php";
require_once "class/class_pasien.php";
require_once "class/class_BMIPasien.php";
if (isset($_POST['proses'])) {
    $_kode = $_POST['kode'];
    $_nama = $_POST['nama'];
    $_tmp_lahir = $_POST['tmp_lahir'];
    $_tgl_lahir = $_POST['tgl_lahir'];
    $_email = $_POST['email'];
    $_gender = $_POST['gender'];
    $_berat_badan = floatval($_POST['berat_badan']);
    $_tinggi_badan = floatval($_POST['tinggi_badan']);
    $_tanggal = $_POST['tanggal'];
}
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">TABLE</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body position-relative">
                            <!DOCTYPE html>
                            <html lang="en">

                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                                <title>Document</title>
                            </head>

                            <body>
                                <div class="container-fluid ">
                                    <h3 class="text-center my-4">Daftar BMI Pasien</h3>
                                    <table class="table text-center table-bordered table-success table-striped table-hover w-100 m-auto mt-3">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Tanggal Periksa </th>
                                                <th scope="col">Kode Pasien </th>
                                                <th scope="col">Nama Pasien </th>
                                                <th scope="col">Gender </th>
                                                <th scope="col">Berat(Kg) </th>
                                                <th scope="col">Tinggi(Cm) </th>
                                                <th scope="col">Nilai BMI </th>
                                                <th scope="col">Status BMI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $nomor = 1;
                                            $pasien1 = new BMIPasien("P001", "2022-02-9", "Erdem", "L", 78, 173);
                                            $pasien2 = new BMIPasien("P002", "2022-03-12", "Hana", "P", 45, 165);
                                            $pasien3 = new BMIPasien("P003", "2022-03-13", "Ben", "L", 22.6, 110);
                                            $pasien4 = new BMIPasien($_kode, $_tanggal, $_nama, $_gender, $_berat_badan, $_tinggi_badan);
                                            $kumpulan_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];
                                            foreach ($kumpulan_pasien as $ps) {
                                                echo '<tr><td>' . $nomor . '</td>';
                                                echo '<td>' . $ps->tanggal . '</td>';
                                                echo '<td>' . $ps->kode . '</td>';
                                                echo '<td>' . $ps->nama . '</td>';
                                                echo '<td>' . $ps->gender . '</td>';
                                                echo '<td>' . $ps->berat . '</td>';
                                                echo '<td>' . $ps->tinggi . '</td>';
                                                echo '<td>' . $ps->nilaiBMI() . '</td>';
                                                echo '<td>' . $ps->statusBMI() . '</td></tr>';
                                                $nomor++;
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </body>

                            </html>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">Footer</div>
                        <!-- /.card-footer-->
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