<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Form Input Dosen</h1>
</br>
<?php echo form_open("dosen/save")?>
  <div class="form-group row">
    <label for="nidn" class="col-2 col-form-label">NIDN</label> 
    <div class="col-4">
      <input id="nidn" name="nidn" placeholder="Masukkan Nidn  Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-2 col-form-label">Nama</label> 
    <div class="col-4">
      <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Jenis Kelamin</label> 
    <div class="col-4">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="gender_0" class="custom-control-label">L</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="gender_1" class="custom-control-label">P</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-2 col-form-label">Tempat Lahir</label> 
    <div class="col-4">
      <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-2 col-form-label">Tanggal Lahir</label> 
    <div class="col-4">
      <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="pendidikan" class="col-2 col-form-label">Pendidikan</label> 
    <div class="col-4">
      <input id="pendidikan" name="pendidikan" placeholder="Masukkan Pendidikan  Anda" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-4">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close()?>
</div>