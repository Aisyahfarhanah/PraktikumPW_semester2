<div class="row">
    <div class="col-12 bg-light pt-3">
        <p>Sistem Penilaian</p>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <p>Form Nilai Siswa</p>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form method="POST">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="Dasar-Dasar Pemograman">Dasar-Dasar Pemograman</option>
                        <option value="Basis Data">Basis Data I</option>
                        <option value="Pemograman Web">Pemograman Web</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        <?php
        require_once 'libfungsi.php';
        if (isset($_POST['proses'])) {
            $proses = $_POST['proses'];
            $nama_lengkap = $_POST['nama'];
            $mata_kuliah = $_POST['matkul'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];

            echo "Nama : $nama_lengkap";
            echo "<br/>Mata Kuliah : $mata_kuliah";
            echo "<br/>Nilai UTS : $nilai_uts";
            echo "<br/>Nilai UAS : $nilai_uas";
            echo "<br/>Nilai Tugas : $nilai_tugas";

            $hasil_uts = intval($nilai_uts) * 0.3;
            $hasil_uas = intval($nilai_uas) * 0.35;
            $hasil_tugas = intval($nilai_tugas) * 0.35;
            $nilai_akhir = $hasil_uts + $hasil_tugas + $hasil_uas;

            echo "<br/>Nilai Akhir : $nilai_akhir";
            
            $hasil_ujian = kelulusan($nilai_akhir);
            echo '<br/>Dinyatakan : ' . $hasil_ujian;
            
            $grade = grade($nilai_akhir);
            echo '<br/>Grade : ' . $grade;
            
            $predikat = predikat($grade);
            echo '<br/>Predikat : ' . $predikat;
        }
        ?>
    </div>
</div>
<div class="row">
    <div class="col-12 bg-light pt-3">
        <p>Developed by @Aisyah Farhanah ©2022</p>
    </div>
</div>
</div>

</body>

</html>