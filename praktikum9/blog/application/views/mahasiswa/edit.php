<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>From Input Mahasiswa</h1>
</br>
<?php echo form_open("mahasiswa/save")?>
  <div class="form-group row">
    <label for="nim" class="col-2 col-form-label">NIM</label> 
    <div class="col-4">
      <input id="nim" name="nim" placeholder="Masukkan Nim" type="text" value="<?php echo $obj_mahasiswa->nim?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-2 col-form-label">Nama</label> 
    <div class="col-4">
      <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" value="<?php echo $obj_mahasiswa->nama?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Jenis Kelamin</label> 
    <div class="col-4">
      <input id="gender" name="gender" placeholder="Masukkan gender" type="text" value="<?php echo $obj_mahasiswa->gender?>" class="form-control">
    </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-2 col-form-label">Tempat Lahir</label> 
    <div class="col-4">
      <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" type="text" value="<?php echo $obj_mahasiswa->tmp_lahir?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-2 col-form-label">Tanggal Lahir</label> 
    <div class="col-4">
      <input id="tgl_lahir" name="tgl_lahir" type="text" value="<?php echo $obj_mahasiswa->tgl_lahir?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="ipk" class="col-2 col-form-label">IPK</label> 
    <div class="col-4">
      <input id="ipk" name="ipk" type="text" value="<?php echo $obj_mahasiswa->ipk?>" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-4">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close()?>
</div>