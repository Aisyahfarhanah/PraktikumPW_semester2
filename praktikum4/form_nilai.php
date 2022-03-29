<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <h2 style="text-align: center">Form Nilai Siswa<h2>
            <hr/>
<form method="POST" action="form_nilai.php">
  <div class="form-group row">
    <label for="nim" class="col-3 col-form-label">NIM</label> 
    <div class="col-3">
      <input id="nim" name="nim" placeholder="masukkan nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-3 col-form-label">Mata Kuliah</label> 
    <div class="col-3">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemograman</option>
        <option value="WEB">Pemograman Web</option>
        <option value="BASDAT">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-3 col-form-label">Nilai</label> 
    <div class="col-3">
      <input id="nilai" name="nilai" placeholder="masukkan nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-3 col-3">
      <button name="submit" type="submit" value="Simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
<?php
require_once 'class_nilaimahasiswa.php';
if($_POST){
    $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
    $keterangan = $ns->hitungNilai();
    $hasil = $ns->kelulusan($keterangan);
    $hasil2 = $ns->grade($keterangan);
    echo 'NIM : ' .$ns->nim;
    echo '<br/>Mata Kuliah : ' .$ns->matkul;
    echo '<br/>Nilai : ' .$ns->nilai;
    echo '<br/>Status : ' .$ns->kelulusan($keterangan);
    echo '<br/>Grade : ' .$ns->grade($keterangan);
}
?>
</div>
</body>
</html>