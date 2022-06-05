<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Form Input Mata Kuliah</h1>
</br>
<?php echo form_open("matakuliah/save")?>
  <div class="form-group row">
    <label for="nama" class="col-2 col-form-label">Nama</label> 
    <div class="col-4">
      <input id="nama" name="nama" placeholder="Masukkan Nama MatKul" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="sks" class="col-2 col-form-label">Jumlah SKS</label> 
    <div class="col-4">
      <input id="sks" name="sks" placeholder="Masukkan Jumlah SKS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-2 col-form-label">Kode Matkul</label> 
    <div class="col-4">
      <input id="kode" name="kode" placeholder="Masukkan Kode Matkul" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-4">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close()?>
</div>