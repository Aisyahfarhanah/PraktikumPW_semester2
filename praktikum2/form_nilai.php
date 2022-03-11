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
    <h2 style="text-align: center;" >Form Nilai</h2>
<form method="POST" action="form_nilai.php" >
    <div class="container">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="Masukkan nama anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="web">Pemrograman web</option>
        <option value="basdat">Basis data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukkan Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="Simpan" class="btn btn-primary">Simpan</button>
    </div>
    </div>

    <?php
      $proses = $_POST['proses'];
      $nama_siswa = $_POST['name'];
      $mata_kuliah =$_POST['matkul'];
      $uts = $_POST['nilai_uts'];
      $uas = $_POST['nilai_uas'];
      $tugas = $_POST['nilai_tugas'];
      $total = $uts + $uas + $tugas;
      $alphabet = $total/3;
      if ($alphabet <= 55){
          $lulus = "Anda Tidak Lulus";
      }else{
          $lulus = "Selamat Anda Lulus";
      }
      if ($alphabet >= 85){
          $grade = "A";
      }elseif($alphabet >= 70){
          $grade = "B";
      }elseif($alphabet >= 56){
          $grade = "C";
      }elseif($alphabet >= 36){
          $grade = "D";
      }elseif ($alphabet >= 10){
          $grade = "E";
      }else{
          $grade = "I(tidak ada nilai)";
      }

      if(!empty($proses)){
      echo "Nama : $nama_siswa";
      echo "<br/>Mata Kuliah : $mata_kuliah";
      echo "<br/>Nilai UTS : $uts";
      echo "<br/>Nilai UAS : $uas";
      echo "<br/>Nilai Tugas : $tugas";
      echo "<br/>Keterangan : $lulus";
      echo "<br/>Grade : $grade";
      echo "<br/> Data Telah di $proses";
      }
?>
  </div>
</form>
</body>
</html>