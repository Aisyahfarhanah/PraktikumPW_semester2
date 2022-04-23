<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    include_once 'class_mahasiswa.php';

    $siswa = new Mahasiswa (02011,'Naura Nadzifah');
    $siswa->thn_angkatan = 2012;
    $siswa->prodi = 'TI';
    $siswa->ipk = 3.8;

    $siswa1 = new Mahasiswa (02012,'Aisyah Farhanah');
    $siswa1->thn_angkatan = 2012;
    $siswa1->prodi = 'TI';
    $siswa1->ipk = 3.9;
    
    $siswa2 = new Mahasiswa (01011,'Zahra Mumtazah');
    $siswa2->thn_angkatan = 2010;
    $siswa2->prodi = 'SI';
    $siswa2->ipk = 3.46;

    $siswa3 = new Mahasiswa (01012,'Hana Mountana');
    $siswa3->thn_angkatan = 2010;
    $siswa3->prodi = 'SI';
    $siswa3->ipk = 3.2;

    $arr_siswa = [$siswa,$siswa1,$siswa2,$siswa3];
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">WEB02</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Review PHP
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        PHP OOP
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    </ul>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Login
                                    </a>
                                </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                NIM
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Thn Angkatan
                            </th>
                            <th>
                                IPK
                            </th>
                            <th>
                                Predikat
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 1;
                        foreach ($arr_siswa as $mhss){
                        echo '<tr>
                            <td>'.$counter.'</td>
                            <td>'.$mhss->nim.'</td>
                            <td>'.$mhss->nama.'</td>
                            <td>'.$mhss->prodi.'</td>
                            <td>'.$mhss->thn_angkatan.'</td>
                            <td>'.$mhss->ipk.'</td>
                            <td>'.$mhss->predikat_ipk().'</td>
                        </tr>';
                        $counter ++;
                    }
                        ?>
                    </tbody>
                </table>
                <address>
                    <strong>Lab Pemrograman Web Lanjutan</strong><br />Dosen: Sirojul Munir S.Si,M.Kom<br />Mahasiswa: Muhammad Raihan<br />STT-NF - Kampus B<br />
                </address>
            </div>
        </div>
    </div>
</body>

</html>